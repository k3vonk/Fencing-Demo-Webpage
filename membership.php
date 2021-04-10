<?php
    include_once 'php/server.php';
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>UCD Fencing - Membership</title>
        
        <?php include 'php/boilerplate.php'?>
        <link rel="stylesheet" href="css/member.css">
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-md sticky-top ">
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
                    <li class="nav-item bar"><a class="nav-link" href="shop.php">Shop</a></li>
                    <li class="nav-item bar active"><a class="nav-link" href="membership.php">Membership<span class="sr-only">(current)</span></a></li>
                    
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


        <div class="container-fluid">
            <div class="hero-content text-center">
                <h1 class="hero-heading">Join The Club</h1>
                <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-8">
                        <h5 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam metus orci, convallis sed mauris ut, tincidunt luctus nisl. Vestibulum sollicitudin libero id felis lacinia, nec sagittis arcu sollicitudin. Mauris ut sapien nisi. Nulla dignissim orci felis, vel cursus ipsum vulputate non. In interdum turpis quis pellentesque convallis.</h5>
                    </div>
                </div>
            </div>
        </div>      

        <script src="javascript/form.js"></script>

        <div class="container-fluid form-color">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form id="myForm" onsubmit="isValidEmail()">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>

                        <div class="form-group">
                            <label for="cost">Cost</label>
                            <input class="form-control" type="text" placeholder="$20" readonly>
                        </div>

                        <div class="form-group">
                            <label for="payment-method">Payment method</label>
                            <select class="form-control" id="payment-method">
                                <option>Cash</option>
                                <option>Visa</option>
                                <option>Paypal</option>
                            </select>
                        <div>

                        <div class="form-group">
                            <label for="additional-comment">Additional Comment</label>
                            <textarea class="form-control" id="additional-comment" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mb-2">Send</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer">
            <?php include_once 'php/footer.php'?>
        </div>

</body>

</html>