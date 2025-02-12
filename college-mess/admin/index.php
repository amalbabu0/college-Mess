<?php
include '../connection.php';

include 'header.php';
?>

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>CollegeMess</h4>
                            <h6>~admin</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->'
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <?php
$sql="select * from menu  where m_type!='other'";
if(mysqli_num_rows($result=mysqli_query($con,$sql))>0){
    ?>
<section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h2><i>My Menu</h2>
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
                            <img src="../assets/images/<?php echo $data['img']?>" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Name: <?php echo $data['dish_name']?> &nbsp;&nbsp;&nbsp;<br>Price: ₹<?php echo $data['price']?></h4>
                            <p><?php echo $data['details']?><br>
                            <?php echo $data['m_type']?>
                            </p>
                            <span>Date: <?php echo $data['menu_date']?>&nbsp;&nbsp;&nbsp;<br>Qantitty: <?php echo $data['qut']?></span><br>
                            <a href="update.php?m_id=<?php echo $data['menu_id']?>" class="btn btn-info btn-sm">Update</a>
                      
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