import mysql.connector

mydb = mysql.connector.connect(
  host="172.16.37.45",
  user="root",
  passwd="",
)

print(mydb)