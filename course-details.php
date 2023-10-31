<?php
session_start();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

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

    <?php

if (isset($_GET['id'])) {
    $id_formation = $_GET['id'];

// Requête SQL pour récupérer les détails de l'annonce
$sql = "SELECT * FROM formations WHERE ID_formation = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_formation);


if ($stmt->execute()) {
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {


    $formateur = $row["ID_Formateur"];
    $title = $row["Titre"];
    $duration = $row["Heure"];
    $chapter = $row["chapitre"];
    $price = $row["Prix"];
    $langage = $row["langue"];
    $category = $row["ID_Categorie"];
    $id_formation = $row["ID_Formation"];
    $descriptionC = $row["Descriptionc"];
    $descriptionP = $row["Descriptionp"];
    $descriptionD = $row["Descriptiond"];
    $chapterone = $row["chapterone"];
    $timeone = $row ["timeone"];
    $chaptertwo = $row['chaptertwo'];
    $timetwo = $row['timetwo'];
    $chapterthree = $row['chapterthree'];
    $timethree = $row['timethree'];
    $chapterfour = $row['chapterfour'];
    $timefour = $row['timefour'];
    $chapterfive = $row['chapterfive'];
    $timefive = $row['timefive'];
    $chaptersix = $row['chaptersix'];
    $timesix = $row['timesix'];
    $chapterseven = $row['chapterseven'];
    $timeseven = $row['timeseven'];
    $chaptereight = $row['chaptereight'];
    $timeeight = $row['timeeight'];
    $chapternine = $row['chapternine'];
    $timenine = $row['timenine'];
    $chapterten = $row['chapterten'];
    $timeten = $row['timeten'];
    $studentLesson= $row['studentLesson'];
    $studentTeacher= $row['studentTeacher'];
    $ratenote = $row["ratenote"];

    $lien_panier = "add-to-cart.php?id=".$id_formation;

    $sql_images = "SELECT nom_image FROM images WHERE ID_Formation = $id_formation ORDER BY ID_image LIMIT 1" ;
    $result_images = $conn->query($sql_images);

    $sql_rate_images = "SELECT nom_image FROM rate WHERE ID_Formation = $id_formation ORDER BY ID_image LIMIT 1" ;
    $result_rate_images = $conn->query($sql_rate_images);

    $sql_auth_images = "SELECT nom_image FROM authors WHERE ID_Formation = $id_formation ORDER BY ID_image LIMIT 1" ;
    $result_auth_images = $conn->query($sql_auth_images);

    $sql_videos = "SELECT Chemin_video FROM videos WHERE ID_Formation = $id_formation ORDER BY ID_video LIMIT 1" ;
    $result_videos = $conn->query($sql_videos);

    $video_path = "";
    if ($result_videos !== false && $result_videos->num_rows > 0) {
        $video_row = $result_videos->fetch_assoc();
        $video_path = 'lms/videos/'.$video_row["Chemin_video"];
    }


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

    $sql_title_formateur = "SELECT title FROM formateurs WHERE ID_Formateur = $formateur";
    $result_title_formateur = $conn->query($sql_title_formateur);
    $formateur_title = "";
    if ($result_title_formateur->num_rows > 0) {
        $formateur_row = $result_title_formateur->fetch_assoc();
        $formateur_title = $formateur_row["title"];
    }


    $sql_bio_formateur = "SELECT long_bio FROM formateurs WHERE ID_Formateur = $formateur";
    $result_bio_formateur = $conn->query($sql_bio_formateur);
    $formateur_bio = "";
    if ($result_bio_formateur->num_rows > 0) {
        $formateur_row = $result_bio_formateur->fetch_assoc();
        $formateur_bio = $formateur_row["long_bio"];
    }


   $sql_same_category = "SELECT formations.*, Categories.Nom_Categorie AS Nom_Categorie, authors.nom_image AS nom_image
        FROM formations 
        LEFT JOIN Categories 
        ON formations.ID_Categorie = Categories.ID_Categorie
        LEFT JOIN authors 
        ON formations.ID_Formation = authors.ID_Formation
        WHERE formations.ID_Categorie = ?";
        $stmt_same_category = $conn->prepare($sql_same_category);
        $stmt_same_category->bind_param("i", $category);
        $stmt_same_category->execute();
        $result_same_category = $stmt_same_category->get_result();

   
        echo'<section class="courses__breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" >
                        <div class="courses__breadcrumb-content">
                            <a href="#" class="category">'.$category_name.'</a>
                            <h3 class="title">'.$title.'</h3>
                            <p>'.$descriptionP.'</p>
                            <ul class="courses__item-meta list-wrap">
                                <li>
                                    <div class="author">
                                        <a href="#">';
                                        if ($result_auth_images !== false && $result_auth_images->num_rows > 0) {
                                            while ($image_row = $result_auth_images->fetch_assoc()) {
                                                $chemin_images = 'lms/authors/' . $image_row["nom_image"];
                                                echo"<img src='$chemin_images' style='width:70px; height:70px;'>";
                                        }
                                    } else {
                                        // Vous pouvez gérer le cas où aucune image n'est trouvée ici si nécessaire
                                    }
                                       echo' </a>
                                        <a href="#">'.$formateur_name.'</a>
                                    </div>
                                </li>
                                <li><i class="flaticon-file"></i> '.$chapter.'</li>
                                <li><i class="flaticon-timer"></i>'.$duration.'</li>
                                <li><i class="flaticon-user-1"></i>'.$studentLesson.'</li>
                                <li>
                                    <div class="rating">';
                                    if ($result_rate_images !== false && $result_rate_images->num_rows > 0) {
                                        while ($image_row = $result_rate_images->fetch_assoc()) {
                                            $chemin_image = 'lms/rate/' . $image_row["nom_image"];
                                            echo"<img src='$chemin_image' style='width:150px; height:30px;'>";
                                    }
                                } else {
                                    // Vous pouvez gérer le cas où aucune image n'est trouvée ici si nécessaire
                                }
                                        echo'<span class="rating-count">('.$ratenote.')</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="courses-details-area section-pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="courses__details-wrapper">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="true">Aperçu</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Reviews</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                                    <div class="courses__details-content">

                                    <h3 class="title"></h3>
                                        <p>'.$descriptionC.'</p>
                                        <div class="courses__details-inner">
                                            <h3 class="title">Méthodologie</h3>
                                            <p>'.$descriptionD.'</p>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="courses__details-instructors">
                                        <h4 class="title"></h4>
                                        <div class="courses__instructors-list">
                                            <div class="courses__instructors-item">
                                                <div class="courses__instructors-thumb">';

                                                        echo"<img src='$chemin_images'>";
                                            
                                               
                                               echo' </div>
                                                <div class="courses__instructors-content">
                                                    <h5 class="name"><a href="instructor-details.html">'.$formateur_name.'</a></h5>
                                                    <span class="designation">'.$formateur_title.'</span>
                                                    <ul class="meta list-wrap d-flex flex-wrap">
                                                        <li><i class="flaticon-user-1"></i> '.$studentTeacher.' Apprenants</li>
                                                    </ul>
                                                    <p> '.$formateur_bio.'</p>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="courses__details-curriculum">
                                <h4 class="title"></h4>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                Introduction
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="list-wrap">';
                                                if (isset($chapterone)&& ($timeone)) {
                                                    echo'<li class="course-item">
                                                        <a href="#" class="course-item-link">
                                                            <span class="item-name">'.$chapterone.'</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">'.$timeone.'</span>
                                                                <span class="item-meta course-item-status">
                                                                    <img src="assets/img/icons/lock.svg" alt="icon">
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>';
                                                }
                                                if (isset($chaptertwo)&& ($timetwo)) {
                                                    echo'<li class="course-item">
                                                        <a href="#" class="course-item-link">
                                                            <span class="item-name">'.$chaptertwo.'</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">'.$timetwo.'</span>
                                                                <span class="item-meta course-item-status">
                                                                    <img src="assets/img/icons/lock.svg" alt="icon">
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>';
                                                }
                                                if (isset($chapterthree)&& ($timethree)) {
                                                    echo'<li class="course-item">
                                                        <a href="#" class="course-item-link">
                                                            <span class="item-name">'.$chapterthree.'</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">'.$timethree.'</span>
                                                                <span class="item-meta course-item-status">
                                                                    <img src="assets/img/icons/lock.svg" alt="icon">
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>';
                                                }

                                                if (isset($chapterfour)&& ($timefour)) {
                                                    echo'<li class="course-item">
                                                        <a href="#" class="course-item-link">
                                                            <span class="item-name">'.$chapterfour.'</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">'.$timefour.'</span>
                                                                <span class="item-meta course-item-status">
                                                                    <img src="assets/img/icons/lock.svg" alt="icon">
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>';
                                                }

                                                if (isset($chapterfive)&& ($timefive)) {
                                                    echo'<li class="course-item">
                                                        <a href="#" class="course-item-link">
                                                            <span class="item-name">'.$chapterfive.'</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">'.$timefive.'</span>
                                                                <span class="item-meta course-item-status">
                                                                    <img src="assets/img/icons/lock.svg" alt="icon">
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>';
                                                }

                                                if (isset($chaptersix)&& ($timesix)) {
                                                    echo'<li class="course-item">
                                                        <a href="#" class="course-item-link">
                                                            <span class="item-name">'.$chaptersix.'</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">'.$timesix.'</span>
                                                                <span class="item-meta course-item-status">
                                                                    <img src="assets/img/icons/lock.svg" alt="icon">
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>';
                                                }

                                                if (isset($chapterseven)&& ($timeseven)) {
                                                    echo'<li class="course-item">
                                                        <a href="#" class="course-item-link">
                                                            <span class="item-name">'.$chapterseven.'</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">'.$timeseven.'</span>
                                                                <span class="item-meta course-item-status">
                                                                    <img src="assets/img/icons/lock.svg" alt="icon">
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>';
                                                }

                                                if (isset($chaptereight)&& ($timeeight)) {
                                                    echo'<li class="course-item">
                                                        <a href="#" class="course-item-link">
                                                            <span class="item-name">'.$chaptereight.'</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">'.$timeeight.'</span>
                                                                <span class="item-meta course-item-status">
                                                                    <img src="assets/img/icons/lock.svg" alt="icon">
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>';
                                                }

                                                if (isset($chapternine)&& ($timenine)) {
                                                    echo'<li class="course-item">
                                                        <a href="#" class="course-item-link">
                                                            <span class="item-name">'.$chapternine.'</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">'.$timenine.'</span>
                                                                <span class="item-meta course-item-status">
                                                                    <img src="assets/img/icons/lock.svg" alt="icon">
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>';
                                                }

                                                if (isset($chapterten)&& ($timeten)) {
                                                    echo'<li class="course-item">
                                                        <a href="#" class="course-item-link">
                                                            <span class="item-name">'.$chapterten.'</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">'.$timeten.'</span>
                                                                <span class="item-meta course-item-status">
                                                                    <img src="assets/img/icons/lock.svg" alt="icon">
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>';
                                                }
                                                echo'</ul>
                                            </div>
                                        </div>
                                    </div>



                                      
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <aside class="courses__details-sidebar">
                            <div class="event-widget">
                                <div class="thumb">';
                                if ($result_images !== false && $result_images->num_rows > 0) {
                                    while ($image_row = $result_images->fetch_assoc()) {
                                        $chemin_image = 'lms/img/' . $image_row["nom_image"];
                                        echo"<img src='$chemin_image'>";
                                }
                            } else {
                                // Vous pouvez gérer le cas où aucune image n'est trouvée ici si nécessaire
                            }
                           
                            echo'<a href="' .$video_path. '" class="popup-video"><i class="fas fa-play"></i></a>';
                               echo' </div>
                                <div class="event-cost-wrap">
                                    <h4 class="price"><strong>Prix:</strong>' . number_format($price, 0, '', '') . ' CFA</h4>
                                    <a  class="btn" href="'.$lien_panier.'">Joindre ce cours</a>
                                    <div class="event-information-wrap">
                                        <ul class="list-wrap">
                                            <li><i class="flaticon-timer"></i>Durée <span>'.$duration.'</span></li>
                                            <li><i class="flaticon-file"></i>Chapitre <span>'.$chapter.'</span></li>
                                            <li><i class="flaticon-user-1"></i>Etudiants <span>'.$studentLesson.'</span></li>
                                            <li><i class="flaticon-bars"></i>Langue <span>'.$langage.'</span></li>
                                            <li><i class="flaticon-flash"></i>Categorie <span>'.$category_name.'</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="blog-widget">
                                <h4 class="widget-title">Related Courses</h4>';
                                while ($category_row = $result_same_category->fetch_assoc()) {
                                    $category_titre = $category_row["Titre"];
                                    $category_prix = $category_row["Prix"];
                                    $category_image = 'lms/authors/'.$category_row["nom_image"];

                               echo' <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="course-details.html">
                                            <img src="'.$category_image.'" alt="img">
                                        </a>
                                    </div>
                                    <div class="rc-post-content">
                                        <h4 class="title"><a href="course-details.html">'.$category_titre.'</a></h4>
                                        <span class="price">'.$category_prix.'</span>
                                    </div>
                                </div>';
                                }
                            echo' </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>';
	} else {
		echo "Aucune annonce trouvée avec cet ID.";
	}
} else {
	echo "Erreur lors de la récupération des détails de l'annonce : " . $stmt->error;
}
} else {
echo "ID de l'annonce manquant dans l'URL.";
}

