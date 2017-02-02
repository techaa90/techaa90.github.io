
<?php
require_once "connection.php";

if(isset($_POST["submit"])){
$username= $_SESSION['username'];
$event_id=$_POST['eventid'];
//$dbhost = "localhost";
$query = "DELETE FROM `Event` WHERE Event_id =".$event_id."";

$result = mysqli_query($connection, $query);



      if($result)
     {
       echo"<script>alert('You have deleted the service successfully')</script>";
       echo "<script type='text/javascript'>window.top.location='../admin_page/admin.php';</script>";


    }



}








?>
