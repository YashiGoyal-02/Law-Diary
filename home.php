<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kaanun</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../LawDiary/css/index_style.css" rel="stylesheet" type="text/css">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
</head>

<body>

    <div class="wrapper">
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo">
                            <center>
                                <a class="link_head" href="./index.php">
                                    <p>Kaanun</p>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="nav-bar" style="margin:auto">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="#" class="nav-item nav-link active">Home</a>
                            <a href="./diary/dateRetrieve.php" class="nav-item nav-link">Diary</a>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Cases</a>
                                <div class="dropdown-menu">
                                    <a href="./add_case/add_case.php" class="dropdown-item">Add a new Case</a>
                                    <a href="./show_cases/case_view.php" class="dropdown-item">Case List</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Citations</a>
                                <div class="dropdown-menu">
                                    <a href="./citations/addCaseSelect.php" class="dropdown-item">Add to Case</a>
                                    <a href="./citations/addGeneral.php" class="dropdown-item">Add General</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Clients</a>
                                <div class="dropdown-menu">
                                    <a href="./add_client/add_client.php" class="dropdown-item">Add a new Client</a>
                                    <a href="./client_details/searchClient.php" class="dropdown-item">Search Client</a>
                                    <a href="./client_details/clientList.php" class="dropdown-item">Client List</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Search Cases</a>
                                <div class="dropdown-menu">
                                    <a href="./case_details/partyName.php" class="dropdown-item">By Party Name</a>
                                    <a href="./searchByDates/enterDate.php" class="dropdown-item">By Dates</a>
                                    <!-- <a href="" class="dropdown-item">Search by Court Name</a> -->
                                </div>
                            </div>
                            <a href="#footer" class="nav-item nav-link">Contact Us</a>
                            <a href="index.php" class="nav-item nav-link">Log Out</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div id="carousel" class="carousel slide col-sm-12" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="imgbox">
                        <img class="center-fit" src="img/carousel-1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h4 class="animated fadeInLeft">Fight for justice</h4>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="imgbox">
                        <img class="center-fit" src="img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h4 class="animated fadeInLeft">Be prepared to oppose for good</h4>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="imgbox">
                        <img class="center-fit" src="img/carousel-3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h4 class="animated fadeInLeft">Fight for privilege</h4>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel End -->



        <br><br><br><br>
        <!-- Footer Start -->
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="footer-about" style="text-align: justify;text-justify:inter-word;">
                            <h4>About Us</h4>
                            <p>
                                We have put forth an effort to ease the jobs for various lawyers and advocates
                                out there by providing this cheap and efficient law diary.
                            </p>
                            <br>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <!-- <div class="row"> -->
                        <!-- <div class="col-sm-6"> -->
                        <div class="footer-link">
                            <h4>Services Areas</h4>
                            <a href="">Law Diary</a>
                            <a href="">Case Search</a>
                            <a href="">Add new case</a>
                            <br><br>
                            <!-- <a href="">Education Law</a>
                                <a href="">Immigration Law</a> -->
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-link">
                            <h4>Useful Pages</h4>
                            <a href="">Client Details</a>
                            <a href="">Case Details</a>
                            <br><br>
                            <!-- <a href="">Attorneys</a>
                                <a href="">Case Studies</a>
                                <a href="">FAQs</a> -->
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-contact">
                            <h4>Get In Touch</h4>
                            <p><i class="fa fa-map-marker-alt"></i>Chandigarh, India</p>
                            <p><i class="fa fa-phone-alt"></i>+91-7015720176</p>
                            <p><i class="fa fa-envelope"></i>yashigoyal02@gmail.com</p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-menu">
        <div class="f-menu">
            <a href="">Terms of use</a>
            <a href="">Privacy policy</a>
            <!-- <a href="">Cookies</a> -->
            <a href="">Help</a>
            <!-- <a href="">FQAs</a> -->
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="https://htmlcodex.com/law-firm-website-template">Yashi Goyal</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Designed By Yashi Goyal</p>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>