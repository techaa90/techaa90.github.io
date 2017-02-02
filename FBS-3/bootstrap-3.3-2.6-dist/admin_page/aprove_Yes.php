
<?php

	require_once "connection.php";
  session_start();
if ($_SESSION['username'])
     {
	  if(isset($_POST["approve"])){
           $member_id = $_POST['approve'];
           echo $member_id;

          $username= $_SESSION['username'];
          $query = "CALL approve_member('$member_id')";
	       $result = mysqli_query($connection, $query);
	       if($result)
	        {



				 echo"<script>alert('THIS ACCOUNT HAS BEEN APPROVED SUCCESSFULLY ')</script>";
				 echo "<script type='text/javascript'>window.top.location='Approve.php';</script>";
	        }

	  }
       else
	   {

		    $member_id = $_POST['deny'];


            $username= $_SESSION['username'];
            $query = "CALL delete_member('$member_id')";
	        $result = mysqli_query($connection, $query);
	        if($result)
	        {


				echo"<script>alert('THIS ACCOUNT HAS BEEN DECLINE ')</script>";
				echo "<script type='text/javascript'>window.top.location='Approve.php';</script>";
	        }



	   }

	 }
	 ?>
