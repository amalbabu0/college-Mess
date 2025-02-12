

<?php
include '../connection.php';

include 'header.php';

?><section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our menu</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>

            <?php
$date=date('Y-m-d');
$sql="select * from menu where menu_date='$date' ";
if(mysqli_num_rows($result=mysqli_query($con,$sql))>0){
    ?>

            <div class="row">
            <?php
      while($data=mysqli_fetch_array($result)){
        ?>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                           <img src="../assets/images/<?php echo $data['img']?>" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Name: <?php echo $data['dish_name']?> &nbsp;/ Price: ₹<?php echo $data['price']?></h4>
                            <p><?php echo $data['details']?><br>
                            <?php echo $data['m_type']?>
                            </p>
                            <span>Quantity: <?php echo $data['qut']?></span><br>
                            <?php
                            if($data['qut']>'0'){
                            ?>
                           <a href="buy.php?m_id=<?php echo $data['menu_id']?>" class="btn btn-info">Buy now</a>
                      
                           <?php
                        }else{ 
                            ?>
                    <p>  Out of Stock</p>
                    <?php       } ?>
                        </div>
                    </div>
                </div>
                <?php
      }
        ?>
         <?php
      }else{?>
        <h3 style="padding:52px 250px;color:red" class=" mb-2 pb-3">Currently no menu uploaded !</h3>
        <?php
      }
      ?>
               
            </div>
        </div>
    </section>
   
<?php
include 'footer.php';
?>