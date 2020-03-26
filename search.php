<?php 
require "logika/functions.php";
$search = $_GET['search'];
$sql = "SELECT oglasi.naslov, oglasi.kategorija, oglasi.cena FROM oglasi
        WHERE oglasi.naslov = '$search'
        OR oglasi.kategorija = '$search'
        OR oglasi.cena = '$search'";
$query = mysqli_query(database(), $sql);
$result = mysqli_fetch_assoc($query);

if ($result !== null) {
        include "search_view.php";
} else {
        include "search_fail.php";
}

?>