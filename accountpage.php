
<!--
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->
<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}
?>
 <html>
     <head>
         <title></title>
     </head>
     <body>
         <header>
             You are logged-in
             <br>
         </header>
         <?php if (isset($_SESSION['username'])) : ?>
                <center>
                    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p> <a href="login.php?logout='1'" style="color: red;"><input type="submit" id="home_bt" value="Log Out"></a> </p>
                </center>
            <?php endif ?>
     </body>
 </html>
