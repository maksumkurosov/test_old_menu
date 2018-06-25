<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Untitled</title>
	<link rel="stylesheet" href="s.css" type="text/css">
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
?>


<?php
    if ($_GET['page'] == 'admin') { ?>
        <form action="" method="post">
            <input type="text" name="user" value="" >
            <input type="password" name="password" value="">
            <input type="submit" name="btnpassword">
            <?php print_r($_SESSION);?>
        </form>
    <?php
        if ( $user->enter()){
            require_once ROOT . '/view/admin_line/index.php';
            require_once ROOT . '/view/admin_line/create.php';
            require_once ROOT . '/view/admin_line/update.php';
        }
    } else {
        include_once "view/header.php";
        include_once "view/maine.php";
        include_once "view/footer.php";
    }
    ?>

</div>
</div>
</body>
</html>