
<?php

include 'header.php';
include '../connection.php';

$log=$_SESSION['loginid'];
?>
  
<div id="page-inner" >

</div>


<div class="bg-light py-3">
<div class="container">
<div class="row">
  <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"> cart Details</strong></div>
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
<br>
<br>
<div class="row">
<h1 style="margin-left: 300px;">Order Details</h1>
<?php
$sql="select * from booking,menu,studenT where booking.menu_id=menu.menu_id and student.loginid=booking.cust_id and booking.p_status='booked'";
if(mysqli_num_rows($result=mysqli_query($con,$sql))>0){
    ?>

    
      
        
              <table class="table table-bordered">
               
                 
                    <th>Dish</th>
                    <th>Product</th>
                    <th>Student</th>
                    <th class="product-price">Price</th>
                    <th class="product-price">Quantity</th>
                    <th class="product-price">Price</th>
                    <th class="product-price">Feedback</th>
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
                    <td><?php echo $data['name']?></td>
                      <td><?php echo $data['price']?></td>
                      <td><?php echo $data['b_qut']?></td>
                      <td><?php echo $data['sum']?></td>
                     <td><?php
                     if($data['p_status']=='booked'){
                      $b=$data['book_id'];
                      $a=$data['loginid'];
                      $str="select * from feedback where book_id=$b and cust_id='$a'";
                      if(mysqli_num_rows($m=mysqli_query($con,$str))>0){?>
                        <a href="feedback.php?b_id=<?php echo $data['book_id']?>" class="btn btn-info btn-sm">feedback</a>
                        <?php
                      }else{
                       
                  
                  }}?></td>
                  </tr>
                  <?php
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
                  
                </div>
              </div>
            </div>
          </div>
         
        </div>


<!-- <h1 style="color: red">shopping Cart is empty</h1> -->


      </div>



      <?php
      }else{?>
        <h3 style="padding:52px 250px;color:red" class=" mb-2 pb-3">Currently no request found !</h3>
        <?php
      }
      ?>
    </div>
              

<?php
include 'footer.php';
?>
