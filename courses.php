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

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h3 class="title">Our Courses</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index-2.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">All Courses</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- all-courses -->
        <section class="all-courses-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-2 order-lg-0">
                        <aside class="courses__sidebar">
                            <div class="shop-widget">
                                <h4 class="widget-title">Filter by Category</h4>
                                <div class="shop-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_1">
                                                <label class="form-check-label" for="cat_1">Art & Design (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_2">
                                                <label class="form-check-label" for="cat_2">Business (12)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_3">
                                                <label class="form-check-label" for="cat_3">Data Science (7)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_4">
                                                <label class="form-check-label" for="cat_4">Development (10)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_5">
                                                <label class="form-check-label" for="cat_5">Finance (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_6">
                                                <label class="form-check-label" for="cat_6">Health & Fitness (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_7">
                                                <label class="form-check-label" for="cat_7">Lifestyle (9)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_8">
                                                <label class="form-check-label" for="cat_8">Marketing (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_9">
                                                <label class="form-check-label" for="cat_9">Music (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_10">
                                                <label class="form-check-label" for="cat_10">Development (9)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_6">
                                                <label class="form-check-label" for="cat_6">Health & Fitness (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_7">
                                                <label class="form-check-label" for="cat_7">Lifestyle (9)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_8">
                                                <label class="form-check-label" for="cat_8">Marketing (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_9">
                                                <label class="form-check-label" for="cat_9">Music (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_10">
                                                <label class="form-check-label" for="cat_10">Development (9)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="shop-widget">
                                <h4 class="widget-title">Ratings</h4>
                                <div class="shop-rating-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(5.0)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(4.1)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(3.2)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(2.1)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(1.2)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="shop-top-wrap courses-top-wrap">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="shop-top-left">
                                        <p>We found 101 courses for you</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                                        <div class="shop-top-right m-0 ms-md-auto">
                                            <select name="orderby" class="orderby">
                                                <option value="Default sorting">Default sorting</option>
                                                <option value="Sort by popularity">Sort by popularity</option>
                                                <option value="Sort by average rating">Sort by average rating</option>
                                                <option value="Sort by latest">Sort by latest</option>
                                                <option value="Sort by latest">Sort by latest</option>
                                            </select>
                                        </div>
                                        <ul class="nav nav-tabs courses__nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 1H2C1.44772 1 1 1.44772 1 2V6C1 6.55228 1.44772 7 2 7H6C6.55228 7 7 6.55228 7 6V2C7 1.44772 6.55228 1 6 1Z"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16 1H12C11.4477 1 11 1.44772 11 2V6C11 6.55228 11.4477 7 12 7H16C16.5523 7 17 6.55228 17 6V2C17 1.44772 16.5523 1 16 1Z"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M6 11H2C1.44772 11 1 11.4477 1 12V16C1 16.5523 1.44772 17 2 17H6C6.55228 17 7 16.5523 7 16V12C7 11.4477 6.55228 11 6 11Z"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16 11H12C11.4477 11 11 11.4477 11 12V16C11 16.5523 11.4477 17 12 17H16C16.5523 17 17 16.5523 17 16V12C17 11.4477 16.5523 11 16 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                                                    <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 6C0.67 6 0 6.67 0 7.5C0 8.33 0.67 9 1.5 9C2.33 9 3 8.33 3 7.5C3 6.67 2.33 6 1.5 6ZM1.5 0C0.67 0 0 0.67 0 1.5C0 2.33 0.67 3 1.5 3C2.33 3 3 2.33 3 1.5C3 0.67 2.33 0 1.5 0ZM1.5 12C0.67 12 0 12.68 0 13.5C0 14.32 0.68 15 1.5 15C2.32 15 3 14.32 3 13.5C3 12.68 2.33 12 1.5 12ZM5.5 14.5H17.5C18.05 14.5 18.5 14.05 18.5 13.5C18.5 12.95 18.05 12.5 17.5 12.5H5.5C4.95 12.5 4.5 12.95 4.5 13.5C4.5 14.05 4.95 14.5 5.5 14.5ZM5.5 8.5H17.5C18.05 8.5 18.5 8.05 18.5 7.5C18.5 6.95 18.05 6.5 17.5 6.5H5.5C4.95 6.5 4.5 6.95 4.5 7.5C4.5 8.05 4.95 8.5 5.5 8.5ZM4.5 1.5C4.5 2.05 4.95 2.5 5.5 2.5H17.5C18.05 2.5 18.5 2.05 18.5 1.5C18.5 0.95 18.05 0.5 17.5 0.5H5.5C4.95 0.5 4.5 0.95 4.5 1.5Z" fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                <div class="row courses__grid-wrap row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
                                    
                                    
                                    <?php

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "lms";
   
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   if ($conn->connect_error) {
       die("La connexion à la base de données a échoué : " . $conn->connect_error);
   }
   
   $per_page = 6;
   $page = isset($_GET['page']) ? $_GET['page'] : 1;
   $offset = ($page - 1) * $per_page;
   
   $sql = "SELECT * FROM formations WHERE ID_Categorie =1 ORDER BY ID_formation DESC LIMIT $per_page OFFSET $offset";
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
   $ratenote = $row["ratenote"];
   $studentLesson = $row["studentLesson"];
   $lien_details = "course-details.php?id=" . $id_formation;

   $sql_images = "SELECT nom_image FROM images WHERE ID_Formation = $id_formation ORDER BY ID_image LIMIT 1" ;
   $result_images = $conn->query($sql_images);

   $sql_auth_images = "SELECT nom_image FROM authors WHERE ID_Formation = $id_formation ORDER BY ID_image LIMIT 1" ;
   $result_auth_images = $conn->query($sql_auth_images);


   $sql_category = "SELECT Nom_Categorie FROM Categories WHERE ID_Categorie = $category";
   $result_category = $conn->query($sql_category);
   $category_name = "";
   if ($result_category->num_rows > 0) {
       $category_row = $result_category->fetch_assoc();
       $category_name = $category_row["Nom_Categorie"];
   }

   $sql_formateur = "SELECT Nom_formateur FROM formateurs WHERE ID_Formateur = $formateur";
   $result_formateur = $conn->query($sql_formateur);
   $formateur_name = "";
   if ($result_formateur->num_rows > 0) {
       $formateur_row = $result_formateur->fetch_assoc();
       $formateur_name = $formateur_row["Nom_formateur"];
   }
                                    
                                    
                                    echo'<div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">';
                                                echo'<a href="'.$lien_details.'" class="shine__animate-link">';
                                                if ($result_images !== false && $result_images->num_rows > 0) {
                                                    while ($image_row = $result_images->fetch_assoc()) {
                                                        $chemin_image = 'lms/img/' . $image_row["nom_image"];
                                                        echo"<img src='$chemin_image'>";
                                                }
                                            } else {
                                                // Vous pouvez gérer le cas où aucune image n'est trouvée ici si nécessaire
                                            }
                                                echo'</a>
                                                <div class="author">
                                                    <a href="#">';
                                                    if ($result_auth_images !== false && $result_auth_images->num_rows > 0) {
                                                        while ($image_row = $result_auth_images->fetch_assoc()) {
                                                            $chemin_image = 'lms/authors/' . $image_row["nom_image"];
                                                            echo"<img src='$chemin_image'>";
                                                    }
                                                } else {
                                                    // Vous pouvez gérer le cas où aucune image n'est trouvée ici si nécessaire
                                                }
                                                
                                                    echo'</a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #E8F9EF; color: #04BC53;">'.$category_name.'</a>
                                                <h5 class="title"><a href="'.$lien_details.'">'.$title.'</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i>'.$chapter.'</li>
                                                    <li><i class="flaticon-timer"></i>'.$duration.'</li>
                                                    <li><i class="flaticon-user-1"></i>'.$studentLesson.'</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price">' . number_format($price, 0, '', '') . ' CFA</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">('.$ratenote.')</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';

                                    
                                }
                            } else {
                                echo "Aucun bien trouvé.";
                            }
                            
                          
                           
                            echo'</div>';
// ... Autres parties de votre code ...
$sql_count = "SELECT COUNT(*) as total FROM formations WHERE ID_categorie = 1";
$result_count = $conn->query($sql_count);

if ($result_count->num_rows > 0) {
    $row_count = $result_count->fetch_assoc();
    $total_count = $row_count['total'];
}


$total_pages = ceil($total_count / $per_page);

echo '<nav class="pagination__wrap mt-30">
        <ul class="list-wrap">';
for ($i = 1; $i <= $total_pages; $i++) {
    echo '<li' . ($page == $i ? ' class="active"' : '') . '><a href="courses.php?page=' . $i . '">' . $i . '</a></li>';
}
echo '  </ul>
      </nav>';


                                ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- all-courses-end -->

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


<!-- Mirrored from themeadapt.com/tm/eduvalt/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 08:29:46 GMT -->
</html>