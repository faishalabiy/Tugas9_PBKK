<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>CV</title>
</head>
<body> 
    <div class="container-fluid">
        <div class="jumbotron parallax">
            <div class="card">
                <div class="color-5">
                    <!-- <img class="image" src="/assets/image/profile2.png" alt="profile"> -->
                        <h1>Excel Deo Cornelius <br> 05111840000117</h1>
                    <h2>
                        <div id="clock"></div>
                    </h2>
                </div>
            </div>
        </div>
		<a href="<?php echo base_url('welcome/about') ?>" class="btn btn-primary">About Us</a>
		<a href="<?php echo base_url('welcome/contact') ?>" class="btn btn-primary">Contact Us</a>
    </div>


<script type="text/javascript">

    setInterval(displayclock,1000);

    function displayclock(){
        var time = new Date();
        var hrs = time.getHours();
        var min = time.getMinutes();
        var sec = time.getSeconds();

        document.getElementById('clock').innerHTML = hrs + ':' + min + ':' + sec;

    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html> 