<?php include "../partials/header.php" ;

session_start(); ?>

<div class="wrapper">
    <h1><?= $_SESSION['user']['name'] ?></h1>
    <h2>email : <?= $_SESSION['user']['email'] ?></h2>


</div>





<?php include "../partials/footer.php" ?>