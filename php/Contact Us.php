<?php session_start();?>
<!DOCTYPE html>

<html>
	<head>
		
		<title>Contact Us</title>
    <link rel = "stylesheet" href = "../css/Home.css">
    <link rel = "stylesheet" href = "../css/contact.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
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
            <div>
  		
    		<div class="column">
<h1>Let's Chat <br><br> Tell me about your<br><br>  Requirement</h1><br><br><br><font color="#0033cc"><strong>"Cleanliness is next to Godliness"</strong></font color><br>
<h4 id=h4>We are also available on </h4>
    <div class="s_logos">
        <a  href="https://www.facebook.com/" target="_blank"><img id = "fb" src="../images/contact us/fb.jpg"  alt="Facebook_logo"></a>
        <a  href="https://twitter.com/?lang=en" target="_blank" id="inline"><img id = "tw" src="../images/contact us/twitter.jpg" alt="Twitter_logo"></a>
        <a  href="https://www.instagram.com/?hl=en" target="_blank" id="inline"><img  id = "ins" src="../images/contact us/instagram.jpg" width = "65px" alt="Instagram_logo"></a>
        <a  href="https://www.gmail.com/" target="_blank" id="inline"><img  id = "g" src="../images/contact us/gmail.jpg" alt="Gmail_logo"></a><br>
    </div>
</div>
<div class="column" style="margin-bottom:200px">
                <form method="post" action="contact.php" >
			<h4 class="h4">Send us a message</h4>
Please fill out the form below to start chatting with the next available <br>agent
<input type="text" id="name" name="name" Placeholder="*Name" title="Please Enter Your Name here" required><br><br>
<input type="email" id="mail" name="email" Placeholder="*Email"title="Please Enter Your  Email here" required><br><br>
<input type="text" id="sub" name="sub" placeholder="*Subject" title="Please Enter your Concern"required><br><br>
<strong>Tell us more About your subject</strong><br><br>
<textarea rows="10" cols="100" name="concern" title="We are all ears"></textarea><br><br>
<input type="submit" value="Start Chat"> 
<input type="Reset" value="Cancel"> 
</form>
            </div>

		<hr class = "line">
		<div id ="footer">
			<footer style="display: inline">
            <div>
                <div id = "f_box1">
                    <img src="../images/home_page/payment.jpg" >
                </div>
                <div id = "f_box2">

                </div>
            </div>

			</footer>
		</div>
	</body>
</html>


