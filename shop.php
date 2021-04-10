<?php
    include_once 'php/server.php';
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>UCD Fencing - Shop</title>
        
        
        <?php include_once 'php/boilerplate.php' ?>
        <link rel="stylesheet" href="css/shops.css">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    </head>
    <body>
            <!-- Navigation -->
            <nav class="navbar navbar-expand-md ">
            <a class="navbar-brand" href="index.php">UCDFC</a>

            <!--Hamburger-->
            <button class= "navbar-toggler navbar-dark" type= "button" data-toggle= "collapse" data-target= "#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class= "navbar-toggler-icon"></span>
            </button>

            <!--Nav Content-->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item bar">
                        <a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item bar"><a class="nav-link" href="news.php">News</a></li>
                    <li class="nav-item bar active"><a class="nav-link" href="shop.php">Shop<span class="sr-only">(current)</span></a></li>
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

        <!-- Shop Image -->
        <img class="shop-image" src="img/shopcover.jpg" alt="Fencers - shop cover">
        
        <div class="container goods">
            <h4>Equipment</h4>
            <hr>
            <div class="equipments row">

                <?php include_once 'php/items.php'?>

            </div>
        </div>

        <div class="d-flex justify-content-lg-center mt-3">
            <button type="button" class="btn btn-outline-info">More Coming Soon...</button>
        </div>
        <?php include_once "php/footer.php" ?>
    </body>

</html>
