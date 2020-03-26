<?php 
require_once __DIR__ . "/../config.php";
session_start();
function database() {
    $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    return $conn;
}
function logUser($user) {
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['ime_prezime'];
    header('Location: ../home.php');
}
function getAll() {
    $sql = "SELECT * FROM oglasi INNER JOIN korisnici ON oglasi.korisnik_id = korisnici.id";
    $query = mysqli_query(database(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}
function getAllUserAds($id) {
    $sql = "SELECT *, korisnici.username FROM oglasi 
    INNER JOIN korisnici ON oglasi.korisnik_id = korisnici.id WHERE oglasi.korisnik_id = '$id'";
    $query = mysqli_query(database(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}
function save($naslov, $tekst, $kategorija, $cena, $id) {
    $sql = "INSERT INTO oglasi VALUES (NULL, '$naslov', '$tekst', '$kategorija', '$cena', '$id')";
    $query = mysqli_query(database(), $sql);
    
    if($query) {
        header('Location: ../korisnik.php');
    } else {
        header('Location: ../index.php');
    }
}
function getOne($id) {
    $sql = "SELECT *, korisnici.username FROM oglasi 
    INNER JOIN korisnici ON oglasi.korisnik_id = korisnici.id WHERE oglasi.id = '$id'";
    $query = mysqli_query(database(), $sql);
    $result = mysqli_fetch_assoc($query);
    return $result;
}
function getCategory($kat) {
    $sql = "SELECT *, korisnici.username FROM oglasi 
    INNER JOIN korisnici ON oglasi.korisnik_id = korisnici.id WHERE oglasi.kategorija = '$kat'";
    $query = mysqli_query(database(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}
function getAllFromUser($name) {
    $sql = "SELECT *, korisnici.username FROM oglasi 
    INNER JOIN korisnici ON oglasi.korisnik_id = korisnici.id WHERE korisnici.username = '$name'";
    $query = mysqli_query(database(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}
function deleteOglas($id) {
    $sql = "DELETE FROM oglasi WHERE id = '$id'";
    $query = mysqli_query(database(), $sql);
    if ($query) {
        header('Location: ../korisnik.php');
    } else {
        header('Location: ../korisnik.php?error=1');
    }
    
}
?>