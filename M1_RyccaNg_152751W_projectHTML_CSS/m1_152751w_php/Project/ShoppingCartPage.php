<?php

session_start();
if (!isset($_SESSION['MM_Username']))
{
header("Location:Login.php");
}
$conn = mysqli_connect("localhost", "root", "","152751w" );
//$sql=select*from cart where username='mary';
$sql="SELECT * FROM cart where username='".$_SESSION['MM_Username'] ."'";
$cart_list = mysqli_query ( $conn, $sql);
?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/EmptySC.css">
    <title></title>

    </head>
    <body>
    <div id="wrapper" style="height:995px;">
    <header>
    <div id="logo">
        <a href="Homepage.html" title="HomePage"><img src="images/LOGO.jpg"/></a>
     </div>

    <form>
    SEARCH: <input type="text" name="search" min="0" max="50" style="width:300px; height:18px;"/>
            <input type="button" value="GO" style="height:18px; font-size:14px;"/>

    </form>
        <nav id="mainNav">
            <ul id="test">
            <li><a href="Login.html" title="Login">LOGIN  |</a></li>
			<li><a href="Register.html" title="Register">REGISTER</a></li>
            </ul>
        </nav>

    <div id="shoppingcart">
        <a href="ShoppingCartPage.html" title="ShoppingCartPage"><img src="images/Shoppingcart.png"/></a>
    </div>
        </header>
        <section id="section1">
        <nav id="subNav">
            <ul>
          <p>MUSIC CATEGORY</p>

          <li><a href="MusicGenres.html" title="Genre"><img src="images/ArrowNav.png">Genre</a></li>
          <li><a href="MusicGenres.html" title="Music"><img src="images/ArrowNav.png">Music</a></li>
          <li><a href="ShoppingCartPage.html" title="deliverydetails"><img src="images/ArrowNav.png">
                 Delivery Details</a></li>
          <li><a href="ShoppingCartPage.html" title="Pre-Orders"><img src="images/ArrowNav.png">Pre-Orders</a></li>
          <p>NEW ARRIVALS</p>
          <li><a href="MusicGenres.html" title="FeaturedProducts"><img src="images/ArrowNav.png">Featured Products</a></li>
          <li><a href="Best%20Sellers.html" title="TopSellingProducts"><img src="images/ArrowNav.png">
                Top Selling Products</a></li>
          <p>BROWSE BY</p>
          <li><a href="ArtistList.html" title="Artists"><img src="images/ArrowNav.png">Artists</a></li>
          <li><a href=".html" title="Recent Releases"><img src="images/ArrowNav.png">Recent Releases<br>
                &lt;BY MONTH&gt;</a></li>
            </ul>
            </nav>
            <article id="emptyShoppingCartpg">
        <h1>Shopping Cart</h1>
            <p>Your shopping cart is empty</p>
            <input type="button" value="Click to continue shopping" style="height:20px; font-size:14px;"/>

            </article>
        </section>






        <footer>
        <nav id="footerNav">
        <ul>
        <li><a href="AboutUs.html" title="AboutUs">About Us</a></li>
        <li><a href="Site Feedback.html" title="SiteFeedback">Site Feedback</a></li>
        <li><a href="ShoppingCart.html" title="YourOrders">Your Orders</a></li>
        <li><a href="AboutUs.html" title="OrderHistory">Order History</a></li>
        <li><a href="Help.html" title="Help">Help</a></li>
        <li><a href="ContactUs.html" title="Contact Us">Contact Us</a></li><br>
         <p>2016�Copyrights RY Music CD Online Store All Rights Reserved</p>

        </ul>
        </nav>
        <div id="copyright">

        </div>
        </footer>


        </div>

    </body>

</html>