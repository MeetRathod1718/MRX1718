<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Services</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <?php
   include 'include/header.php';
   ?>
    <!-- Navbar Section Ends Here -->

<center>

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
		<center>

            <h2 class="text-center">Select Sign in/Sign Up</h2>

            <a href="login_page/index.html">
            <div class="box-3 float-container">
                 <img src="images/user1.png"  alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">User</h3>
            </div>
            </a>

            <a href="login_page/members.php">
            <div class="box-3 float-container">
                 <img src="images/profile.jpg" alt="image" class="img-responsive img-curve" border="3">

                <h3 class="float-text text-white">Service Providerss</h3>
            </div>
            </a>

           

            

            <div class="clearfix"></div>
			</center>

        </div>
    </section>
    <!-- Categories Section Ends Here -->


    <!-- social Section Starts Here -->
     <?php
   include 'include/footer.php';
   ?>
    <!-- footer Section Ends Here -->

</body>
</html>