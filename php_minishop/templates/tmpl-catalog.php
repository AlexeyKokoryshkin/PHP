<h1>
    Каталог товаров
</h1>

<div class="products">
    <?php foreach( $goods as $good ): ?>
        <div class="shopUnit">
            <img src="<?= $good['img']; ?>" />
        
        <div class="shopUnitName">
            <?= $good['name']; ?>
        </div>
        <div class="shopUnitShortDesc">
            <?= $good['desc'] ?>
        </div>
        <div class="shopUnitPrice">
            <?= $good['price'] ?>
        </div>
        <a href="index.php?page=product&id=<?= $good['id']; ?>" class="shopUnitMore">
            Подробнее
        </a>
    </div>
    <?php endforeach; ?>
</div>
