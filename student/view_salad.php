
<?php
include '../connection.php';

include 'header.php';

?>
            <?php
$sql="select * from menu  where m_type='other'";
if(mysqli_num_rows($result=mysqli_query($con,$sql))>0){
    ?>
<section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Desserts</h6>
                        <h2>Today's Special</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
      while($data=mysqli_fetch_array($result)){
        ?>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <img src="../assets/images/<?php echo $data['img']?>" width="200px" height="350px" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Name: <?php echo $data['dish_name']?> &nbsp;&nbsp;&nbsp;<br>Price: ₹<?php echo $data['price']?></h4>
                            <p><?php echo $data['details']?><br>
                            
                            </p>
                            <span>&nbsp;&nbsp;&nbsp;Qantitty: <?php echo $data['qut']?></span><br>
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
               
            </div>
        </div>
    </section>
    <?php
      }else{?>
        <h3 style="padding:52px 250px;color:red" class=" mb-2 pb-3">Currently no request found !</h3>
        <?php
      }
      ?>
<?php
include 'footer.php';
?>