<?php
include 'header.php';
?>

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="staff_action.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Staff Registration</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" pattern="[0-9]{10}" type="text" id="phone" placeholder="Phone Number*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <select name="dpet" type="text" id="name" placeholder="Your department" required="">
                                <option>Select your Department</option>
                              <option value="BCA">BCA</option>
                              <option value="BBA">BBA</option>
                              <option value="BCOM">BCOM</option>
                              <option value="MBA">MBA</option>
                              </select>
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <label>&nbsp;ID proof</label>
                                <input name="proof" type="file" id="name" placeholder="" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <fieldset>
                            <label>&nbsp;</label>

                                <select name="post" type="text" id="name" placeholder="Your post" required>
                              <option>Select your Post</option>
                              <option value="HOD">HOD</option>
                              <option value="Professor">Professor</option>
                              <option value="Ast.Professor">Ast.Professor</option>
                              <option value="Non Teaching Staff">Non Teaching Staff</option>
                              </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="username" type="text" id="name" placeholder="Your username" required>
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="pass" type="password" id="name" placeholder="Your password" required>
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