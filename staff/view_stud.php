
<?php
include '../connection.php';

include 'header.php';

$m1="select * from staff where loginid=$l  ";
$msf=mysqli_fetch_array(mysqli_query($con,$m1));
$yes=$msf['department'];
?><br><br><br><br>
<div id="page-inner" >

        </div>


<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"> Student Details</strong></div>
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
        <h1 style="margin-left: 300px;"> Student Details</h1>
        <?php
$sql="select * from student,login where student.loginid=login.loginid && department='$yes'  ";
if(mysqli_num_rows($result=mysqli_query($con,$sql))>0){
    ?>
<table class="table table-bordered ">

<td class="">Name</td>
<th class="">Email</th>
<th class="">Phone</th>
<th class="">Department</th>
<th class="">Year</th>
<th class="">Admission number </th>
<th class="">Approvel</th>
</tr>

<?php
      while($data=mysqli_fetch_array($result)){
        ?>
<tr>
    <td><?php echo $data['name']?></td>
    <td><?php echo $data['email']?></td>
    <td><?php echo $data['phone']?></td>
    <td><?php echo $data['department']?></td>
    <td><?php echo $data['year_of_join']?></td>
    <td><?php echo $data['admission_no']?></td>
    <?php
    if($data['login_status']=='add'){
      ?>
      <td><a href="approved.php?id=<?php echo $data['loginid']?>" class=" btn btn-danger">Accept</a> 
      <a href="reject.php?id=<?php echo $data['loginid']?>" class=" btn btn-danger">Remove</a></td> 
      <?php
    }elseif($data['login_status']=='approved'){ ?>

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