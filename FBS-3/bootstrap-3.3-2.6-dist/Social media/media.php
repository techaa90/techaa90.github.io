
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<title>Profile</title>
<link rel="STYLESHEET" type="text/css" href="S.CSS" />
<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
<link rel="STYLESHEET" type="text/css" href="../css/bootstrap.min.css" />

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

 include("../headers/header.html");

             }

           ?>




<div class="container">


    <div class="onl_login">
      <br>
		<div class="row onl_row-sm-offset-3 onl_socialButtons">
          <div class="col-xs-2 col-sm-2">
            <a href="https://www.facebook.com/findaballer/" class="btn btn-lg btn-block onl_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fa fa-facebook fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="https://twitter.com/findaballer" class="btn btn-lg btn-block onl_btn-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fa fa-twitter fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="https://plus.google.com/+Findaballer/videos" class="btn btn-lg btn-block onl_btn-google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus">
              <i class="fa fa-google-plus fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
    </div><br>

    <div class="row onl_row-sm-offset-3 onl_socialButtons">
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-github" data-toggle="tooltip" data-placement="top" title="GitHub">
              <i class="fa fa-github fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-soundcloud" data-toggle="tooltip" data-placement="top" title="SoundCloud">
              <i class="fa fa-soundcloud fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-steam" data-toggle="tooltip" data-placement="top" title="Steam">
              <i class="fa fa-steam fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
    </div><br>
    <div class="row onl_row-sm-offset-3 onl_socialButtons">
          <div class="col-xs-2 col-sm-2">
            <a href="https://www.pinterest.com/findaballer/" class="btn btn-lg btn-block onl_btn-pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest">
              <i class="fa fa-pinterest fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-vimeo" data-toggle="tooltip" data-placement="top" title="Vimeo">
              <i class="fa fa-vimeo-square fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-lastfm" data-toggle="tooltip" data-placement="top" title="Lastfm">
              <i class="fa fa-lastfm fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
    </div><br>
    <div class="row onl_row-sm-offset-3 onl_socialButtons">
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-yahoo" data-toggle="tooltip" data-placement="top" title="Yahoo">
              <i class="fa fa-yahoo fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-vk" data-toggle="tooltip" data-placement="top" title="VKontakte">
              <i class="fa fa-vk fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-spotify" data-toggle="tooltip" data-placement="top" title="Spotify">
              <i class="fa fa-spotify fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
    </div><br>
    <div class="row onl_row-sm-offset-3 onl_socialButtons">
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-linkedin" data-toggle="tooltip" data-placement="top" title="LinkedIn">
              <i class="fa fa-linkedin fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-stumbleupon" data-toggle="tooltip" data-placement="top" title="Stumble Upon">
              <i class="fa fa-stumbleupon fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
          <div class="col-xs-2 col-sm-2">
            <a href="#" class="btn btn-lg btn-block onl_btn-tumblr" data-toggle="tooltip" data-placement="top" title="Tumblr">
              <i class="fa fa-tumblr fa-2x"></i>
              <span class="hidden-xs"></span>
            </a>
          </div>
    </div>







				</form>
			</div>
    	</div>




        <?php

echo '<br/>';

        include("../headers/footer.html");

         ?>


        </body>


        </html>
        <script>


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
