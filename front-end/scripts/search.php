<?php
   include('session.php');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   		//echo "<pre>";
		//print_r($_POST);
		//echo "</pre>";
		$user_id = $_SESSION['login_id'];
   		foreach ($_POST as $key => $value) {
   			$series_id = $key;
   			$sql = "SELECT * FROM FAVOURITES WHERE user_id = '$user_id' and series_id = '$series_id'";
      		$result = pg_query($db,$sql);
      		$row = pg_fetch_array($result);
      		//$active = $row['active'];
      		$count = pg_num_rows($result);
      		if($count != 0) {
      				//echo "hai";
      				$sql = "DELETE FROM FAVOURITES WHERE user_id = '$user_id' and series_id = '$series_id'";
      				$result = pg_query($db,$sql); 
					if (!$result) { 
					    printf ("ERROR"); 
					    $errormessage = pg_errormessage($db); 
					    echo $errormessage; 
					    exit(); 
					} 
      		}
      		else{
      				//echo $user_id;
      				//echo $series_id;
      				$sql = "INSERT INTO FAVOURITES VALUES('$user_id','$series_id')";
      				pg_query($db,$sql);
      		}
   			break;
   		}	
   }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

<title>TV SERIES PORTAL</title>
<style>
/*
HTML 5 Template Name: Basic 70
File: Layout CSS
Author: OS Templates
Author URI: http://www.os-templates.com/
Licence: <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>
*/

