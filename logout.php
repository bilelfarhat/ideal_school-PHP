
<?php
function logout() {
    // Démarrer la session si elle n'est pas déjà démarrée
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    // Supprimer toutes les variables de session
    $_SESSION = array();
    
    // Détruire la session
    session_destroy();
    
    // Rediriger l'utilisateur vers la page de connexion
    header("Location: testlogin.php");
    exit();
}



?>