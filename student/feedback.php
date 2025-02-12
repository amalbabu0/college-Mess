


<?php

include 'header.php';

$b_id=$_GET['b_id'];
?>
   <form method="post" action="feedback_action.php?book_id=<?php echo $b_id ?>">
    <style type="text/css">
    label{
        color: white;
    }

    </style>
   
<div class="site-blocks-cover" style="background-image: url({% static 'images/hero_1.jpg' %}); height: 900px">
      <div class="container">
   
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>

                    <div class="section-heading">
                        <center><h3>Add Feedbacks</h3></center>
                    </div>

           
                <div class="p-3 p-lg-5 border">


              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" style="color: black;" class="text-black">Feedback/Suggestions<span class="text-danger"></span> </label>
                  <input type="text" class="form-control" id="c_companyname" placeholder="Feedback/Suggestions" name="com" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" style="color: black;" class="text-black">Select a Rating<span class="text-danger"></span></label>
                    <select class="form-control" required name="rate">
                        <option>Select a Rating</option>
                        <option>⭐⭐⭐⭐⭐</option>
                        <option>⭐⭐⭐⭐</option>
                        <option>⭐⭐⭐</option>
                        <option>⭐⭐</option>
                        <option>⭐</option>
                    </select>
              
                </div>
              </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <button type="submit" value="Register" class="btn btn-info">Post</button>
                </div>
              </div>
            </div>





            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </form>






<?php
include 'footer.php';
?>