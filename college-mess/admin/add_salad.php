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
                        <form id="contact" action="menu_action.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Add Dessert</h4>
                            </div>
                            <div class="col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-sm-12">
                              <fieldset>
                              <input name="m_date" type="hidden"  placeholder="Date" >
                            </fieldset>
                              </div>
                              <div class="col-sm-12">
                              <fieldset>
                                <input type="hidden" name="type" value="other" id="name" required="">
                                
                                 
                              </fieldset>
                            </div>
                           
                            <div class="col-sm-12">
                              <fieldset>
                                <input name="rate" type="text" id="phone" placeholder="Price*" required="">
                              </fieldset>
                            </div>
                            <div class="col-sm-12">
                              <fieldset>
                                <textarea name="details"  id="name" placeholder="Details" required=""></textarea>
                              </fieldset>
                            </div>
                           
                            <div class="col-sm-12">
                            <fieldset>
                            <label>&nbsp;img</label>
                                <input name="img" type="file" id="name" placeholder="Your post" required>
                              </fieldset>
                            </div>
                            
                            <div class="col-sm-12">
                            <fieldset>
                          
                                <input name="qut" type="number" id="name" placeholder="Quantity" min="1" required>
                              </fieldset>
                            </div>
                            
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Submit</button>
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