body{margin:0; padding:0; font-size:13px; font-family:Georgia, "Times New Roman", Times, serif; color:#FFFFFF; background-color:#1E1E1E;}

.clear:after{content:"."; display:block; height:0; clear:both; visibility:hidden; line-height:0;}
.clear{display:block; width:100%; clear:both;}
html[xmlns] .clear{display:block;}
* html .clear{height:1%;}

a{outline:none; text-decoration:none;}

code{font-weight:normal; font-style:normal; font-family:Georgia, "Times New Roman", Times, serif;}

.fl_left{float:left;}
.fl_right{float:right;}

img{margin:0; padding:0; border:none; line-height:normal; vertical-align:middle;}
.imgholder, .imgl, .imgr{padding:4px; border:1px solid #D6D6D6; text-align:center;}
.imgl{float:left; margin:0 15px 15px 0; clear:left;}
.imgr{float:right; margin:0 0 15px 15px; clear:right;}



/*----------------------------------------------HTML 5 Overrides-------------------------------------*/

address, article, aside, figcaption, figure, footer, header, nav, section{display:block; margin:0; padding:0;}

q{display:block; padding:0 10px 8px 10px; color:#979797; background-color:#ECECEC; font-style:italic; line-height:normal;}
q:before{content:'“ '; font-size:26px;}
q:after{content:' „'; font-size:26px; line-height:0;}

/* ----------------------------------------------Wrapper-------------------------------------*/

div.wrapper{display:block; width:100%; margin:0; padding:0; text-align:left;}

.row1, .row1 a{color:#C0BAB6; background-color:#333333;}
.row2{color:#979797; background-color:#FFFFFF;}
.row2 a{color:#FF9900; background-color:#FFFFFF;}
.row4{color:#979797; background-color:#FFFFFF;}
.row4 a{color:#FF9900; background-color:#FFFFFF;}
.row3, .row3 a{color:#FFFFFF; background-color:#1E1E1E;}

/*----------------------------------------------Generalise-------------------------------------*/

#header, #container,#container2, #footer{display:block; margin:0 auto; width:960px;}

nav ul{margin:0; padding:0; list-style:none;}

h1, h2, h3, h4, h5, h6{margin:0; padding:0; font-size:20px; font-weight:normal; font-style:normal; line-height:normal;}

/*----------------------------------------------Header-------------------------------------*/

#header{}

#header #hgroup{float:left; padding:20px 0;}
#header #hgroup h1, #header #hgroup h2{}
#header #hgroup h1{font-size:36px;}
#header #hgroup h2{font-size:13px;}

#header nav{float:right; padding:20px 0;}
#header nav ul{margin-top:20px;}
#header nav li{display:inline; margin-right:15px; text-transform:uppercase;}
#header nav li.last{margin-right:0;}

/*----------------------------------------------Content Area-------------------------------------*/

#container{padding:30px 0;}
#container section{margin:0 0 30px 0;}
#container section.last{margin:0;}
#container .more{text-align:right; text-transform:uppercase; font-size:smaller; font-weight:bold;}

#container section article{}
#container section article h2{text-transform:uppercase;}
#container section article address{font-size:10px; font-style:normal;}
#container section article time{font-size:10px;}

#container2{padding:30px 0;}
#container2 section{margin:0 0 30px 0;}
#container2 section.last{margin:0;}
#container2 .more{text-align:right; text-transform:uppercase; font-size:smaller; font-weight:bold;}

#container2 section article{}
#container2 section article h2{text-transform:uppercase;}
#container2 section article address{font-size:10px; font-style:normal;}
#container2 section article time{font-size:10px;}

.buttons {
    background-color: #ff751a;
    border: none;
    color: white;
    width:160px;
    height:25px;
    
    text-align: center;
    text-decoration: none;
    float:right;
    font-size: 16px;
}

.one_third, .two_third, .three_third{display:block; float:left; margin:0 30px 0 0; text-align:justify;}

.one_third{width:300px;}
.two_third{width:630px;}
.three_third{width:960px; float:none; margin-right:0; clear:both;}
.lastbox{margin-right:0;}

/*----------------------------------------------Footer-------------------------------------*/

#footer{}
#footer p{margin:0; padding:20px 0;}
</style>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
    function hide(id) {
       var e = document.getElementById(id);
       e.style.display = 'none';
    }
    function show(id) {
       var e = document.getElementById(id);
       e.style.display = 'block';
    }
</script>
<div class="wrapper row1">

  <header id="header" class="clear">

    <div id="hgroup">
      <h1><a href="#">TV SERIES PORTAL</a></h1>
    </div>
    <nav>
      <ul>
        <li><a href="watchlist.php">Watch List</a></li>
        <li><a href="favorites.php">Favourites</a></li>
        <li><a href="#">Shared List</a></li>
        <!--<li><a href="#">Signout</a></li>-->
        <li class="last"><a href="logout.php">Sign out</a></li>
      </ul>
    </nav>
    <div class="clear"></div>
  </header>
</div>
<!-- content -->

<div class="wrapper row2">
  <div id="container" style="display:block">
    <section class="clear">
       <a href='welcome.php' type='submit'><u><font size='3'>Back to Welcome page</font></u></a>
      </br></br></br></br>
      <form action='search.php' method="Get">
  		<font size='3'><b>Search input:</b></font>
  		<input type="text" name="search">
  		<font size='3'><b>Search by:</b></font>
  		<select name="search_by">
  			<option value="name">Name</option>
  			<option value="cast">Cast</option>
  			<option value="genre">Genre</option>
  			<option value="year">Year</option>
		</select>
		<font size='3'><b>Sort by:</b></font>
		<select name="sort_by">
        <option value="alp_asc">Alphabetical</option>
        <option value="alp_dsc">Revese Alphabetical</option>
  			<option value="rat_asc">Rating Ascending</option>
  			<option value="rat_dsc">Rating Descending</option>
  			<option value="year_asc">Year Ascending</option>
  			<option value="year_dsc">Year Descending</option>
		</select>
		<input type = "submit" value = " Submit "/><br />
  	   </form>
  	   </br>
  	   </br>
       <?php
   		include('session.php');
      $sql="";
      if(1) {
          if($_GET["search_by"]=='name'){
              $name = $_GET["search"];
              $name="%".$name."%";
              $sql="select * from SERIES_INFO where series_name ilike '$name'";    
          }
          else if($_GET["search_by"]=='cast'){
              $name = $_GET["search"];
              $name="%".$name."%";
              $sql="select distinct series_id,series_name,year,rating from SERIES_INFO natural join cast_info where cast_name ilike '$name'";
          }
          else if($_GET["search_by"]=='genre'){
                $name = $_GET["search"];
                $sql="select distinct series_id,series_name,year,rating from SERIES_INFO natural join genre_info where genre='$name'";
          }
          else if($_GET["search_by"]=='year'){
               $name = $_GET["search"];
                $sql="select * from SERIES_INFO where year='$name'";
          }

          if($_GET["sort_by"]=='alp_asc'){
                $sql=$sql."ORDER BY series_name ASC";
          }
          else if($_GET["sort_by"]=='alp_dsc'){
                $sql=$sql."ORDER BY series_name DESC";
          }
          else if($_GET["sort_by"]=='rat_asc'){
                $sql=$sql."ORDER BY rating ASC";
          }
          else if($_GET["sort_by"]=='rat_dsc'){
                $sql=$sql."ORDER BY rating DESC";
          }
          else if($_GET["sort_by"]=='year_asc'){
                $sql=$sql."ORDER BY year ASC";
          }
          else if($_GET["sort_by"]=='year_dsc'){
                $sql=$sql."ORDER BY year DESC";
          }
      }
      //echo $sql;
   		//$sql = "SELECT * FROM SERIES_INFO";
   		$result = pg_query($db,$sql);
   		$count=1;
   		while ($row = pg_fetch_assoc($result)) {
      //echo "hai";
  		//echo $row['series_id'];
  		//echo "</br>";
   			
  			echo "<a  href=\"\" > <font size=\"3\">".$row['series_name']."</font></a>";
  			$temp = str_repeat("&nbsp",90+strlen($row['series_name']));
  			echo $temp;
 	 		echo "<font size=\"3\">".$row['year']."</font>";
 	 		echo str_repeat("&nbsp",80+strlen($row['series_name']));
 	 		echo "<font size=\"3\">".$row['rating']."</font>";
 	 		echo "</br>";
 	 		//$sql2 = "SELECT * FROM SERIES_INFO";
 	 		$user_id = $_SESSION['login_id'];
 	 		$series_id = $row['series_id'];
 	 		$sql2 = "SELECT * FROM FAVOURITES where USER_ID = '$user_id' and SERIES_ID='$series_id'";
 	 		$result2 = pg_query($db,$sql2);
 	 		$button1_id = "button".$count;
 	 		$count=$count+1;
 	 		$button2_id = "button".$count;
 	 		$count=$count+1;

 	 		if (!pg_fetch_assoc($result2)){
 	 			echo "<form action=\"\" method=\"post\">";
 	 			echo "<input name='$series_id' value='$series_id' type='hidden'/>";
 	 			echo "<button class='buttons' id='$button1_id' type='submit' name='$button1_id'  value='$button1_id' onclick=\"hide('$button1_id');show('$button2_id');\">Add as favourite</button>";
 	 			echo "<button class='buttons' id='$button2_id' type='submit' name='$button2_id'  value='$button1_id' style='display:none' onclick=\"hide('$button2_id');show('$button1_id');\">Remove as favourite</button>";
 	 			echo "</form>";
 	 		}
 	 		else{
 	 			echo "<form action=\"\" method=\"post\">";
 	 			echo "<input name='$series_id' value='$series_id' type='hidden'/>";
 	 			echo "<button class='buttons' id='$button1_id' type='submit' name='$button1_id' value='button1_id' style='display:none' onclick=\"hide('$button1_id');show('$button2_id');\">Add as favourite</button>";
 	 			echo "<button class='buttons' id='$button2_id' type='submit' name='$button2_id' value='button2_id' onclick=\"hide('$button2_id');show('$button1_id');\">Remove as favourite</button>";
 	 			echo "</form>";
 	 		}
 	 		echo "</br>";
 	 		echo "</br>";
 	 		$ids = "series".$series_id;
 	 		echo "<form action=\"series.php\" method=\"get\">";
 	 		echo "<input name='$ids' value='$ids' type='hidden'/>";
 	 		echo "<button class='buttons'  type='submit'>Get Complete Info</button>";
 	 		echo "</form>";
 	 		echo "</br>";
 	 		echo "</br>";
		}
	   ?>
    </section>
  </div>
</div>

<!-- footer -->
<div class="wrapper row3">
  <footer id="footer">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#"> GROUP 5</a></p>
    <p class="fl_right">WEBSITE FOR <a href="" title="">DBMS PROJECT</a></p>
    <div class="clear"></div>
  </footer>
</div>
<!--<h1>Welcome <?php echo $login_session; ?></h1>-->

</body>
</html>

