<?php 

session_start();
require 'config.php';


    
    if(isset($_POST['check-out'])){
        $Tot=0;
        $Tot+=$_POST['tshirt'] * $_POST['t-shirt-amount'];
        $Tot+=$_POST['shirt'] * $_POST['shirt-amount'];
        $Tot+=$_POST['suit'] * $_POST['suite-amount'];
        $Tot+=$_POST['blouse'] * $_POST['blouse-amount'];
        $Tot+=$_POST['dress'] * $_POST['dress-amount'];
        $Tot+=$_POST['trouser'] * $_POST['trouser-amount'];
        $Tot+=$_POST['jeans'] * $_POST['jeans-amount'];
        $Tot+=$_POST['skirt'] * $_POST['skirt-amount'];
        $Tot+=$_POST['ties'] * $_POST['ties-amount'];
        $Tot+=$_POST['detergent'] * $_POST['detergent-amount'];

        $_SESSION['Total']=$Tot;
        
    }
    $connection->close();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href ="../CSS/delivery.css">
    <link rel = "stylesheet" href ="../CSS/Home.css">
    
</head>
<body>
    <script src="../js/chechk.js"></script>
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
                <li><a href = "Privacy policy.html"> Privacy policy</a></li>
                <li><a href = "Contact Us.php"> Contact us</a></li>
        </ul>
    </div>  
    <hr class = "line">
    <h1 class="header1">DELIVERY</h1>
    <div class="big-div">
    <!--left div-->
    <div class="icon-div">
        <h2 class> Delivey <br> Info </h2>
        <img src="../images/icons/truck.svg" alt="truck" class="truck-img">
    </div>

    <div class="Form-del">
        <form action="payment gateway.php" method="POST">
            
            <!--Address-->
            <label class="lable1"> Address : <br>
                <input type="text" name="Address" class="texts" required>
            </label> <br> <br>
            <!--Postal-code-->
            <label class="lable1"> Postal Code : <br>
                <input type="text" Name="postalcode" class="texts" required>
            </label> <br> </br>
            <label class="lable1">Select Delivery Method </label> <br><br>
            <input type="radio" id="del1" name="del_option" value="350" onclick="function1()">
            <label for="350" class="lable1">Fast Delivery</label>
            <input type="radio" id="del2" name="del_option" value="500" onclick="function2()">
            <label for="350" class="lable1">Normal Delivery</label>
            <br>
            <br>
            <lable class="lable1">
                Delivery Service Compnay <br>
                <select class="select-del-compnay" id="delivery" required name="Delcomp">
                    <option value="fast">Fast</option>
                    <option value="SpeedX">SpeedX</option>
                    <option value="Eagle">Eagle</option>
                </select>
            </lable><br><br><br>
            <input type="submit" class="Deliver-bt" name="del" value="Place Deliver" >
            
        </form>
        <br>
        <br>
    </div>

    <!--Total-->
    <div  id="price" >
        <p style="font-size: xx-large;"> Delivery Cost : <br>
            <p id="para1"></p>
        </p>
    </div>
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


