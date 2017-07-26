
<!--
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="newcss.css">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_POST['login'])) {
            $conn = mysqli_connect("localhost", "root", "admin@123", "db2");
            $uname = $_POST['uname'];
            $pwd = md5($_POST['password']);
            $q = "SELECT * FROM users WHERE name='$uname' AND password='$pwd'";
            $result = mysqli_query($conn, $q);
            if (mysqli_num_rows($result) == 1) {
                session_start();
                $_SESSION['username'] = $uname;
                $_SESSION['success'] = "you are logged in";
                header('location:accountpage.php');
            } else {
                $error = "wrong username and password";
            }
        }
        ?>
        <br>
        <br>
        <div class="st">
            <center><span id="msg"><?php echo $error; ?></span></center>
            <h3>Login Details</h3>

            <form method="post" action="login.php">
                <label>Name:<span>*</span></label><input type="text" id="uname" name="uname" placeholder="Your name">
                <span class="hidden" id="fname"></span>
                <br>
                <label>password:<span>*</span></label><input type="password" id="password" name="password" placeholder="Your password">
                <div id="submt">
                    <input type="submit" value="submit" name="login">
                </div>
            </form>

        </div>

    </body>
</html>