<?php
   define('DB_SERVER', 'localhost:5432');
   define('DB_USERNAME', 'tharun');
   define('DB_PASSWORD', '1234');
   define('DB_DATABASE', 'project');
   $db = pg_connect("host=localhost port=5432 dbname=project user=tharun password=1234 connect_timeout=1");
?>

