<?php

include 'header.php';
$b_id=$_GET['b_id'];
include '../connection.php';
          $sql="select * from feedback,student where student.loginid=feedback.cust_id and feedback.book_id='$b_id'";
          if(mysqli_num_rows($result=mysqli_query($con,$sql))>0){
        ?>
<div id="page-inner" >

</div>


<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">feedback</strong></div>
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
<br>
        <div class="row">
        <h1 style="margin-left: 300px;"> Student Feedbacks </h1>
        <br>
        <br>
        <br>

            <table class="table table-bordered table-striped table-hover">

<th>Customer Name</th>
<th>Customer email</th>
<th>Rating</th>
<th>Comment</th>




<?php
          $data=mysqli_fetch_array($result)
            ?>
<tr>
    <td><?php echo $data['name']?></td>
    <td><?php echo $data['email']?></td>
    <td><?php echo $data['rate']?></td>
    <td><?php echo $data['cmt']?></td>
   

</tr><?php

?>

</table>

<?php
      }else{?>
        <h3 style="padding:52px 250px; color:black;" class=" mb-2 pb-3">Currently no feedback added from customer  !</h3>
        <?php
      }?>
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">

            </div>
          </div>
        </div>
      </div>
    </div>

<?php
include 'footer.php';
?>