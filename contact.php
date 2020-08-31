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

          








          <div class="flag1 ">
            <img src="images/TopFlag.PNG" alt="rotary-flag1" width="100%" height="100%" style="border-style: solid">


          </div>


          <!-- middle part content -->
          <div class="container-contact100" style="padding-top: 5%;">
            <div class="wrap-contact100">
              <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                  Send Us A Message
                </span>

                <label class="label-input100" for="first-name">Tell us your name *</label>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                  <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
                  <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                  <input class="input100" type="text" name="last-name" placeholder="Last name">
                  <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="email">Enter your email *</label>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                  <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                  <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="phone">Enter phone number</label>
                <div class="wrap-input100">
                  <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
                  <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="message">Message *</label>
                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                  <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                  <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                  <button class="contact100-form-btn">
                    Send Message
                  </button>
                </div>
              </form>

              <div class="contact100-more flex-col-c-m" style="background-image: url('images/RedesignL.PNG'); background-size: auto;">
                <div class="flex-w size1 p-b-47">
                  <div class="txt1 p-r-25">
                    <span class="lnr lnr-map-marker"></span>
                  </div>

                  <div class="flex-col size2">
                    <span class="txt1 p-b-20">
                      Address
                    </span>

                    <span class="txt2">
                    115 S. Travis Sherman, TX 75090
                    </span>
                  </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                  <div class="txt1 p-r-25">
                    <span class="lnr lnr-phone-handset"></span>
                  </div>

                  <div class="flex-col size2">
                    <span class="txt1 p-b-20">
                      Lets Talk
                    </span>

                    <span class="txt3">
                      +1 800-123-6879
                    </span>
                  </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                  <div class="txt1 p-r-25">
                    <span class="lnr lnr-envelope"></span>
                  </div>

                  <div class="flex-col size2">
                    <span class="txt1 p-b-20">
                      General Support
                    </span>

                    <span class="txt3">
                      contact@example.com
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>



















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
