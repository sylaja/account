<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="newcss.css">
        <title></title>
    </head>
    <body>
        <div class="st">
            <div id="bt">
            <a href="registration.php"><input type="submit" id="sub1" value="register"></a>
            <a href="login.php"><input type="submit" id="sub2" value="login"></a>
            </div>
        <div id="tb">
                <h2>Our Registered Users</h2>
            <?php
            $db = mysqli_connect('localhost', 'root', 'admin@123', 'db2');
            $query = "SELECT name,email,address FROM users";
            $result = mysqli_query($db, $query);

            echo "<table border='1'bordercolor='black' width='100%' border-collapse='collapse'>
                <tr>
                <th>Username</th>
                <th>Email</th>
                <th>City</th>
                </tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($con);
            ?>
        </div>
        </div>
    </body>
</html>
