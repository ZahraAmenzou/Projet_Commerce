   
   <link rel="stylesheet" href="assets/style.css">

   <?php
session_start();
include 'db.php';
if(!isset($_SESSION['admin'])) { header("Location: login.php"); exit(); }

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM products WHERE id=?");
$stmt->execute([$id]);
$product = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];

    $stmt = $pdo->prepare("UPDATE products SET name=?, price=?, description=? WHERE id=?");
    $stmt->execute([$name, $price, $desc, $id]);

    header("Location: index.php");
    exit();
}
?>

<form method="POST">
    Nom: <input type="text" name="name" value="<?= $product['name'] ?>"><br>
    Prix: <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>"><br>
    Description: <textarea name="description"><?= $product['description'] ?></textarea><br>
    <button type="submit">Modifier</button>
</form>
