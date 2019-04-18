#!/usr/bin/python

import psycopg2
from imdb import IMDb

conn = psycopg2.connect(database="project", user="tharun", password="1234", host="127.0.0.1", port="5432")

cur = conn.cursor()

ia = IMDb()

print "Opened database successfully"

series_id = 20

tv_series_id = []

for k in tv_series_id:
	try:
		temp=ia.get_movie(k)
		if temp['kind']=='tv series':
			series_name=temp['title']
			year = temp['year']
			genre_list = temp['genre']
			rating = temp['rating']
			ia.update(temp,'episodes')
			cast_tuple = temp['cast']
			query = "INSERT INTO "
			series_info = query+"SERIES_INFO VALUES("		
			series_info+=str(series_id)
			series_info+=",'"
			series_info+=series_name
			series_info+="',"
			series_info+=str(year)
			series_info+=","
			series_info+=str(rating)
			series_info+=");"
			cur.execute(series_info);
			cast_info=query+"CAST_INFO VALUES("
			cast_info+=str(series_id)
			cast_info+=","
			for cast in cast_tuple:
				temp2=cast_info
				temp2+=str(cast.personID)
				temp2+=",'"
				#print "hai2"
				temp2 += cast.data['name']
				#print "hai"
				temp2 +="');"
				#print temp2
				cur.execute(temp2);

			genre_info = query+"GENRE_INFO VALUES("
			genre_info += str(series_id)
			genre_info += ",'"
			for genre in genre_list:
				temp3=genre_info
				temp3+=genre
				temp3+="');"
				cur.execute(temp3)
			episode_info = query + "EPISODE_INFO VALUES("
			episode_info += str(series_id)
			episode_info += ","
			for season in temp['episodes']:
				print season
				temp4=episode_info
				temp4 += str(season)
				temp4 += ","
				temp4 += str(len(temp['episodes'][season]))
				temp4 += ");"
				cur.execute(temp4)
			conn.commit()
			print "Records created successfully";
			series_id = series_id + 1
	except:
			continue
conn.close()

