<?php
include 'connection.php';
$username=$_POST['username'];
$pass=$_POST['pass'];

$str = "SELECT * FROM login WHERE username='$username' or password='$pass'";
$result=mysqli_query($con,$str);

if(mysqli_num_rows($result)>0){
    echo "<script>alert(' username and password password already used ');window.location='staff_reg.php'</script>";
      }
      else{
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $dpet=$_POST['dpet'];
            $proof=$_POST['proof'];
            $post=$_POST['post'];
            $query="insert into login(username,password,user_type,login_status) values('$username','$pass','tutor','add')";
            mysqli_query($con,$query);
            $log=mysqli_insert_id($con);
            $sql="insert into staff(name,email,phone,department,post,proof,loginid)	
                                               values('$name','$email','$phone','$dpet','$post','$proof','$log')";
            mysqli_query($con,$sql);
            echo"<script>alert('Registration Successfully Completed✅');window.location='login.php'</script>";
           }
?>