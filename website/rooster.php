<?php
/**
 * Created by Daen Rebel & Pim Immink
 * User: Daen & Pim
 * Date: 10/11/2016
 * Time: 14:19
 */

require_once("class/timecalc.php");
require_once("class/text.php");

?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>howlong</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/user.css">
    </head>

    <body>
        <div class="jumbotron hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <img class="img-responsive clock" src="assets/img/howlong-04.svg" type="button" onclick="document.getElementById('demo').innerHTML = Date()" />
                        <p id="demo" class="clock"> </p>
                    </div>
                    <div class="col-md-4 hidden-md hidden-lg">
                        <img class="img-responsive clockmobiel" src="assets/img/howlong-04.svg" type="button" onclick="document.getElementById('demomobiel').innerHTML = Date()" />
                        <p id="demomobiel" class="clockmobiel"> </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><?php echo ($quotes[$random_number]); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><h2 class="text-center">Jij hebt tot <?php echo $endtime; ?> les.</h2></div>
        </div>
        <div class="row">
            <div class="col-md-12"><h2 class="text-center">En dat duurt nog <?php echo $timetill; ?></h2></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="https://www.thuisbezorgd.nl/eten-bestellen-3521#"><h3 class="text-center">Bestel <?php echo ($food[$random_number]); ?>
                    om het leed te verzachten.</h3></a>
<a href="index.php"><h3><i class="glyphicon glyphicon-home" style="left: 48%;"></i></h3></a>                    <div class="container">
           
       
            </div>
        </div>
        

    </div>
                </div>
            </div>
            
        </div>
        
        
        <div class="container">
            
        </div>
        <footer class="site-footer">
           
            <hr>

            <div class="container">
                <div class="row footer">
                    <div class="col-sm-6 hidden-xs hidden-sm copyrights">
                        <h5>Made with <i class="fa fa-coffee" aria-hidden="true"></i> by Pim Immink &amp; Daen Rebel</h5>
                    </div>
                    <div class="col-sm-12 hidden-md hidden-lg copyrights">
                        <h5 style="text-align: center;">Made with <i class="fa fa-coffee" aria-hidden="true"></i></h5>
                        <h5 style="text-align: center;">by Pim Immink &amp; Daen Rebel</h5>
                    </div>
                    <div class="col-sm-6 hidden-xs hidden-sm social-icons"><a href="#"><i class="fa fa-github"></i></a></div>
                    <div class="col-sm-12 hidden-md hidden-lg social-icons socialmobiel"><a href="#" class="socialmobiel"><i class="fa fa-github socialmobiel"></i></a></div>
                </div>
            </div>
        </footer>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

    </html>