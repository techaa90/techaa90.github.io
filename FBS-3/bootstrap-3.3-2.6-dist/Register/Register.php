<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Register</title>
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
function validatephone(phone)
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}
// validates text only
function Validate(txt) {
    txt.value = txt.value.replace(/[^a-zA-Z-'\n\r. ]+/g,'');
}
// validate email
function email_validate(email)
{

var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;
var str = "Email address is not valid yet.";
var result = str.fontcolor("red");
var str1 = "Thanks, you have entered a valid Email address!";
var result1 = str.fontcolor("green");

    if(regMail.test(email) == false)
    {
    document.getElementById("status").innerHTML    = result;
    }
    else
    {
    document.getElementById("status").innerHTML	= result1;
    }
}
// validate date of birth
function dob_validate(dob)
{
var regDOB = /^(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})$/;

    if(regDOB.test(dob) == false)
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='warning'>DOB is only used to verify your age.</span>";
    }
    else
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='valid'>Thanks, you have entered a valid DOB!</span>";
    }
}
// validate address
function add_validate(address)
{


var regAdd =  /^(?=.*\d)[a-zA-Z\s\d\/]+$/;

    if(regAdd.test(address) == false)
    {
    document.getElementById("statusAdd").innerHTML	= "<span class='warning'>Address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("statusAdd").innerHTML	= "<span class='valid'>Thanks, Address looks valid!</span>";
    }
}

window.onload = function () {
            var ddl = document.getElementById('mycontainer').getElementsByTagName("select")[0];
            for (var i = 1; i <= 100; i++) {
                var theOption = new Option;
                theOption.text = i;
                theOption.value = i;
                ddl.options[i] = theOption;
            }
        };



var dropdownIndex = document.getElementById('selectid').selectedIndex;
if(dropdownIndex = 0) // 0 means first, it array
   alert("Please Select any Value !!");





</script>

</head>
<body>

<?php

include("../headers/header.html");

 ?>


 <!DOCTYPE html>
 <html>
 <body>

   <p> <h5>Welocme Dear Customer ... </h5> <p>
     <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#">Customer</a></li>
      <li role="presentation" ><a href="Register_t.php">Trainer</a></li>

    </ul>



 </body>
 </html>
<br>


  <br>

<div class="container">
	<div class="row">
        <div class="col-md-6">

            <form action='Register.php' method='POST' id="fileForm" role="form" >

			 <div class="form-group">
                <label for="firstname"><span class="req">* </span> First name: </label>
				<br>
                    <input class="form-control" type="text" name="firstname" id = "txt" onkeyup = "Validate(this)" required />
                        <div id="errFirst"></div>
            </div>
            <div class="form-group">
                <label for="lastname"><span class="req">* </span> Last name: </label>
				<br>
                    <input class="form-control" type="text" name="lastname" id = "txt" onkeyup = "Validate(this)"  required />
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
			        <br>
                    <input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="not used for marketing"/>
            </div>

			 <div class="form-group">
                <label for="State" required><span class="req">* </span> Age: </label>
				<br>

		            <div id="mycontainer">

                   <select id="selectid" name="AgeDropdown" class="AgeDropdown" runat="server" required>
                  <option value="">None</option>

                  <select required>

                   </select>

               </div>

