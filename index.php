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
        
        <br>
        <br>
        <div class="st">

            <h3>Registration* Details</h3>
            <div id="msg"></div>
            <form id="myForm">

                <label>Name:<span>*</span></label><input type="text" id="name" name="name" placeholder="Your name">
                <span class="hidden" id="fname"></span>
                <br>
                <label>Email:<span>*</span></label><input type="text" id="email" name="email" placeholder="Your email id">
                <span class="hidden" id="mail"></span>
                <br>
                <label>Mobile:<span>*</span></label><input type="tel" id="mobile" name="mobile" placeholder="Your mobile number">
                <span class="hidden" id="nomobile"></span>
                <br>

               
                <br>
                <label> Gender:<span>*</span></label><input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female 
                <span class="hidden" id="gen"></span>
                <br>
               
                <label>Address:</label>
                <div id="feedbck"><br> <textarea id="feedback" name="feedback" rows="3" cols="15" placeholder="Enter Some text"></textarea>
                    <span class="hidden" id="fbd"></span>
                </div>
                <br>
                <br>
                <div id="submt">
                    <input type="submit" value="submit">
                </div>
            </form>

        </div>
       
    </body>
</html>
