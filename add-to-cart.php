<?php
session_start(); // Démarrez la session s'il n'est pas déjà démarré

// Vérifiez si l'ID de la formation est présent dans l'URL
if (isset($_GET['id'])) {
    $id_formation = $_GET['id'];

    // Initialisez la clé 'cartItems' si elle n'existe pas encore dans la session
    if (!isset($_SESSION['cartItems'])) {
        $_SESSION['cartItems'] = array();
    }

    // Fonction pour ajouter la formation au panier
    function addToCart($id_formation) {
        // Vérifier si la formation n'existe pas déjà dans le panier
        if (!in_array($id_formation, $_SESSION['cartItems'])) {
            // Ajouter l'ID de la formation au panier
            $_SESSION['cartItems'][] = $id_formation;
        }
    }
    // Utilisez l'ID de la formation récupérée de la variable GET pour ajouter la formation au panier
    addToCart($id_formation);
    exit();   
}
header('Location: course-details.php?id='.$id_formation);

?>
