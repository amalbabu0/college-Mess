<?php
session_start();
include '../connection.php';
$rate=$_POST['rate'];
$com=$_POST['com'];
$log=$_SESSION['loginid'];
$book_id=$_GET['book_id'];

$sql="INSERT INTO feedback(cmt,rate,cust_id,book_id) 
                     values ('$com','$rate','$log','$book_id')";
mysqli_query($con,$sql);
echo"<script>alert('Feedback Added Successfuly✅');window.location='index.php'</script>";
?>