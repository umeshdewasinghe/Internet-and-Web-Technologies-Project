<?php session_start()?>
<!DOCTYPE html>

<html>
	<head>
		<!--add a title-->
		<title>My shopping cart</title>
    <link rel = "stylesheet" href = "../css/how_its_work.css">
    <link rel = "stylesheet" href = "../css/Home.css">
    <link rel = "stylesheet" href = "../css/main.css">
    <script src = "../js/how_its_work.js">

    </script>    
    </head>
	<body>
		<!--add a logo-->
        <div id = "header">
		    <div id = "c1">
                <img id = "logo" src = "../images/home_page/logo.jpg" alt = "image">
            </div>
            <div id = "c2">
                <div id = "c3">
                <?php
                    if ($_SESSION['gender'] == 'female')
                        echo("<img id =\"profile_pic\" src = \"../images/home_page/profile2.PNG\" alt = \"profile\">");
                    else
                        echo("<img id =\"profile_pic\" src = \"../images/home_page/profile.PNG\" alt = \"profile\">");
               ?>
                </div>
                <div id = "c4">
                    <p><?php echo ($_SESSION['username']) ?><br>
                    <p><a href = "edit_profile.php">Edit profile</a></p>
                    <p><a href="destroy.php">log out</a></p>
        
                </div>
            </div>
            
        </div>

		
		<div id = "navbar">
            
        <ul id = "ul_list_1">
        <li><a href = "Home.php"> Home </a></li>
                <?php 
                    if($_SESSION['user_type'] == 'delivery_person')
                        echo("<li><a href = \"delivery_portal.php\"> Delivery portal</a></li>");
                ?>
                <li><a href = "how_its_work.php"> How it works</a></li>
                <li><a href = "pricing.php"> Pricing</a></li>
                <li><a href = "FAQ.php"> FAQ</a></li>
                <li><a href = "Privacy policy.php"> Privacy policy</a></li>
                <li><a href = "Contact Us.php"> Contact us</a></li>
        </ul>
		</div>  
        <hr class = "line">
        <div class="body_main">
        <div style = "text-align: center;">
        <div style = "display: inline-block;">
            <div>
                <h1><marquee>How Its Works</marquee></h1>
            </div>
            <div class="button3">
                <img src="../images/how_its_work/order.jpg" alt="image" width="100px" height="95px">
                <p class="font1">Your Order<p>
                <p class="font2">Book a laundry collection using our website order now button.</p>
            </div>
            <div class="button3">
                <img src="../images/how_its_work/collect.png" alt="image" width="115px" height="75px">
                <p class="font1">We Collect<p>
                <p class="font2">Our Agent will come to your door step to collect your item.</br>(Free pick up)</p>
            </div>
            <div class="button3">
                <img src="../images/how_its_work/clean.png" alt="image" width="100px" height="95px">
                <p class="font1">We Clean<p>
                <p class="font2">We collect dirt very seriosly.Your Clothes receive our expert treatment.</p>
            </div>
            <div class="button3">
                <img src="../images/how_its_work/delivery.png" alt="image" width="180px" height="100px">
                <p class="font1">We Delivery<p>
                <p class="font2">Hey pal, open up! Your clothes are delivery on time and as fresh as daisy.</p>
            </div>
        </div>
        </div>
        </br>
            <div  class="hpara">Clothin is your asset-that's why it is our duty to return it to safely. So we use the best experienced</br> workforce and the latest machinery. We guarantee that we take care of your attire </br>to the highest standard possible.</div>
            <br>
            <div class="hsub">Our team has a background in setting up norms in modern day industry, so to say we are pretty particular about our process is an understatement.</br> We work with each new team member for weeks to ensure they meet all of our criteria.</br> (from washing and drying procedures to how they fold)</div>
        </div>
		<hr class = "line">
		<div id ="footer">
			<footer>
                <img src="../images/home_page/payment.jpg" >

			</footer>
		</div>
</div>
	</body>
</html>


