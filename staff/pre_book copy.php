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
                        <form id="contact" action="prebook_action.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>add menu</h4>
                            </div>
                            <div class="col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="dish Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-sm-12">
                              <fieldset>
                              <input name="m_date" type="date" min="<?php echo date('Y-m-d')?>"  placeholder="date" required="">
                            </fieldset>
                            </div>
                            
                            <div class="col-sm-12">
                              <fieldset>
                                <textarea name="details"  id="name" placeholder="details" required=""></textarea>
                              </fieldset>
                            </div>
                           
                            <div class="col-sm-12">
                           
                            <div class="col-sm-12">
                              <fieldset>
                                <select name="type" type="text" id="name" required="">
                                <option >time </option>
                                  <option value="breakfast ">breakfast </option>
                                  <option value="lunch ">lunch </option>
                                  <option value="dinner">dinner </option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-sm-12">
                            <fieldset>
                          
                                <input name="qut" type="number" id="name" placeholder="qantity" min="1" required>
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