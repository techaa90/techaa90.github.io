

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>About us</title>
      <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>

      <link rel="STYLESHEET" type="text/css" href="../css/bootstrap.min.css" />



</head>
<?php
require_once("connection.php");
session_start();
if ($_SESSION['username'])
	      {
         $username= $_SESSION['username'];
         $query = "CALL member_info('$username')";
     		$result = mysqli_query($connection, $query);
     		$row = mysqli_fetch_assoc($result);
     		$first_name=$row["member_first_name"];
        $last_name=$row["member_Last_name"];
         $dbhost = "localhost";
                $dbname  = 'mydb';
                $dbuser  = 'root';
                $dbpass  = 'root';
                $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
                $query = "CALL member_check('$username')";
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($result);
                $member_check=$row["Is_he_member"];
                $trainer_check=$row["Is_he_trainer"];
                $admin_check=$row["Is_he_Admin"];
                if($member_check=='YES')
               {
                 include("../headers/header_c.php");
               }
               else if ($trainer_check=='YES'){
                 include("../headers/header_t.php");

               }
               else if($admin_check=='YES')
               {
                 include("../headers/header_A.php");

               }

             }
             else{
               include("../headers/header.html");



             }

           ?>
<body>





<div class="container">
  <div class="row">
    <div class="col-sm-6">

<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/PIPcnCjsVR4"></iframe>
</div>
    </div>
    <div class="col-sm-6">



    </div>
  </div>
</div>


<style>
h1 {
    text-align: center;
}
</style>

<h1> Mission Statement </h1>

<bar>
  <bar>

<i><h4>
We are here to provide our youth and community pathways to new opportunities by servicing individuals to improve overall confidence. We wish to explore opportunities within our community that promotes the very essence of success. Every community make up differs in the standing opportunity society presents. We wish to help provide an opportunity for quality service and individual empowerment.
</h5></i>

<i><h4>
Findaballer Inc. was founded to give all communities rich opportunities in health and wellness. Findaballer will give parents and coaches a gateway to provide their students with the ability to learn sport fundamentals, partnered with holistic logic. Findaballer will strive to work with students and athletes to create jobs, increase self-confidence, and provide alternative learning outlets for the youth. In the near future, Findaballer will eventually help our youth make the transition to adult professionals in their chosen niche. By providing fundamental tools of sport and academics in synergy with fitness logic, we hope to optimize the opportunity for college scholarships, and build healthy habits in the process. We believe with this strong foundation and training, naturally students will transcend good habits into daily routines in their everyday life. With these base principles in place, our network will push to give our clients self-identity, confidence, and strong moral standards. These two qualities are vital to the promotion of self-accountability. Findaballer is here to help build a brighter, better, and more together community for all. One person at a time.
</h4></i>
<?php

echo '<br/>';

include("../headers/footer.html");

 ?>


</body>


</html>
