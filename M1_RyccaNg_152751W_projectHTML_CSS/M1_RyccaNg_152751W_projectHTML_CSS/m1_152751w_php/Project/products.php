 <?php

	//session_start();
	//if (!isset($_SESSION['MM_Username']))
	//{
	//header("Location:Login.php");
    //}
    $selected_genre=$_GET['genre'];
	$filter ="";
	if(isset($_POST['ProductName']))
	{
		$productname_selected = $_POST['ProductName'];
		$filter = " WHERE ProductName='$productname_selected'";
	}
		$conn = mysqli_connect("localhost", "root", "","152751w" );

		$sql_details = "SELECT*FROM products".$filter;

		$productdetails_list = mysqli_query( $conn, $sql_details);

	    $sql_product = "SELECT from products where genres='$selected_genre'";
		//execute the SQL statement
	     $product_list=mysqli_query( $conn, $sql_product);

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/BSstyle.css">
    <title></title>

    </head>
    <body>
    <div id="wrapper">
    <header>
    <div id="logo">
        <a href="Homepage.html" title="HomePage"><img src="images/LOGO.jpg"/></a>
     </div>

    <form id="hform">
    SEARCH: <input type="text" name="search" id="searchbar" min="0" max="50"/>
            <input type="button" value="GO" style="height:18px; font-size:14px;"/>

    </form>
        <nav id="mainNav">
            <ul id="test">
            <li><a href="login.html" title="Login">LOGIN  |</a></li>
			<li><a href="register.html" title="Register">REGISTER</a></li>
            </ul>
        </nav>

    <div id="shoppingcart">
    <a href="DeliveryDetails.html" title="ShoppingCartPage"><img src="images/Shoppingcart.png"/></a>
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

        <article id="BSsection2">

        <div class="r1">
        <h3>Pop Music</h3>
<?php ?>

			 <?php while ( $one_category= mysqli_fetch_assoc($product_list)  )
							 		{
								?>
				<div class="img">

				<a href="productdetails.php"><a href="productdetails.php?Image=<?php echo $one_category['Image'];?>">
				<img src="images/<?php echo $one_category['Image'];?>"/><br>
				<td><a href="productdetails.php"><?php echo $one_category['ProductName'];?></a></td></a>
				</div>


		       <?php }  ?>
 <?php   ?>

		          </div>


        </section>

        <footer>
        <nav id="footerNav">
        <ul>
        <li><a href="AboutUs.html" title="AboutUs">About Us</a></li>
        <li><a href="Site Feedback.html" title="SiteFeedback">Site Feedback</a></li>
        <li><a href="YourOrders.html" title="YourOrders">Your Orders</a></li>
        <li><a href="OrderHistory" title="OrderHistory">Order History</a></li>
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



