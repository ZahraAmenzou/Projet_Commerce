<link rel="stylesheet" href="assets/style.css">

<?php
session_start();
include 'db.php';

$error = ""; // initialisation

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username=?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['admin'] = $user['username'];
        header("Location: index.php");
        exit();
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect";
    }
}
?>

<h1>Connexion Admin</h1>

<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>

<?php if($error) echo "<div class='error'>$error</div>"; ?>
