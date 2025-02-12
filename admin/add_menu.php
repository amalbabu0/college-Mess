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
                                <h4>Add menu</h4>
                            </div>
                            <div class="col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Dish Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-sm-12">
                              <fieldset>
                              <input name="m_date" type="date" min="<?php echo date('Y-m-d')?>"  placeholder="Date" required="">
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
                                <select name="type" type="text" id="name" required="">
                                <option >Time </option>
                                  <option value="breakfast ">Breakfast </option>
                                  <option value="lunch ">Lunch </option>
                                  <option value="dinner">Dinner </option>
                                </select>
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