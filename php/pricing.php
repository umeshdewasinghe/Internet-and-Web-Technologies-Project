<?php 
session_start();

?>
<!DOCTYPE html>

<html>
    
	<head>
		<!--add a title-->
		<title>Diamond Shine/Pricings</title>
    <link rel = "stylesheet" href = "../css/pricing.css">
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
        <hr class = "line">
        <div class="body_main">
        <div id="background">
            <br>
            <center><h1 style="font-size:50px">Pricing</h1></center>
            <form action="delivery.php" method="POST" >
            <div class="maincontainer">

                <div class="container">
                    <h5 class="containercontent">T-Shirt</h5>
                    <img class="containerimages" src="../images/pricing/tshirt.jpg" alt="T-Shirt">
                        <div class="selectposition">
                            <label class="select" for="T-shirt">Select <br></label>
                            <select name="tshirt" id="t-shirt">
                                <option value="0" >select an option</option>
                                <option value="120">Washed</option>
                                <option value="150">Washed and folded</option>
                                <option value="200">Dry cleaned and pressed </option>
                            </select>
                        </div>
                        <div class="amountposition">
                            <label class="amount" for="t-shirt amount">Amount</label>
                            <input id="t-shirt amount" name="t-shirt-amount" type="text" value="0"  placeholder="Enter the amount">
                        </div>
                        <div class="prices">
                        <p>Washed - Rs.120/=</p><br>
                        <p>Washed and Folded - Rs.150/=</p><br>
                        <p>Dry cleaned and pressed - Rs.200/=</p>
                    </div>
                </div>

                <div class="container">
                    <h5 class="containercontent">Shirt</h5>
                    <img class="containerimages" src="../images/pricing/shirt.jpg" alt="Shirt">
                    <div class="selectposition">
                        <label class="select" for="Shirt">Select <br></label>
                        <select name="shirt" id="shirt">
                            <option value="0" >select an option</option>
                            <option value="120">Washed</option>
                            <option value="150">Washed and folded</option>
                            <option value="220">Dry cleaned and pressed </option>
                        </select>
                   </div> 
                   <div class="amountposition">
                    <label class="amount" for="shirt amount">Amount</label>
                    <input id="shirt amount" name="shirt-amount" type="text" value="0" placeholder="Enter the amount">
                </div>
                    <div class="prices">
                        <p>Washed - Rs.150/=</p><br>
                        <p>Washed and Folded - Rs.180/=</p><br>
                        <p>Dry cleaned and pressed - Rs.220/=</p>
                    </div>
                </div>
                
                <div class="container">
                    <h5 class="containercontent">Suite (2 pcs)</h5>
                    <img class="containerimages" src="../images/pricing/suit.jpg" alt="Suite">
                    <div class="selectposition">
                        <label class="select" for="Suite">Select <br></label>
                        <select name="suit" id="suite">
                            <option value="0" >select an option</option>
                            <option value="400">Washed</option>
                            <option value="350">Pressed</option>
                            <option value="700">Dry cleaned and pressed </option>
                        </select>
                   </div> 
                   <div class="amountposition">
                    <label class="amount" for="suite amount">Amount</label>
                    <input id="suite amount" name="suite-amount" type="text" value="0" placeholder="Enter the amount">
                </div>
                    <div class="prices">
                        <p>Washed - Rs.400/=</p><br>
                        <p>pressed - Rs.350/=</p><br>
                        <p>Dry cleaned and pressed - Rs.700/=</p>
                    </div>
                </div>

                <div class="container">
                    <h5 class="containercontent">Blouse</h5>
                    <img class="containerimages" src="../images/pricing/blouse.jpg" alt="Blouse">
                    <div class="selectposition">
                        <label class="select" for="Blouse">Select <br></label>
                        <select name="blouse" id="blouse">
                            <option value="0" >select an option</option>
                            <option value="200">Washed</option>
                            <option value="230">Washed and folded</option>
                            <option value="260">Dry cleaned and pressed </option>
                        </select>
                   </div> 
                   <div class="amountposition">
                    <label class="amount" for="blouse amount">Amount</label>
                    <input id="blouse amount" name="blouse-amount" type="text" value="0" placeholder="Enter the amount">
                </div>
                    <div class="prices">
                        <p>Washed - Rs.200/=</p><br>
                        <p>Washed and Folded - Rs.230/=</p><br>
                        <p>Dry cleaned and pressed - Rs.260/=</p>
                    </div>
                </div>
            </div>

        <div class="maincontainer">
            
            <div class="container">
                <h5 class="containercontent">Women's Dress</h5>
                <img class="containerimages" src="../images/pricing/dress.jpg" alt="Women's Dress">
                <div class="selectposition">
                    <label class="select" for="Women's dress">Select <br></label>
                    <select name="dress" id="dress">
                        <option value="0" >select an option</option>
                        <option value="400">Washed</option>
                        <option value="350">pressed</option>
                        <option value="700">Dry cleaned and pressed </option>
                    </select>
               </div> 
               <div class="amountposition">
                <label class="amount" for=" amount">Amount</label>
                <input id=" amount" name="dress-amount" type="text" value="0" placeholder="Enter the amount">
            </div>
                <div class="prices">
                    <p>Washed - Rs.400/=</p><br>
                    <p>Pressed - Rs.350/=</p><br>
                    <p>Dry cleaned and pressed - Rs.700/=</p>
                </div>
            </div>

            <div class="container">
                <h5 class="containercontent">Men's trouser</h5>
                <img class="containerimages" src="../images/pricing/trouser.jpg" alt="Men's Trouser">
                <div class="selectposition">
                    <label class="select" for="Men's trouser">Select <br></label>
                    <select name="trouser" id="trouser">
                        <option value="0" >select an option</option>
                        <option value="120">Washed</option>
                        <option value="150">Washed and folded</option>
                        <option value="200">Dry cleaned and pressed </option>
                    </select>
               </div> 
               <div class="amountposition">
                <label class="amount" for=" amount">Amount</label>
                <input id=" amount" name="trouser-amount" type="text" value="0" placeholder="Enter the amount">
            </div>
                <div class="prices">
                    <p>Washed - Rs.120/=</p><br>
                    <p>Washed and Folded - Rs.150/=</p><br>
                    <p>Dry cleaned and pressed - Rs.200/=</p>
                </div>
            </div>

           
            <div class="container">
                <h5 class="containercontent">Women's jeans</h5>
                <img class="containerimages" src="../images/pricing/jeans.jpg" alt="jeans">
                <div class="selectposition">
                    <label class="select" for="Women's jeans">Select <br></label>
                    <select name="jeans" id="jeans">
                        <option value="0">select an option</option>
                        <option value="200">Washed</option>
                        <option value="230">Washed and folded</option>
                        <option value="260">Dry cleaned and pressed </option>
                    </select>
               </div> 
               <div class="amountposition">
                <label class="amount" for=" amount">Amount</label>
                <input id=" amount" name="jeans-amount" type="text" value="0" placeholder="Enter the amount">
            </div>
                <div class="prices">
                    <p>Washed - Rs.200/=</p><br>
                    <p>Washed and Folded - Rs.230/=</p><br>
                    <p>Dry cleaned and pressed - Rs.260/=</p>
                </div>
            </div>
        </div>

        <div class="maincontainer">

            <div class="container">
                <h5 class="containercontent">Skirt</h5>
                <img class="containerimages" src="../images/pricing/skirt.jpg" alt="Skirt">
                <div class="selectposition">
                    <label class="select" for="Skirt">Select <br></label>
                    <select name="skirt" id="skirt">
                        <option value="0" >select an option</option>
                        <option value="200">Washed</option>
                        <option value="250">Pressed</option>
                        <option value="300">Dry cleaned and pressed </option>
                    </select>
               </div> 
               <div class="amountposition">
                <label class="amount" for=" amount">Amount</label>
                <input id=" amount" name="skirt-amount" type="text" value="0" placeholder="Enter the amount">
            </div>
                <div class="prices">
                    <p>Washed - Rs.200/=</p><br>
                    <p>Pressed - Rs.250/=</p><br>
                    <p>Dry cleaned and pressed - Rs.300/=</p>
                </div>
            </div>

            <div class="container">
                <h5 class="containercontent">Ties</h5>
                <img class="containerimages" src="../images/pricing/tie.jpg" alt="tie">
                <div class="selectposition">
                    <label class="select" for="Ties">Select <br></label>
                    <select name="ties" id="ties">
                        <option value="0" >select an option</option>
                        <option value="120">Washed</option>
                        <option value="200">Pressed</option>
                    </select>
               </div> 
               <div class="amountposition">
                <label class="amount" for=" amount">Amount</label>
                <input id=" amount" name="ties-amount" type="text" value="0" placeholder="Enter the amount">
            </div>
                <div class="prices">
                    <p>Washed - Rs.120/=</p><br>
                    <p>Pressed - Rs.200/=</p>
                    
                </div>
            </div>

            <div class="container">
                <h5 class="containercontent">Laundry detergent</h5>
                <img class="containerimages" src="../images/pricing/detergent.jpg" alt="detergent">
                <div class="selectposition">
                    <label class="select" for="Laundry detergent">Select <br></label>
                    <select name="detergent" id="detergent">
                        <option value="0" >select an option</option>
                        <option value="100">500g</option>
                        <option value="180">1kg</option>
                        <option value="890">5kg</option>
                    </select>
               </div> 
               <div class="amountposition">
                <label class="amount" for=" amount">Amount</label>
                <input id=" amount"name="detergent-amount" type="text" value="0" placeholder="Enter the amount">
            </div>
                <div class="prices">
                    <p>500g - Rs.100/=</p><br>
                    <p>1kg  - Rs.180/=</p><br>
                    <p>5kg - Rs.890/=</p>
                </div>
            </div>

            
                
        </div>
        <div class="submitbutton">
            <input st type="submit" value="Check out" name="check-out">
        </div>
    </form>
        </div>
        </div>
		<hr class = "line">
		<div id ="footer">
			<footer>
                <img src="../images/pricing/payment.jpg" alt="">
				<a href = "#">Contact us</a>
				<a href = "#">privacy policy</a>
			</footer>
		</div>
        <script src="../js/pricing.js"></script>

	</body>
</html>


