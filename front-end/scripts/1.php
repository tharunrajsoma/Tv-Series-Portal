<html> 
<head>

<title>Random number</title></head> 
<?php


$dbh = pg_connect("host=localhost port=5432 dbname=asn1 user=tharun password=1234 connect_timeout=1");


if (!$dbh) {
	echo "<h2>PHP is Fun!</h2>";
}
$sql = "SELECT * FROM account";

$result = pg_query($dbh, $sql);

if (!$result) {

    die("Error in SQL query: " . pg_last_error());

}


while ($row = pg_fetch_array($result)) {

    echo "account number: " . $row[0] . "<br />";

    echo "branch name: " . $row[1] . "<p />";

}

pg_free_result($result);

pg_close($dbh);

?>
<body> 
<p>I have chosen <?php 
    echo rand(1, 100); 
?>.</p> 
</body> 
</html> 

