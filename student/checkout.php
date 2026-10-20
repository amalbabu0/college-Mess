<?php
session_start();
include '../connection.php';
$log=$_SESSION['loginid'];
$st="select * from booking where p_status='added to cart' and cust_id='$log'";
$result=db_query($con,$st);
while($data=db_fetch_array($result))
{
    $p=$data['menu_id'];
    $qt=$data['b_qut'];
    $query="update menu set qut=qut-$qt where menu_id=$p";
    db_query($con,$query);
}
$sql="UPDATE booking set p_status='booked' where p_status='added to cart' and cust_id='$log'";
db_query($con,$sql);
echo"<script>alert('Payment successfully completed✅');window.location='index.php'</script>";
?>