from flask import Flask, render_template, escape, request
import pymysql

app = Flask(__name__)
conn = pymysql.connect(host='172.16.37.45',
                        user='root',
                        password='',
                        db='dv',
                        charset='utf8mb4')

# @app.route('/')
# def homePage():
#     return render_template('home.html')

@app.route('/')
def google_pie_chart():
    with conn:
        cursor = conn.cursor()
        sql = "SELECT sa,COUNT(sa) FROM `data` GROUP BY sa"
        rows = cursor.fetchall()
        # print(rows)
        data = {'Task' : 'Hours per Day', 'Work' : 11, 'Eat' : 2, 'Commute' : 2, 'Watching TV' : 2, 'Sleeping' : 7}
        #print(data)
        return render_template('home.html', data=data)

@app.route('/login')
def loginPage():
    return render_template('login.html')

if __name__ == "__main__":
    app.run(debug=True)
