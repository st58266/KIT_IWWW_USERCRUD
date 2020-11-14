<?php
require_once 'class/UserFunctions.php';
if (!UserFunctions::isLoged()) {
    header("Location: index.php");
    die();
}

$user = UserFunctions::getUserId($_GET['id']);

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
            <h1>Úprava</h1>
            <div>
                <form action="phpFiles/edit.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $user['idUsers'] ?>"/>
                    <div class="radek">
                        <label for="e-mail">E-mail</label>
                        <input name="e-mail" type="text" value="<?php echo $user['e-mail'] ?>"/>
                    </div>

                    <div class="radek">
                        <label for="heslo">Heslo</label>
                        <input name="heslo" type="password" value="<?php echo $user['password'] ?>"/>
                    </div>
                    
                    <div class="radek">
                        <label for="admin">Admin</label>
                        <input  name="admin" type="checkbox" <?php if ($user['Roles_idRoles'] == 1) {echo "checked";}?>/>
                    </div>

                    <div class="radek">
                        <input type="submit"/>
                    </div>  

                </form>
            </div>

        </div>
    </body>
</html>
