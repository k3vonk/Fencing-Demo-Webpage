<?php
    include_once 'php/server.php';
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>UCD Fencing - News</title>
        
        <?php include 'php/boilerplate.php'?>
        <link rel="stylesheet" href="css/newspage.css">
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
                    <li class="nav-item bar">
                        <a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item bar active"><a class="nav-link" href="news.php">News<span class="sr-only">(current)</span></a></li>
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


        <div class="container-fluid news">
            <div class="row">
                <div class="container">
                    <!--- Heading-->
                    <div class="col-12">
                        <h2 class>Latest News</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- News Rectangles -->
        <div class="container">
           <?php 
                $sql = "select * from news;";
                $results = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($results)){
                    if($row['id']%3 == 1){
                        echo "<div class='row mb-5'>
                              ";
                    }

                //Image
                echo "  <div class='col-md-4'>
                        <div class='card border-info'>
                        <img class='card-img-top' src='".$row['imageLocation']."' alt='".$row['imageName']."'>";

                //Card Body
                echo "<div class='card-body'>
                    <span class='category'>".$row['topic']."</span>
                    <h4 class='card-title'>".$row['title']."</h4>
                    <p class='card-text'>".$row['content']."</p>";
                
                //Post Meta
                echo "<div class='post-meta'>
                    <span class='author'><i class='fas fa-user' style='margin-right:4px'></i>".$row['author']."</span>
                    <span class='time'><i class='far fa-clock' style='margin-right:4px'></i>".$row['date']."</span>
                    <div class='clearfix'></div>
                    </div>";

                //close tags
                echo "</div></div></div>";
                
                if($row['id'] % 3 == 0){
                    echo "</div>";
                }

                }
            ?>

        </div>

        <nav class="d-flex justify-content-center" aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1<span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

        <?php include_once "php/footer.php" ?>

</html>