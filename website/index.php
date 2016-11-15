<?php
/**
 * Created by Daen Rebel & Pim Immink
 * User: Daen & Pim
 * Date: 10/11/2016
 * Time: 14:19
 */

// load the XML file
$xml = simplexml_load_file('http://u517056.gluweb.nl/getrooster/getclasses.php');

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
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm textcolumn"><img class="img-responsive hidden-xs hidden-sm text" src="assets/img/howlong-03.svg"></div>
                    <div class="col-md-4 hidden-xs hidden-sm textcolumn">
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 hidden-md hidden-lg textcolumn">
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 hidden-md hidden-lg textcolumn"><img class="img-responsive hidden-md hidden-lg textmobiel" src="assets/img/howlong-03.svg"></div>
                    <div class="col-md-4 hidden-md hidden-lg textcolumn">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row computercolumn">
                <div class="col-md-4">
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 textcolumn" style="align-content:center;">
                    <div class="scherm">
                        <div class="dropdown">
                            <button class="btn btn-link btn-block btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Selecteer je klas</button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <?php
                                foreach($xml->class as $class)
                                {
                                    echo "<a href='rooster.php?class=$class'>".$class."</a>";
                                }
                            ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="koffiestoom">
                        <div> <div class="steam-container">
      <div class="squiggle-container squiggle-container-1">
      <div class="squiggle">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 28.1 80.6" style="enable-background:new 0 0 28.1 80.6;" xml:space="preserve">
        <path class="" fill="none" stroke-width="11" stroke-linecap="round" stroke-miterlimit="10" d="M22.6,75.1c-8-5.6-15.2-10.5-15.2-19.9c0-12.1,14.1-17.2,14.1-29.6c0-9.1-6.7-15.7-16-20.1"/>
        </svg>
      </div> <!-- end .squiggle-->
    </div>
      <div class="squiggle-container squiggle-container-2">
      <div class="squiggle">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 28.1 80.6" style="enable-background:new 0 0 28.1 80.6;" xml:space="preserve">
        <path class="" fill="none" stroke="#fff" stroke-width="11" stroke-linecap="round" stroke-miterlimit="10" d="M22.6,75.1c-8-5.6-15.2-10.5-15.2-19.9c0-12.1,14.1-17.2,14.1-29.6c0-9.1-6.7-15.7-16-20.1"/>
        </svg>
      </div> <!-- end .squiggle-->
    </div>
      <div class="squiggle-container squiggle-container-3">
      <div class="squiggle">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 28.1 80.6" style="enable-background:new 0 0 28.1 80.6;" xml:space="preserve">
        <path class="" fill="none" stroke="#fff" stroke-width="11" stroke-linecap="round" stroke-miterlimit="10" d="M22.6,75.1c-8-5.6-15.2-10.5-15.2-19.9c0-12.1,14.1-17.2,14.1-29.6c0-9.1-6.7-15.7-16-20.1"/>
        </svg>
      </div> <!-- end .squiggle-->
    </div>

    
</div> <!-- end aligner -->
  
  

</div>
                    </div><img class="img-responsive" src="assets/img/howlong-02.svg"></div>
            </div>
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