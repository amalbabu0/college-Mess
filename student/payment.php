
<?php

include 'header.php';

?>
<br><br><br><br>
<section class="p-4 p-md-5" style="
    background-image: url(https://mdbcdn.b-cdn.net/img/Photos/Others/background3.webp);
  ">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-5">
      <div class="card rounded-3">
        <div class="card-body p-4">
          <div class="text-center mb-4">
            
          <h3>
            <?php
          $amt=$_GET['amt'];
           echo $amt;
            ?>
            </h3>
            <h6>Payment</h6>
          </div>
          <form action="checkout.php" method="post">
           

          <!-- <div class="d-flex flex-row align-items-center mb-4 pb-1">
              <img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
              <img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" />
               </div> -->
             

            <p class="fw-bold mb-4">Add new card details</p>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="text" id="formControlLgXsd" class="form-control form-control-lg"
                placeholder="Anna Doe" required/>
              <label class="form-label" for="formControlLgXsd">Cardholder's Name</label>
            </div>

            <div class="row mb-4">
              <div class="col-7">
                <div data-mdb-input-init class="form-outline">
                  <input type="text" id="formControlLgXM" class="form-control form-control-lg"
                  placeholder="1234 5678 1234 5678" pattern="[0-9]{16}" required>
                  <label class="form-label" for="formControlLgXM">Card Number</label>
                </div>
              </div>
              <div class="col-3">
                <div data-mdb-input-init class="form-outline">
                  <input type="date" id="formControlLgExpk" class="form-control form-control-lg"
                    placeholder="MM/YYYY" min="<?php echo date('Y-m-d')?>" required/>
                  <label class="form-label" for="formControlLgExpk">Expire</label>
                </div>
              </div>
              <div class="col-2">
                <div data-mdb-input-init class="form-outline">
                  <input type="password" pattern="[0-9]{3}" id="formControlLgcvv" class="form-control form-control-lg"
                    placeholder="Cvv" required/>
                  <label class="form-label" for="formControlLgcvv">Cvv</label>
                </div>
              </div>
              <div class="col-12">
                <div data-mdb-input-init class="form-outline">
                
                  <label class="form-label" for="formControlLgXM"></label>
                </div>
            </div>

            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg btn-block" type="submit">Pay Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>



<?php
include 'footer.php';
?>

