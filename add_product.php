<link rel="stylesheet" href="assets/style.css">


<?php
session_start();
include 'db.php';
if(!isset($_SESSION['admin'])) { header("Location: login.php"); exit(); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];

    $imageName = 'default.png';
    if(isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $imageName = time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "assets/images/".$imageName);
    }

    $stmt = $pdo->prepare("INSERT INTO products (name, price, description, image) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $price, $desc, $imageName]);

    header("Location: index.php");
    exit();
}
?>

<form method="POST" enctype="multipart/form-data">
    Nom: <input type="text" name="name"><br>
    Prix: <input type="number" step="0.01" name="price"><br>
    Description: <textarea name="description"></textarea><br>
    Image: <input type="file" name="image"><br>
    <button type="submit">Ajouter</button>
</form>


<link rel="stylesheet" href="assets/style.css">
