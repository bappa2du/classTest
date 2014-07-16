<html>
<style>
    fieldset{width: 350px;}
</style>

    <body>
        <fieldset>
            <legend>Shop Details</legend>
            <?php
            {
                require 'shop.php';
                require 'product.php';
                session_start();

                $shop = $_SESSION['shop'];

                echo 'Shop Code : '.$shop->getCode().'<br/>';
                echo 'Shop Name : '.$shop->getName().'<br/><br/>';

                echo "<u>Product Id-------Quantity</u><br/>";
                foreach($shop->getAllProduct() as $new_product)
                {
                    echo $new_product->getId()."------------".$new_product->getQuantity()."<br/>";
                }
            }
            ?>
            <br/>
            <a href="index.php"><button>Home</button></a>
        </fieldset>
    </body>
</html>