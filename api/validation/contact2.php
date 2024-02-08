<?php
// Page : contact.php
//mettez ici votre adresse mail
//de préférence une adresse avec le même domaine de là où, vous utilisez ce code, cela permet un envoie quasi certain jusqu'au destinataire
session_start();

$_SESSION["ok"] = false;
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['sujet'] = $_POST['sujet'];
$_SESSION['message'] = $_POST['message'];

$votre_adresse_mail = 'nabil_guettaf@yahoo.fr';
// si le bouton "Envoyer" est cliqué
if (isset($_POST['envoyer'])) {

    //on vérifie que le champ mail est correctement rempli
    if (empty($_POST['mail'])) {
        //echo "<p>Le champ mail est vide.</p>";
        $_SESSION["alert"] = "Le champ mail est vide.";

        //on vérifie que l'adresse est correcte
    } elseif (!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i", $_POST['mail'])) {

        //echo "<p>L'adresse mail entrée est incorrecte.</p>";
        $_SESSION["alert"] = "L'adresse mail entrée est incorrecte.";

        //on vérifie que le champ sujet est correctement rempli
    } elseif (empty($_POST['sujet'])) {

        //echo "<p>Le champ sujet est vide.</p>";
        $_SESSION["alert"] = "Le champ sujet est vide.";

        //on vérifie que le champ message n'est pas vide
    } elseif (empty($_POST['message'])) {

        //echo "<p>Le champ message est vide.</p>";
        $_SESSION["alert"] = "Le champ message est vide.";

        //tout est correctement renseigné, on envoi le mail
    } else {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = $_POST['mail'];
        $to = $votre_adresse_mail;
        $subject = $_POST['sujet'];
        $message = $_POST['message'];
        $headers = "De :" . $from;
        mail($to, $subject, $message, $headers);

        if (mail($to, $subject, $message, $headers)) {

            //echo "<p>Le mail à été envoyé avec succès !</p>";
            $_SESSION["alert"] = "Le mail a été envoyé avec succès ! mail($to, $subject, $message, $headers)";
            $_SESSION["ok"] = true;
        } else {
            //echo "<p>Une erreur est survenue, le mail n'a pas été envoyé.</p>";
            $_SESSION["alert"] = "Une erreur est survenue, le mail n'a pas été envoyé.!";
        }
    }

    header("Location: ../contact.php");
}
