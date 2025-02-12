<?php
include 'header.php';
?>

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 align-self-center">
                    
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="student_action.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Student Registration</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <fieldset>
                                <select name="dept" type="text" id="name" placeholder="Your department" required="">
                                <option>Select your Department</option>
                              <option value="BCA">BCA</option>
                              <option value="BBA">BBA</option>
                              <option value="BCOM">BCOM</option>
                              <option value="MBA">MBA</option>
                              </select>
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input name="admision" type="text" id="name" placeholder="Your admission no" required="">
                            </fieldset>   
                            </div>
                            <div class="col-lg-6 col-md-12 ">
                              <fieldset>
                                <select  name="year" id="time" required>
                                    <option >Select year</option>
                                    <option name="first_year" id="Breakfast">1st year</option>
                                    <option name="second_year" id="Lunch">2nd year</option>
                                    <option name="thrid_year" id="Dinner">3rd year</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input name="username" type="text" id="name" placeholder="Your user name" required="">
                            </fieldset>   
                            </div>
                            <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input name="pass" type="password" id="name" placeholder="Your password" required="">
                            </fieldset>   
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Register</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
    
<?php
include 'footer.php';
?>