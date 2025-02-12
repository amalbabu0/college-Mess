<?php
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
                            <h6>WHAT'S YOUR TASTE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="view_menu.php">Make An Order</a>
                            </div>
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
                          <!-- Item -->
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Klassy Cafe is a charming and inviting coffee shop located in the bustling heart of downtown. With its modern decor and cozy atmosphere, it serves as a perfect retreat for coffee enthusiasts, casual diners, and remote workers alike. The cafe prides itself on offering a diverse menu that features specialty coffee made from locally sourced beans, alongside a selection of fresh pastries, gourmet sandwiches, and healthy salads. Klassy Cafe not only provides a comfortable space with free Wi-Fi but also fosters community engagement by hosting local art displays and live music events. Its mission is to create a welcoming environment where patrons can enjoy high-quality food and beverages while connecting with others in the community.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="assets/images/chefs-01.jpg" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Randy Walker</h4>
                            <span>Pastry Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="assets/images/chefs-02.jpg" alt="Chef #2">
                        </div>
                        <div class="down-content">
                            <h4>David Martin</h4>
                            <span>Cookie Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <img src="assets/images/chefs-03.jpg" alt="Chef #3">
                        </div>
                        <div class="down-content">
                            <h4>Peter Perkson</h4>
                            <span>Pancake Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
 
    <?php
include '../connection.php';
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
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Menu</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="left-list"> 
                                                <?php
                                                     $date=date('Y-m-d');
                                                     $sq="select * from menu where menu_date='$date' and m_type='breakfast' ";
                                                     $res=mysqli_query($con,$sq);
                                                    while($p=mysqli_fetch_array($res)){ ?>
                                                       <div class="col-lg-12">
                                                       <div class="tab-item"> 
                                                        <img src="../assets/images/<?php echo $p['img']?>" alt="">
                                                            <h4><?php echo $p['dish_name']?></h4>
                                                            <p><?php echo $p['details']?>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                            <a href="buy.php?m_id=<?php echo $p['menu_id']?>" > <h6>₹<?php echo $p['price']?></h6></a>
                                                            </div>
                                                            </div>
                                                            </div> 
                                                    <?php }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="left-list"> 
                                                <?php
                                                     $date=date('Y-m-d');
                                                     $sq="select * from menu where menu_date='$date' and m_type='lunch' ";
                                                     $res=mysqli_query($con,$sq);
                                                    while($p=mysqli_fetch_array($res)){ ?>
                                                       <div class="col-lg-12">
                                                       <div class="tab-item"> 
                                                        <img src="../assets/images/<?php echo $p['img']?>" alt="">
                                                            <h4><?php echo $p['dish_name']?></h4>
                                                            <p><?php echo $p['details']?>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do</p>
                                                            <div class="price">
                                                            <a href="buy.php?m_id=<?php echo $p['menu_id']?>" >    <h6>₹<?php echo $p['price']?></h6></a>
                                                            </div>
                                                            </div>
                                                            </div>                                                       
                                                    <?php }
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="left-list"> 
                                                <?php
                                                     $date=date('Y-m-d');
                                                     $sq="select * from menu where menu_date='$date' and m_type='dinner' ";
                                                     $res=mysqli_query($con,$sq);
                                                    while($p=mysqli_fetch_array($res)){ ?>
                                                       <div class="col-lg-12">
                                                       <div class="tab-item"> 
                                                   
                                                        <img src="../assets/images/<?php echo $p['img']?>" alt="">
                                                            <h4><?php echo $p['dish_name']?></h4>
                                                            <p><?php echo $p['details']?>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do</p>
                                                            <div class="price">
                                                            <a href="buy.php?m_id=<?php echo $p['menu_id']?>" >    <h6>₹<?php echo $p['price']?></h6></a>
                                                            </div>
                                                            </div>
                                                            </div>
                                                    <?php }
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                           
                                        </div>
                                    </div>
                                </article>  
                                 
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <style>/* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Body styling */
body {
    background-color: #f4f4f9;
    padding: 20px;
    color: #333;
    overflow-x: hidden;
}

/* Section heading styling */
.section-heading h6 {
    font-size: 20px;
    color: #4CAF50;
    text-transform: uppercase;
    font-weight: bold;
    margin-bottom: 5px;
}

.section-heading h2 {
    font-size: 32px;
    color: #333;
    margin-bottom: 20px;
    font-weight: 700;
}

/* Marquee animation */
@keyframes marquee {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}

/* Feedback container styling */
.feedback-container {
    display: flex;
    flex-direction: row;
    gap: 20px;
    align-items: center;
    overflow: hidden;
    white-space: nowrap;
    animation: marquee 25s linear infinite;
    padding: 10px 0;
    /* Removed borders for top and bottom */
}

/* Individual feedback card styling (Rectangle) */
.feedback-card {
    display: flex; /* Change to flex to align items */
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    width: 400px; /* Set width for a rectangular shape */
    height: auto;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    align-items: center; /* Center vertically */
}

.feedback-card:hover {
    transform: scale(1.05);
}

/* Thumbnail image styling */
.feedback-card .thumb {
    margin-right: 20px; /* Space between image and text */
}

.feedback-card .thumb img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Feedback content styling */
.feedback-content {
    display: flex;
    flex-direction: column; /* Stack content vertically */
}

.feedback-content h3 {
    font-size: 18px;
    color: #4CAF50;
    margin-bottom: 5px;
}

.feedback-content .date {
    font-size: 14px;
    color: #888;
    margin-bottom: 10px;
}

.feedback-content .feedback {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
}

 </style>
    
    <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
            <div class="section-heading">
                <h6>Feedback</h6>
                <h2>What Students Say About the Menu</h2>
            </div>
        </div>
    </div>

    <!-- Feedback Marquee -->
    <div class="feedback-container">
        <?php
        $sql = "SELECT * FROM menu, feedback, booking WHERE feedback.book_id = booking.book_id AND booking.menu_id = menu.menu_id";
        if (mysqli_num_rows($result = mysqli_query($con, $sql)) > 0) {
            while ($data = mysqli_fetch_array($result)) {
        ?>

        <!-- Feedback Card -->
        <div class="feedback-card">
            <div class="thumb">
                <img src="../assets/images/<?php echo $data['img']; ?>" alt="Dish Image">
            </div>
            <div class="feedback-content">
                <h3><?php echo $data['dish_name']; ?></h3>
                <p class="date">Rating: <?php echo $data['rate']; ?></p>
                <p class="feedback"><?php echo $data['cmt']; ?>.!</p>
            </div>
        </div>

        <?php
            }
        }
        ?>
    </div>

<?php
include 'footer.php';
?>