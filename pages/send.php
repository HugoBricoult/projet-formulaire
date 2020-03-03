<?php
include 'utils/verif.php';
    if(isset($_POST['firstname']) 
        & isset($_POST['lastname']) 
        & isset($_POST['email']) 
        & isset($_POST['gender']) 
        & isset($_POST['country'])
        & isset($_POST['model'])
        & isset($_POST['topic'])
        & isset($_POST['message'])){
            //verif firstname
            if(validate_name($_POST['firstname'])
                &validate_name($_POST['lastname'])
                &validate_email($_POST['email'])
                &validate_gender($_POST['gender'])
                &validate_country($_POST['country'])
                &validate_model($_POST['model'])
                &validate_topic($_POST['topic'])
                &validate_message($_POST['message']))
            {
                //envoie mail
                echo "ok";
            }else{
                //retourn une erreur
                echo "pas ok";
            }


            






    }else{ ?>
<div class="container">
    <h2>Erreur lors de l'envoie du message</h2>
    <a href="index.php?page=support">Retour au formulaire d'envoie</a>
</div>
    <?php }
?>