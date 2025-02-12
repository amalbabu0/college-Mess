
<?php
include '../connection.php';

include 'header.php';

?>
            <?php
$sql="select * from menu  ";
if(mysqli_num_rows($result=mysqli_query($con,$sql))>0){
    ?>
<section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our menu</h6>
                        <h2>We offer the best ingredients for you</h2>
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
                            <h4>Name: <?php echo $data['dish_name']?></h4>
                            <form id="contact" action="prebook_action.php?m_id=<?php echo $data['menu_id']?>" method="post">
                          
                            <div class="col-lg-12">
                              
                              <input name="m_date" type="date" class="col-sm-12" min="<?php echo date('Y-m-d')?>"  placeholder="date" required="">
                        
                            </div>
                           <br>
                            <div class="col-sm-12">
                              <fieldset>
                                <select name="type" class="col-sm-12" type="text" id="name" required="">
                                <option >Time </option>
                                  <option value="breakfast ">Breakfast </option>
                                  <option value="lunch ">Lunch </option>
                                  <option value="dinner">Dinner </option>
                                </select>
                              </fieldset>
                           
                            </div>
                            <br>
                            <div class="col-sm-12">
                            <fieldset>
                          
                                <input name="qut" type="number" class="col-sm-12" id="name" placeholder="qantity" min="1" required>
                              </fieldset>
                            </div>
                            <br><input type="submit" value="book" class="btn btn-info btn-sm">
      </form>                   
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