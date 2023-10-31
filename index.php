<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduvalt - Online Courses & Education Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon-eduvalt.css">
    <link rel="stylesheet" href="assets/css/default-icons.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/tg-cursor.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <!-- Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <div id="header-fixed-height"></div>
    <header class="tg-header__style-two">
        <div id="sticky-header" class="tg-header__area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo" >
                                    <a href="index-2.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex"  style="margin-left: 200px;">
                                    <ul class="navigation">
                                        <li class="active menu-item"><a href="index.php">Accueil</a></li>
                                        <li class="menu-item"><a href="courses.php">Cours</a></li>
                                        <li class="menu-item"><a href="contact.php">contact</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="tgmenu__categories d-none d-md-block">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 12H6.85714V6.85714H12V12ZM5.14286 12H0V6.85714H5.14286V12ZM12 5.14286H6.85714V0H12V5.14286ZM5.14286 5.14286H0V0H5.14286V5.14286Z" fill="currentcolor" />
                                            </svg>
                                            Browse Categories
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="courses.html">Business</a></li>
                                            <li><a class="dropdown-item" href="courses.html">Data Science</a></li>
                                            <li><a class="dropdown-item" href="courses.html">Art & Design</a></li>
                                            <li><a class="dropdown-item" href="courses.html">Marketing</a></li>
                                            <li><a class="dropdown-item" href="courses.html">Finance</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="mini-cart-icon">
                                            <a href="shop-details.php" class="cart-count">
                                                <img src="assets/img/icons/cart.svg" alt="cart">
                                                <?php
                                                if (isset($_SESSION['cartItems'])) {
                                                    // Compter le nombre d'éléments dans le panier
                                                    $count = count($_SESSION['cartItems']);
                                                    echo'<span class="mini-cart-count" id="cart-count">'. $count.'</span>';
                                                } else {
                                                    echo "";
                                                }
                                                ?>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="tgmobile__menu">
                            <nav class="tgmobile__menu-box">
                                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                                <div class="nav-logo">
                                    <a href="index-2.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                </div>
                                <div class="tgmobile__search">
                                    <form action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="tgmobile__menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="header-btn login-btn"><a href="#" class="btn">Log in</a></li>
                                        <li class="header-btn"><a href="#" class="btn">Try For Free</a></li>
                                    </ul>
                                </div>
                                <div class="social-links">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="tgmobile__menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->


    <!-- main-area -->
    <main class="main-area fix">

        <!-- banner-area -->
        <section class="banner-area-two banner-bg-two" data-background="assets/img/banner/banner_bg02.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner__content-two">
                            <img src="assets/img/banner/banner_shape02.png" alt="shape" class="shape" data-aos="zoom-in-right" data-aos-delay="1200">
                            <h3 class="title tg-svg">Explore Your <span class="position-relative"><span class="svg-icon" id="svg-2" data-svg-icon="assets/img/icons/title_shape.svg"></span>Skills</span> With Varieties of Courses</h3>
                            <div class="banner__search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search For Course . . .">
                                    <button><i class="flaticon-searching fa-flip-horizontal"></i></button>
                                </form>
                                <p><a href="courses.html">You can access 7,900+ different courses</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner__images-two">
                            <img src="assets/img/banner/banner_shape03.png" alt="shape" class="shape" data-aos="zoom-in-down" data-aos-delay="800">
                            <img src="assets/img/banner/banner_shape04.png" alt="shape" class="shape" data-aos="zoom-in-left" data-aos-delay="1200">
                            <div class="banner__images-grid">
                                <div class="banner__images-col" data-aos="fade-up" data-aos-delay="200">
                                    <img src="assets/img/banner/banner_img01.png" alt="img">
                                </div>
                                <div class="banner__images-col">
                                    <img src="assets/img/banner/banner_img02.png" alt="img" data-aos="fade-left" data-aos-delay="300">
                                    <img src="assets/img/banner/banner_img03.png" alt="img" data-aos="fade-left" data-aos-delay="400">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/banner/banner_shape01.png" alt="shape" class="banner__two-shape alltuchtopdown">
        </section>
        <!-- banner-area-end -->



        <!-- fact-area -->
        <section class="fact-area position-relative section-pt-120 section-pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="fact__item text-center" style="background-color: #F6F8FC;">
                            <div class="fact__content">
                                <h3 class="count"><span class="odometer" data-count="12"></span>K+</h3>
                                <p>Experience Tutors</p>
                            </div>
                            <div class="fact__img">
                                <img src="assets/img/others/fact_img01.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="fact__item text-center" style="background-color: #FCF6F6;">
                            <div class="fact__content">
                                <h3 class="count"><span class="odometer" data-count="15"></span>M+</h3>
                                <p>Enrolled Students</p>
                            </div>
                            <div class="fact__img">
                                <img src="assets/img/others/fact_img02.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="fact__item text-center" style="background-color: #EAF8ED;">
                            <div class="fact__content">
                                <h3 class="count"><span class="odometer" data-count="10"></span>K+</h3>
                                <p>Qualified Courses</p>
                            </div>
                            <div class="fact__img">
                                <img src="assets/img/others/fact_img03.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fact__shapes">
                <div class="categories__shapes-item rotateme">
                    <img src="assets/img/objects/categories_shape01.png" alt="shape">
                </div>
            </div>
        </section>
        <!-- fact-area-end -->


        <section class="courses-area section-pt-120 section-pb-90">
    <div class="container">
        <div class="section__title-wrap">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="section__title text-center text-lg-start">
                        <span class="sub-title">10,000+ Unique Online Courses</span>
                        <h2 class="title tg-svg">Our <span class="position-relative"><span class="svg-icon" id="svg-4" data-svg-icon="assets/img/icons/title_shape.svg"></span>Featured</span> Courses</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="courses__nav-active">
                        <button class="active" data-filter="*">All Courses <span>New</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row courses-active row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "lms";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("La connexion à la base de données a échoué : " . $conn->connect_error);
            }
            $sql = "SELECT * FROM formations  ORDER BY ID_formation DESC LIMIT 8";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $formateur = $row["ID_Formateur"];
                    $title = $row["Titre"];
                    $duration = $row["Heure"];
                    $chapter = $row["chapitre"];
                    $price = $row["Prix"];
                    $langage = $row["langue"];
                    $category = $row["ID_Categorie"];
                    $id_formation = $row["ID_Formation"];
                    $studentLesson = $row["studentLesson"];
                    $ratenote = $row["ratenote"];
                    $lien_details = "course-details.php?id=" . $id_formation;

                    // Récupération de l'image de la formation
                    $sql_images = "SELECT nom_image FROM images WHERE ID_Formation = $id_formation ORDER BY ID_image LIMIT 1";
                    $result_images = $conn->query($sql_images);

                    // Récupération de l'image de l'auteur
                    $sql_auth_images = "SELECT nom_image FROM authors WHERE ID_Formation = $id_formation ORDER BY ID_image LIMIT 1";
                    $result_auth_images = $conn->query($sql_auth_images);

                    // Récupération du nom de la catégorie
                    $sql_category = "SELECT Nom_Categorie FROM Categories WHERE ID_Categorie = $category";
                    $result_category = $conn->query($sql_category);
                    $category_name = "";
                    if ($result_category->num_rows > 0) {
                        $category_row = $result_category->fetch_assoc();
                        $category_name = $category_row["Nom_Categorie"];
                    }

                    // Récupération du nom du formateur
                    $sql_formateur = "SELECT Nom_formateur FROM formateurs WHERE ID_Formateur = $formateur";
                    $result_formateur = $conn->query($sql_formateur);
                    $formateur_name = "";
                    if ($result_formateur->num_rows > 0) {
                        $formateur_row = $result_formateur->fetch_assoc();
                        $formateur_name = $formateur_row["Nom_formateur"];
                    }
                    echo '<div class="col grid-item cat-two cat-three">
                            <div class="courses__item-two shine__animate-item">
                                <div class="courses__item-two-thumb">
                                    <a href="' . $lien_details . '" class="shine__animate-link">';
                    if ($result_images !== false && $result_images->num_rows > 0) {
                        while ($image_row = $result_images->fetch_assoc()) {
                            $chemin_image = 'lms/img/' . $image_row["nom_image"];
                            echo "<img src='$chemin_image'>";
                        }
                    } else {
                        // Vous pouvez gérer le cas où aucune image n'est trouvée ici si nécessaire
                    }
                    echo '</a>
                                    <div class="course__price">
                                        <svg viewBox="0 0 104 34" fill="none" x="0px" y="0px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5689 2.56089L0 34H99C101.761 34 104 31.7614 104 29V0H21.9336C20.1223 0 18.4525 0.979667 17.5689 2.56089Z" fill="currentColor"/>
                                        </svg>
                                        <h3 class="price">' . number_format($price, 0, '', '') . ' CFA</h3>
                                    </div>
                                </div>
                                <div class="courses__item-two-content">
                                    <a href="#" class="courses__item-tag" style="background-color: #E8F9EF; color: #04BC53;">' . $category_name . '</a>
                                    <h5 class="title"><a href="' . $lien_details . '">' . $title . '</a></h5>
                                    <ul class="courses__item-meta list-wrap">
                                        <li><i class="flaticon-file"></i> ' . $chapter . '</li>
                                        <li><i class="flaticon-timer"></i>' . $duration . '</li>
                                        <li><i class="flaticon-user-1"></i>' . $studentLesson . '</li>
                                    </ul>
                                    <div class="courses__item-bottom">
                                        <div class="author">
                                            <a href="#">';
                    if ($result_auth_images !== false && $result_auth_images->num_rows > 0) {
                        while ($image_row = $result_auth_images->fetch_assoc()) {
                            $chemin_image = 'lms/authors/' . $image_row["nom_image"];
                            echo "<img src='$chemin_image'>";
                        }
                    } else {
                        // Vous pouvez gérer le cas où aucune image n'est trouvée ici si nécessaire
                    }
                    echo '</a>
                                            <a href="#">' . $formateur_name . '</a>
                                        </div>
                                        <div class="courses__item-rating">
                                            <i class="fas fa-star"></i>
                                            <span class="rating-count">(' . $ratenote . ')</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            }
            ?>
        </div>
    </div>
