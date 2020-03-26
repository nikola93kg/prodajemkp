<ul class="navbar-nav ml-auto">
    <form action="search.php" method="get" class="forma nav-link">
        <input type="text" name="search" placeholder="pretrazi" autocomplete="off">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
    <li class="nav-item"><a href="korisnik.php" class="nav-link"><?php echo $_SESSION['name']; ?></a></li>
    <li class="nav-item"><a href="logika/logout.php" class="nav-link">Logout</a></li>
</ul>