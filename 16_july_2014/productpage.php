<html>
<style>
    fieldset{width: 350px;}
</style>
<body>
<fieldset>
    <legend>Add/Update Product</legend>
    <form method="post" action="productpage.php">
        Product Id:<input type="text" name="id"><br/>
        Quantity:<input type="text" name="quantity"><br/>
        <input type="submit" value="Add / Update" name="create"/>
    </form>
    <a href="index.php"><button>Home</button></a>
</fieldset>
</body>
<?php
{
    require 'shop.php';
    require 'product.php';
    session_start();

    if(isset($_POST['create']))
    {
        $product = new Product($_POST['id'],$_POST['quantity']);
        $shop = $_SESSION['shop'];

        $_SESSION['product'] = $product;
        $shop->setProduct($product);
        echo $shop -> addProduct($product);

        $_SESSION['shop'] = $shop;


    }
}
?>

</html>