</section>

            </div>
            <div class="courses__shapes">
                <div class="courses__shapes-item alltuchtopdown"><img src="assets/img/courses/course_shape01.png" alt="shape"></div>
                <div class="courses__shapes-item alltuchtopdown"><img src="assets/img/courses/course_shape02.png" alt="shape"></div>
            </div>
        </section>
<!-- course-area-end -->


            <!-- testimonial-area -->
            <section class="testimonial-area position-relative section-pt-120 section-pb-57">
                <div class="container">
                    <div class="testimonial__wrapper">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-7 col-md-8">
                                <div class="section__title text-center">
                                    <span class="sub-title">Our Testimonials</span>
                                    <h2 class="title tg-svg">What’s Our <span class="position-relative"><span class="svg-icon" id="testimonial-svg" data-svg-icon="assets/img/icons/title_shape.svg"></span>Student</span> Think</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-lg-11">
                                <div class="testimonial-active">
                                    <div class="testimonial__item">
                                        <div class="testimonial__quote">
                                            <img src="assets/img/icons/quote02.png" alt="icon">
                                        </div>
                                        <div class="testimonial__rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>“ when an unknown printer took a galley type and scrambled atype specimen book. It has survived not centuries leapelectronic types essentially unchanged. “</p>
                                        <div class="testimonial__avatar">
                                            <h4 class="name">Parker Robert</h4>
                                            <span class="designation">UI Designer</span>
                                        </div>
                                    </div>
                                    <div class="testimonial__item">
                                        <div class="testimonial__quote">
                                            <img src="assets/img/icons/quote02.png" alt="icon">
                                        </div>
                                        <div class="testimonial__rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>“ when an unknown printer took a galley type and scrambled atype specimen book. It has survived not centuries leapelectronic types essentially unchanged. “</p>
                                        <div class="testimonial__avatar">
                                            <h4 class="name">Harry Protar</h4>
                                            <span class="designation">Web Designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__avatars">
                            <img src="assets/img/others/testi01.png" alt="img" data-aos="zoom-in" data-aos-delay="200">
                            <img src="assets/img/others/testi02.png" alt="img" data-aos="zoom-in" data-aos-delay="300">
                            <img src="assets/img/others/testi03.png" alt="img" data-aos="zoom-in" data-aos-delay="400">
                            <img src="assets/img/others/testi04.png" alt="img" data-aos="zoom-in" data-aos-delay="500">
                            <img src="assets/img/others/testi05.png" alt="img" data-aos="zoom-in" data-aos-delay="600">
                            <img src="assets/img/others/testi06.png" alt="img" data-aos="zoom-in" data-aos-delay="700">
                        </div>
                    </div>
                </div>
                <div class="testimonial__shapes-two">
                    <img class="object" src="assets/img/objects/blog_shape01.png" width="97" alt="Object">
                    <img class="object rotateme" src="assets/img/objects/blog_shape02.png" width="66" alt="Object">
                </div>
            </section>
            <!-- testimonial-area-end -->

            <div class="brand-area-two">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col">
                            <div class="brand__item">
                                <a href="#"><img src="assets/img/brand/brand01.png" alt="brand"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="brand__item">
                                <a href="#"><img src="assets/img/brand/brand02.png" alt="brand"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="brand__item">
                                <a href="#"><img src="assets/img/brand/brand03.png" alt="brand"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="brand__item">
                                <a href="#"><img src="assets/img/brand/brand04.png" alt="brand"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="brand__item">
                                <a href="#"><img src="assets/img/brand/brand05.png" alt="brand"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="brand__item">
                                <a href="#"><img src="assets/img/brand/brand06.png" alt="brand"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="brand__item">
                                <a href="#"><img src="assets/img/brand/brand07.png" alt="brand"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- cta-area -->
        <section class="cta-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cta__wrapper">
                            <div class="section__title white-title">
                                <h2 class="title tg-svg">Join us & <span class="position-relative"><span class="svg-icon" id="svg-9" data-svg-icon="assets/img/icons/title_shape.svg"></span>Spread</span> Experiences</h2>
                            </div>
                            <div class="cta__desc">
                                <p>Borem ipsum dolor sit amet, consectetur adipiscing eliawe awUt elit ellus, luctus nec ullamcorper mattisBorem</p>
                            </div>
                            <div class="tg-button-wrap justify-content-center justify-content-md-end">
                                <a href="contact.html" class="btn white-btn tg-svg"><span class="text">Become an Instructor</span> <span class="svg-icon" id="cta-btn" data-svg-icon="assets/img/icons/btn-arrow.svg"></span></a>
                            </div>
                            <img class="object" src="assets/img/objects/cta_shape01.svg" style="left: 25px; top: -35px;" alt="Object" data-aos="fade-down" data-aos-delay="400">
                            <img class="object" src="assets/img/objects/cta_shape02.svg" style="right: -20px; bottom: -80px;" alt="Object" data-aos="fade-up" data-aos-delay="400">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-area-end -->

    </main>
    <!-- main-area-end -->



    <!-- footer-area -->
    <footer class="footer-bg" data-bg-color="var(--tg-common-color-dark)">
        <div class="footer__top-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer__about">
                                <div class="footer__logo logo">
                                    <a href="index-2.html"><img src="assets/img/logo/secondary_logo.png" alt="img"></a>
                                </div>
                                <p>when an unknown printer took galley of type and scrambled it to make pspecimen bookt has.</p>
                                <ul class="list-wrap m-0 p-0">
                                    <li class="address">463 7th Ave, NY 10018, USA</li>
                                    <li class="number">+123 88 9900 456</li>
                                    <li class="socials">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer-widget widget_nav_menu">
                            <h4 class="fw-title">Resources</h4>
                            <ul class="list-wrap">
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="contact.html">Help Center</a></li>
                                <li><a href="#">Refund</a></li>
                                <li><a href="#">Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer-widget widget_nav_menu">
                            <h4 class="fw-title">Courses</h4>
                            <ul class="list-wrap">
                                <li><a href="courses.html">Life Coach</a></li>
                                <li><a href="courses.html">Business Coach</a></li>
                                <li><a href="courses.html">Health Coach</a></li>
                                <li><a href="courses.html">Development</a></li>
                                <li><a href="courses.html">Web Design</a></li>
                                <li><a href="courses.html">SEO Optimize</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Subscribe Newsletter</h4>
                            <div class="footer__newsletter">
                                <p class="desc">Known printer took galley type and
                                scrambled it to make.</p>
                                <form action="#">
                                    <input type="email" placeholder="Enter your email">
                                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright__text">
                            <p>Copyright © 2023 eduvalt. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="copyright__menu">
                            <ul class="list-wrap d-flex flex-wrap justify-content-center justify-content-lg-end">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->




    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/tween-max.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slick-animation.min.js"></script>
    <script src="assets/js/tg-cursor.min.js"></script>
    <script src="assets/js/vivus.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>


</html>