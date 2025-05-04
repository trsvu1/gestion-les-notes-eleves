<?php
    $Eleve = null;
    
    if(isset($_GET['action']) && isset($_GET['id_eleve'])){
        $action = $_GET['action'];
        $id_eleve = $_GET['id_eleve'];

        switch($action){
            case 'edit' : $Eleve = $unControleur->select_Eleve($id_eleve); break;
            case 'sup' : $unControleur->delete_Eleve($id_eleve); break;
        }
    }
    
    $filtre = $_POST['filtre'] ?? "";
    $lesEleves = $unControleur->display_All_Eleve($filtre);

    if(isset($_POST['trier'])){
        $trier = $_POST['trier'];
        switch($trier){
            case 'a-z' : $lesEleves = $unControleur->trier_A_Z(); break;
            case 'z-a' : $lesEleves = $unControleur->trier_Z_A(); break;
            case 'moyenne_croissant' : $lesEleves = $unControleur->trier_moyenne_croissant(); break;
            case 'moyenne_decroissant' : $lesEleves = $unControleur->trier_moyenne_decroissant(); break;
        }
    }

    require_once("vue/section_liste_eleve.php");
?>