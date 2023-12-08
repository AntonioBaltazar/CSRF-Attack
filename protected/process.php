<?php
session_start();
//On va vérifier :
//Si le jeton est présent dans la session et dans le formulaire
if(isset($_SESSION['token']) && isset($_POST['formChangePassword']) && isset($_COOKIE["tokenCookie"]))
{
	//Si le jeton de la session correspond à celui du formulaire
	if($_SESSION['token'] == $_COOKIE['tokenCookie'])
	{
		// Le jeton CSRF est valide, continuez avec la mise à jour du mot de passe
        // Mettez à jour le mot de passe en toute sécurité
        $newPassword = $_POST['newpass'];
    
        // Stockez le nouveau mot de passe dans un cookie
        setcookie('password', $newPassword, time() + 3600, "/"); // Le cookie expirera dans 1 heure
    
        // Redirigez de nouveau vers la page principale
        header('Location: my-account.php');
        exit;
        echo "yes";
	}
} 
     // Le jeton CSRF est invalide, action rejetée
     header('Location: error.html');
     echo "no";
?>