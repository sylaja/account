<?php

$conn = mysqli_connect("localhost", "root", "admin@123", "db2");
if (isset($_POST['register'])) {

    $username = $_POST['name'];
    $password =md5($_POST['password']);
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['feedback'];
    $sql = "insert into users(name,password,email,mobile,dob,gender,address)values('$username','$password','$email','$mobile','$dob','$gender','$address')";
    mysqli_query($conn, $sql);
    header('location:login.php');
}
if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pwd =md5($_POST['password']);
    $q = "SELECT * FROM users WHERE name='$uname' AND password='$pwd'";
    $result = mysqli_query($conn, $q);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['username'] = $uname;
        $_SESSION['success'] = "you are logged in";
        header('location:accountpage.php');
    } else {
        
        echo"wrong username and password";
          header('location:login.php');
      }
    
    
}
?>
