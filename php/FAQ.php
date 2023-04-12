<?php session_start();?>
<!DOCTYPE html>

<html>
	<head>
		<!--add a title-->
		<title>Diamond shine</title>
    <link rel = "stylesheet" href = "../css/FAQ.css">
    <link rel = "stylesheet" href = "../css/Home.css">
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
            <hr>
            <div class="body_main">
                <div style = "text-align:center">
                <img id="img1" src="../images/background.png" alt="FAQ">
                </div>
                <div id="b1">
                    <div class="body1">
                        <br>
                    <b><p>1.How can I place orders?</p></b>
                    <p>* You can place an order via our app or you can call our hotline or you can visit one of our retail shops.</p>
                    <b><p>2.Do you have delivery services?</p></b>
                    <p>* We have both collection amd delivery services. You can handover your cloths to one of our agents and get them delivered to your doorstep(Extra charges may apply)</p>
                    <p><b>3.Can I reschedule my collection?</b></p>
                    <p>* Yes you can change your collection dates via Diamond Shine app or via a phone call, but you should inform it before 24 hours.</p>
                    <b><p>4.How can I use the Diamond Shine app?</p></b>
                    <p>* You can download the app via Playstore and Appstore. First you have to create an account, then you can place orders,check order progress, request collection and home deliveries.</p>
                    <b><p>5.What are the offers given to customers?</p></b>
                    <p>* We offer discounts for seleced orders. At the end of the month we issue gift vouchers for cargils foodcity and Keels for selected customers.</p>
                    <p>* If you can recomend our service t another person(via the app) that person will recieve a refference code , when that person uses it in his first order he will recieve 5% discount, you will recieve 20% discount for your next order. (conditions may apply)</p>

                </div>
                </div>
</div>
                <hr class="line">
                <div id="footer">
                    <footer>
                    <img src="../images/home_page/payment.jpg" >

                    </footer>
                </div>


	</body>
</html>


