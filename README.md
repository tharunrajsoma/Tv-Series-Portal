# Tv-Series-Portal
TV series website similar to IMDb

### Main Theme:
1. To model and develop a TV series Portal where users can see the list of episodes being aired by date/calendar.
2. User Profile:
	* Watch list
	* Favorite list
3. Search Interface:
	* By Series name
	* By Cast
	* By Genre
4. Series Information Interface:
	* Synopsis
	* Number of Episodes
	* Cast
  
### Back-End:
- Created a list of tables to store database related to User Information, Tv Series Information.
- In Tv series Information various tables related to Cast, Genre, Episodes, Watch list and Favorite list are created.
- Online IMDbPY API was used to extract the TV series data from IMDB. Among the largest
database available we extracted popular TV series list using TV series ID`s available online.
- I made use of IMDbPY API's search by ID option where I extracted data related to
popular TV series using a iterator which runs through the ID`s provided as input.
- The data extracted involved TV series synopsis, Cast, Genre, Episodes, First Aired year, Rating which was then populated into created Tables.
- The python file used for data collection from imdb is 'data_collection.py'.
- The sql file used for creating of relational schemas is 'schemas.sql'.

### Data Flow in Back-end
<p align = 'center'>
<img src ='/front-end/images/DATA_FLOW2.png'>
</p>

### Front-End:
- For getting the proper and esthetic user interface I created a Login page, Logout page with a Home page/ Welcome page.
- In Home page user can see all the TV series airing by date and with it`s corresponding rating. He can select any of the TV series available and view their information related
number of Episodes, Cast, Genre, Synopsis.
- In addition to this there is add to favorite option provided corresponding to each and every TV series and user can add or remove them from his list.
- Whenever a user visits any TV series the corresponding TV series is added to his watch list.
- In addition to all of these a search option is provided into order to browse to entire TV series database.
- Sorting option is also provided for the searched list.

### Data Flow in Front-end
<p align = 'center'>
<img src ='/front-end/images/DATA_FLOW1.png'>
</p>

### Technical Details:
- Name of the database used is 'project'.
- If we need to modify any details of databse there is no need to change all files. It is enough if we just modify the config.php file.

### Technologies Used:
- Postgresql for creating tables and storing the required TV series database in our database. Secured connection to the portal is brought through the apache server.
- PHP was used for creating the login/registration page and for creating proper layout and styling the entire TV series database HTML and CSS was used.
- Used java script to manage the functioning of buttons.

### USP of the project:
- Most user friendly interface is brought to users with clear cut structure and styling of the
portal.
- Management of the database is easier where it is completely in hands of the developer
rather than depending on other sites for any updation in database.
- I also implemented watch list that keeps track of the list of tv series whose information user has
viewed recently.

### E-R diagram:
<p align = 'center'>
<img src ='/front-end/images/ER-Diagram.png'>
</p>
