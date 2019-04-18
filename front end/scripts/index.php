<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
<?php
   include('session.php');
?>
<title>TV SERIES PORTAL</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">TV SERIES PORTAL</a></h1>
    </div>
    <nav>
      <ul>
        <li><a href="#">Text Link</a></li>
        <li><a href="#">Text Link</a></li>
        <li><a href="#">Text Link</a></li>
        <li><a href="#">Text Link</a></li>
        <li class="last"><a href="#">Text Link</a></li>
      </ul>
    </nav>
    <div class="clear"></div>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <section class="clear">
      <div class="two_third">
        <h2>Two Third</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper pellentesque. Quisque non luctus sem. Nullam non magna vel nisi posuere bibendum vitae sed dui. Nulla at lorem tortor, non rhoncus odio. Nunc sit amet interdum orci. Nam at mauris ut arcu fringilla facilisis. Donec tempus massa vitae nunc pulvinar sed lobortis leo rutrum. Sed tempus, massa quis consequat consequat, sem purus porta urna, eget sollicitudin orci mi et nunc. Proin lorem turpis, imperdiet vel gravida sed, fringilla ac dui. Pellentesque vehicula placerat enim, tristique consequat lacus varius a. Pellentesque pretium augue eget ante euismod eget dignissim odio vestibulum.</p>
      </div>
      
    </section>
  </div>
</div>
<!-- footer -->
<div class="wrapper row3">
  <footer id="footer">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <div class="clear"></div>
  </footer>
</div>
<h1>Welcome <?php echo $login_session; ?></h1> 
<h2><a href = "logout.php">Sign Out</a></h2>
</body>
</html>

