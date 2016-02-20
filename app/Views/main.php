<?php
/**
 * Created by PhpStorm.
 * User: nourhan
 * Date: 20/02/2016
 * Time: 01:29
 */

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Door Egypt</title>

    <!-- Bootstrap core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="../bower_components/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="../bower_components/bootstrap-social/bootstrap-social.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.css.map" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- my css -->
    <link href="../bower_components/bootstrap/css/index.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../bower_components/bootstrap/css/css/carousel.css" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->
<body>
<div class="navbar-wrapper">
    <div class="container" >

        <nav class="navbar navbar-inverse navbar-static-top" >
            <div class="container" >
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Doors Egypt</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" id="UL">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="DD">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox" >

        <!-- style="height:100%; width:100%; margin-top:5%;" -->


        <div class="item active">
            <img class="first-slide" src="pics/room1.png" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <!-- <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p> -->
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Book Now!</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="pics/room2.png" alt="Second slide" >
            <div class="container">
                <div class="carousel-caption">
                    <!-- <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Book Now!</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="pics/room3.png" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <!-- <h1>One more for good measure.</h1>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Book Now!</a></p>
                </div>
            </div>
        </div>


        <div class="item">
            <img class="fourth-slide" src="pics/cover1.png" alt="Fourth slide">
            <div class="container">
                <div class="carousel-caption">
                    <!--  <h1>One more for good measure.</h1>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->


                    <p id="social-media">

                        <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/doorseg" role="button"><span class="fa fa-instagram"></span></a>

                        <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/Doors-Egypt-1008010499263559" role="button"><span class="fa fa-facebook"></span></a>



                    </p>

                </div>
            </div>
        </div>

    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->


<div id="lead-board" class="container">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li id="first-tab" role="presentation" class="active"><a href="#whd" aria-controls="whd" role="tab" data-toggle="tab">White House Down</a></li>
        <li role="presentation"><a href="#hr" aria-controls="hr" role="tab" data-toggle="tab">Haunted Room</a></li>
        <li role="presentation"><a href="#wwj" aria-controls="wwj" role="tab" data-toggle="tab">Wild West Jail</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="whd">
            <table>
                <thead>
                <tr>

                    <td>Team Name</td>

                    <td>Score</td>

                </tr>

                </thead>

                <tbody>
                <tr>
                    <td>Team 1</td>
                    <td>40</td>
                </tr>

                <tr>
                    <td>Team 2</td>
                    <td>60</td>
                </tr>

                <tr>
                    <td>Team 3</td>
                    <td> 100</td>
                </tr>


                </tbody>

            </table>


        </div>
        <div role="tabpanel" class="tab-pane" id="hr"><table>
                <thead>
                <tr>

                    <td>Team Name</td>

                    <td>Score</td>

                </tr>

                </thead>

                <tbody>
                <tr>
                    <td>dfhgfdh Team 1</td>
                    <td>40</td>
                </tr>

                <tr>
                    <td>Team 2 fgdhh</td>
                    <td>60</td>
                </tr>

                <tr>
                    <td>fdghhg Team 3</td>
                    <td> 100</td>
                </tr>


                </tbody>

            </table></div>
        <div role="tabpanel" class="tab-pane" id="wwj">
            <table>
                <thead>
                <tr>

                    <td>Team Name</td>

                    <td>Score</td>

                </tr>

                </thead>

                <tbody>
                <tr>
                    <td>Team 1 dfhdfs</td>
                    <td>40</td>
                </tr>

                <tr>
                    <td>gsfgfd Team 2</td>
                    <td>60</td>
                </tr>

                <tr>
                    <td>Team 3 dsfgdfsg</td>
                    <td> 100</td>
                </tr>


                </tbody>

            </table>
        </div>
    </div>

</div>

<di class="box">
    <!-- Three columns of text below the carousel -->
    <div class="row" id="info-section">

        <div class="col-xs-12 col-sm-6 col-md-4">
            <img class="center-block img-circle" src="pics/room1-circle.png" alt="Generic placeholder image" width="140" height="140" >
            <!-- <h2 class="head">White House Down</h2> -->
            <p class="info">The White House is occupied and a bomb has been planted in the presidential room. As you are the presidential guards, your duty is to stop that bomb and keep the president safe.</p>
            <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->


        <div class="col-xs-12 col-sm-6 col-md-4">
            <img class="center-block img-circle" src="pics/room2-circle.png" alt="Generic placeholder image" width="140" height="140" id="pic2">
            <!-- <h2>Heading</h2> -->
            <p class="info">Detectives, a young girl is missing and rumors have increased recently about her mother torturing her and that strange voices are heard out of the house. Get ready to inspect her room.</p>

        </div><!-- /.col-lg-4 -->


        <div class="col-xs-12 col-sm-6 col-md-4">
            <img class="center-block img-circle" src="pics/room3-circle.png" alt="Generic placeholder image" width="140" height="140">
            <!-- <h2>Heading</h2> -->
            <p class="info">Cowboys, get the gang ready, you need to free your fellow outlaws who have been captured robbing a bank. You have 60 minutes before they are up for execution.</p>

        </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->







    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

    <!--  </div> --><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../bower_components/bootstrap/js/jquery.min.js"><\/script>')</script>
    <script src="../bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../bower_components/bootstrap/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bower_components/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>



