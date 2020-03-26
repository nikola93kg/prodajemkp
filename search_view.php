<?php require_once "partials/head.php"; ?>
<?php require_once "partials/navbar.php"; ?>
<?php if (!isset($_SESSION['id'])) {
    header('Location: index.php');
}
?>
<?php
$oglas = getOne($_GET['search']); 
//treba ti funkcija koja ce ti vratiti jedan oglas koji je korisnik trazio, sa svim njegovim informacijama
?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h3 class="display-4 text-center"><?php echo $oglas['naslov'] ?></h3>
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="card mb-2 mt-2">
                        <div class="card-header">
                            <a href="" class="btn btn-secondary btn-sm"><?php echo $oglas['kategorija']; ?></a>
                        </div>
                        <div class="card-body text-center">
                            <h5><?php echo $oglas['naslov']; ?></h5>
                            <p><?php echo $oglas['tekst']; ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-warning btn-sm float-left"><?php echo $oglas['username']; ?></a>
                            <a href="" class="btn btn-danger btn-sm float-right"><?php echo $oglas['cena']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "partials/footer.php"; ?>