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
		<a href="<?php echo base_url('welcome') ?>" class="btn btn-primary">Kembali</a>

        <div class="card">
                    <h3 class="title">
                        Contact Us
                    </h3>
            <a href="https://www.instagram.com/exceldeo27/?hl=id" target="_blank" rel="noopener noreferrer" >
                <!-- <img src="/assets/image/instagram.png" alt="instagram" srcset="" width="50px" > -->
            </a>
            <div style="font-size: 20pt;">
                @exceldeo27
            </div>
        </div>

        
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