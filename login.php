<!-- ***** Reservation Us Area Starts ***** -->
<?php
include 'header.php';
?>
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class=" col"></div>
            <div class="col-lg-6 align-self-center" >
                <div class="contact-form">
                    <form id="contact" action="login_action.php" method="post">
                      <div class="row">
                        <div class="col-lg-12">
                            <h4>Login</h4>
                        </div>
                        <div class="col-sm-12">
                          <fieldset>
                            <input name="username" type="text" id="username" placeholder="username" required="">
                          </fieldset>
                        </div>
                        <div class="col-sm-12">
                          <fieldset>
                            <input name="password" type="password" id="password" placeholder="password" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Login</button>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                        <br><p style="text-align: center; color:black; margin-bottom: 0;">Don't have an account?<a href="index.php"> Sign up</a></p>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
            <div class=" col"></div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>