
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
  <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Buy Details</strong></div>
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
<h1 style="margin-left: 300px;">Dish Details</h1>
<form class="col-md-12" action="buy_action.php?m_id=<?php echo $m_id ?>" method="post">
   <?php
   $sql="select * from menu where menu_id=$m_id";
   $result=mysqli_query($con,$sql);
   ?>

    
       <?php
      $data=mysqli_fetch_array($result);
      ?>
        
              <table class="table table-bordered">
               
                 
                    <th>Image</th>
                    <th>Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-price">Quantity</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
           

                  <tr>
                    <td class="product-thumbnail">
                      <img src="../assets/images/<?php echo $data['img']?>" width="200" height="100"alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $data['dish_name']?></h2>
                    </td>
                    <td><?php echo $data['price']?></td>
                      <td><input type="number" value="1" min="1"  max="<?php echo $data['qut']?>" name="qut"></td>

                    <td><a href="view_menu.php" class="btn btn-primary height-auto btn-sm">X</a></td>
                  </tr>
                              
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
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Add To
                      Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


<!-- <h1 style="color: red">shopping Cart is empty</h1> -->


      </div>
    </div>
              </form>

<?php
include 'footer.php';
?>