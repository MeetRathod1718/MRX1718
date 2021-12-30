<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Minute maintanunce</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    
    </style>
</head>

<body>

    <!-- Navbar Section Starts Here -->
   <?php
   include 'include/header.php';
   ?>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
	
    <section class="food-bg">
        <div class="container">
<br><br><br>
        <!--    <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
        -->
        </div>
		 <?php
   include 'include/search.php';
   ?>
   
   
    <!-- service sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
   	 <?php
   include 'include/services-mini.php';
   ?>
   
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Top Service Providers </h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    
					<img src="images/sanchar.png" alt="Dummy" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Sanchar Internet Services</h4>
                    <p class="food-price">0-120 &#x20B9; for Maintanance</p>
                    <p class="food-price">4999-12999 &#x20B9; For new Connection</p>
                    <p class="food-detail">
							Leading Internet Broadband Service Provider
							<br>
						<small>	116 MADHAV DARSHAN , WAGHAWADI ROAD - 364001
Bhavnagar   </small>   </p>
                    <br>

                    <a href="book.php" class="btn btn-primary">Book Now</a>
                </div>
            </div>   
   <div class="food-menu-box">
                <div class="food-menu-img">
                    
					<img src="images/sacar.jpg" alt="Dummy" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Shivanand Car Services </h4>
                    <p class="food-price">350-2,300* &#x20B9;</p>
                    <p class="food-detail">
							Car Repairing from your Parking/pick up to garage - All car repair/change parts + Accessories At one stop
<br> <small>Addr : Waghawadi Road Bhavnagar - 364001</small>

							</p>
                    <br>

                    <a href="book.php" class="btn btn-primary">Book Now</a>
                </div>
            </div>


            <div class="clearfix"></div>



        </div>

        <p class="text-center">
                       <a href="city-options.php">See more</a>

        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->
    
	<!-- footer Section Starts Here -->

    <!-- social Section Starts Here -->
    <?php
   include 'include/footer.php';
   ?>
    <!-- social Section Ends Here -->

    
    <!-- footer Section Ends Here -->

</body>
</html>
