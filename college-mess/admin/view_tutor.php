
<?php
include '../connection.php';
session_start();

include 'header.php';

?>
<div id="page-inner" >

        </div>


<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Staff Details</strong></div>
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
        <h1 style="margin-left: 300px;">Staff Details</h1>
        <?php
$sql="select * from staff,login where staff.loginid=login.loginid  ";
if(mysqli_num_rows($result=mysqli_query($con,$sql))>0){
    ?>
<table class="table table-bordered table-striped table-hover">
<th class="">Name</th>
  <th class="">Email</th>
  <th class="">Contact Number</th>
  <th class="">Post</th>
  <th class="">Department</th>
  <th class="">Idproof</th>
  <th class="">Status</th>
 

<?php
      while($data=mysqli_fetch_array($result)){
        ?>
<tr>
    <td><?php echo $data['name']?></td>
    <td><?php echo $data['email']?></td>
    <td><?php echo $data['phone']?></td>
    <td><?php echo $data['post']?></td>
    <td><?php echo $data['department']?></td>
    <td><img src="../assets/images/<?php echo $data['proof']?>" width="100" height="100"></td>
    <?php if($data['login_status']=='add'){ ?>
      <td><a href="approved.php?id=<?php echo $data['loginid']?>" class=" btn btn-danger">Accept</a> 
      <a href="reject.php?id=<?php echo $data['loginid']?>" class=" btn btn-danger">Remove</a></td> 
      <?php }elseif($data['login_status']=='approved'){ ?>
        
        <th>Approved
    <a href="reject.php?id=<?php echo $data['loginid']?>" class=" btn btn-danger">Remove</a></td>

<?php
}elseif($data['login_status']=='cancel'){ ?>
  <th>Canceled</th>
  <?php
}
     ?>
</tr>
<?php
      }
      ?>
  
</table>

<?php
      }else{?>
        <h3 style="padding:52px 250px;color:red" class=" mb-2 pb-3">Currently no request found !</h3>
        <?php
      }
      ?>

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