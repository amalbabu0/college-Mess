<?php
$id=$_GET['id'];

include '../connection.php';

$sql="UPDATE pre_book set book_status='accept' where book_id=$id";
db_query($con,$sql);

echo"<script>alert('Request Accepted✅');window.location='index.php';</script>";
?>