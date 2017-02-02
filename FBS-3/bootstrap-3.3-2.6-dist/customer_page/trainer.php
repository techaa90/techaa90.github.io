
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
          ?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
       <head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Profile</title>
      <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
      <link rel="STYLESHEET" type="text/css" href="../css/bootstrap.min.css" />
</head>

<body>
  <?php
  include("../headers/header_t.php");
   ?>


     <?php
     //require_once("connection.php");
     $dbhost = "localhost";
     $dbname  = 'mydb';
     $dbuser  = 'root';
     $dbpass  = 'root';
     $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
     $query = "CALL Show_Event()";
     $result = mysqli_query($connection, $query);
     While( $row = mysqli_fetch_array($result))
     {
     //name_s1`, `description1`, `cost1`, `name_s2`, `description2`, `cost2`, `name_s3`, `description3`, `cost3`, `name_s4`, `description4`, `cost4`, `name_s5`, `description5`, `cost5`, `name_s6`, `description6`, `cost6`
    $event_id= $row[0];
     $event_name= $row[1];
     $Event_state= $row[2];
     $Event_city= $row[3];
     $Event_description = $row[4];
     $Event_address= $row[5];
     $Event_pic= $row[6];


     ?>
         <!-- Three columns of text below the carousel -->
         <div class= "container">
            <div class="row">
           <div class="col-xs-6">
             <img class="img-circle" src="images (5).jpeg" alt="Generic placeholder image" width="140" height="140">
             <h2><?php echo $event_name;  ?></h2>
             <p><?php echo wordwrap($Event_description,50,"<br>\n",TRUE); ?></p>
             <form action="services_c.php" method="GET">
             <p><button type="submit" class="btn btn-default" href="services_c.php" name="view_details" value="<?php echo $event_id;?>" role="button">View details &raquo;</button></p>
           </form>
             <br> <br> <br> <br> <br>
           </div><!-- /.col-lg-4 -->


           <?php } ?>



 </div>
 </div>

</body>
<?php

include("../headers/footer.html");
}
else
{
  echo "<script type='text/javascript'>window.top.location='../bootstrap-3.3.6/bootstrap-3.3.6/docs/examples/Home/index.html';</script>";

}
 ?>

</html>
