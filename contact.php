<?php
    if(isset($_POST['submit'])) {
        // récupération des paramétres
        $mailTo = "corentin@menigot.fr";
        $nom = $_POST['name'];
        $prenom = $_POST['first_name'];
        $mailFrom = $_POST['mail'];
        $telephone = $_POST['phone_number'];
        $texte = $_POST['object'];
        
        // construction du corp de texte
        $message = $texte;

        $from = "De : " . $mailFrom;

        // envoi du mail
        mail($mailTo, "message du portfolio", $message, $from);

        // prévenir l'utilisateur que le message est bien envoyé
        echo "Message envoyé, je reviens vers vous dans les plus brefs délais";
    }
?>