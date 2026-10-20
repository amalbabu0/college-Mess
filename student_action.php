<?php
include 'connection.php';
$username=$_POST['username'];
$pass=$_POST['pass'];

$str = "SELECT * FROM login WHERE username='$username' or password='$pass'";
$result=db_query($con,$str);

if(db_num_rows($result)>0){
    echo "<script>alert(' username and password password already used ');window.location='student_reg.php'</script>";
      }
      else{
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $dept=$_POST['dept'];
            $admision=$_POST['admision'];
            $year=$_POST['year'];
            $query="insert into login(username,password,user_type,login_status) values('$username','$pass','Student','add')";
            db_query($con,$query);
            $log=db_insert_id($con);
            $sql="insert into student(name,email,phone,department,year_of_join,admission_no,loginid) values('$name','$email','$phone','$dept','$year','$admision','$log')";
            db_query($con,$sql);
            echo"<script>alert('Registration Successfully Completed✅');window.location='login.php'</script>";
           }
?>