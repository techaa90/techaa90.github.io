<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                 <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
                 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

<style type="text/css">
.navbar-wrapper {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 20;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper > .container {
  padding-right: 0;
  padding-left: 0;
}
.navbar-wrapper .navbar {
  padding-right: 15px;
  padding-left: 15px;
}
.navbar-wrapper .navbar .container {
  width: auto;
}
</style>


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
        <!--   <li><a href="../bootstrap-3.3.6/bootstrap-3.3.6/docs/examples/Home/index.html">Home</a></li> -->
          <li><a href="../customer_page/customer.php">Event</a></li>

            <li><a href="../calendar_c/index.php">schedule</a></li>

        <li><a href="../contact_us/contactform.php">Contact</a></li>


             <li><a href="../About/about.php">About</a></li>
             <li><a href="../Social media/media.php">Social Media</a></li>


        <li class="#" class="Dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="../Edit profile/Edit_profile.php">Edit Profile</a></li>
             <li><a href="../Edit Profile_t/Change_p.php">Change password</a></li>


        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
    </li>
  </ul></ul>
<div id="navbar" class="navbar-collapse collapse">
  <form class="navbar-form navbar-right">

    <div id="navbar" class="navbar-collapse collapse">
      <form class="navbar-form navbar-right">
        <?php
        require_once("connection.php");
        session_start();
?>
                <button type="submit" class="btn btn-default">Welcome, <?php echo $first_name; ?></button>


<a type="submit" href="../headers/logout.php"class="btn btn-success">Log out</a>
  </form>
</div>
    </div>
  </div>
</nav>
