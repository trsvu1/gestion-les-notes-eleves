# 🎓 Projet PHP - Application Web de Gestion des Élèves

## 🧾 Introduction du projet

Ce projet est une application web développée en PHP orientée objet avec une architecture **MVC (Modèle-Vue-Contrôleur)**. Elle permet de **gérer les élèves d'un établissement scolaire**, avec des fonctionnalités complètes pour :

- Ajouter, modifier, supprimer et afficher les élèves
- Rechercher ou filtrer des élèves par nom
- Trier les élèves par nom ou par moyenne
- Gérer la connexion et déconnexion des utilisateurs
- Sécuriser l'accès aux données par une session utilisateur

L'application se connecte à une base de données MySQL et est conçue pour être simple d'utilisation tout en offrant des fonctionnalités pratiques aux utilisateurs administrateurs.

---

## 📁 Structure du projet

### `index.php`
- Point d’entrée principal du site
- Gère l’inclusion de la page d’accueil et la session utilisateur

### `/controleur/`
Contient toute la logique métier :

- `controleur.php` : classe principale qui fait le lien entre le modèle et la vue
- `verif_connexion.php` : vérifie les identifiants lors de la connexion
- `verif_deconnexion.php` : détruit la session pour se déconnecter
- `func_insert_eleve.php` : formulaire d’ajout ou de modification d’un élève
- `func_liste_eleve.php` : liste tous les élèves, avec tri et suppression

### `/vue/`
Contient toutes les interfaces utilisateur (HTML + Bootstrap) :

- `header.php` : en-tête commun (logo, menu, bouton de déconnexion)
- `footer.php` : pied de page (contact, newsletter, liens)
- `page_accueil.php` : page principale affichée après connexion
- `page_connexion.php` : formulaire de connexion
- `section_liste_eleve.php` : liste des élèves affichée dynamiquement
- `section_gestion_eleve.php` : formulaire de gestion des élèves

### `/modele/`
- Contient la classe `Modele.php` pour accéder à la base de données (requêtes SQL pour gérer les élèves et utilisateurs)

---

## 🛠️ Instructions d’utilisation

### 🔧 Prérequis

- Serveur local (XAMPP / WAMP / MAMP)
- PHP ≥ 7.0
- MySQL
- Navigateur web (Chrome, Firefox, etc.)

### 📥 Installation

1. **Télécharger ou cloner le projet** :
   ```bash
   git clone https://github.com/trsvu1/gestion-les-notes-eleves
   ```

2. **Placer le dossier dans le répertoire serveur** :
   - Exemple : `C:\xampp\htdocs\gestion-eleves`

3. **Importer la base de données MySQL** :
   - Ouvrir `phpMyAdmin`
   - Créer une base appelée `gestion_eleves`
   - Importer le fichier SQL fourni (`gestion_eleves.sql`)

4. **Lancer l'application** :
   - Démarrer Apache et MySQL
   - Accéder à l’application via :
     ```
     http://localhost/gestion-eleves/index.php
     ```

---

## 🔐 Connexion utilisateur

Utilisez un compte administrateur enregistré dans la base de données.

Exemple :
- **Email** : `a@gmail.com`
- **Mot de passe** : `123`

---

## 🔧 Fonctionnalités par contrôleur

| Contrôleur                   | Description                                                                 |
|-----------------------------|-----------------------------------------------------------------------------|
| `verif_connexion.php`       | Authentifie l'utilisateur (email/mot de passe)                             |
| `verif_deconnexion.php`     | Déconnecte l'utilisateur et détruit la session                             |
| `func_insert_eleve.php`     | Affiche le formulaire pour ajouter ou modifier un élève                    |
| `func_liste_eleve.php`      | Liste tous les élèves, permet le tri (A-Z, moyennes) et la suppression     |
| `controleur.php`            | Classe principale qui appelle les fonctions du modèle                      |

---

## 🖥️ Les Pages Principal

- 1. Page Connexion
<img src="https://github.com/trsvu1/gestion-les-notes-eleves/blob/main/assets/img/pages/page_1.png" width="300" height="300" />

- 2. Page Accueil
<img src="https://github.com/trsvu1/gestion-les-notes-eleves/blob/main/assets/img/pages/page_2.png" width="300" height="300" />

- 3. Page Dashboard ( Liste Eleves )
<img src="https://github.com/trsvu1/gestion-les-notes-eleves/blob/main/assets/img/pages/page_3.png" width="300" height="300" />

- 4. Page Gestion ( Gestion Eleves )
<img src="https://github.com/trsvu1/gestion-les-notes-eleves/blob/main/assets/img/pages/page_4.png" width="300" height="300" />

- 5. Page Avis ( Avis Professeurs )
<img src="https://github.com/trsvu1/gestion-les-notes-eleves/blob/main/assets/img/pages/page_5.png" width="300" height="300" />

- 6. Page Contact
<img src="https://github.com/trsvu1/gestion-les-notes-eleves/blob/main/assets/img/pages/page_6.png" width="300" height="300" />

-7. Page Footer 
<img src="https://github.com/trsvu1/gestion-les-notes-eleves/blob/main/assets/img/pages/page_7.png" width="300" height="300" />

---

## 📊 Informations techniques

- 🕒 **Durée de développement** : 3 mois
- 📄 **Nombre de lignes PHP** : 900+ lignes (sans compter le HTML/CSS)
- 🧱 **Architecture utilisée** : MVC (Modèle-Vue-Contrôleur)
- 📚 **Technologies** : PHP, MySQL, HTML, CSS (Bootstrap)

---

## 💡 Améliorations possibles

- Système de rôles (administrateur, enseignant, etc.)
- Validation côté client (JavaScript)
- Amélioration de l’ergonomie responsive
- Export des données en CSV/PDF
- Journalisation des actions utilisateur
- Sécurisation renforcée (hashage des mots de passe, token CSRF)

---

## 👤 Auteur

- **Nom** : *Truong Son Vu*
- **Année** : 2025
- **Projet personnel / stage / formation**

---

## 📬 Contact

- 📧 *truong-son.vu@mediaschool.com*
