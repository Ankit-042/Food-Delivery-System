<?php
$server="localhost";
$user="root";
$pass="";
$database="db";
$con=mysqli_connect($server,$user,$pass,$database);
if(!$con)
{
    die("connection fail".mysqli_connect_error());
}
$newpass=$_POST['pass'];
$email=$_POST['emailid'];
$sql="update userdata set password='$newpass' where email='$email' ";
$res=mysqli_query($con,$sql);
if($res){
 echo('<script>alert("password updated")</script>');
 header('location:SIGNIN2.html');
} 
else{
echo("fail");
}
mysqli_close($con);