<br>

				   <label for="gender" required><span class="req" >* </span> Gender: </label>
				   <br>
					<div class="form-group">
					<input value="Male"type="radio" class="" name="reg_gender" id="male" onkeyup = "add_validate(this.value)" required />
					<label for="male">male</label>
					<input value ="Female"type="radio" class="" name="reg_gender" id="female" onkeyup = "add_validate(this.value)" required />
					<label for="female">female</label>
					</div>



			 <div class="form-group">
                <label for="Address"><span class="req">* </span> Address: </label>
				<br>
                    <input class="form-control" type="text" name="Address" id = "txt" onkeyup = "add_validate(this.value)" required />
                        <div id="errLast"></div>
            </div>
			<div class="form-group">
                <label for="City"><span class="req">* </span> City: </label>
				<br>
                    <input class="form-control" type="text" name="City" id = "txt" onkeyup = "add_validate(this.value)"  required />
                        <div id="errLast"></div>
            </div>

			 <div class="form-group">

                <label for="State"><span class="req">* </span> State: </label>


				<br>
        <form action="demo_form.asp" >


        <select required name="state">

          <option value="">None</option>
          <option value="AL">Alabama</option>
        	<option value="AK">Alaska</option>
        	<option value="AZ">Arizona</option>
        	<option value="AR">Arkansas</option>
        	<option value="CA">California</option>
        	<option value="CO">Colorado</option>
        	<option value="CT">Connecticut</option>
        	<option value="DE">Delaware</option>
        	<option value="DC">District Of Columbia</option>
        	<option value="FL">Florida</option>
        	<option value="GA">Georgia</option>
        	<option value="HI">Hawaii</option>
        	<option value="ID">Idaho</option>
        	<option value="IL">Illinois</option>
        	<option value="IN">Indiana</option>
        	<option value="IA">Iowa</option>
        	<option value="KS">Kansas</option>
        	<option value="KY">Kentucky</option>
        	<option value="LA">Louisiana</option>
        	<option value="ME">Maine</option>
        	<option value="MD">Maryland</option>
        	<option value="MA">Massachusetts</option>
        	<option value="MI">Michigan</option>
        	<option value="MN">Minnesota</option>
        	<option value="MS">Mississippi</option>
        	<option value="MO">Missouri</option>
        	<option value="MT">Montana</option>
        	<option value="NE">Nebraska</option>
        	<option value="NV">Nevada</option>
        	<option value="NH">New Hampshire</option>
        	<option value="NJ">New Jersey</option>
        	<option value="NM">New Mexico</option>
        	<option value="NY">New York</option>
        	<option value="NC">North Carolina</option>
        	<option value="ND">North Dakota</option>
        	<option value="OH">Ohio</option>
        	<option value="OK">Oklahoma</option>
        	<option value="OR">Oregon</option>
        	<option value="PA">Pennsylvania</option>
        	<option value="RI">Rhode Island</option>
        	<option value="SC">South Carolina</option>
        	<option value="SD">South Dakota</option>
        	<option value="TN">Tennessee</option>
        	<option value="TX">Texas</option>
        	<option value="UT">Utah</option>
        	<option value="VT">Vermont</option>
        	<option value="VA">Virginia</option>
        	<option value="WA">Washington</option>
        	<option value="WV">West Virginia</option>
        	<option value="WI">Wisconsin</option>
        	<option value="WY">Wyoming</option>
                           </select>

            </div>
			<div class="form-group">
                <label for="Zipcode"><span class="req">* </span> Zip code: </label>
				<br>
                    <input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" />
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: <small>This will be your login user name</small>  </label>
				<br>
                    <input class="form-control" required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />
                        <div class="status" id="status"></div>
<br>
            <div class="form-group">
                <label for="password"><span class="req">* </span> Password: </label>
				<br>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" /> </p>
                <label for="password"><span class="req">* </span> Password Confirm: </label>
				<br>
                    <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
            </div>



          </div>

          </div>






            <div class="form-group">

                <?php //$date_entered = date('m/d/Y H:i:s'); ?>
                <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
                <input type="hidden" value="0" name="activate" />
                <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">  <label for="terms">I agree with the <a href="terms.php" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
            </div>


			<br></br>
      <div class="form-group">
          <button type="submit" class="btn btn-primary" name ="submit">Submit</button>


        <button type="submit" class="btn btn-danger" name = "Cancel">Cancel</button>

            </div>


                      <h5>You will receive an email to complete the registration and validation process. </h5>
                      <h5>Be sure to check your spam folders. </h5>
            </fieldset>
            </form><!-- ends register form -->

<script type="text/javascript">
  document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");

</script>
        </div><!-- ends col-6 -->

	</div>

</div>
</div>
<?php

echo '<br/>';

include("../headers/footer.html");

 ?>
</div>


<?php

	require_once "connection.php";
	if(isset($_POST["submit"])){
	$firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
	$phonenumber=$_POST['phonenumber'];
	$Age=$_POST['AgeDropdown'];
	$Address=$_POST['Address'];
	$City=$_POST['City'];
	$state=$_POST['state'];
	$email = $_POST['email'];
	$password = $_POST['password'];
  $photo = $_POST['photo'];
  $education = $_POST['Description'];
  $resume=$_POST['resume'];
    $reg_gender = $_POST['reg_gender'];

	//echo $reg_gender;
  $query = "CALL check_email('$email')";

       //$query = "SELECT * FROM `members_login` WHERE `member_Email` ='$Email'";
       $result = mysqli_query($connection, $query);
       $row = mysqli_fetch_assoc($result);
       $check =  $row["found"];
      if($check == 1)
      {
        include("../Register/no.html");
        }
      else
       {
         $dbhost = "localhost";
         $dbname  = 'mydb';
         $dbuser  = 'root';
         $dbpass  = 'root';
         $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
         $query = "CALL add_member('$firstname','$lastname','$email','$Age','$password','$password','$Address','$state','$zipcode','$City','$phonenumber','$reg_gender')";
         $result = mysqli_query($connection, $query);

        if($result)
       {
         include("../Register/yes.html");


         header("");
      }
    }



	}


 ?>
