<?php
session_start();
if(isset($_SESSION['uname'])){
echo '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cart</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="cart.css">
    </head>
    <body>
        <header>
        <nav role="navigation">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>

                <ul id="menu">
                    <a href="home.php">
                        <li>Home</li>
                    </a>
                    <a href="vegetable.php">
                        <li>Vegetable</li>
                    </a>
                    <a href="about.html">
                        <li>About</li>
                    </a>
                    <a>
                        <li>Welcome '.$_SESSION['uname'].'!</li>
                    </a>
                    <a href="logout.php">
                        <li>Logout</li>
                    </a>
                     <a href="cart_next.php">
                        <li><i class="fa fa-shopping-cart"></i></li>
                    </a>
                </ul>
            </div>
        </nav>
        <h1>Fresho Shop</h1>
    </header>
        <div>
            <h2>CART</h2>
            <table>
                <tr class="tr_head">
                <th>Product id</th>
                <th>Product code</th>
                <th>Name</th>
                <th>Price</th>
            </tr>';
    include('connection.php');
        $total=0;
        $sql = "select * from sonu";  
        $result = mysqli_query($con, $sql);    
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<tr><th>'.$row['id'].'</th><th>'.$row['product_code'].'</th><th>'.$row['name'].'</th><th>'.$row['price'].'</th></th>';
            $total=$total+$row['price'];
        }
        $_SESSION['total']=$total;
echo '</table>
    <div class="div">
    <form method="POST" action="delete.php">
        Enter Item id to delete:&nbsp;&nbsp;<br><input type="text" class="input" name="nam">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn" value="Delete">
    </form>';

    echo '<h1>Total Amount='.$total.'</h1>
        </div>
        <h3 align="right"><a href="checkout.php"><button class="btn1">Checkout</button></a></h3>
        </div>
    </body>
</html>';
}
else{
    header("Location:login.html");
}
?>
  