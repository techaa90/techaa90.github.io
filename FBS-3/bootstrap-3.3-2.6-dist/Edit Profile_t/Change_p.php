

   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

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
          $member_id=$row["member_id"];
          //echo $member_id;
 	         $dbhost = "localhost";
 	                $dbname  = 'mydb';
 	                $dbuser  = 'root';
 	                $dbpass  = 'root';
 	                $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 	                $query = "CALL member_check('$username')";
 	                $result = mysqli_query($connection, $query);
 	                $row = mysqli_fetch_assoc($result);
 	                $member_check=$row["Is_he_member"];
 	                if($member_check=='YES')
 	               {
 	                 include("../headers/header_c.php");


 	               }
 	               else{
 	                 include("../headers/header_t.php");

 	               }
 	             }
 	             else{



 	             }

 	           ?>


         <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
         <title>Edit profile </title>
         <link rel="STYLESHEET" type="text/css" href="contact.css" />
         <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
         <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>

         <link rel="STYLESHEET" type="text/css" href="../css/bootstrap.min.css" />


   <script type="text/javascript">
   	function checkPass()
   {
       //Store the password field objects into variables ...
       var pass1 = document.getElementById('pass1');
       var pass2 = document.getElementById('pass2');
       //Store the Confimation Message Object ...
       var message = document.getElementById('confirmMessage');
       //Set the colors we will be using ...
       var goodColor = "#66cc66";
       var badColor = "#ff6666";
       //Compare the values in the password field
       //and the confirmation field
       if(pass1.value == pass2.value){
           //The passwords match.
           //Set the color to the good color and inform
           //the user that they have entered the correct password
           pass2.style.backgroundColor = goodColor;
           message.style.color = goodColor;
           message.innerHTML = "Passwords Match"
       }else{
           //The passwords do not match.
           //Set the color to the bad color and
           //notify the user.
           pass2.style.backgroundColor = badColor;
           message.style.color = badColor;
           message.innerHTML = "Passwords Do Not Match!"
       }
   }


   </script>




    <!DOCTYPE html>
    <html>
    <body>

    <br>
      <form action='Change_p.php' method='POST' id="fileForm" role="form" >
                <div class="form-group">
                    <label for="password"><span class="req">* </span> Password: </label>
    				<br>
                        <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" /> </p>
                    <label for="password"><span class="req">* </span> Password Confirm: </label>
    				<br>
                        <input required name="password1" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                            <span id="confirmMessage" class="confirmMessage"></span>
                </div>

								<bar><bar>

								<div class="form-group">
										<button type="submit" class="btn btn-success" name ="Update">Save Changes</button>


									<button type="submit" class="btn btn-danger" name = "Cancel">Cancel</button>


</form>

</div>

                <?php

                echo '<br/>';

                include("../headers/footer.html");

                 ?>
                </div>

                <?php

                	if(isset($_POST["Update"])){
                	$password=$_POST['password'];
                  $pass=$_POST['password1'];
                  if($password == $pass){
                    $dbhost = "localhost";
                    $dbname  = 'mydb';
                    $dbuser  = 'root';
                    $dbpass  = 'root';
                    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
                    $query = "CALL Change_password('$member_id','$password')";

                    //echo $query;
                    $result = mysqli_query($connection, $query);

                    if($result)
                   {
                     echo"<script>alert('Your password has been updated successfully')</script>";

                  }

                }else{
                  echo"<script>alert('Your password does not match')</script>";

                }

                }
                ?>
