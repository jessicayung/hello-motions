from flask import Flask, render_template, request, redirect, url_for
from flask_sqlalchemy import SQLAlchemy
from sqlalchemy.sql.expression import func
from sqlalchemy import or_

from datetime import datetime

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///motions.db'

# Initialise the database
db = SQLAlchemy(app)
current_year = datetime.now().year

categories = ['Art and Culture',
    'Business',
    'Criminal Justice System',
    'Economics and development',
    'Education',
    'Environment',
    'Family',
    'Feminism',
    'Funny',
    'International Relations',
    'LGBT+',
    'Media',
    'Medical Ethics',
    'Morality',
    'Politics',
    'Religion',
    'Science and Technology',
    'Security, War, Military and Terrorism',
    'Social Movements',
    'Sports',
]

# in python: run from app import db, then db.create_all()
class Motion(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    date = db.Column(db.Date, nullable=False)
    circuit = db.Column(db.String(20))
    country = db.Column(db.String(50))
    international = db.Column(db.Integer, nullable=False, default=0)
    tournament = db.Column(db.String(50), nullable=False)
    ca_1 = db.Column(db.String(50))
    ca_2 = db.Column(db.String(50))
    ca_3 = db.Column(db.String(50))
    ca_4 = db.Column(db.String(50))
    ca_5 = db.Column(db.String(50))
    ca_6 = db.Column(db.String(50))
    ca_7 = db.Column(db.String(50))
    ca_8 = db.Column(db.String(50))
    ca_9 = db.Column(db.String(50))
    event_link = db.Column(db.String(100))
    round_code = db.Column(db.String(10))
    round = db.Column(db.String(10))
    motion = db.Column(db.String(5000), nullable=False)
    infoslide = db.Column(db.String(5000), default="")
    topic_area_1 = db.Column(db.String(50))
    topic_area_2 = db.Column(db.String(50))
    topic_area_3 = db.Column(db.String(50))
    topic_area_specific_1 = db.Column(db.String(50))
    topic_area_automated = db.Column(db.String(50))
    needs_updating = db.Column(db.Boolean, default=False)

    def __repr__(self):
        return f'<Motion {self.id}: {self.motion}>'


def set_default_if_query_none(query_info):
    if query_info['intl'] is None:
        query_info['intl'] = 0
    if query_info['start_year'] is None:
        query_info['start_year'] = 1999
    if query_info['end_year'] is None:
        query_info['end_year'] = current_year
    return query_info

def get_motions_given_query(request, return_object=False, empty_query_return_all=False, order_by_most_recent=False):
    search_term = request.args.get("q")
    intl = request.args.get("intl")
    start_year = request.args.get("start_year")
    end_year = request.args.get("end_year")
    cas = request.args.get("cas")
    request_args = list(request.args.keys())
    if intl is None:
        intl = 0
    if empty_query_return_all and search_term is None:
        search_term = ""
    query_info = {"intl": intl, "start_year": start_year, "end_year": end_year, "cas": cas, "request_args": request_args,
              "search_term": search_term}
    query_info = set_default_if_query_none(query_info)
    motions = Motion.query.filter(Motion.international >= int(query_info['intl'])).filter(Motion.date >= f"{query_info['start_year']}-01-01") \
                .filter(Motion.date <= f"{query_info['end_year']}-12-31") \
                .filter(or_(field.ilike(f"%{query_info['search_term']}%") for field in [Motion.motion, 
                    Motion.tournament, Motion.ca_1, Motion.ca_2, Motion.ca_3, 
                    Motion.ca_4, Motion.ca_5, Motion.ca_6, Motion.ca_7, Motion.ca_8, Motion.ca_9, Motion.topic_area_1, 
                    Motion.topic_area_2, Motion.topic_area_3, Motion.topic_area_specific_1, Motion.topic_area_automated]))
    if request.args.get("All topics") is None:
        topics = []        
        for category in categories:
            if request.args.get(category) is not None:
                topics.append(category)
        motions = motions.filter(or_(Motion.topic_area_automated.ilike(category) for category in topics))
    if cas:
        if cas[-1] == ".":
            cas = cas[:-1]
        ca_names = [n.strip() for n in query_info['cas'].split(",")]
        ca_fields = [Motion.ca_1, Motion.ca_2, Motion.ca_3, 
                    Motion.ca_4, Motion.ca_5, Motion.ca_6, Motion.ca_7, Motion.ca_8, Motion.ca_9]
        motions = motions.filter(or_(ca_field.ilike(f'%{name}%') for name in ca_names for ca_field in ca_fields))
    if order_by_most_recent:
        motions = motions.order_by(Motion.date.desc()).order_by(Motion.tournament.asc()).order_by(Motion.round_code.asc())
    if not return_object:
        motions = motions.all()
    return motions, query_info

@app.route("/")
def index():
    recent_motions = Motion.query.filter(Motion.date >= f'{current_year-2}-01-01') \
                                .order_by(Motion.date.desc()) \
                                .order_by(Motion.tournament.asc()) \
                                .order_by(Motion.round_code.asc()) \
                                .limit(100).all()
    print(len(recent_motions))
    return render_template("index.jinja", recent_motions=recent_motions)

@app.route("/add-motions/", methods=["POST", "GET"])
def add_motions():
    is_motion_added = False
    if request.method == "POST":
        motion = request.form.get("motion")
        category = request.form.get("category")
        date = request.form.get("date")
        print(motion, category, date)
        new_motion = Motion(motion=motion, category=category)
        try:
            db.session.add(new_motion)
            print(new_motion)
            print("added motion")
            db.session.commit()
            print("committed motion")   
        except:
            return "There was an error when adding your motion"
        is_motion_added = True
    return render_template("add_motions.jinja", motion_added=is_motion_added)

@app.route("/motions<year>/", methods=["GET"])
def motions_year(year):
    try:
        year_num = int(year)
        if year_num >= 1999 and year_num <= int(datetime.now().year):
            motions = Motion.query.filter(Motion.date >= f'{year}-01-01') \
                                .filter(Motion.date <= f'{year}-12-31') \
                                .order_by(Motion.date.asc()) \
                                .order_by(Motion.tournament.asc()) \
                                .order_by(Motion.round_code.asc()) \
                                .all()
            return render_template("motions_year.jinja", motions=motions, year=year)
        else:
            return render_template("page_not_found.jinja", extra_info="We have pages for \
            motions from 1999 until today.")
    except:
        return render_template("page_not_found.jinja")

@app.route("/search/", methods=["POST", "GET"])
def search():
    search_term = request.args.get("q")
    query_exists = True
    if search_term is not None:
        motions, query_info = get_motions_given_query(request, order_by_most_recent=True)
    else:
        motions = []
        query_exists = False
        query_info = {"intl": 0, "start_year": 1999, "end_year": current_year, "cas": None, "request_args": list(request.args.keys()),
              "search_term": search_term}
    return render_template("search.jinja", motions=motions,
    query_exists=query_exists, query_info=query_info, categories=categories, current_year=current_year)

@app.route("/random-motions/", methods=["GET"])
def random_motions(num=10):
    """Shows 10 random motions by default."""
    num_from_request = request.args.get("num_motions")
    if num_from_request is not None:
        num = num_from_request
    # might change num to be a request-based thing
    # and change page to be just random-motions.
    random_motions, query_info = get_motions_given_query(request, return_object=True, empty_query_return_all=True)
    print(random_motions)
    random_motions = random_motions.order_by(func.random()).limit(num).all()
    return render_template("random_motions.jinja", num=num, 
            random_motions=random_motions, categories=categories, query_info=query_info, current_year=current_year)

@app.route("/ten-random-motions/")
def ten_random_motions():
    return random_motions(num=10)

@app.route("/random-motion/")
def random_motion():
    return random_motions(num=1)

wudc_locations = {
    2021: 'Korea',
    2020: 'Thailand',
    2019: 'Cape Town',
    2018: 'Mexico',
    2017: 'Dutch',
    2016: 'Thessaloniki',
    2015: 'Malaysia',
    2014: 'Chennai',
    2013: 'Berlin',
    2012: 'Manila',
    2011: 'Botswana',
    2010: 'Vehbi Koc',
    2009: 'Cork',
    2008: 'Assumption',
    2007: 'UBC',
}

eudc_locations = {
    2021: 'Madrid',
    2020: 'Astana',
    2019: 'Athens',
    2018: 'Novi Sad',
    2017: 'Tallinn',
    2016: 'Warsaw',
    2015: 'Vienna',
    2014: 'Zagreb',
    2013: 'Manchester',
    2012: 'Belgrade',
}

def get_wudc_or_eudc_info(tournament_name, tournament_locations):
    info = {}
    for year, location in tournament_locations.items():
        year_dict = {}
        motions = Motion.query.filter(Motion.tournament.ilike(f'%{tournament_name}%')) \
                                .filter(Motion.date >= f'{year}-01-01') \
                                .filter(Motion.date <= f'{year}-12-31') \
                                .order_by(Motion.round_code.asc()) \
                                .with_entities(Motion.motion, Motion.round, Motion.infoslide, 
                                Motion.ca_1, Motion.ca_2, Motion.ca_3, Motion.ca_4, Motion.ca_5, 
                                Motion.ca_6, Motion.ca_7, Motion.ca_8, Motion.ca_9) \
                                .all()
        year_dict['motions'] = motions
        sample_motion = motions[0]
        cas_string = ""
        for i, field_name in enumerate(['ca_1', 'ca_2', 'ca_3', 'ca_4', 'ca_5', 'ca_6', 'ca_7', 'ca_8', 'ca_9']):
            if sample_motion[field_name]:
                if i > 0:
                    cas_string += ", "
                cas_string += sample_motion[field_name]
        year_dict['cas'] = cas_string
        year_dict['location'] = location
        info[year] = year_dict
    info = sorted(info.items(), reverse=True)
    return info

@app.route("/wudc-motions/")
def wudc_motions():
    info = get_wudc_or_eudc_info("WUDC", wudc_locations)
    return render_template("wudc_motions.jinja", wudc_info=info)

@app.route("/eudc-motions/")
def eudc_motions():
    info = get_wudc_or_eudc_info("EUDC", eudc_locations)
    return render_template("eudc_motions.jinja", eudc_info=info)

@app.route("/about/")
def about():
    return render_template("about.jinja", categories=categories)

@app.route("/contact/")
def contact():
    return render_template("contact.jinja")