<?php include "../partials/header.php" ;
      include '../config/cURL.php';

        if(isset($_GET['product'])) {
            $id = $_GET['product'];
        }
?>


 

    <?php foreach($products as $product) : ?>
        <?php if ($id == $product['id']) : ?>
            <div class="product">
            <h1>Page de produit</h1>  
                <a href="#"><img src="<?= $product['image'] ?>" alt=""></a>
                <h2><?= $product['title'] ?></h2>
                <h3><?= substr($product['description'], 0, 50) ?> ...</h3>
                <h2><span id = "prix"><?= $product['price'] ?> €</span></h2>
                <button><a href="./cart.view.php">Ajouter au panier</a></button>
            </div>
        <?php endif ?>
    <?php endforeach ?>

<?php include "../partials/footer.php" ?>