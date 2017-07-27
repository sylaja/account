<?php

$conn = mysqli_connect("localhost", "root", "admin@123", "db2");
if (isset($_POST['submit'])) {
    $target = "upload/";
    $username = $_POST['name'];
    $password = md5($_POST['password1']);
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['feedback'];
    $pic = $target . $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], $target . $_FILES['photo']['name']);
    $sql = "insert into users(name,password,email,mobile,dob,gender,address,pic)values('$username','$password','$email','$mobile','$dob','$gender','$address','$pic')";
    mysqli_query($conn, $sql);
    header('location:login.php');
}
?>
