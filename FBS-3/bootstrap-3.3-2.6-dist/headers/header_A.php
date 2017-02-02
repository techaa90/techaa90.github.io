<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                 <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
                 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
                 <script src="/assets/bootstrap-dropdown.js?body=1" type="text/javascript"></script>
                 <script src="js/bootstrap.min.js"></script>

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
          <li><a href="../admin_page/admin.php">Event</a></li>


            <li class="#" class="Dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My tools <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="../admin_page/CreateEvent.php">Create Event</a></li>
                 <li><a href="../Delete services/delete.php">Delete Event</a></li>
                 <li><a href="../assign Trainer/Request_T.php">Assign Trainer to Event</a></li>
               </ul>
             </li>

              <li><a href="../admin_page/Approve.php">Requests</a></li>

        <li><a href="../fullcalendar/index.php">schedule</a></li>




             <li><a href="../About/about.php">About</a></li>
             <li><a href="../Social media/media.php">Social Media</a></li>



        <li class="#" class="Dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="../Edit profile/Edit_profile.php">Edit Profile</a></li>
             <li><a href="../Edit Profile_t/Change_p.php">Change password</a></li>



          </ul>
        </li>
      </ul>
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
