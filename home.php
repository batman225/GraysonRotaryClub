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

            <!-- first picture -->
            <div class="flag1 ">
              <img src="images/GraysonRotary-FBGraphics-02.png" alt="rotary-flag1" width="100%" height="100%" style="border-style: solid">
            </div>

            <!-- title -->
            <div>
              <h1 class="title"> Rotary's Flag Program</h1>

              <!-- welcome message -->
              <p>
                Welcome, to the flag program. The Grayson Rotary Club invites you to join our holiday flag program to allow you to proudly display the American Flag in front of your property.
                For a nominal annual fee of $40.00, volunteers and Rotarian members will install as well as remove flags at the front of your house or business for these five majors holidays list down bellow.
              </p>

              <!-- text paragraphs -->
              <div class="row">
                <div class="col-xs-12 col-md-8 columnleft">
                  <ul>
                    <li>
                      Memorial Day
                    </li>
                    <li>
                      Flag Day (July 14th)
                    </li>
                    <li>
                      Independence Day
                    </li>
                    <li>
                      Labor Day
                    </li>
                    <li>
                      veteran's Day
                    </li>
                  </ul>
                </div>
                <div class="col-xs-12 col-md-4 columnright">
                  <p>
                  </p>
                </div>
              </div>
            </div>


            <div class="textNumb2">
              <h1 class="messag" style="color: #192965;">WE DO ALL THE WORK FOR YOU.</h1>
              <p>
                Upon joining the program, we will insert a plastic PVC sleeve with a cap in the ground near
                your front curb. No brackets or fixtures are attached to your home. On each of the 5
                holidays, a 3’ x 5’ United States Flag mounted on a 10-foot metal pole will be placed in the
                sleeve. The flags are placed in front of your home before each holiday and removed shortly
                after. We display the flags, store and maintain them. The flags and the sleeves remain the
                property of the Grayson County Rotary Club.
                <br />
                Proceeds benefit the Grayson County Rotary Scholarship Foundation, Boy Scout Troop
                XV and local charities supported by the Rotary Club of Grayson County.
              </p>
            </div>

            <!-- second picture -->
            <div class="flag2">
              <img src="images/buttonFlag.PNG" alt="rotary-flag1" width="100%" height="100%" style="border-style: solid">
            </div>
          </section>











          <!-- -----//PART THAT NEED TO BE HIDDEN -------- -->
          <?php
          if (!isset($_SESSION['id'])) {
            // echo '<p class="login-status">You are logged out!</p>';
          }
          else if (isset($_SESSION['id'])) {
            // echo '<p class="login-status">You are logged in!</p>';
          }

          ?>
           <!-- ---------------------------------------------------- -->





        </section>
      </div>
    </main>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
