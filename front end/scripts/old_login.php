<html> 
<head>

<link rel="stylesheet" type="text/css" href="login.css"/>
<title>Login to App Name</title>

<?php
/*
$dbh = pg_connect("host=localhost port=5432 dbname=users user=tharun password=1234 connect_timeout=1");

if (!$dbh) {
	echo "<h2>PHP is Fun!</h2>";
}

$sql = "";

$result = pg_query($dbh, $sql);

if (!$result) {

    die("Error in SQL query: " . pg_last_error());

}

while ($row = pg_fetch_array($result)) {

    echo "user id: " . $row[0] . "<br />";

}

pg_free_result($result);

pg_close($dbh);
*/
?>
<body>  
<div id="main_box">
  <form id="login_boxes">
  <input name="username_box" type="text" value="username"></br>
  <input name="password_box" type="text" value="password">
  </form>
</div>

</body> 
</html> 

