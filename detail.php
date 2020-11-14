<?php
require_once 'class/UserFunctions.php';
if (!UserFunctions::isLoged()) {
    header("Location: index.php");
    die();
}
$user;

if (!($_SESSION['role']==1)) {
    $user = UserFunctions::getUserId($_SESSION['id']);
}else{
    $user = UserFunctions::getUserId($_GET['id']);
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
            include './menu.php';
            ?>

            <h1>Detail účtu</h1>


            <div class="radek">
                E-mail: <?php echo $user['e-mail']; ?>
            </div>

            <div class="radek">
                Heslo: <?php echo '******'; ?>
            </div>

            <div class="radek">
                Role: <?php echo $user['Roles_idRoles']; ?>
            </div>
            <div class="radek">
                <a href="upravit.php?id=<?php echo $user['idUsers']; ?>">Upravit</a>
            </div>
            <div class="radek">
                <br/>
            </div>
            <?php
            if ($_SESSION['role']==1) {
                echo'<div class="radek">
                Smazat: <form action="phpFiles/remove.php" method="post">            
                    <input type="hidden" name="id" value="'.$user['idUsers'].   
                    '"/> <input type="submit"/>
                </form>
            </div>';
            }
            
            ?>
           
        </div>'
    </body>
</html>
