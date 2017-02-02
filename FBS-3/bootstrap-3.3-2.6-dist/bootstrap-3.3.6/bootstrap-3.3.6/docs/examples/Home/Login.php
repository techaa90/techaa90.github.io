<?php
require_once "connection.php";
Session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if($username && $password )
{
$query = "CALL IsUserPasswordValid('$username' ,'$password')";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$check=$row["found"];
if($check==1)
{  $dbhost = "localhost";
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
       $prove=$row["Approve"];


       //echo $member_check;
       if($member_check=='YES')
      {
        if($prove=='YES')
        {
          $_SESSION['username']= $username;
          echo "<script type='text/javascript'>window.top.location='../../../../../customer_page/customer.php';</script>";
        }
        else{
          echo"<script>alert('YOU HAVE NOT APPROVED YET')</script>";
          echo "<script type='text/javascript'>window.top.location='index.html';</script>";



      }
       }
       else if($trainer_check=='YES')
      {
        if($prove=='YES')
        {
        $_SESSION['username']= $username;
        echo "<script type='text/javascript'>window.top.location='../../../../../customer_page/trainer.php';</script>";
        }
        else{
          echo"<script>alert('YOU HAVE NOT APPROVED YET')</script>";
          echo "<script type='text/javascript'>window.top.location='index.html';</script>";
        }

       }
       else if($admin_check=='YES')
       {
         $_SESSION['username']= $username;
         echo "<script type='text/javascript'>window.top.location='../../../../../admin_page/admin.php';</script>";
       }





}
else{
echo "<script>alert('Incorrect Password!')</script>";
echo "<script type='text/javascript'>window.top.location='index.html';</script>";
//echo "Incorrect Password!";
}
}
else
{
echo "<script>alert('Please fill all boxes and make sure you input correct Email and Password !')</script>";
echo "<script type='text/javascript'>window.top.location='index.html';</script>";
//echo "Incorrect Password!";
}?>
