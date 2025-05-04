<?php
    require_once('modele/modele.php');
    class Controleur {
        private $Modele;

        public function __construct(){
            $this->Modele = new Modele();
        }

        public function verif_Connexion($email, $pass){
            return $this->Modele->verif_Connexion($email, $pass);
        }

        public function insert_Eleve($tab){
            $this->Modele->insert_Eleve($tab);
        }

        public function display_All_Eleve($filtre){
            return $this->Modele->display_All_Eleve($filtre);
        }

        public function select_Eleve($id_eleve){
            return $this->Modele->select_Eleve($id_eleve);
        }

        public function delete_Eleve($id_eleve){
            $this->Modele->delete_Eleve($id_eleve);
        }

        public function update_Eleve($tab){
            $this->Modele->update_Eleve($tab);
        }

        public function trier_A_Z(){
            return $this->Modele->trier_A_Z();
        }

        public function trier_Z_A(){
            return $this->Modele->trier_Z_A();
        }
        
        public function trier_moyenne_croissant(){
            return $this->Modele->trier_moyenne_croissant();
        }

        public function trier_moyenne_decroissant(){
            return $this->Modele->trier_moyenne_decroissant();
        }
    }
?>