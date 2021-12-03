from flask import Flask, render_template

app = Flask(__name__)

@app.route("/")
def hello_world():
    return render_template("template.jinja", title="Hello World", 
                                                            description="My description")


@app.route("/search/")
def search():
    return "<p>Search</p>"

@app.route("/about/")
def about():
    return "<p>About</p>"
