
<!--
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="newcss.css">
        <header>
            You are logged-in
            <br>
        </header>
        <?php if (isset($_SESSION['username'])) : ?>
        <center>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <form action="logout.php" method="post">
            <p> <input type="submit" id="home_bt" value="Log Out"> </p>
            </form>
        </center>
    <?php endif ?>
</body>
</html>
