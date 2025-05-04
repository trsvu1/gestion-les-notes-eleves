<?php
    if ( ! isset($_SESSION["email"])){ 
        require_once("vue/page_connexion.php");
    }
    
    if (isset($_POST["connexion"])){
    		$email = $_POST["email"];
    		$pass = $_POST["pass"];
    
    		//on vérifie dans la BDD - User 
    		$unUser = $unControleur->verif_Connexion($email, $pass);
    		if ($unUser){
    			//enregistrement de la session 
    			$_SESSION["nom"] = $unUser["nom"]; 
    			$_SESSION["prenom"] = $unUser["prenom"]; 
    			$_SESSION["email"] = $unUser["email"];
    			$_SESSION["pass"] = $unUser["pass"]; 
    			//actualisation de la page 
    			header("Location: index.php#hero"); 
    		} else {
    			echo "<br> Veuillez Vérifier vos identifiants."; 
    		}
    	}
?>