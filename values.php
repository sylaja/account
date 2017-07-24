<?php
if(isset($_POST['register'])){
$conn=mysqli_connect("localhost","root","admin@123","db2");
$username=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['feedback'];
$sql="insert into users(name,password,email,mobile,dob,gender,address)values('$username','$password','$email','$mobile','$dob','$gender','$address')";
mysqli_query($conn,$sql);
}
?>
