<?php
    class Modele {
        private $PDO; 
        //connexion via la classe PDO : PHP DATA Object 
    
        public function __construct(){
            $serveur = "localhost"; 
            $database = "PP_01_Gestion_Eleve"; 
            $user = "root";
            $mdp = "root"; 
            try{
                $this->PDO = new PDO("mysql:host=".$serveur.";dbname=".$database,$user, $mdp);
            }
            catch(PDOException $exp){
                echo "Erreur de connexion à la BDD";
            }
        }
        /********* Gestion des users ****************/
        public function verif_Connexion ($email, $pass){
            $requete = "select * from user where email =:email and pass =:pass;"; 
            $exec = $this->PDO->prepare($requete);
            $donnees = array(":email"=>$email, ":pass"=>$pass);
            $exec->execute($donnees);
            return $exec->fetch(); 
        }

        // Fonction ajouter d'un eleve dans la BDD
        public function insert_Eleve($tab){
    
            $sql = "INSERT INTO eleve ( id_eleve, num_INE, nom, prenom, date_naissance, pays, classe,
                                            matiere1, matiere2, matiere3, matiere4, matiere5 ) 
                    VALUES ( null, :num_INE, :nom, :prenom, :date_naissance, :pays, :classe,
                                            :matiere1, :matiere2, :matiere3, :matiere4, :matiere5 );";
            $donnees = array(":num_INE" => $tab['num_INE'],
                             ":nom" => $tab['nom'],
                             ":prenom" => $tab['prenom'],
                             ":date_naissance" => $tab['date_naissance'],
                             ":pays" => $tab['pays'],
                             ":classe" => $tab['classe'],
                             ":matiere1" => $tab['matiere1'],
                             ":matiere2" => $tab['matiere2'],
                             ":matiere3" => $tab['matiere3'],
                             ":matiere4" => $tab['matiere4'],
                             ":matiere5" => $tab['matiere5'],
                            );
    
            $exec = $this->PDO->prepare($sql);
            $exec->execute($donnees);
        }
        
        // Fonction afficher tous les eleves avec le filtre
        public function display_All_Eleve($filtre){
    
            if($filtre == ""){
                $sql = "SELECT * FROM eleve ;";
                $exec = $this->PDO->prepare($sql);
                $exec->execute();
            } else {
                $sql = "SELECT * FROM eleve WHERE num_INE LIKE :filtre
                                            OR nom LIKE :filtre
                                            OR prenom LIKE :filtre
                                            OR classe LIKE :filtre
                                            OR date_naissance LIKE :filtre
                                            OR pays LIKE :filtre
                                            OR matiere1 LIKE :filtre
                                            OR matiere2 LIKE :filtre
                                            OR matiere3 LIKE :filtre
                                            OR matiere4 LIKE :filtre
                                            OR matiere5 LIKE :filtre
                                            OR moyenne LIKE :filtre ;";
                $donnees = array(":filtre" => "%".$filtre."%");
                $exec = $this->PDO->prepare($sql);
                $exec->execute($donnees);
            }
            return $exec->fetchAll();
        }
        
        // Fonction supprimer un eleve dans la BDD
        public function delete_Eleve($id_eleve){
            $sql = "DELETE FROM eleve WHERE id_eleve = :id_eleve;";
            $donnees = array(":id_eleve" => $id_eleve);
            $exec = $this->PDO->prepare($sql);
            $exec->execute($donnees);
        }
        
        // Fonction modifier l'informatino d'un eleve dans la BDD
        public function update_Eleve($tab){
    
            $sql = "UPDATE eleve SET num_INE = :num_INE, nom = :nom, prenom = :prenom, date_naissance = :date_naissance, pays = :pays,
                                     classe = :classe, matiere1 = :matiere1, matiere2 = :matiere2, matiere3 = :matiere3,
                                     matiere4 = :matiere4, matiere5 = :matiere5 WHERE id_eleve = :id_eleve;";
            $donnees = array(":num_INE" => $tab['num_INE'],
                             ":nom" => $tab['nom'],
                             ":prenom" => $tab['prenom'],
                             ":date_naissance" => $tab['date_naissance'],
                             ":pays" => $tab['pays'],
                             ":classe" => $tab['classe'],
                             ":matiere1" => $tab['matiere1'],
                             ":matiere2" => $tab['matiere2'],
                             ":matiere3" => $tab['matiere3'],
                             ":matiere4" => $tab['matiere4'],
                             ":matiere5" => $tab['matiere5'],
                             ":id_eleve" => $tab['id_eleve']
                            );
        
            $exec = $this->PDO->prepare($sql);
            $exec->execute($donnees);
        }
        
        
        public function select_Eleve($id_eleve){
    
            $sql = "SELECT * FROM eleve WHERE id_eleve = :id_eleve;";
            $donnees = array(":id_eleve" => $id_eleve);
            $exec = $this->PDO->prepare($sql);
            $exec->execute($donnees);
    
            $unEleve = $exec->fetch();
            return $unEleve;
        }
    
        // Fonction trier les eleves par odre alphabet A-Z
        public function trier_A_Z(){
            $sql = "SELECT * FROM eleve ORDER BY nom ASC;";
            $exec = $this->PDO->prepare($sql);
            $exec->execute();
            return $exec->fetchAll();
        }
    
    
        // Fonction trier les eleves par odre alphabet Z-A
        public function trier_Z_A(){
            $sql = "SELECT * FROM eleve ORDER BY nom DESC;";
            $exec = $this->PDO->prepare($sql);
            $exec->execute();
            return $exec->fetchAll();
        }
        
        // Fonction trier les eleves par moyenne decroissant
        public function trier_moyenne_decroissant(){
            $sql = "SELECT * FROM eleve ORDER BY moyenne DESC;";
            $exec = $this->PDO->prepare($sql);
            $exec->execute();
            return $exec->fetchAll();
        }
        
        // Fonction trier les eleves par moyenne croissant
        public function trier_moyenne_croissant(){
            $sql = "SELECT * FROM eleve ORDER BY moyenne ASC;";
            $exec = $this->PDO->prepare($sql);
            $exec->execute();
            return $exec->fetchAll();
        }
    }
?>