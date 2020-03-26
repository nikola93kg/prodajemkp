<?php 
require_once __DIR__ . "/../logika/functions.php";
$username = $_POST['username'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

$password = hash('sha512', $password);
$repeat_password = hash('sha512', $repeat_password);

if ($password !== $repeat_password) {
    header('Location: ../registruj_se.php?error=pass');
}

$email = $_POST['email'];
$ime_prezime = $_POST['ime_prezime'];

$sql = "INSERT INTO korisnici VALUES (NULL, '$username', '$password', '$email', '$ime_prezime', 3)";
$query = mysqli_query(database(), $sql);

if ($query) {
    header('Location: ../uloguj_se.php');
} else {
    header('Location: ../index.php?register=null');
}

?>