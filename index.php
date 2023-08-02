<?php
require_once 'layout/header.php';
require_once 'data/products.php';
require_once 'functions/tva.php'
?>

<h1 class=" text-success m-3">Produits</h1>;

<section class="container text-center">
    <main class="row align-items-start justify-content-center">
        <?php
        foreach ($products as $element) { ?>
            <div class="card col-3 m-2 shadow p-3 bg-body-tertiary rounded">
                <img src="<?php echo $element['img']; ?>"></img>
                <p>Name : <?php echo $element['name']; ?></p>
                <p>Price : <?php echo getTotalPrice($element['price'] , 5); ?> €</p>
                <div class="tags">
                    <?php foreach ($element['tags'] as $tagIndex) { ?>
                        <div class="tags">
                            <?php echo $tags[$tagIndex]['name']; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php }
        ?>
    </main>
</section>

    <? require_once 'layout/footer.php'; ?>