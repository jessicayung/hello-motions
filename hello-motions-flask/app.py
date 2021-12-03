from flask import Flask, render_template, request, redirect, url_for
from flask_sqlalchemy import SQLAlchemy
from sqlalchemy.sql.expression import func

from datetime import datetime

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///motions.db'

# Initialise the database
db = SQLAlchemy(app)
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

@app.route("/")
def hello_world():
    return render_template("index.jinja")

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
    # or: Motion.category.ilike("%family%")
    try:
        year_num = int(year)
        if year_num >= 1999 and year_num <= int(datetime.now().year):
            motions = Motion.query.filter(Motion.date >= f'{year}-01-01') \
                                .filter(Motion.date <= f'{year}-12-31') \
                                .order_by(Motion.date.asc()).all()
            return render_template("motions_year.jinja", motions=motions, year=year)
        else:
            return render_template("page_not_found.jinja", extra_info="We have pages for \
            motions from 1999 until today.")
    except:
        return render_template("page_not_found.jinja")

@app.route("/random-motions<num>/")
def random_motions(num):
    # might change num to be a request-based thing
    # and change page to be just random-motions.
    random_motions = Motion.query.order_by(func.random()).limit(num).all()
    return render_template("random_motions.jinja", num=num, 
            random_motions=random_motions)

@app.route("/search/")
def search():
    return "<p>Search</p>"

@app.route("/about/")
def about():
    return "<p>About</p>"
