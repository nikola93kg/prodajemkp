<nav class="navbar navbar-expand navbar-primary bg-light ">
    <?php if (isset($_SESSION['id'])) {
        echo '<a href="home.php" class="navbar-brand">Početna stranica</a>';
    } else {
        echo '<a href="index.php" class="navbar-brand">Početna stranica</a>';
    }
    ?>
    <a href="maps.php" class="navbar-brand">Gde se nalazimo?</a>
    <a href="https://www.linkedin.com/in/nikola-markovic-170269143/" class="navbar-brand" target="_blank">Info</a>
    <?php
    if (isset($_SESSION['id'])) {
        require_once "partials/navbar-logged.php";
    } else {
        require_once "partials/navbar-login.php";
    }
    ?>
</nav>