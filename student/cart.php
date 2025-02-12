
<?php

include 'header.php';
include '../connection.php';
$m_id=$_GET['m_id'];
$log=$_SESSION['loginid'];
?>
  
<div id="page-inner" >

</div>


<div class="bg-light py-3">
<div class="container">
<div class="row">
  <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart Details</strong></div>
</div>
</div>
</div>

<div class="site-section">
<div class="container">

<div class="row">
  <div class="col-lg-6">

  </div>
  <div class="col-lg-6">

  </div>
</div>

<div class="row">
<h1 style="margin-left: 300px;">Cart Details</h1>
   <?php
   $sql="select * from menu,booking where booking.menu_id=menu.menu_id and booking.cust_id='$log' and booking.p_status='added to cart'";
   if(mysqli_num_rows($result=mysqli_query($con,$sql))>0){
   ?>

    
      
        
              <table class="table table-bordered">
               
                 
                    <th>Image</th>
                    <th>Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-price">Quantity</th>
                    <th class="product-price">Total</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php
                $total=0;
     while($data=mysqli_fetch_array($result)){
      ?>

                  <tr>
                    <td class="product-thumbnail">
                      <img src="../assets/images/<?php echo $data['img']?>" width="200" height="100"alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $data['dish_name']?></h2>
                    </td>

                      <td><?php echo $data['price']?></td>
                      <td><?php echo $data['b_qut']?></td>
                      <td><?php echo $data['sum']?></td>
                    
                  </tr>
                  <?php  $total=$total+$data['sum'];
     }
      ?>       
                </tbody>
              </table>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12">
                    <a href="payment.php?amt=<?php echo $total?>" class="btn btn-primary btn-lg btn-block" type="submit">Proceed To
                      Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 pl-10">
          </div>
          <div class="col-md-3 ">

             <label class="text-muted font-weight-normal m-0">Total price</label>
              <div class="text-large"><strong>₹<?php echo $total?></strong></div>
          </div>
        </div>


<!-- <h1 style="color: red">shopping Cart is empty</h1> -->

<?php
      }else{?>
        <h3 style="padding:52px 250px;color:red" class=" mb-2 pb-3">Currently no request found !</h3>
        <?php
      }
      ?>
      </div>
    </div>
              </form>

<?php
include 'footer.php';
?>