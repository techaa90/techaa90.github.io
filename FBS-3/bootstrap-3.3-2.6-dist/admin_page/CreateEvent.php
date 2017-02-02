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
     $Tr_education=$row["Tr_education"];
    }

else{

}
 ?>

<head>
  <title>Create Event</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


  <link rel="stylesheet" type="text/css" media="screen" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">

</head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                 <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
                 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
								 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
								                  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
								                  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
								                  <script src="/assets/bootstrap-dropdown.js?body=1" type="text/javascript"></script>
								                  <script src="js/bootstrap.min.js"></script>
          <script type="text/javascript">
               $(document).ready(function() {
               $('.selectpicker').selectpicker();
              });
          </script>
</body>
<script>
 function checkDate() {
   var selectedText = document.getElementById('datefrom').value;
   var selectedDate = new Date(selectedText);
   var now = new Date();
   if (selectedDate < now) {
    alert("Date must be in the future");
   }
 }

 function checkDateto() {
   var selectedText = document.getElementById('dateto').value;
   var selectedDate = new Date(selectedText);
   var nowtext = document.getElementById('datefrom').value;
   var now = new Date(nowtext);
   if (selectedDate < now) {
    alert("Date must be in the future");
   }
 }


function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 6){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i <colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum Service per event is 6");

	}
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {               // limit the user from removing all the fields
				alert("Cannot Remove all the Passenger.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}

</script>



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

<h3>Create Event </h3>
<form class="form-inline" action='CreateEvent.php' method='POST' id="FileForm" role="form">
  <div class="form-group">
    <label for="exampleInputName2">Title:</label>
    <input type="text" class="form-control" id="Title" name="Title" placeholder="Basketball lesson" aria-describedby="sizing-addon1" required="required">
  </div>
 	<br></br>
	<div class="form-group">
    <label for="exampleInputName2" >Description:</label>

    <textarea class="form-control" rows="3" id="Description" name="Description" placeholder="Describe the event" aria-describedby="sizing-addon1" type="text" required="required"></textarea>
  </div>


<br></br>
<div class="clear"></div>
    </fieldset>
    <fieldset class="row2">
<legend>Service Details</legend>
<p>
  <input type="button" value="Add Service" onClick="addRow('dataTable')" />
  <input type="button" value="Remove Service" onClick="deleteRow('dataTable')"  />
  <p>(All acions apply only to entries with check marked check boxes only.)</p>
</p>
       <table id="dataTable" class="form" border="1">
          <tbody>
            <tr>
              <p>
    <td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
    <td>
      <label>Name:</label>
      <input type="text" required="required" name="BX_NAME[]" class="form-control">
     </td>
     <td>
      <label for="BX_Explantion">Explantion</label>
      <input type="text" required="required" class="form-control"  name="BX_Explantion[]">
       </td>
     <td>
      <label for="BX_Cost">Cost:</label>
      <input type="text" required="required" class="form-control"  name="BX_cost[]">
     </td>
      </p>
            </tr>
            </tbody>
        </table>
<div class="clear"></div>
    </fieldset>
 <div class="clear"></div>
     </fieldset>
     <fieldset class="row3">
        <br></br>
       <div class="form-group">
           <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
         </div>
         <div class="form-group">
         <button type="submit" class="btn btn-danger" name = "Cancel">Cancel</button>
       </div>
       </div>

  <footer>
     <?php

     echo '<br/>';

     include("../headers/footer.html");

      ?>
        </footer>
</form>

	<!--

   <h3>Multiple Select</h3>
  <select id="dataCombo" class="selectpicker" multiple="multiple" style="width:400px;">
    <option value="one">One</option>
    <option value="two">Two</option>
    <option value="three">Three</option>
    <option value="four">Four</option>
    <option value="five">Five</option>
    <option value="six">Six</option>
  </select> */
  -->









<!--
<p class="bg-primary">jhsdfgsdhhfg gfsdyutyusd gdystdyu</p>
<p class="bg-success">...</p>
<p class="bg-info">...</p>
<p class="bg-warning">...</p>
<p class="bg-danger">...</p>
 -->



	<!--
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>


    <!-- Begin page content -->
    <!-- <div class="container">
      <div class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
      </div>
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p>
      <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer> -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


<?php
require_once "connection.php";

if(isset($_POST["submit"])){
$Title=$_POST['Title'];
$Description=$_POST['Description'];
$lenght=$_POST['chk'];
$service_name=$_POST['BX_NAME'];
$cost=$_POST['BX_cost'];
$service_des=$_POST['BX_Explantion'];
$x=0;
$y=1;
$z=2;
$e=3;
$n=4;
$m=5;
$dbhost = "localhost";
$dbname  = 'mydb';
$dbuser  = 'root';
$dbpass  = 'root';
$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$query = "CALL add_event('$Title','$Description','$service_name[$x]','$service_des[$x]','$cost[$x]','$service_name[$y]','$service_des[$y]','$cost[$y]','$service_name[$z]','$service_des[$z]','$cost[$z]','$service_name[$e]','$service_des[$e]','$cost[$e]','$service_name[$n]','$service_des[$n]','$cost[$n]','$service_name[$m]','$service_des[$m]','$cost[$m]')";
$result = mysqli_query($connection, $query);
if($result)
{
echo"<script>alert('YOU HAVE CREATE EVENT SECSUSSFLY')</script>";


header("");
}





}

?>
