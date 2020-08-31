<?php
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <!--
          We can choose whether or not to show ANY content on our pages depending on if we are logged in or not. I talk more about SESSION variables in the login.inc.php file!
          -->





          <section>
            <div class="flag1 ">
              <img src="images/TopFlag.PNG" alt="rotary-flag1" width="100%" height="100%" style="border-style: solid">
            </div>
            <h1 class = "title"> About Us</h1>
            <p class= "col-lg-12">
              Rotary is one of the largest community service organization in the world. With over 1.2 million Rotarians belong to more than 35,000 Rotary clubs. All our members are neighbors, leaders, businessmen, and problem-solvers united to take action to create lasting change in our communities.
            </p>

            <!-- text paragraphs -->
            <div class="row">
              <div class="col-xs-12 col-md-6 col-lg-6 LeftCh">
                <!-- <p>
                  <ul>
                    <li>
                      The Grayson Rotary Club meets every Wednesdays at 7:01 AM <br />
                    </li>
                    <li>
                      Fulbelli's Restaurant<br />
                    </li>
                  </ul>
                Interested in joining Rotary?<br />
                email:<br />
                </p> -->

                <p style="line-height: 200%;">
                  The Grayson Rotary Club meets every Wednesdays at <b>7:01 AM</b> <br />
          at <b> Fulbelli's Restaurant</b><br />
          Interested in joining Rotary?<br />
          email: <b>pmanley81@gmail.com</b>
                </p>



              </div>
              <div class="col-xs-12 col-md-6 col-lg-6">
                <p>
                <img src="images/thumbnail_rotary logo.jpg" alt="" width="100%" height="100%">
                  </p>
              </div>
            </div>
          </div>
          </section>




<!----------------------- HIDDEN PART---------------------- -->

          <?php
          if (!isset($_SESSION['id'])) {
            // echo '<p class="login-status">You are logged out!</p>';
          }
          else if (isset($_SESSION['id'])) {
            // echo '<p class="login-status">You are logged in!</p>';
          }
          ?>

<!-- ---------------------------------------------------------- -->

        </section>
      </div>
    </main>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
