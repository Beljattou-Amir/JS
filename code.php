<?php 
if( (ISSET($_POST['nom_prenom'])) AND (ISSET($_POST['age'])) AND (ISSET($_POST['mail'])) AND (ISSET($_POST['phone'])) AND (ISSET($_POST['immatriculation']))
 AND (ISSET($_POST['poste'])) AND (ISSET($_POST['anciennete'])))
{
    $nom=$_POST['nom_prenom'];
    $age=$_POST['age'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];
    $immatriculation=$_POST['immatriculation'];
    $poste=$_POST['poste'];
    $anciennete=$_POST['anciennete'];
}
?>


<!-- <?php 
	// var_dump($_POST);
    if( (ISSET($_POST['nom_prenom'])) AND (ISSET($_POST['age'])) AND (ISSET($_POST['mail'])) AND (ISSET($_POST['phone'])) AND (ISSET($_POST['immatriculation']))
    AND (ISSET($_POST['poste'])) AND (ISSET($_POST['anciennete'])))
    
    
    {
        session_start();
        
        $_SESSION['nom']=$_POST['nom_prenom'];
        $_SESSION['age']=$_POST['age'];
        $mail=$_POST['mail'];
        $phone=$_POST['phone'];
        $immatriculation=$_POST['immatriculation'];
        $poste=$_POST['poste'];
        $anciennete=$_POST['anciennete'];
        
    }
    
    
    
    ?>  -->