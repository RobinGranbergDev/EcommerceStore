<?php
    session_start();
?>

<DOCTYPE html>
<html>
<head>
    <meta>
    <meta>
    <title>Login system</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <a href="../index.php" class="logo">Home</a>
        <ul>
            <li><a href="#" class="listlink">Contact</a></li>
            <li><a href="./index.php" class="listlink">Login</a></li>
            <li><a href="../cart.php" class="listlink">Cart</a>
            <?php
                            if (isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<span id=\"cart_count\" class=\"bg-light\">$count</span>";
                            }else{
                                echo "<span id=\"cart_count\" class=\"bg-light\">0</span>";
                            }
                            ?>
            </li>
        </ul>
    </header>

