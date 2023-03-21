# first install flask using "pip install flask"
# to run this programm, use "python app.py"
# then go on http://localhost:5000
from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('./index.html', title='Hello', user='Dominika')

if __name__ == '__main__':
    app.run()
