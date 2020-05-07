<div id="content">
    <?php
        $page = $_GET['page'];
        if(empty($page)) {
            require('./templates/tmpl-main.php');
        } elseif($page == 'shop') {
            require('./templates/tmpl-catalog.php');
        } elseif($page == 'product') {
            $id = $_GET['id'];
            $good = [];
            foreach( $goods as $product ) {
                if ($product['id'] == $id) {
                    $good = $product;
                break;
                }
            }
            require('./templates/tmpl-openedProduct.php');
        } else {
            require('404.php');
        }
    ?>
</div>

