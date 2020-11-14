<div id="header">
    <h1>MOJI UŽIVATELÉ</h1>
</div>

<nav id="menu">
    <div id="menu-items">

        <?php
        if (isset($_SESSION['isLoged']) && $_SESSION['isLoged']) {
            if ($_SESSION['role']=="1") {
                echo '<a href="seznam.php">Seznam</a>';
            }           
            echo '<a href="detail.php?id='.$_SESSION['id'].'">Detail</a>';
            echo '<a href="phpFiles/odhlaseni.php">Odhlaseni</a>';
        } else {
            echo '<a href="registrace.php">Registrace</a>';
        }
        ?>
    </div>

</nav>