<?php


// On démarre la session
session_start();

// On vérifie si l'utilisateur à une session en cours et on lui affiche ses informations si oui
if(isset($_SESSION['nom'])) {
    echo 'Bienvenue sur le site ' . $_SESSION['prenom'] . '' . $_SESSION['nom'];
} else {
    echo 'Vous n\'êtes pas encore enregistrer sur notre site';
}

// Si le formulaire est envoyer nous allons executer le code ci dessous 
if(isset($_POST['valider'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);

    if(!empty($nom) AND !empty($prenom)) {
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;

    } else {
        echo 'Veuillez compléter les champs avant de valider';
    }
}

// Si le bouton supprimer la session est actionner alors on supprime la session
if(isset($_POST['destroy'])) {
    $_SESSION = array();
    session_destroy();
    unset($_SESSION);

}



?>
<!DOCTYPE html>
<html>
<head> 
   <title>Exercices 7</title>
</head>
<body>

<form method="POST">
   <input type="text" name="nom" placeholder="Nom" />
   <input type="text" name="prenom" placeholder="Prénom" />
   <input type="submit" name="valider" />
   <input type="submit" name="destroy" value="Supprimer la session" />
</form>


</body>
</html>

<?php 

// code source de la page 
highlight_file(__FILE__);

?>