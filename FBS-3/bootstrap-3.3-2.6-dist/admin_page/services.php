
<?php
     require_once("connection.php");
	   session_start();
if ($_SESSION['username'])
	      {
          $eventID=$_GET['view_details'];
          $event=$eventID;
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


        $dbhost = "localhost";
        $dbname  = 'mydb';
        $dbuser  = 'root';
        $dbpass  = 'root';
        $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        $query = "CALL show_servise('$event')";
        $result = mysqli_query($connection, $query);
         $row = mysqli_fetch_array($result);
        //name_s1`, `description1`, `cost1`, `name_s2`, `description2`, `cost2`, `name_s3`, `description3`, `cost3`, `name_s4`, `description4`, `cost4`, `name_s5`, `description5`, `cost5`, `name_s6`, `description6`, `cost6`
        $event_id= $row[0];
        $event_name= $row[1];
        $Event_state= $row[2];
        $Event_city= $row[3];
        $Event_description = $row[4];
        $Event_address= $row[5];
        $Event_pic= $row[6];
        $name_s1= $row[7];
        $description1= $row[8];
        $cost1= $row[9];
        $name_s2= $row[10];
        $description2= $row[11];
        $cost2 = $row[12];
        $name_s3= $row[13];
        $description3= $row[14];
        $cost3= $row[15];
        $name_s4= $row[16];
        $description4= $row[17];
        $cost4= $row[18];
        $name_s5= $row[19];
        $description5= $row[20];
        $cost5= $row[21];
        $name_s6= $row[22];
        $description6= $row[23];



          ?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

       <head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Service</title>
      <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
      <link rel="STYLESHEET" type="text/css" href="../css/bootstrap.min.css" />



</head>

<body>
   <div class="container marketing">
         <!-- Three columns of text below the carousel -->
         <div class= "container">
           <div class="row">
           <div class="col-xs-4">

<?php
             if($name_s1!= '' )
             {

             ?>

            <img class="img-circle" src="images (5).jpeg" alt="Generic placeholder image" width="140" height="140">
             <h2><?php echo $name_s1; ?></h2>
             <p><?php echo wordwrap($description1,50,"<br>\n",TRUE); ?></p>
             <p><?php echo wordwrap($cost1,50,"<br>\n",TRUE); ?></p>
             <form action="../Tools/Request.php" method="GET">
             <p><button type="submit" value="<?php echo $event_name.' / '.$name_s1; ?>"class="btn btn-default" name="view_details1"  role="button">View details &raquo;</button></p>
           </form>
<br> <br> <br> <br> <br>

           </div><!-- /.col-lg-4 -->
            <?php }?>

            <?php

              if($name_s2!= '' )

              {

                         ?>
<img class="img-circle" src="images (5).jpeg" alt="Generic placeholder image" width="140" height="140">
                         <h2><?php echo $name_s2; ?></h2>
                         <p><?php echo wordwrap($description2,50,"<br>\n",TRUE); ?></p>
                         <p><?php echo wordwrap($cost2,50,"<br>\n",TRUE); ?></p>
                         <form action="../Tools/Request.php" method="GET">
                         <p><button type="submit" value="<?php echo $event_name.' / '.$name_s2; ?>"class="btn btn-default" name="view_details1"  role="button">View details &raquo;</button></p>
                       </form>
            <br> <br> <br> <br> <br>

                       </div><!-- /.col-lg-4 -->
                        <?php }?>

                        <?php
                          if($name_s3!= '' )
                          {

                                     ?>
<img class="img-circle" src="images (5).jpeg" alt="Generic placeholder image" width="140" height="140">
                                     <h2><?php echo $name_s3; ?></h2>
                                     <p><?php echo wordwrap($description3,50,"<br>\n",TRUE); ?></p>
                                     <p><?php echo wordwrap($cost3,50,"<br>\n",TRUE); ?></p>
                                     <form action="../Tools/Request.php" method="GET">
                                     <p><button type="submit" value="<?php echo $event_name.' / '.$name_s3; ?>"class="btn btn-default" name="view_details1"  role="button">View details &raquo;</button></p>
                                   </form>
                        <br> <br> <br> <br> <br>

                                   </div><!-- /.col-lg-4 -->
                                    <?php }?>

                                    <?php
                                      if($name_s4!= '' )
                                      {

                                                 ?>
<img class="img-circle" src="images (5).jpeg" alt="Generic placeholder image" width="140" height="140">
                                                 <h2><?php echo $name_s4; ?></h2>
                                                 <p><?php echo wordwrap($description4,50,"<br>\n",TRUE); ?></p>
                                                 <p><?php echo wordwrap($cost4,50,"<br>\n",TRUE); ?></p>
                                                 <form action="../Tools/Request.php" method="GET">
                                                 <p><button type="submit" value="<?php echo $event_name.' / '.$name_s4; ?>"class="btn btn-default" name="view_details1"  role="button">View details &raquo;</button></p>
                                               </form>
                                    <br> <br> <br> <br> <br>

                                               </div><!-- /.col-lg-4 -->
                                                <?php }?>
                                                <?php
                                                  if($name_s5!= '' )
                                                  {

                                                             ?>
            <img class="img-circle" src="images (5).jpeg" alt="Generic placeholder image" width="140" height="140">
                                                             <h2><?php echo $name_s5; ?></h2>
                                                             <p><?php echo wordwrap($description5,50,"<br>\n",TRUE); ?></p>
                                                             <p><?php echo wordwrap($cost5,50,"<br>\n",TRUE); ?></p>
                                                             <form action="../Tools/Request.php" method="GET">
                                                             <p><button type="submit" value="<?php echo $event_name.' / '.$name_s5; ?>"class="btn btn-default" name="view_details1"  role="button">View details &raquo;</button></p>
                                                           </form>

                                                <br> <br> <br> <br> <br>

                                                           </div><!-- /.col-lg-4 -->
                                                            <?php }?>
                                                            <?php
                                                              if($name_s6!= '' )
                                                              {

                                                                         ?>
                        <img class="img-circle" src="images (5).jpeg" alt="Generic placeholder image" width="140" height="140">
                                                                         <h2><?php echo $name_s6; ?></h2>
                                                                         <p><?php echo wordwrap($description6,50,"<br>\n",TRUE); ?></p>
                                                                         <p><?php echo wordwrap($cost6,50,"<br>\n",TRUE); ?></p>
                                                                         <form action="../Tools/Request.php" method="GET">
                                                                         <p><button type="submit" value="<?php echo $event_name.' / '.$name_s6; ?>"class="btn btn-default" name="view_details1"  role="button">View details &raquo;</button></p>
                                                                       </form>
                                                            <br> <br> <br> <br> <br>

                                                                       </div><!-- /.col-lg-4 -->
                                                                        <?php }?>











 </div> </div>



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
