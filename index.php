<?
    include('indexController.php');   
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Inicio';
$inicio = 'active';
include('includes/head.php');
?>

<body>
    <div class="wrapper">
        <?
        include('includes/preloader.php');
        include('modules/'.$lenguaje.'/header.php');
        include('modules/'.$lenguaje.'/index.php');
        include('modules/'.$lenguaje.'/footer.php');
    ?>
    </div>
    <?
        include('includes/scripts.php');
    ?>
</body>

</html>