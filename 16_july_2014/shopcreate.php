<html>
<style>
    fieldset{width: 350px;}
</style>
    <body>
        <fieldset>
            <legend>Create Shop</legend>
            <form method="post" action="shopcreate.php">
                Code:<input type="text" name="code"><br/>
                Name:<input type="text" name="name"><br/>
                <input type="submit" value="Create" name="create"/>

            </form>
            <a href="index.php"><button>Home</button></a>
        </fieldset>
    </body>
    <?php

    require 'shop.php';
    require 'product.php';
    session_start();
    if(isset($_POST['create']))
    {
        $shop = new Shop($_POST['code'],$_POST['name']);
        $_SESSION['shop'] = $shop;

        echo 'Shop Created';
    }
    ?>
    <br/>

</html>