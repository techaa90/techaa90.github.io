
<?php

	require_once "connection.php";
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
     $member_Email=$row["member_Email"];
     $member_aga=$row["member_aga"];
     $member_address=$row["member_address"];
     $member_State=$row["member_State"];
     $member_ZIPCODE=$row["member_ZIPCODE"];
     $member_city=$row["member_city"];
     $member_Phone=$row["member_Phone"];
     $gender=$row["gender"];

	 }
	 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Edit profile </title>
      <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>

      <link rel="STYLESHEET" type="text/css" href="../css/bootstrap.min.css" />


</head>
<body>

<?php

include("../headers/header_A.php");

 ?>


 <!DOCTYPE html>
 <html>

 </html>
<?php
  $dbhost = "localhost";
     $dbname  = 'mydb';
     $dbuser  = 'root';
     $dbpass  = 'root';
     $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	 $query = "CALL prove_list()";
     $result = mysqli_query($connection, $query);
     ?>
 <br></br>

 <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
	  <th>Email</th>
	  <th>Requests</th>
	  <th>Decline</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	<?php
	$i=1;
	While( $row = mysqli_fetch_array($result))
     {

     //name_s1`, `description1`, `cost1`, `name_s2`, `description2`, `cost2`, `name_s3`, `description3`, `cost3`, `name_s4`, `description4`, `cost4`, `name_s5`, `description5`, `cost5`, `name_s6`, `description6`, `cost6`
     $member_id= $row[0];
     $member_name_first= $row[1];
     $member_lat_name= $row[2];
	 	$member_Email=$row[3];
		$member_aga=$row[4];


  ?>
      <th scope="row"><?php echo $i;  ?></th>
      <td><?php echo $member_name_first?></td>
      <td><?php echo $member_lat_name?></td>
      <td><?php echo $member_aga?></td>
	  <td><?php echo $member_Email?></td>
	  <form action="aprove_Yes.php" method="post">
	  <td> <button type="submit" value="<?php echo $member_id;?>" name="approve" class="btn btn-success">Approve</button></td>
	  <td><button type="submit" value="<?php echo $member_id;?>" name="deny" class="btn btn-danger">Decline</button></td>
	  </form>
    </tr>
 <?php $i=$i+1; } ?>
  </tbody>
</table>






	 </div>
  <br></br><br></br>


<br></br><br></br>
<?php

echo '<br/>';

include("../headers/footer.html");

 ?>
</div>
