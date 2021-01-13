
<html>
<body>
<header>
    <a href="index.php" class="logo">Home</a>
    <ul>
        <li><a href="#footer" class="listlink scroll">Contact</a></li>
        <li><a href="./LoginPHP/index.php" class="listlink">Login</a></li>
        <li><a href="cart.php" class="listlink">Cart</a>
        <?php
                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<li><span id=\"cart_count\" class=\"bg-light\">$count</span></li>";
                        }else{
                            echo "<li><span id=\"cart_count\" class=\"bg-light\">0</span></li>";
                        }
                        ?>
        </li>
    </ul>
</header>
