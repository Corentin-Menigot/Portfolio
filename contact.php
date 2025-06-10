<?php
        // récupération des paramétres
        $mailTo = "corentin@menigot.fr";
        $nom = $_POST['name'];
        $prenom = $_POST['first_name'];
        $mailFrom = $_POST['mail'];
        $telephone = $_POST['phone_number'];
        $texte = $_POST['object'];
        
        // construction du corp de texte
        $message = "Message : " . $texte . "\n";
        $message = $message . "De : " . $prenom . " " . $nom . "\n";
        $message = $message . "Tél : " . $telephone . "\n";

        $from = "From: " . $mailFrom . "\r\n";

        // envoi du mail
        mail($mailTo, "message du portfolio", $message, $from);
    
    header("Location: https://www.menigot.fr/portfolio/corentin/index.html");
    exit();
?>