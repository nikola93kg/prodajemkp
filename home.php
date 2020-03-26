<?php require_once "partials/head.php"; ?>
<?php require_once "partials/navbar.php"; ?>
<?php require_once __DIR__ . "/logika/functions.php" ?>
<?php
if (!isset($_SESSION['id'])) {
    header('Location: uloguj_se.php');
}
$oglasi = getAll();

?>
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1 class="display-2">Dobrodošli.</h1>
        <img src="img/Asset 860.png" class="welcome_pic">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum perferendis eaque, iure non impedit quae, tempora labore fuga suscipit blanditiis, porro praesentium provident architecto nihil necessitatibus sequi asperiores quaerat corporis!!</p>
        <a class="btn btn-warning btn-lg" href="korisnik.php" role="button">Postavi oglas</a>
        <a class="btn btn-info btn-lg" href="#svi_oglasi" role="button">Pogledaj sve oglase</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h1 class="display-4 text-center" id="svi_oglasi">Svi oglasi</h1>
            <div class="row">
                <?php foreach ($oglasi as $oglas) : ?>
                    <div class="col-4">
                        <div class="card mb-2 mt-2">
                            <div class="card-header">
                                <a href="prikaz_kategorije.php?kat=<?php echo $oglas['kategorija']; ?>" class="btn btn-secondary btn-sm">
                                    <?php echo $oglas['kategorija']; ?>
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <h5><?php echo $oglas['naslov']; ?></h5>
                                <a href="singl_oglas.php?id=<?php echo $oglas['id']; ?>" class="btn btn-light btn-sm">Vidi oglas</a>
                            </div>
                            <div class="card-footer">
                                <a href="oglasi_from_user.php?name=<?php echo $oglas['username']; ?>" class="btn btn-warning btn-sm float-left">
                                    <?php echo $oglas['username']; ?>
                                </a>
                                <a href="" class="btn btn-danger btn-sm float-right">
                                    <?php echo $oglas['cena']; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<?php require_once "partials/footer.php"; ?>