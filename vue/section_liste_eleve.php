<!-- Features Section -->
<section id="liste_eleve" class="liste_eleve section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Cherche Le Note d'Un Eleve</h2>
        <form method="post">
            Filtre par : <input type="text" name="filtre" placeholder="...">
            <input type="submit" value="Filtre">
        </form>
            <br>
        <h2> Liste Des Eleves </h2>
            <form method="post">
                Trier par : 
                <select name="trier">
                    <option value = "">Chosir</option>
                    <option value = "a-z">A - Z</option>
                    <option value = "z-a">Z - A</option>
                    <option value = "moyenne_croissant">Moyenne Croissant</option>
                    <option value = "moyenne_decroissant">Moyenne Décroissant</option>
                </select>
                <input type="submit" value="Trier">
            </form>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Eleve</th>
                    <th>Numéro INE</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Date Naissance</th>
                    <th>Pays</th>
                    <th>Classe</th>
                    <th>Matiere 1</th>
                    <th>Matiere 2</th>
                    <th>Matiere 3</th>
                    <th>Matiere 4</th>
                    <th>Matiere 5</th>
                    <th>Moyenne</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                        if(isset($lesEleves)){
                            foreach($lesEleves as $unEleve){
                                echo "<tr>";
                                    echo "<td>".$unEleve['id_eleve']."</td>";
                                    echo "<td>".$unEleve['num_INE']."</td>"; 
                                    echo "<td>".$unEleve['nom']."</td>";
                                    echo "<td>".$unEleve['prenom']."</td>";
                                    echo "<td>".$unEleve['date_naissance']."</td>";
                                    echo "<td>".$unEleve['pays']."</td>";
                                    echo "<td>".$unEleve['classe']."</td>";
                                    echo "<td>".$unEleve['matiere1']."</td>";
                                    echo "<td>".$unEleve['matiere2']."</td>";
                                    echo "<td>".$unEleve['matiere3']."</td>";
                                    echo "<td>".$unEleve['matiere4']."</td>";
                                    echo "<td>".$unEleve['matiere5']."</td>";
                                    echo "<td>".$unEleve['moyenne']."</td>";
                                    echo "<td>";
                                        echo "<a href='../vue/page_accueil.php#gestion_eleve&action=edit&id_eleve=".$unEleve['id_eleve']."'> <img src='../assets/img/editer.png' height='30' witdh='30'> </a>";
                                        echo "<a href='../vue/page_accueil#liste_eleve&action=sup&id_eleve=".$unEleve['id_eleve']."'> <img src='../assets/img/supprimer.png' height='30' witdh='30'> </a>";
                                    echo "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
        </table>
    </div><!-- End Section Title -->
    
</section><!-- /Features Section -->