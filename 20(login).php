<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: hasil.php');
    exit;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'uus' && $password === 'uus123') {
        $_SESSION['username'] = $username;
        header('Location: hasil.php');
        exit;
    } else {
        $error = 'Username atau password salah';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>