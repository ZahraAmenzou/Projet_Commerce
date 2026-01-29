<link rel="stylesheet" href="assets/style.css">


<?php
session_start();
include 'db.php';
if(!isset($_SESSION['admin'])) { header("Location: login.php"); exit(); }

$stmt = $pdo->query("SELECT * FROM products ORDER BY created_at DESC");
$products = $stmt->fetchAll();
?>

<link rel="stylesheet" href="assets/style.css">

<table>
<tr><th>ID</th><th>Nom</th><th>Prix</th><th>Description</th><th>Actions</th></tr>
<?php foreach ($products as $p): ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['name'] ?></td>
    <td><?= $p['price'] ?> MAD</td>
    <td><?= $p['description'] ?></td>
    <td>
        <a href="edit_product.php?id=<?= $p['id'] ?>">Modifier</a>
        <a href="delete_product.php?id=<?= $p['id'] ?>">Supprimer</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
<a href="add_product.php">Ajouter un produit</a> | <a href="logout.php">Déconnexion</a>
