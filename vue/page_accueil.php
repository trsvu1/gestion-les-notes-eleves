<?php 
    require_once("vue/header.php");
?>
  <main class="main">
    <?php
        # Hero Section
        require_once("vue/section_hero.php");
        # Clients Section
        require_once("vue/section_clients.php");
        # Liste Eleve Section 
        require_once("controleur/func_liste_eleve.php");
        # Gestion Eleve Section
        require_once("controleur/func_insert_eleve.php");
        # Avis Section
        require_once("vue/section_testimonials.php");
        # Contact Section
        require_once("vue/section_contact.php");
    ?>
  </main>
<?php
    require_once("vue/footer.php");
?>