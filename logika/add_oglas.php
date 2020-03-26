<?php 
require_once "functions.php";
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id']; //treba nam id da bi znali ko je vlasnik oglasa
    $naslov = $_POST['naslov'];
    $tekst = $_POST['tekst'];
    $cena = $_POST['cena'];
    $kategorija = $_POST['kategorija'];

    save($naslov, $tekst, $kategorija, $cena, $id);
} else {
    header('Location: index.php');
}

?>