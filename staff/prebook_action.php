<?php
session_start();
$m_id=$_GET['m_id'];
$log=$_SESSION['loginid'];
include '../connection.php';
// $name=$_POST['name'];
$m_date=$_POST['m_date'];
// $details=$_POST['details'];
$qut=$_POST['qut'];
$type=$_POST['type'];
$sql="insert into pre_book(dish_id,pr_date,p_type	,quantity,login_id,book_status)
                  values('$m_id','$m_date','$type','$qut','$log','add')"; 
mysqli_query($con,$sql);
echo"<script>alert('Successfully Menu Added✅');window.location='index.php'</script>";
 ?>