<?php
$id=$_GET['id'];

include '../connection.php';

$sql="UPDATE login set login_status='approved' where loginid=$id";
db_query($con,$sql);

echo"<script>alert('Request Approved✅');window.location='index.php';</script>";
?>