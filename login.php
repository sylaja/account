
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
        
        <br>
        <br>
        <div class="st">

            <h3>Login Details</h3>
            <div id="msg"></div>
                <form method="post" action="values.php">
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