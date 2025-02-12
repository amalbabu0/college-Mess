<?php
$id=$_GET['id'];

include '../connection.php';

$sql="UPDATE login set login_status='approved' where loginid=$id";
mysqli_query($con,$sql);

echo"<script>alert('Request Accepted✅');window.location='index.php';</script>";
 