<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- <link rel="stylesheet" href="css/styles.css"> -->


    <!-- favacon -->
    <link rel="icon" href="images/thumbnail_rotary logo.jpg">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Lilita+One|Montaga|Seymour+One&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/5b43ae47ab.js" crossorigin="anonymous"></script>

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>



  </head>
  <body>

    <!-- Here is the header where I decided to include the login form for this tutorial. -->
    <header class="col-md-12">
      <!-- <nav class="nav-header-main"> -->







<nav class="navbar navbar-expand-lg navbar-light" class="col-lg-6 col-md-5 col-sm-4">
  <li><a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>



  <a class="header-logo" href="index.php">
          <img src="img/rotary logo.jpg" alt="rotary logo" width="90" height="80">
          </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <li>
            <a><h2 class="navBar-Logo">Flag<br>Program</h1></a>
          </li>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">MySpace</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>





        <!-- <ul> -->

<!-- <div class="">
&nbsp
</div> -->
            <!-- <li><a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>

        <li>
          <a class="header-logo" href="index.php">
          <img src="img/rotary logo.jpg" alt="rotary logo" width="90" height="80">
          </a>
        </li>

          <li>
            <a><h1 class="navBar-Logo">Flag<br>Program</h1></a>
          </li>


            <li><a href="home.php" class="sameLine">Home</a></li>
            <li><a href="index.php" class="sameLine">MySpace</a></li>
            <li><a href="about.php" class="sameLine">About me</a></li>
            <li><a href="contact.php" class="sameLine">Contact</a></li>


        </ul> -->



      </nav>
      <div class="header-login" class="col-lg-6">
        <!--
        Here is the HTML login form.
        Notice that the "method" is set to "post" because the data we send is sensitive data.
        The "inputs" I decided to have in the form include username/e-mail and password. The user will be able to choose whether to login using e-mail or username.

        Also notice that using PHP, we can choose whether or not to show the login/signup form, or to show the logout form, if we are logged in or not. We do this based on SESSION variables which I explain in more detail in the login.inc.php file!
        -->
        <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail/Username" class="rightHeaderLine">
            <input type="password" name="pwd" placeholder="Password" class="rightHeaderLine">
            <button type="submit" name="login-submit" class="rightHeaderLine">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Signup</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>

        <li><a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
      </div>


    </header>
