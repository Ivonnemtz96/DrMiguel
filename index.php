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
        include('includes/header.php');
        include('modules/index.php');
        include('includes/footer.php');
    ?>
    </div>
    <?
        include('includes/redes.php');
        include('includes/scripts.php');
    ?>
</body>

</html>