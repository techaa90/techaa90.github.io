
<head>
  <title>Create Event</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


  <link rel="stylesheet" type="text/css" media="screen" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">

</head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                 <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
                 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
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
<style type= "text/css">

@import url('http://ivaynberg.github.io/select2/select2-3.4.2/select2.css');
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="">
    <meta name="description" content="">
    <link rel="icon" href="../../favicon.ico">


    <title>FIND A BALLER ABOUT PAGE</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="Admin_tools.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Find a Baller System</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="#">Profile</a></li>
                <li ><a href="#about">Messages</a></li>

                <li class="active" class="Dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Event <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Create Event</a></li>
                    <li><a href="#">Assign members to event</a></li>
                    <li><a href="#">Edit event</a></li>
					 <li><a href="#">Delete event</a></li>

                    <!-- <li role="separator" class="divider"></li>
                    <li class="dropdown-header">nav header</li>
                    <li><a href="#">Sign out</a></li> -->
                  </ul>
                </li>
              </ul>
              </ul>
			  <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
			              <button type="submit" class="btn btn-default">Welcome ...</button>

		              <button type="submit" class="btn btn-success">Sign out</button>
          </form>
        </div>
            </div>
          </div>
        </nav>
<!-- <ul class="nav nav-tabs">

<li role="presentation"><a href="#">Profile</a></li>
<li role="presentation"><a href="#">Messages</a></li>
<li role="presentation"><a href="file:///C:/MAMP/htdocs/bootstrap-3.3.6/bootstrap-3.3.6/docs/examples/Contact/index.html">Create Event</a>
  <br>
  </br>
  <p>Create event</p>
  </li>

  <li role="presentation"><a href="#">Assign members to event</a>
  <br>
  </br>
  <p>Assign members to event</p>
  </li>
  <li role="presentation"><a href="#">Edit event</a></li>
    <li role="presentation"><a href="#">Delete event</a></li>


</ul> -->

<h3>Create Event </h3>
<form class="form-inline" action='CreateEvent.php' method='POST' id="FileForm" role="form">
  <div class="form-group">
    <label for="exampleInputName2">Title:</label>
    <input type="text" class="form-control" id="Title" name="Title" placeholder="Basketball lesson" aria-describedby="sizing-addon1">
  </div>
 	<br></br>
	<div class="form-group">
    <label for="exampleInputName2">Description:</label>

    <textarea class="form-control" rows="3" id="Description" name="Description" placeholder="Describe the event" aria-describedby="sizing-addon1"></textarea>
  </div>


<br></br>
<div class="clear"></div>
    </fieldset>
    <fieldset class="row2">
<legend>Service Details</legend>
<p>
  <input type="button" value="Add Passenger" onClick="addRow('dataTable')" />
  <input type="button" value="Remove Passenger" onClick="deleteRow('dataTable')"  />
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
      </div>

<br>
</br>
      <!-- FOOTER -->
      <footer>
	        <div class="container">

        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		      </div>

      </footer>

    </div>

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
echo $query ;
$result = mysqli_query($connection, $query);
if($result)
{
echo"<script>alert('YOU HAVE CREATE EVENT SECSUSSFLY')</script>";


header("");
}





}

?>
