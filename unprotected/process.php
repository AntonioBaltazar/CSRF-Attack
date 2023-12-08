<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPassword = $_POST['newpass'];
    
    // Stockez le nouveau mot de passe dans un cookie
    setcookie('password', $newPassword, time() + 3600, "/"); // Le cookie expirera dans 1 heure

    // Redirigez de nouveau vers la page principale
    header('Location: my-account.html');
    exit;
}


?>
