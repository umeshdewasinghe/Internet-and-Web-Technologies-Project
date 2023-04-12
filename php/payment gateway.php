<?php 

session_start();
require 'config.php';
    if(isset($_POST['del'])){
        $_SESSION['Address']=$_POST['Address'];
        $_SESSION['postalcode']=$_POST['postalcode'];
        $_SESSION['Delcomp']=$_POST['Delcomp'];
        $_SESSION['del_option']=$_POST['del_option'];
        $_SESSION['FullPayment']=$_SESSION['Total']+$_POST['del_option'];

        $id = $_SESSION['id'];
        $A=$_SESSION['Address'];
        $P=$_SESSION['postalcode'];
        $Del=$_SESSION['Delcomp'];
        $option =$_SESSION['del_option'];
        $Full=$_SESSION['FullPayment'];

       
        //$qry="INSERT INTO `order`(location,postalcode,Company,DeliverFees,price,confirm_status,delivery_status) VALUES ('$A',$P,'$Del',$option,$Full,'','');";
        $qry="INSERT INTO `order`VALUES ('','$A','$Full',$P,'$Del',$option,'$id','','no','no' );";
        $connection->query($qry);
     
    }
  
    $connection->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href ="../CSS/payment_gateway.css">
    <link rel = "stylesheet" href = "../css/Home.css">
    
</head>
<body>
    
    <script src="script/form validator.js"></script>
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
        <div>
            <!--Enter section here-->   
            <!--heading-->
    <h1 class="header1">PAYMENT GATEWAY </h1>
    <!--body of payment gateway-->
    <div class="big-div">

    <!--left div-->
    <div class="icon-div">
        <h2> SECURE <br> PAYMENTS </h2>
        <img src="../images/icons/lock.svg" alt="lock" class="lock-img">
    </div>
    <div class="Form-pay">
        <form name="form1" action="redirect.php">
            <!--payment cards-->
            <input type="radio" name="payment-method" id="visa">
                <img src="../images/icons/visa-seeklogo.com.svg" id="visa-img">
                
            <input type="radio" name="payment-method" id="master">
                <img src="../images/icons/mastercard-2.svg" id="master-img">
                <br>
            <!--card number-->
            <label class="lable1" > card number : <br>
                <input type="text" name="card-no" class="texts" value="">
            </label> <br>
            <!--card owner-->
            <label class="lable1"> card owner : <br>
                <input type="text" name="card-owner" class="texts" value="">
            </label> <br>
            <!--Expire date-->
            <label class="lable1"> Expire date : <br> 
                <input type="month" name="exp-date" >
            </label> <br>
            <!--CVC-->
            <label class="lable1"> cvc <br>
                <input type="text" name="CVC" >
            </label> <br><br><br>
            <input type="submit" class="pay-now-bt" value="Pay Now" >
        </form>
        <br>
        <br>
    </div>

    <!--Total-->
    <div id="Total" >
     <H2>TOTAL PRICE </H2> 
        <?php
            echo "<h1>";
           echo $_SESSION['FullPayment'];
           echo ".00</h1>" 
        ?>
    </div>

        </div>
    <hr class = "line">
    <div id ="footer">
        <footer>
        <img src="../images/home_page/payment.jpg">
        </footer>
    </div>
    
    </div>
</body>
</html>




