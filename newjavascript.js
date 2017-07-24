/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $('#name').keyup(function () {
        if (!($("#name").val().match('^[a-zA-Z]{3,16}$')))
        {
            $('#fname').removeClass('hidden');
            $('#fname').text("Invalid name");
        } else {
            $('#fname').addClass('hidden');
        }
    });
    $('#email').keyup(function () {
        if (!($("#email").val().match('^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$')))
        {
            $('#mail').removeClass('hidden');
            $('#mail').text("Invalid email");
        } else {
            $('#mail').addClass('hidden');
        }
    });
    $('#mobile').keyup(function () {
        if (!($("#mobile").val().match('^[0-9]{10}$')))
        {
            $('#nomobile').removeClass('hidden');
            $('#nomobile').text("Invalid mobile no");
        } else {
            $('#nomobile').addClass('hidden');
        }
    });
   /* $('#dept').blur(function () {
        if ($("#dept").val() == "")
        {
            $('#department').removeClass('hidden');
            $('#department').text("select department");
        } else {
            $('#department').addClass('hidden');
        }
    });*/
    $('#feedback').keyup(function () {
        if ($("#feedback").val() == "")
        {
            $('#fbd').removeClass('hidden');
            $('#fbd').text("Enter feedback");
        } else {
            $('#fbd').addClass('hidden');
        }
    });
    $("#myForm").submit(function () {
        var n = document.getElementById('name').value;
        var e = document.getElementById('email').value;
        var m = document.getElementById('mobile').value;
        var dep = document.getElementById('dept').value;
        var f = document.getElementById('feedback').value;
        if (n == "" && e == "" && m == "" && dep == "" && f == "") {
            document.getElementById('msg').innerHTML ="Fields with(*) are mandatory";
            return false;
        }
        if (!$('input[name=gender]:checked').val()) {
            $('#gen').removeClass('hidden');
            $('#gen').html("select your gender");
            return false;
        }
        /* $('#gender').blur(function(){
         $('#gen').addClass('hidden');
         
         });*/
        if (!$('input[name=hobby]:checked').val()) {
            $('#hoby').removeClass('hidden');
            $('#hoby').html("select your hobby");
            return false;
        }
        /*$('#hobby').blur(function(){
         $('#hoby').addClass('hidden');
         
         });*/
    });
});


