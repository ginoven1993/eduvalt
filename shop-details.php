<?php
session_start();
?>



<!doctype html>
<html class="no-js" lang="en">

<script src="https://cdn.tailwindcss.com"></script>

<!-- Mirrored from themeadapt.com/tm/eduvalt/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 08:29:58 GMT -->
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
    <header class="tg-header__style-three">
        <div class="tg-header__top">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="tg-header__top-info list-wrap">
                            <li><i class="flaticon-pin"></i> <span>463 7th Ave, NY 10018, USA</span></li>
                            <li><i class="flaticon-email"></i> <a href="mailto:info@gmail.com">info@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="tg-header__top-social list-wrap">
                            <li>Follow Us On :</li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="tg-header__area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <a href="index-2.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                </div>
                                <div class="tgmenu__categories d-none d-md-block">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 12H6.85714V6.85714H12V12ZM5.14286 12H0V6.85714H5.14286V12ZM12 5.14286H6.85714V0H12V5.14286ZM5.14286 5.14286H0V0H5.14286V5.14286Z" fill="currentcolor" />
                                            </svg>
                                            Categories
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Business</a></li>
                                            <li><a class="dropdown-item" href="#">Data Science</a></li>
                                            <li><a class="dropdown-item" href="#">Art & Design</a></li>
                                            <li><a class="dropdown-item" href="#">Marketing</a></li>
                                            <li><a class="dropdown-item" href="#">Finance</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children"><a href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index-2.html">Home One</a></li>
                                                <li><a href="index-3.html">Home Two</a></li>
                                                <li><a href="index-4.html">Home Three</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses.html">All Courses</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="instructors.html">Our Instructors</a></li>
                                                <li><a href="instructor-details.html">Instructor Details</a></li>
                                                <li><a href="mentors.html">Our Mentors</a></li>
                                                <li><a href="events.html">Our Events</a></li>
                                                <li><a href="events-details.html">Event Details</a></li>
                                                <li><a href="faq.html">Asked Question</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                            </ul>
                                        </li>
                                        <li class="active menu-item-has-children"><a href="#">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li class="active"><a href="shop-details.html">Shop Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog.html">Blog Standard</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tgmenu__search-bar">
                                    <form action="#">
                                        <input type="text" placeholder="Search For Course . . .">
                                        <button type="submit"><i class="flaticon-searching"></i></button>
                                    </form>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="mini-cart-icon">
                                            <a href="shop.html" class="cart-count">
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
                                        <li class="header-btn"><a href="contact.html" class="btn">Sign Up</a></li>
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
                            <h3 class="title">Shop Details</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index-2.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">SEO Tricks & Tips</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <!-- main-area-end -->


    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:px-0">
      <h1 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Shopping Cart</h1>
  
      <form class="mt-12">
        <section aria-labelledby="cart-heading">
          <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
  
          <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">

          <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Initialisation du prix total à zéro
$totalPrice = 0;

// Vérifiez si le panier n'est pas vide
if (!empty($_SESSION['cartItems'])) {
    // Récupérez les ID des formations dans le panier
    $id_formation = $_SESSION['cartItems'];

    // Préparez la requête SQL pour récupérer les informations de chaque formation
    $sql = "SELECT * FROM formations WHERE ID_Formation IN (" . implode(',', $id_formation) . ")";
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
       $totalPrice += $price;


       $sql_images = "SELECT nom_image FROM images WHERE ID_Formation = $id_formation ORDER BY ID_image LIMIT 1" ;
       $result_images = $conn->query($sql_images);

       $sql_formateur = "SELECT Nom_formateur FROM formateurs WHERE ID_Formateur = $formateur";
       $result_formateur = $conn->query($sql_formateur);
       $formateur_name = "";
       if ($result_formateur->num_rows > 0) {
           $formateur_row = $result_formateur->fetch_assoc();
           $formateur_name = $formateur_row["Nom_formateur"];
       }

           echo' <li class="flex py-6">
              <div class="flex-shrink-0">';
            
              if ($result_images !== false && $result_images->num_rows > 0) {
                while ($image_row = $result_images->fetch_assoc()) {
                    $chemin_image = 'lms/img/' . $image_row["nom_image"];
                    echo '<img  src="' . $chemin_image . '" class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32">';
                }
            } else {
                // Vous pouvez gérer le cas où aucune image n'est trouvée ici si nécessaire
            }
              
                echo'</div>
  
              <div class="ml-4 flex flex-1 flex-col sm:ml-6">
                <div>
                  <div class="flex justify-between">
                    <h4 class="text-sm">
                      <a href="#" class="font-medium text-gray-700 hover:text-gray-800">'.$title.'</a>
                    </h4>
                    <p class="ml-4 text-sm font-medium text-gray-900">'.$price.'</p>
                  </div>
                  <p class="mt-1 text-sm text-gray-500"></p>
                  <p class="mt-1 text-sm text-gray-500">'.$formateur_name.'</p>
                </div>
  
                <div class="mt-4 flex flex-1 items-end justify-between">
                  <p class="flex items-center space-x-2 text-sm text-gray-700">
                    <svg class="h-0 w-0 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    <span>In stock</span>
                  </p>
                  <div class="ml-4">
                    <button type="button" class="text-sm font-medium text-indigo-600 hover:text-indigo-500 remove-button">
                      <span>Remove</span>
                    </button>
                  </div>
                </div>
              </div>
            </li>';

        }
    } else {
        echo "Aucun bien trouvé.";
    }

           echo' <!-- More products... -->
          </ul>
        </section>
  
        <!-- Order summary -->
        <section aria-labelledby="summary-heading" class="mt-10">
          <h2 id="summary-heading" class="sr-only">Order summary</h2>
  
          <div>
            <dl class="space-y-4">
              <div class="flex items-center justify-between">
                <dt class="text-base font-medium text-gray-900">Subtotal</dt>
                <dd class="ml-4 text-base font-medium text-gray-900">'.$totalPrice.'</dd>
              </div>
            </dl>';
     
}
?>
            <p class="mt-1 text-sm text-gray-500">Shipping and taxes will be calculated at checkout.</p>
          </div>
  
          <div class="mt-10">
            <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Checkout</button>
          </div>
  
          <div class="mt-6 text-center text-sm">
            <p>
              or
              <a href="courses.php" class="font-medium text-indigo-600 hover:text-indigo-500">
                Continue Shopping
                <span aria-hidden="true"> &rarr;</span>
              </a>
            </p>
          </div>
        </section>
      </form>
    </div>
  </div>
  
  



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
        // Ajoutez un gestionnaire d'événements pour tous les boutons de suppression
        const removeButtons = document.querySelectorAll('.remove-button');
        removeButtons.forEach(button => {
          button.addEventListener('click', () => {
            const listItem = button.closest('li');
            if (listItem) {
              listItem.remove();
            }
          });
        });
      </script>
            
</body>


</html>