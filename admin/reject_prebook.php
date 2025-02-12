<?php
$id=$_GET['id'];

include '../connection.php';

$sql="UPDATE pre_book set book_status='reject' where book_id=$id";
mysqli_query($con,$sql);

echo"<script>alert('Request Rejected❌');window.location='index.php';</script>";
?>