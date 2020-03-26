<?php require_once "partials/head.php"; ?>
<?php require_once "partials/navbar.php"; ?>
<?php if (!isset($_SESSION['id'])) {
    header('Location: index.php');
}
?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h4 class="text-center m-3">Novi Oglas</h4>
            <form action="logika/add_oglas.php" method="post">
                <input type="text" name="naslov" placeholder="naslov" class="form-control" autocomplete="off"><br>
                <textarea name="tekst" class="form-control" placeholder="unesite tekst oglasa"></textarea><br>
                <input type="number" name="cena" placeholder="cena" class="form-control"><br>
                <select name="kategorija" class="form-control">
                    <option value="Računari" class="form-control">Računari</option>
                    <option value="Bela tehnika" class="form-control">Bela tehnika</option>
                    <option value="Televizori" class="form-control">Televizori</option>
                    <option value="Mobilni telefoni" class="form-control">Mobilni telefoni</option>
                    <option value="Muzički instrumenti" class="form-control">Muzički instrumenti</option>
                </select>
                <button type="submit" class="btn btn-primary form-control mt-5">Dodaj oglas</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "partials/footer.php"; ?>