<div class="page-connexion" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; text-align: center;">
    <h1>Système Gestion Les Notes Des Eleves</h1>
    <h2>Connecter au Site</h2>
    <img src="assets/img/connexion.png" alt="Logo" style="width: 300px; height: 100px;">
    <br>
    <div class="form-connexion" style="text-align: center; padding: 20px; display: flex; flex-direction: column; align-items: center;">
        <form method="post" style="display: flex; flex-direction: column; align-items: center;">
            <table style="margin: auto;">
                <tr>
                    <td>Email : </td>
                    <td> <input type="email" name="email" required> </td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td> <input type="password" name="pass" required> </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; padding: 20px;">
                        <input type="reset" name="annuler" value="Annuler">
                        <input type="submit" name="connexion" value="Connexion">
                    </td>
                </tr>
            </table>
            <div class="message-inscription" style="text-align: center;">
                <a href="controleur/verif_inscription.php"><i>Pas de compte ? Clique d'ici pour faire l'inscription</i></a>
            </div>
            <div class="info-connexion" style="text-align: center; padding: 50px;">
                <p><i>Email : a@gmail.com ( admin ) </i></p>
                <p><i>Password : 123 </i></p>
            </div>
        </form>
    </div>
</div>