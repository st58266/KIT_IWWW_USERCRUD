<?php
require_once 'class/UserFunctions.php';
if (!UserFunctions::isLoged()) {
    echo 'odhlasen';
    echo $_SESSION['isLoged'];
    echo $_SESSION['role'];
    exit();
    header("Location: index.php");
    die();
}
?>

<!DOCTYPE html>

<html>
    <head>
        <?php
        include 'top.php';
        ?>
    </head>
    <body>
        <div>
            <?php
            include 'menu.php';
            ?>
            <div class="radek">
                <a href="registrace.php">Přidat</a>
            </div>
            <table>
                <tr>
                    <th>E-mail</th>
                    <th>Heslo</th>
                    <th>Role</th>
                    <th>Detail</th>
                </tr>

                <?php
                foreach (UserFunctions::getAll() as $item) {
                    echo '<tr>';
                    echo '<th>'.$item["e-mail"].'</th>';
                    echo '<th>*****</th>';
                    echo '<th>'.$item["Roles_idRoles"].'</th>';
                    echo '<th><a href="detail.php?id='.$item['idUsers'].'">Detail</a></th>';
                    echo '<tr>';
                }
                ?>

            </table>

        </div>

    </body>
</html>
