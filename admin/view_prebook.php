
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
<h1 style="margin-left: 300px;">Order Details</h1>
<?php
$sql="select * from pre_book,staff,menu where pre_book.dish_id=menu.menu_id  and staff.loginid=pre_book.login_id";
if(mysqli_num_rows($result=mysqli_query($con,$sql))>0){
    ?>

    
      
        
              <table class="table table-bordered">
               
                 
              <th class="product-price">Staff name</th>
                    <th>Product</th>
                   
                    <th class="product-price">Quantity</th>
                    <th class="product-price">Date</th>
                  
                    <th class="product-price">Time</th>
                    <th class="product-price">Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php
                $total=0;
     while($data=mysqli_fetch_array($result)){
      ?>

                  <tr>
                  <td class="product-name">
                  <h2 class="h5 text-black"><?php echo $data['name']?></h2>
                    </td>
                    <td class="product-name">
                    <img src="../assets/images/<?php echo $data['img']?>" >
                      <h2 class="h5 text-black"><?php echo $data['dish_name']?></h2>
                    </td>
                    <td><?php echo $data['quantity']?></td>
                      <td><?php echo $data['pr_date']?></td>
                    
                      <td><?php echo $data['p_type']?></td>
                     <td><?php
                     if($data['book_status']=='add'){
                       ?> <a href="approved_prebook.php?id=<?php echo $data['book_id']?>" class=" btn btn-danger">Accept</a> 
                          <a href="reject_prebook.php?id=<?php echo $data['book_id']?>" class=" btn btn-danger">Remove</a>
                    <?php  }elseif($data['book_status']=='accept'){
                       ?> accepted
                    <?php  }elseif($data['book_status']=='reject'){
                       ?> rejected
                    <?php  }
                       ?>
                  </td>
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
        <h3 style="padding:52px 250px;color:red" class=" mb-2 pb-3">Currently no request found  !</h3>
        <?php
      }
      ?>
    </div>
              

<?php
include 'footer.php';
?>
