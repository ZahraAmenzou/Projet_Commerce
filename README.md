# Projet PHP E-commerce

## Description
Ce projet est un **mini site e-commerce** développé en **PHP** avec une base de données **MySQL**.  
Il permet à un **admin** de gérer les produits (ajouter, modifier, supprimer) avec un **login sécurisé**.  
Le design est simple et moderne en **bleu et noir**.

---

## Fonctionnalités

- **Login Admin sécurisé** avec `password_hash()` et `password_verify()`
- **Ajouter un produit** avec image upload
- **Modifier un produit**
- **Supprimer un produit**
- **Afficher les produits** dans une table ou en cartes
- Design responsive simple avec CSS (bleu/noir)

---

## Technologies utilisées

- PHP 8.x
- MySQL / MariaDB
- HTML / CSS
- XAMPP pour le serveur local

---

## Structure du projet


Projet_Commerce/
│
├─ index.php # Page d'accueil affichage produits
├─ add_product.php # Ajouter un produit
├─ edit_product.php # Modifier un produit
├─ login.php # Page de connexion admin
├─ logout.php # Déconnexion admin
├─ db.php # Connexion à la base de données
├─ assets/
│ ├─ images/ # Images des produits
│ └─ style.css # Style bleu/noir
└─ README.md # Ce fichier



---

## Révision PHP / Notes personnelles

Aujourd'hui, j'ai révisé et appliqué les concepts suivants en PHP :  

### Bases
- `echo` pour afficher du texte
- Variables, types (string, int, float, array)
- Constantes
- Les opérateurs (+, -, *, /, %, .=, etc.)

### Gestion des formulaires et HTTP
- `$_POST`, `$_GET`, `$_SERVER`
- Redirection avec `header("Location: ...")`
- Sessions (`session_start()`, `$_SESSION`) et Cookies
- Debugging avec `var_dump()`, `print_r()`

### Bases de données
- Connexion avec PDO
- `query()` vs `prepare()`
- `fetch()` vs `fetchAll()`
- Protection contre SQL Injection avec `prepare() + execute()`
- Gestion des erreurs PDO (`PDOException`)

### Sécurité
- Hash des mots de passe : `password_hash()` et vérification `password_verify()`
- Validation simple des formulaires

### Gestion des fichiers
- Upload d'images avec `$_FILES`
- Déplacement du fichier uploadé avec `move_uploaded_file()`

### PHP avancé / pratique
- Fonction (`function`) et réutilisation du code
- `include` et `require` pour organiser le projet
- Exit vs Die
- Boucles et conditions
- Affichage dynamique des données dans un tableau HTML ou des cartes (div)

### Autres
- Debugging (`var_dump()`, `print_r()`, `error_reporting(E_ALL)`)
- Notions de design simple avec CSS pour améliorer l'affichage



---



## Installation et usage

1. Installer **XAMPP** et démarrer **Apache + MySQL**
2. Créer la base de données `ecommerce_db` et importer la table `products` et `users`
3. Placer le projet dans le dossier `htdocs` de XAMPP
4. Accéder via le navigateur : `http://localhost/Projet_php/Projet_Commerce/`
5. Se connecter avec le compte admin et gérer les produits


## Auteur

**Zahra Amenzou**  
[GitHub](https://github.com/ZahraAmenzou)
