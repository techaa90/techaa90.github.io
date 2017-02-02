

<?php
require_once("connection.php");
session_start();
if ($_SESSION['username'])
	      {
            $nameServeci=$_GET['view_details1'];

            $Title=$_GET['Title'];

         $username= $_SESSION['username'];
         $query = "CALL member_info('$username')";
     		$result = mysqli_query($connection, $query);
     		$row = mysqli_fetch_assoc($result);
     		$first_name=$row["member_first_name"];
        $last_name=$row["member_Last_name"];
        $member_id=$row["member_id"];
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
             }
             else{



             }

           ?>

           <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
           <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

           <head>
           <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
           <title>Request</title>
           <link rel="STYLESHEET" type="text/css" href="contact.css" />
           <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
           <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
           <link rel="STYLESHEET" type="text/css" href="../css/bootstrap.min.css" />



           </head>
         <body>
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

 function Validate(txt) {
     txt.value = txt.value.replace(/[^a-zA-Z-'\n\r. ]+/g,'');
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


<h3>Request </h3>
<br>
<form class="form-inline" action='Request.php' method='POST' id="FileForm" role="form">
  <div class="form-group">
    <label for="exampleInputName2">Event name:</label>
    <br>
    <input type="text"  readonly class="form-control" id="Title" name="Title" value="<?php echo $nameServeci;?>"placeholder="Event name">
  </div>
 	<br></br>

	<div class="form-group">
    <label for="exampleInputName2">Comment:</label>
    <br>
    <input type="text" class="form-control" id="txt" name="Description"placeholder="Comment" onkeyup = "Validate(this)"  required>
    <div id="errLast"></div>

  </div>
 	<br></br>






 <div class="form-group">
	<label for="exampleInputName2">Date:</label>
  <br>
    <input type="date" class="form-control" id="txt"  onchange= "checkDate()"name = "datefrom" placeholder="date" onkeyup = "Validate(this)"  required>
    <div id="errLast"></div>  </div>
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



<div>
</div>
  <br>

  <div class="form-group">
   <label for="exampleInputEmail2">How many hours: H:</label>
   <select class="form-control" name = "Hor">
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

</div>

  <br><br><br>

  <div class="form-group">
      <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
    </div>
	  <div class="form-group">
	  <button type="submit" class="btn btn-danger" name = "Cancel">Cancel</button>
 </div>

 <br>

 <?php

 echo '<br/>';

 include("../headers/footer.html");

  ?>


</form>

      </div></div>


      <!-- FOOTER -->





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
$username= $_SESSION['username'];
//echo $member_id;
$Title=$_POST['Title'];
$Description=$_POST['Description'];
$datefrom=$_POST['datefrom'];
$H=$_POST['H'];
$M=$_POST['M'];
$S="00";
$manyH=$_POST['Hor'];
$Title_with_time=$_SESSION['username']. '\r\n'   .$_POST['Title'] . '\r\n'   . $_POST['Description']. '\r\n' . $_POST['Hor'].' H';
$datetime= $_POST['datefrom'].' '.$_POST['H'].':'.$_POST['M'].':'.$S;
$dbhost = "localhost";
$dbname  = 'mydb';
$dbuser  = 'root';
$dbpass  = 'root';
$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$query = "CALL request('$Title_with_time','$datetime','$Description','$manyH','$member_id')";
     $result = mysqli_query($connection, $query);

echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';
echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';
echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';echo '<br/>';
     //echo $query;

      if($result)
     {
       echo"<script>alert('Your request has been submitted successfully')</script>";


    }



}








?>
