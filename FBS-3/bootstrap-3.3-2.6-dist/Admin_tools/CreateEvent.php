
<head>
  <title>Title</title>
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
    <input type="text" class="form-control" id="Title" name="Title" placeholder="Basketball lesson">
  </div>
 	<br></br>

	<div class="form-group">
    <label for="exampleInputName2">Description:</label>
    <input type="text" class="form-control" id="Description" name="Description"placeholder="Describe the event">
  </div>
 	<br></br>

  <div class="form-group">
    <label for="exampleInputName2">Category:</label>
    <select class="form-control" name = "Category">
  <option>Basketball</option>
  <option>Soccer</option>
  <option>Football</option>
  <option>Volleyball</option>
  <option>Tennis</option>

</select>
  <label for="exampleInputName2">Other:</label>
  <input type="text" class="form-control" id="Other" name= "Other" placeholder="Other sport name">
 </div>
 <br></br>
 <div class="form-group">
	<label for="exampleInputName2">Trainers:</label>
	<select class="selectpicker" multiple name = "Trainers">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select>
 </div>


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


 <br></br>

 <div class="form-group">
    <label for="exampleInputName2">Address:</label>
    <input type="text" class="form-control" id="Address" name = "Address" placeholder="">
	<label for="exampleInputName2">State:</label>
    <input type="text" class="form-control" id="State" name = "State" placeholder="">
    <label for="exampleInputName2">City:</label>
    <input type="text" class="form-control" id="City" name = "City" placeholder="">
  </div>
 	<br></br>

 <div class="form-group">
	<label for="exampleInputName2">From:</label>
    <input type="date" class="form-control" id="datefrom" name = "datefrom" placeholder="date" onchange="checkDate()">
	<label for="exampleInputName2">To:</label>
    <input type="date" class="form-control" id="dateto" name = "dateto" placeholder="date" onchange="checkDateto()">

  </div>
<br></br>
 <div class="form-group">
<label>
        <input type="checkbox" name = "Day[]" value = 'Saturday'> Saturday
      </label>
	  <label>
        <input type="checkbox" name = "Day[]" value = 'Sunday'> Sunday
      </label>
	  <label>
        <input type="checkbox" name = "Day[]" value = 'Monday'> Monday
      </label>
	  <label>
        <input type="checkbox" name = "Day[]" value = 'Tuesday'> Tuesday
      </label>
	  <label>
        <input type="checkbox" name = "Day[]" value = 'Wednesday'> Wednesday
      </label>
	  <label>
        <input type="checkbox" name = "Day[]" value = 'Thursday'> Thursday
      </label>
	  <label>
        <input type="checkbox" name = "Day[]" value = 'Friday'> Friday
      </label>
  </div>
<br></br>
   <div class="form-group">
    <label for="exampleInputEmail2">Time: H:</label>
    <select class="form-control" name = "H">
  <option>00</option>
  <option>01</option>
  <option>02</option>
  <option>03</option>
  <option>04</option>
  <option>05</option>
  <option>06</option>
  <option>07</option>
  <option>08</option>
  <option>09</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
</select>
<label for="exampleInputEmail2">M:</label>
    <select class="form-control" name = "M">
  <option>00</option>
  <option>01</option>
  <option>02</option>
  <option>03</option>
  <option>04</option>
  <option>05</option>
  <option>06</option>
  <option>07</option>
  <option>08</option>
  <option>09</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
  <option>25</option>
  <option>26</option>
  <option>27</option>
  <option>28</option>
  <option>29</option>
  <option>30</option>
  <option>31</option>
  <option>32</option>
  <option>33</option>
  <option>34</option>
  <option>35</option>
  <option>36</option>
  <option>37</option>
  <option>38</option>
  <option>39</option>
  <option>40</option>
  <option>41</option>
  <option>42</option>
  <option>43</option>
  <option>44</option>
  <option>45</option>
  <option>46</option>
  <option>47</option>
  <option>48</option>
  <option>49</option>
  <option>50</option>
  <option>51</option>
  <option>52</option>
  <option>53</option>
  <option>54</option>
  <option>55</option>
  <option>56</option>
  <option>57</option>
  <option>58</option>
  <option>59</option>
</select>
  </div>

  <br>
</br>
  <div class="form-group">
      <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
    </div>
	  <div class="form-group">
	  <button type="submit" class="btn btn-danger" name = "Cancel">Cancel</button>
 </div>
</form>


<br>
</br>

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
$Category=$_POST['Category'];
$Other=$_POST['Other'];
$Trainers=$_POST['Trainers'];
$Address=$_POST['Address'];
$State=$_POST['State'];
$City=$_POST['City'];
$datefrom=$_POST['datefrom'];
$dateto=$_POST['dateto'];
$H=$_POST['H'];
$M=$_POST['M'];
$Day=$_POST['Day'];
$N=count($Day);
for($i=0; $i<$N; $i++)
{
	echo $Day[$i];
}
echo $Title;
echo $Description;
echo $Category;
echo $Other;
echo $Trainers;
echo $Address;
echo $State;
echo $City;
echo $dateto;

echo $H;
echo $M;



}

?>
