<!DOCTYPE html>
<?php
require_once 'class/Connection.php';
require_once 'class/UserFunctions.php';
//session_start();
        
?>
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
            <h1>Přihlášení</h1>
            <div>
                <form action="phpFiles/login.php" method="post">
                    <input type="hidden" name="page" value="form"/>
                    <div class="radek">
                        <label for="e-mail">E-mail</label>
                        <input name="e-mail" type="text"/>
                    </div>

                    <div class="radek">
                        <label for="heslo">Heslo</label>
                        <input name="heslo" type="password"/>
                    </div>


                    <div class="radek">
                        <input type="submit"/>
                    </div>  

                </form>
            </div>

        </div>
    </body>
</html>
