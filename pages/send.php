<?php
include 'utils/verif.php';
$urlRed = "https://hugobricoult.000webhostapp.com/CHAT/hack/index.php?page=support";
$isValid = true;
    if(isset($_POST['firstname']) 
        & isset($_POST['lastname']) 
        & isset($_POST['email']) 
        & isset($_POST['gender']) 
        & isset($_POST['country'])
        & isset($_POST['model'])
        & isset($_POST['topic'])
        & isset($_POST['message'])){
            //verif firstname
            if(!validate_name($_POST['firstname'])){
                $isValid = false;
            }else{
                $urlRed .= "&firstname=".$_POST['firstname'];
            }
            //verif lasname
            if(!validate_name($_POST['lastname'])){
                $isValid = false;
            }else{
                $urlRed .= "&lastname=".$_POST['lastname'];
            }
            //verif email
            if(!validate_email($_POST['email'])){
                $isValid = false;
            }else{
                $urlRed .= "&email=".$_POST['email'];
            }
            //verif gender
            if(!validate_gender($_POST['gender'])){
                $isValid = false;
            }else{
                $urlRed .= "&gender=".$_POST['gender'];
            }
            //verif country
            if(!validate_country($_POST['country'])){
                $isValid = false;
            }else{
                $urlRed .= "&country=".$_POST['country'];
            }
            //verif model
            if(!validate_model($_POST['model'])){
                $isValid = false;
            }else{
                $urlRed .= "&model=".$_POST['model'];
            }
            //verif topic
            if(!validate_topic($_POST['topic'])){
                $isValid = false;
            }else{
                $urlRed .= "&topic=".$_POST['topic'];
            }
            //verif message
            if(!validate_message($_POST['message'])){
                $isValid = false;
            }else{
                $urlRed .= "&message=".$_POST['message'];
            }
            //si pas valid => retour formulair
            if(!$isValid){
                //header("Location:".$urlRed);
                echo("<script>window.location='$urlRed';</script>");

            }else{
                //envoie mail
                ?>
                    <div class="jumbotron" id="okey">
                        <h1 class="display-4 mt-5">Message envoyer </h1>
                        <p class="lead">Votre demande serra traité dans les plus bref délais.</p>
                        <hr class="my-4">
                        <p>L'équipe de Hackers Poulette vous souhaite une bonne navigation ! </p>
                        <a class="btn btn-primary btn-lg" href="index.php" role="button">Home</a>
                    </div>

                    <section class="spons">
                    <div class="container">
                            <div class="row col-12 d-flex justify-content-center mt-5">
                                <img src="./img/sup.png" alt="" height = 80px class =" rasb">
                            <h2 class= " d-flex justify-content-center">RASPERRY PI</h2>
                            </div>
                    </div>

</section>
                    
                    <?php
                $mailadresse = "hugo.bricoult0521@gmail.com";
                $sujet = $_POST['topic']." ".$_POST['model'];
                $message = $_POST['message']."\n\r".$_POST['email']."\n\r".$_POST['lastname']." ".$_POST['firstname'];
                mail($mailadresse,$sujet,$message);
            }
    }else{ ?>
<div class="container">
    <h2>Erreur lors de l'envoie du message</h2>
    <a href="index.php?page=support">Retour au formulaire d'envoie</a>
</div>
    <?php }
?>