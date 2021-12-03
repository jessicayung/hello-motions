from flask import Flask
from flask_sqlalchemy import SQLAlchemy
import numpy as np

import pandas as pd

motions_df = pd.read_csv("motions_with_category_labels.csv")
motions_df.fillna('', inplace=True)

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///motions.db'

# Initialise the database
db = SQLAlchemy(app)
# in python: run from app import db, then db.create_all()
class Motions(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    date = db.Column(db.Date, nullable=False)
    category = db.Column(db.String(50), nullable=False)
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

"""
engine = SQLAlchemy.create_engine(sa_url='sqlite:///motions.db', engine_opts='SQLALCHEMY_ENGINE_OPTIONS')
sqlite_connection = engine.connect()
sqlite_table = "motions"
motions_df.to_sql(sqlite_table, sqlite_connection, if_exists='fail')
"""

# "Date,Circuit,City,Country,International,Tournament,CA_1,CA_2,CA_3,CA_4,CA_5,CA_6,CA_7,CA_8,CA_9,Event_Link,Round_Code,Round,Motion,Infoslide,Topic_Area_1,Topic_Area_2,Topic_Area_3,Topic_Area_Specific_1,Needs_updating,Topic_Area_Automated"
num_motions_added = 0
for i, row in motions_df.iterrows():
    if row['Motion'] is np.nan or row['Motion'] == "":
        continue
    try:
        new_motion = Motions(id=row.index,
                            date=row['Date'], 
                            category=row['Category'],
                            circuit=row['Circuit'],
                                country=row['Country'],
                                international=row['International'],
                                tournament=row['Tournament'],
                                ca_1=row['CA_1'],
                                ca_2=row['CA_2'],
                                ca_3=row['CA_3'],
                                ca_4=row['CA_4'],
                                ca_5=row['CA_5'],
                                ca_6=row['CA_6'],
                                ca_7=row['CA_7'],
                                ca_8=row['CA_8'],
                                ca_9=row['CA_9'],
                                event_link=row['Event_link'],
                                round_code=row['Round_code'],
                                motion=row['Motion'],
                                infoslide=row['Infoslide'],
                                topic_area_1=row['Topic_area_1'],
                                topic_area_2=row['Topic_area_2'],
                                topic_area_3=row['Topic_area_3'],
                                topic_area_specific_1=row['Topic_area_specific_1'],
                                topic_area_automated=row['Topic_area_automated'],
                                needs_updating=row['Needs_updating'])
        db.session.add(new_motion)
        num_motions_added += 1
    except:
        print("Error adding motion", row)
db.session.commit()
print("committed motions")   