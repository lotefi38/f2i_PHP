<?php
require('../class/verification.php');
$verif = new verification();
//verifier le nom
$verif->texte($_POST['nom'], 'nom');
//verifier le prénom
$verif->texte($_POST['prénom'],'prénom');
//verifier l'email et verifier en base de donnée si il l'existe
$verif->Email($_POST['email']);
//verifier le téléphone
$verif->phone($_POST['Iphone']);
//verifier le mot de passe
//verifier le mot de passe et que le confirme mot de passe identique
$verif->Password($_POST['password'], $_POST['password2']).
echo $verif->getIndexError(0);