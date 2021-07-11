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
            <div style="border:1px solid black" class="header-item color-5 bg-color-1">
               <h2>
                   About Me
               </h2> 
            </div>
        </div>
        <div class="container-item">
            <div class="grid-item">
                <div class="item">
                    <div class="header-item bg-color-1 title color-5">
                        Primary School
                    </div>
                    <div class="body-item">
                        SDN Payaman III Nganjuk 2006 - 2012
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="item">
                    <div class="header-item bg-color-1 title color-5">
                        Junior High School
                    </div>
                    <div class="body-item">
                        SMPK "Budi Luhur" Nganjuk 2012 - 2015
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="item">
                    <div class="header-item bg-color-1 title color-5">
                        Senior High School
                    </div>
                    <div class="body-item">
                        SMAK St Augustinus Kediri 2015 - 2018
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax-small">
            <!-- <div class="small"></div> -->
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