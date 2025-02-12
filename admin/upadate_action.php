<?php
$m_id=$_GET['m_id'];
$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$details=$_POST['details'];
$date=$_POST['date'];

include '../connection.php';

$sql="UPDATE menu set dish_name='$name',price='$price',qut='$quantity',details='$details',menu_date='$date' where menu_id='$m_id'";
mysqli_query($con,$sql);

echo"<script>alert('Menu Updated');window.location='view_menu.php';</script>";
?>