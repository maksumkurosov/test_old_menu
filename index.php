<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Untitled</title>
	<link rel="stylesheet" href="s.css" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body style="background:url(i/metro-grad.png) repeat-x #f3f3f3;">
<div id="metro">
<div id="metro-in">

<?php define('ROOT', dirname(__FILE__));?>

<?php
require_once 'config/Db.php';
Db::getConnection();
require_once 'controllers/Line.php';
require_once 'controllers/Station.php';
require_once 'controllers/User.php';
?>

<?php
$line = new Line();
$stationOb = new Station();
$user = new User();

if(isset($_POST['btnpassword'])) {
    if (!empty($_POST['user']) && !empty($_POST['password'])) {
        $is_admin = $user->checkAdmin($_POST['user'], $_POST['password']);
    }
}

if ($_POST['unset']) unset($_SESSION['admin']);
//unset($_SESSION['admin']);
?>


<?php
    if ($_GET['page'] == 'admin') {  ?>
        <?php if (empty($_SESSION['admin'])){ ?>
        <form action="" method="post">
            <label>Имя користувача</label>
            <input type="text" name="user" value="" >
            <label>Пароль</label>
            <input type="password" name="password" value="">
            <input type="submit" name="btnpassword">
        </form>
        <?php
        }
            if (!empty($_SESSION['admin'])) { ?>
                <form action="" method="post">
                    <div class="text-md-right">
                        <input type="submit" class="btn btn-danger" name="unset" value="exit">
                    </div>
                </form>
             <?php } ?>

    <?php

        if (!empty($_SESSION['admin']) && $_SESSION['admin']['admin'] == 'admin') {
            require_once ROOT . '/view/admin_line/index.php';
            require_once ROOT . '/view/admin_line/create.php';
            require_once ROOT . '/view/admin_line/update.php';
        }
    } elseif ($_GET['line'] || $_GET['edit'] || $_GET['delete'] ) {
        require_once ROOT . '/view/admin_station/index.php';
        require_once ROOT . '/view/admin_station/create.php';
        require_once ROOT . '/view/admin_station/update.php';

    } else {
        include_once "view/header.php";
        include_once "view/maine.php";
        include_once "view/footer.php";
    }
    ?>

</div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>