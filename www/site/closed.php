<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ragnar
 * Date: 4/28/12
 * Time: 5:48 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"  />
    <link href="resources/site/html/new/css/closed.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="centerDiv">
    <h2 class="legendTitle">NemeanWEB</h2>
    <div id="clContent">
        <p>Det utføres vedlikeholdsarbeid på nettsiden.</p>
        <form action="" method="POST">
            <ul>
                <li>
                    <label for="username">Brukernavn:</label>
                    <input autofocus="autofocus" name="username" type="text" value="<?php echo (isset($_POST['username'])) ? $_POST['username'] : ''; ?>" />
                </li>
                <li>
                    <label for="password">Passord:</label>
                    <input name="password" type="password" />
                </li>
                <li>
                    <label for="submit">&nbsp;</label>
                    <input name="submit_login" type="submit" value="Login" />
                </li>
                <li>
                    <p><?php echo ($error != '') ? $error : ''; ?></p>
                </li>
            </ul>
        </form>
    </div>
</div>
</body>
</html>