<!-- Services Section -->
<section id="gestion_eleve" class="gestion_eleve section light-background" style="display: flex; justify-content: center; align-items: center; height: 100%; background-color: white;">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
    <h2><?php echo isset($Eleve) ? "Modifier l'information d'un eleve" : "Ajouter d'un eleve"; ?></h2>
            <div style="display: flex; justify-content: center; align-items: center;">
                <form method="post">
                    <table>
                        <tr>
                            <td>Numréro INE : </td>
                            <td> <input type="text" name="num_INE" placeholder="..." value="<?php echo $Eleve['num_INE'] ?? ''; ?>" required> </td>
                        </tr>
                        <tr>
                            <td>Nom : </td>
                            <td> <input type="text" name="nom" placeholder="..." value="<?php echo $Eleve['nom'] ?? ''; ?>" required> </td>
                        </tr>
                        <tr>
                            <td>Prenom : </td>
                            <td> <input type="text" name="prenom" placeholder="..." value="<?php echo $Eleve['prenom'] ?? ''; ?>" required> </td>
                        </tr>
                        <tr>
                            <td>Date Naissance : </td>
                            <td> <input type="date" name="date_naissance" placeholder="..." value="<?php echo $Eleve['date_naissance'] ?? ''; ?>" required> </td>
                        <tr>
                        <tr>
                            <td>Pays : </td>
                            <td> <input type="text" name="pays" placeholder="..." value="<?php echo $Eleve['pays'] ?? ''; ?>" required> </td>
                        </tr>
                            <td>Classe : </td>
                            <td> <input type="text" name="classe" placeholder="..." value="<?php echo $Eleve['classe'] ?? ''; ?>" required> </td>
                        </tr>
                        <tr>
                            <td>Matiere 1 : </td>
                            <td> <input type="number" name="matiere1" placeholder="..." value="<?php echo $Eleve['matiere1'] ?? ''; ?>" required> </td>
                        </tr>
                        <tr>
                            <td>Matiere 2 : </td>
                            <td> <input type="number" name="matiere2" placeholder="..." value="<?php echo $Eleve['matiere2'] ?? ''; ?>" required> </td>
                        </tr>
                        <tr>
                            <td>Matiere 3 : </td>
                            <td> <input type="number" name="matiere3" placeholder="..." value="<?php echo $Eleve['matiere3'] ?? ''; ?>" required> </td>
                        </tr>
                        <tr>
                            <td>Matiere 4 : </td>
                            <td> <input type="number" name="matiere4" placeholder="..." value="<?php echo $Eleve['matiere4'] ?? ''; ?>" required> </td>
                        </tr>
                        <tr>
                            <td>Matiere 5 : </td>
                            <td> <input type="number" name="matiere5" placeholder="..." value="<?php echo $Eleve['matiere5'] ?? ''; ?>" required> </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center; padding: 20px;">
                                <?php if(isset($Eleve)) { ?>
                                    <input type="hidden" name="id_eleve" value="<?php echo $Eleve['id_eleve']; ?>">
                                    <input type="submit" name="Modifier" value="Modifier">
                                <?php } else { ?>
                                    <input type="reset" name="Annuler" value="Annuler">
                                    <input type="submit" name="Valider" value="Valider">
                                <?php } ?>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
    </div><!-- End Section Title -->
    
</section><!-- /Services Section -->