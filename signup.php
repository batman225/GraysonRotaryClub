<?php
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <h1>Signup</h1>

          <form class="form-signup" action="includes/signup.inc.php" method="post">


            <!-- //NEW PIECE -->
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">

            <input type="text" name="firstNUsers" placeholder="First Name">
            <input type="text" name="lastNUsers" placeholder="Last Name">
            <input type="text" name="cityUsers" placeholder="city">
            <input type="text" name="zipcodeUsers" placeholder="Zip Code">
            <input type="text" name="addressUsers" placeholder="Address">
            <!-- //PIECE -->



            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup</button>
          </form>
          <!--
          NOTES FOR ME BEFORE DOING PHP!
          <form class="form-signup" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup</button>
          </form>
          -->
        </section>
      </div>
    </main>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
