<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Requête SQL pour récupérer les formateurs
$sql = "SELECT ID_Formateur, Nom_formateur FROM formateurs";

$sqli = "SELECT ID_categorie, Nom_categorie FROM categories";

$result = $conn->query($sql);
$resulto = $conn->query($sqli);

?>



<?php


// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $formateur = $_POST["formateur"];
    $title = $_POST["title"];
    $duration = $_POST["duration"];
    $chapter = $_POST["chapter"];
    $price = $_POST["price"];
    $langage = $_POST["langage"];
    $category = $_POST["category"];
    $descriptionp = $_POST["firstDescrip"];
    $descriptionc = $_POST["secondDescrip"];
    $chapterone = $_POST["chapterone"];
    $timeone = $_POST ["timeone"];
    $chaptertwo = $_POST['chaptertwo'];
    $timetwo = $_POST['timetwo'];
    $chapterthree = $_POST['chapterthree'];
    $timethree = $_POST['timethree'];
    $descriptiond = $_POST['descriptiond'];
    $chapterfour = $_POST['chapterfour'];
    $timefour = $_POST['timefour'];
    $chapterfive = $_POST['chapterfive'];
    $timefive = $_POST['timefive'];
    $chaptersix= $_POST['chaptersix'];
    $timesix= $_POST['timesix'];
    $chapterseven= $_POST['chapterseven'];
    $timeseven= $_POST['timeseven'];
    $chaptereight= $_POST['chaptereight'];
    $timeeight= $_POST['timeeight'];
    $chapternine= $_POST['chapternine'];
    $timenine= $_POST['timenine'];
    $chapterten= $_POST['chapterten'];
    $timeten= $_POST['timeten'];
    $studentLesson = $_POST['studentLesson'];
    $studentTeacher = $_POST['studentTeacher'];
    $ratenote= $_POST['ratenote'];
    $images = $_FILES["images"]["name"];
    if (move_uploaded_file($_FILES["images"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"] . '/eduvalt/lms/img/' . $images)) 
    {
        $target_file = time() . $_SERVER["DOCUMENT_ROOT"] . '/eduvalt/lms/img/' . $images;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $image_formation = basename($_FILES["images"]["name"]);
        $photos = $image_formation;
    }
    else if ($_FILES["images"]["size"] > 20000000) {
        ?>
        <script>
            alert("plus de 2MB");
        </script>
        <?php
    }
    else {
        ?>
        <script>
            alert("Erreur lors du téléchargement de l'image");
        </script>
        <?php
    }


    $imagesAuthor = $_FILES["auth_images"]["name"];
    if (move_uploaded_file($_FILES["auth_images"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"] . '/eduvalt/lms/authors/' . $imagesAuthor)) 
    {
        $Authortarget_file = time() . $_SERVER["DOCUMENT_ROOT"] . '/eduvalt/lms/authors/' . $imagesAuthor;
        $AuthorimageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $Authorimage_formation = basename($_FILES["auth_images"]["name"]);
        $authorPhotos = $Authorimage_formation;
    }
    else if ($_FILES["auth_images"]["size"] > 20000000) {
        ?>
        <script>
            alert("plus de 2MB");
        </script>
        <?php
    }
    else {
        ?>
        <script>
            alert("Erreur lors du téléchargement de l'image");
        </script>
        <?php
    }

    $imagesRate = $_FILES["rate_images"]["name"];
    if (move_uploaded_file($_FILES["rate_images"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"] . '/eduvalt/lms/rate/' . $imagesRate)) 
    {
        $Ratetarget_file = time() . $_SERVER["DOCUMENT_ROOT"] . '/eduvalt/lms/rate/' . $imagesRate;
        $RateimageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $Rateimage_formation = basename($_FILES["rate_images"]["name"]);
        $RatePhotos = $Rateimage_formation;
    }
    else if ($_FILES["rate_images"]["size"] > 20000000) {
        ?>
        <script>
            alert("plus de 2MB");
        </script>
        <?php
    }
    else {
        ?>
        <script>
            alert("Erreur lors du téléchargement de l'image");
        </script>
        <?php
    }


$videos = $_FILES["videos"]["name"];
$video_target_dir = $_SERVER["DOCUMENT_ROOT"] . '/eduvalt/lms/videos/';
$video_target_file = $video_target_dir . time() . basename($_FILES["videos"]["name"]);
$upload_video_ok = 1;
$video_file_type = strtolower(pathinfo($video_target_file, PATHINFO_EXTENSION));

// Vérification de la taille du fichier vidéo
if ($_FILES["videos"]["size"] > 500000000) {
    $upload_video_ok = 0;
    $upload_video_error = "Le fichier vidéo est trop volumineux.";
}

// Vérifier le format de fichier vidéo
$allowedFormats = array("mp4", "avi", "mov", "wmv");
if (!in_array($video_file_type, $allowedFormats)) {
    $upload_video_ok = 0;
    $upload_video_error = "Seuls les fichiers de type MP4, AVI, MOV et WMV sont autorisés pour la vidéo.";
}

// Vérifier si $upload_video_ok est défini comme 0 par une erreur
if ($upload_video_ok == 0) {
    echo "Désolé, votre fichier vidéo n'a pas été téléchargé.";
} else {
    if (move_uploaded_file($_FILES["videos"]["tmp_name"], $video_target_file)) {
        $videoPath = $video_target_file;
    } else {
        $upload_video_error = "Erreur lors du téléchargement de la vidéo.";
    }
}


    $stmt = $conn->prepare("INSERT INTO formations (ID_Formateur, ID_Categorie, Titre, Chapitre, Heure, DescriptionP, Descriptionc, Descriptiond, langue, Prix, chapterone, timeone, chaptertwo, timetwo, chapterthree, timethree, chapterfour, timefour, chapterfive, timefive, chaptersix, timesix, chapterseven, timeseven, chaptereight, timeeight, chapternine, timenine, chapterten, timeten, studentLesson, studentTeacher, ratenote)VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
    $stmt->bind_param("sssssssssdsssssssssssssssssssssss", $formateur, $category, $title, $chapter, $duration, $descriptionp, $descriptionc, $descriptiond, $langage, $price, $chapterone, $timeone, $chaptertwo, $timetwo, $chapterthree, $timethree, $chapterfour, $timefour, $chapterfive, $timefive, $chaptersix, $timesix, $chapterseven, $timeseven, $chaptereight, $timeeight, $chapternine, $timenine, $chapterten, $timeten, $studentLesson, $studentTeacher, $ratenote);

    if ($stmt->execute()) {
        echo "Formation insérée avec succès.";
        $id_formation = $stmt->insert_id; // Récupérer l'ID de la formation nouvellement insérée


        // Fonction pour insérer une image dans la table "images"
        function insertImage($conn, $id_formation, $photos) {
            $stmt = $conn->prepare("INSERT INTO Images (ID_Formation, nom_image) VALUES (?,?)");
            $stmt->bind_param("is", $id_formation, $photos);
            if ($stmt->execute()) {
                // Succès de l'insertion de l'image
            } else {
                // Erreur lors de l'insertion de l'image
                echo "Erreur lors de l'insertion de l'image : " . $stmt->error;
            }
            $stmt->close();
        }

        function insertAuthImage($conn, $id_formation, $authorPhotos) {
            $stmt = $conn->prepare("INSERT INTO authors (ID_Formation, nom_image) VALUES (?, ?)");
            $stmt->bind_param("is", $id_formation, $authorPhotos);
            if ($stmt->execute()) {
                // Succès de l'insertion de l'image
            } else {
                // Erreur lors de l'insertion de l'image
                echo "Erreur lors de l'insertion de l'image : " . $stmt->error;
            }
            $stmt->close();
        }

        function insertRateImage($conn, $id_formation, $RatePhotos) {
            $stmt = $conn->prepare("INSERT INTO rate (ID_Formation, nom_image) VALUES (?, ?)");
            $stmt->bind_param("is", $id_formation, $RatePhotos);
            if ($stmt->execute()) {
                // Succès de l'insertion de l'image
            } else {
                // Erreur lors de l'insertion de l'image
                echo "Erreur lors de l'insertion de l'image : " . $stmt->error;
            }
            $stmt->close();
        }

        // Fonction pour insérer une vidéo dans la table "videos"
        function insertVideo($conn, $id_formation, $videoPath) {
            $stmt = $conn->prepare("INSERT INTO Videos (ID_Formation, Chemin_video) VALUES (?, ?)");
            $stmt->bind_param("is", $id_formation, $videoPath);
            if ($stmt->execute()) {
                // Succès de l'insertion de la vidéo
            } else {
                // Erreur lors de l'insertion de la vidéo
                echo "Erreur lors de l'insertion de la vidéo : " . $stmt->error;
            }
            $stmt->close();
        }
    } else {
        echo "Erreur lors de l'insertion de la formation : " . $stmt->error;
    }

    // Appeler les fonctions pour insérer l'image et la vidéo
if (isset($id_formation) && isset($photos)) {
    insertImage($conn, $id_formation, $photos);
}

if (isset($id_formation) && isset($authorPhotos)) {
    insertAuthImage($conn, $id_formation, $authorPhotos);
}

if (isset($id_formation) && isset($RatePhotos)) {
    insertRateImage($conn, $id_formation, $RatePhotos);
}

if (isset($id_formation) && isset($videoPath)) {
    insertVideo($conn, $id_formation, $videoPath);
}

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
                                        <li class="active menu-item-has-children"><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="instructors.html">Our Instructors</a></li>
                                                <li><a href="instructor-details.html">Instructor Details</a></li>
                                                <li><a href="mentors.html">Our Mentors</a></li>
                                                <li><a href="events.html">Our Events</a></li>
                                                <li><a href="events-details.html">Event Details</a></li>
                                                <li><a href="faq.html">Asked Question</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li class="active"><a href="contact.html">contact</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
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
                                                <span class="mini-cart-count">0</span>
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
                            <h3 class="title">Contact With Us</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index-2.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Contact</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-info-wrap">
                            <h2 class="title">Keep In Touch With Us</h2>
                            <p>Neque convallis cras semper auctor. Libero id faucibus getnvallis.id faucibus nisl tincidunt egetnvallis.</p>
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-pin-1"></i>
                                    </div>
                                    <div class="content">
                                        <p>68 Street Holakt Street world <br> 10002 New York</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="content">
                                        <a href="tel:0123456789">+123 555 69090</a>
                                        <a href="tel:0123456789">+123 555 69090</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="content">
                                        <a href="mailto:info@gmail.com">info@gmail.com</a>
                                        <a href="mailto:info@gmail.com">info@gmail.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form-wrap">
                            <h4 class="title">Get in Touch</h4>
                            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                        <select id="formateur" name="formateur">
    <?php
    // Affichage des options de la liste déroulante pour les formateurs
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["ID_Formateur"] . '">' . $row["Nom_formateur"] . '</option>';
        }
    } else {
        echo '<option value="">Aucun formateur disponible</option>';
    }
    ?>
  </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="title" type="text" placeholder="Titre *" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="duration" type="text" placeholder="Durée*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="chapter" type="text" placeholder="Nombre de chapitre *" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="price" type="text" placeholder="Prix *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="langage" type="text" placeholder="Langue *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                        <select id="category" name="category">
    <?php
    // Affichage des options de la liste déroulante pour les formateurs
    if ($resulto->num_rows > 0) {
        while ($row = $resulto->fetch_assoc()) {
            echo '<option value="' . $row["ID_categorie"] . '">' . $row["Nom_categorie"] . '</option>';
        }
    } else {
        echo '<option value="">Aucune categorie disponible</option>';
    }
    ?>
  </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="firstDescrip" type="text" placeholder="Description *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="images" type="file" placeholder="Image *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="videos" type="file" placeholder="video *" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-grp">
                                            <input name="auth_images" type="file" placeholder="auth *" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-grp">
                                            <input name="rate_images" type="file" placeholder="auth *" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-grp">
                                            <input name="ratenote" type="text" placeholder="Note*" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="studentLesson" type="text" placeholder="Apprenants du cours*" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="studentTeacher" type="text" placeholder="Apprenants du prof*" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="chapterone" type="text" placeholder="1er chapitre*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="timeone" type="text" placeholder="Temps *" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="chaptertwo" type="text" placeholder="2eme chapitre" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="timetwo" type="text" placeholder="Temps*" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="chapterthree" type="text" placeholder="3eme chapitre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="timethree" type="text" placeholder="Temps*" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="chapterfour" type="text" placeholder="4eme chapitre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="timefour" type="text" placeholder="Temps*" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="chapterfive" type="text" placeholder="5eme chapitre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="timefive" type="text" placeholder="Temps*" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="chaptersix" type="text" placeholder="6eme chapitre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="timesix" type="text" placeholder="Temps*" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="chapterseven" type="text" placeholder="7eme chapitre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="timeseven" type="text" placeholder="Temps*" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="chaptereight" type="text" placeholder="8eme chapitre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="timeeight" type="text" placeholder="Temps*" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="chapternine" type="text" placeholder="9eme chapitre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="timenine" type="text" placeholder="Temps*" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="chapterten" type="text" placeholder="10eme chapitre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="timeten" type="text" placeholder="Temps*" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <textarea name="secondDescrip" placeholder="first descrip" required></textarea>
                                </div>

                                <div class="form-grp">
                                    <textarea name="descriptiond" placeholder="2eme descrip" required></textarea>
                                </div>

                                <button type="submit" class="btn" name="submit">Soumettre</button>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

        <!-- contact-map -->
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48409.69813174607!2d-74.05163325136718!3d40.68264649999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1684309529719!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- contact-map-end -->

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