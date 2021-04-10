<?php
    include_once 'php/server.php';
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>UCD Fencing</title>
        
        <?php include 'php/boilerplate.php'?>
    </head>
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-md fixed-top ">
            <a class="navbar-brand" href="index.php">UCDFC</a>

            <!--Hamburger-->
            <button class= "navbar-toggler navbar-dark" type= "button" data-toggle= "collapse" data-target= "#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class= "navbar-toggler-icon"></span>
            </button>

            <!--Nav Content-->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item bar active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a></li>
                    <li class="nav-item bar"><a class="nav-link" href="news.php">News</a></li>
                    <li class="nav-item bar"><a class="nav-link" href="shop.php">Shop</a></li>
                    <li class="nav-item bar"><a class="nav-link" href="membership.php">Membership</a></li>
                    
                    <!--DropDown Menu-->
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle bar" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Club
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-1"></div>
                                <div class="col-md-2 sub-menu">
                                    <a class="sub-title" href="#">About Us</a><hr>
                                    
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="menu-item pl-0" href="#!">
                                            History<i class="pl-3 fas fa-caret-left hide"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="menu-item pl-0" href="#!">
                                            Committee<i class="pl-3 fas fa-caret-left hide"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            
                                <div class="col-md-2 sub-menu">
                                    <a class="sub-title" href="#">Gallery</a><hr>
                                    
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="menu-item pl-0" href="#!">
                                            2019<i class="pl-3 fas fa-caret-left hide"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="menu-item pl-0" href="#!">
                                            2018<i class="pl-3 fas fa-caret-left hide"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="menu-item pl-0" href="#!">
                                            Pre 2018<i class="pl-3 fas fa-caret-left hide"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                                           
                                <div class="col-md-2 sub-menu">
                                    <a class="sub-title" href="#">FAQ</a><hr>
                                    
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="menu-item pl-0" href="#">
                                            Events<i class="pl-3 fas fa-caret-left hide"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="menu-item pl-0" href="#!">
                                            Equipment<i class="pl-3 fas fa-caret-left hide"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="menu-item pl-0" href="#!">
                                            Repair<i class="pl-3 fas fa-caret-left hide"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-2 sub-menu">
                                    <a class="sub-title" href="#">Contact</a><hr>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="menu-item pl-0" href="#">
                                            Contact Hours<i class="pl-3 fas fa-caret-left hide"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="menu-item pl-0" href="#!">
                                            Location<i class="pl-3 fas fa-caret-left hide"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="menu-item pl-0" href="#!">
                                            Training Times<i class="pl-3 fas fa-caret-left hide"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Image Slider -->
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ul>

            <div class="carousel-inner">
                <!-- First Item -->
                <div class="carousel-item active">
                    <img class="img-fluid" src="img/Welcome.jpg" alt="UCD Student Centre">
                    <div class="carousel-caption first-item">
                        <h1 class="display-2">Welcome to UCDFC</h1>
                        <h3>Discover one of Ireland's best Fencing Club</h3>
                        <button type="button" class="btn btn-lg "><a href="#">Learn More</a></button>
                    </div>
                </div>

                <!-- Second Item -->
                <div class="carousel-item">
                    <img class="img-fluid" src="img/Shop.jpg" alt="Fencers">
                    <div class="carousel-caption second-item">
                            <h1 class="display-2">Latest Club Gear</h1>
                            <button type="button" class="btn btn-primary btn-lg"><a href="shop.php">Store</a></button>
                    </div>
                </div>

                <!-- Third Item -->
                <div class="carousel-item">
                    <img class="img-fluid" src="img/Join.jpg" alt="UCD background">
                    <div class="carousel-caption third-item">
                            <h1 class="display-2">Become a member</h1>
                            <button type="button" class="btn btn-light btn-lg"><a href="membership.php">Join Now</a></button>
                    </div>
                </div>
            </div>
        </div>

        <!--- News Section-->
        <div class="container-fluid news">
            <div class="row">
                <div class="container">
                    <!--- Heading-->
                    <div class="col-12">
                        <h2 class>Latest News
                        <span><a href="news.php"><button type="button" class="btn btn-outline-dark btn-sm">read more</button></a></span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- News -->
        <div class="container-fluid padding news-board">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <hr>
                        <div id="Carousel-2" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">

                        <!---Carousel items-->
                        <div class="carousel-inner">
                            <?php 
                                include_once 'php/newscard.php';
                            ?>
                        </div>

                        <!-- Left and right controls -->
                        <a id="left" class="btn btn-outline-secondary prev" href="#Carousel-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a id="right" class="btn btn-outline-secondary next" href="#Carousel-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>

                        </div> <!-- CAROUSEL -->
                    </div> <!-- col-12 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div>


        <!--- Contact US -->
    <div class="container-fluid location padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>

                    <hr>
                </div>
                
                <div class="col-md-12 col-lg-4">
                    <div class="marker" style="font-size: 20px;">
                <i class="fas fa-map-marker-alt fa-lg" aria-hidden="true"></i>
                    <address class="address hello">
                        Address 1<br>
                        Address 2<br>
                        PostCode<br>
                        <hr class="red">
                    </address>
                    
                    
                    <i class="fas fa-mobile-alt fa-lg" aria-hidden="true"></i>
                    <address class="address phone">
                        Telephone No.<br>
                    </address>
        
                    <i class="far fa-envelope fa-lg" aria-hidden="true"></i>
                    <address class="address">
                        Email<br>
                    </address>
                    </div>
                </div>

        
                <div class="col-md-12 col-lg-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4097.114840089087!2d-6.231703921961964!3d53.30821199052668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486709368aaf5ccf%3A0x248c7106c8f34fde!2sUCD+Sports+Centre!5e0!3m2!1sen!2sie!4v1531745624157" 
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "php/footer.php" ?>
    <script src="javascript/carouselbtn.js"></script>

    </body>
</html>