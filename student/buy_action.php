<?php
session_start();
include '../connection.php';
$id=$_GET['m_id'];
$log=$_SESSION['loginid'];
$qut=$_POST['qut'];

$str="select price from menu where menu_id='$id' ";
$result=db_query($con,$str);
$data=db_fetch_array($result);
$p=$data['price'];
$sum=$p*$qut;

$str="select * from booking where menu_id=$id and cust_id=$log and p_status='added to cart'";
if(db_num_rows($result=db_query($con,$str))>0)
{
    $row=db_fetch_array($result);
    $book_id=$row['book_id'];
    $sql="UPDATE booking set b_qut=b_qut+$qut,sum=sum+$sum where book_id='$book_id' ";
    db_query($con,$sql);
    echo"<script>window.location='cart.php'</script>";
}else{
$prt="insert into booking(menu_id,cust_id,b_qut,sum,p_status) values('$id','$log','$qut','$sum','added to cart')";
db_query($con,$prt);

echo"<script>window.location='cart.php'</script>";
}
?>