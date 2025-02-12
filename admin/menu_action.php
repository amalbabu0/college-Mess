<?php
include '../connection.php';
$name=$_POST['name'];
$m_date=$_POST['m_date'];
$rate=$_POST['rate'];
$details=$_POST['details'];
$img=$_POST['img'];
$qut=$_POST['qut'];
$type=$_POST['type'];
$sql="insert into menu(dish_name,price,menu_date,details,img,qut,m_type) 
                  values('$name','$rate','$m_date','$details','$img','$qut','$type')"; 
mysqli_query($con,$sql);
echo"<script>alert('Successfully Menu Added✅');window.location='index.php'</script>";
 ?>