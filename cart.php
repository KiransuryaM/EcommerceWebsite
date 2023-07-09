<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  />
    <link rel="stylesheet" href="style.css">



</head>
<body>
    <section id="header">
        <a href="home.html"><img src="images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="home.html">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li id="ig-bag"><a class="active" href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
    </section>
    <section id="page-header">
        <h2>#cart</h2>
    </section>
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <th>Remove</th>
                    <th>Image</th>
                    <th>Products</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $total=0;
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $total= $total + ($value['Price'] * $value['Quantity']);
                            $stotal= $value['Quantity'] * $value['Price'];
                            echo "<tr>
                            <form action='manage_cart.php' method='post'>
                                <td><button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button></td>
                                <input  type='hidden' name='Item_Name' value='$value[Item_Name]'>
                            </form>
                            <td> <img src='$value[Image]'> </td>
                            <td>$value[Item_Name]  </td>
                            <td>$value[Price]  </td>
                            <td> $value[Quantity]  </td>

                            <td> ₹$stotal </td>
                            </tr>";
                        }
                    }
                ?>
               <!--tr >
                    <img src='$value[Image]'>
                    <td><i class="far fa-times-circle"></i></td>
                    <td><img src="" alt=""></td>
                    <td>Item 1</td>
                    <td id="price-1">200.00</td>
                    <td><input type="number" id="quantity-1" value="1" min="1"></td>
                    <td id="subtotal-1">200.00</td>
                </tr--> 
               
            </tbody>
        </table>
    </section>
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal"><a href="#">Apply</a></button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td id="cart-subtotal">
                        <?php
                        $ftotal=0;
                        $total =$ftotal + $total;

                     echo"₹$total "; 
                     ?></td>
                </tr>
                <tr>
                   <td>Shippings</td>
                   <td>Free</td> 
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong id="total-cost"><?php echo"₹$total "; ?></strong></td>
                </tr>
            </table>
            <button class="normal"><a href="#">Proceed to checkout</a></button>
        </div>
    </section>
    <section id="foot1">
        <footer class="section-p1">
            <div class="col">
                <img src="images/logo.png" class="logo" alt="">
                <h4>Contact</h4>
                <p><strong>Address:</strong> Bengaluru</p>
                <p><strong>Phone:</strong> 100</p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
            <!--div class="col">
                <h4>About</h4>
                <a href="#">About Us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms and Conditions</a>
                <a href="#">Contact Us</a>
            </div-->
        </footer>
    </section>
    <script src="script.js"></script>
</body>
</html>