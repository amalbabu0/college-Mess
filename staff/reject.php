<?php
$id=$_GET['id'];

include '../connection.php';

$sql="UPDATE login set login_status='cancel' where loginid=$id";
mysqli_query($con,$sql);

echo"<script>alert('Request canceled❌');window.location='index.php';</script>";
?>