// Fermer la connexion à la base de données
$conn->close();
?>

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

    <script>
  
  // Utiliser PHP pour imprimer la valeur de $id_formation dans le script JavaScript
  let formationId = <?php echo json_encode($id_formation) ?>;
  console.log('formationId:', formationId);
  // Charger les articles depuis le stockage local lors du chargement de la page
  let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
  console.log('cartItems:', cartItems);
  // Fonction pour ajouter au panier et mettre à jour le compteur
  function addToCart(formationId) {
    // Vérifier si la formation n'existe pas déjà dans le panier
    let isAlreadyAdded = cartItems.some(item => item === formationId);
    console.log('isAlreadyAdded:', isAlreadyAdded); 
    if (!isAlreadyAdded) {
      cartItems.push(formationId);
      // Mettre à jour le stockage local
      localStorage.setItem('cartItems', JSON.stringify(cartItems));
      updateCartCount();
    }
  }

  // Fonction pour mettre à jour le compteur de panier
  function updateCartCount() {
    const cartCountElement = document.getElementById('cart-count');
    if (cartCountElement) {
      cartCountElement.textContent = cartItems.length;
    }
  }

   // Appeler la fonction addToCart avec l'identifiant de la formation
   if (!cartItems.includes(formationId)) {
  addToCart(formationId);
}

  // Appeler la fonction updateCartCount lors du chargement de la page pour mettre à jour le compteur
  window.addEventListener('load', updateCartCount);

 
</script>



</script>

</body>


</html>