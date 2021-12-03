from flask import Flask, render_template, request, redirect, url_for
from flask_sqlalchemy import SQLAlchemy, func

from datetime import datetime

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///motions.db'

# Initialise the database
db = SQLAlchemy(app)
# in python: run from app import db, then db.create_all()
class Motions(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    motion = db.Column(db.String(5000), nullable=False)
    date = db.Column(db.DateTime, nullable=False, default=datetime.utcnow)
    category = db.Column(db.String(50), nullable=False)

    def __repr__(self):
        return f'<Motion {self.id}: {self.motion}>'

@app.route("/")
def hello_world():
    return render_template("index.jinja")

@app.route("/add_motions/", methods=["POST", "GET"])
def add_motions():
    is_motion_added = False
    if request.method == "POST":
        motion = request.form.get("motion")
        category = request.form.get("category")
        date = request.form.get("date")
        print(motion, category, date)
        new_motion = Motions(motion=motion, category=category)
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

@app.route("/motions_2020/", methods=["GET"])
def motions_2020():
    # or: Motions.category.ilike("%family%")
    motions = Motions.query.filter(func.lower(Motions.category)=="family").all()
    return render_template("motions_2020.jinja", motions=motions)

@app.route("/search/")
def search():
    return "<p>Search</p>"

@app.route("/about/")
def about():
    return "<p>About</p>"
