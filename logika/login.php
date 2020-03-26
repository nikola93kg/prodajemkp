<?php
require_once __DIR__ . "/../logika/functions.php";
$username = $_POST['username'];
$password = $_POST['password'];
$password = hash('sha512', $password);

$sql = "SELECT * FROM korisnici WHERE username = '$username' AND password = '$password'";
$query = mysqli_query(database(), $sql);
$result = mysqli_fetch_assoc($query);

if ($result) {
    logUser($result);
} else {
    header('Location: ../uloguj_se.php?error=0');
}

?>