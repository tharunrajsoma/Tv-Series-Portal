<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = pg_query($db,"select user_name from user_info where user_name = '$user_check'");
   
   $row = pg_fetch_array($ses_sql);
   
   $login_session = $row['user_name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
