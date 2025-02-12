
<?php
include '../connection.php';
$m_id=$_GET['m_id'];
include 'header.php';


$sql="select * from menu where menu_id='$m_id' ";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_array($result);

?>
<br><br><br><br>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a
              href="">Update menu</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"> <?php echo $data['dish_name']?></strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <img src="../assets/images/<?php echo $data['img']?>" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $data['dish_name']?></h2>
            <div class="mt-5">

              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                   
                      <form action="upadate_action.php?m_id=<?php echo $m_id?>" method="post">
                  <table class="table custom-table">
                       
                    <tbody>
                      <tr>
                        <th scope="row">Name
                        </th>
                        <td><input class="form-control" value="<?php echo $data['dish_name']?>" name="name" required></td>
                      </tr>
                      <tr>
                        <th scope="row">Price</th>
                        <td><input class="form-control" value="<?php echo $data['price']?>" name="price" required></td>
                      </tr>
                      <tr>
                        <th scope="row">Quantity</th>
                        <td><input class="form-control" value="<?php echo $data['qut']?>" name="quantity" required></td>
                      </tr>
                       <tr>
                        <th scope="row">Details</th>
                        <td><input class="form-control" value="<?php echo $data['details']?>" name="details" required></td>
                      </tr>
                      <tr>
                        <th scope="row">Date</th>
                        <td><input class="form-control" value="<?php echo $data['details']?>" type="date" min="<?php echo date('Y-m-d')?>" name="date" required></td>
                      </tr>
                                
                        <td></td>
                    <td><input type="submit" class=" btn btn-danger" value="Update"></td>
        
                      </tr>
                    </tbody>
                  </table>
                    
                </div>
                <form>

              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>