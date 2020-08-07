<?php
 $fname = $_POST['fname'];    
 $lname = $_POST['lname'];   
 $email = $_POST['email'];  
 $pass = $_POST['pass'];
 $cpass = $_POST['cpass'];

 //password match
 if($_POST['pass']!==$_POST['cpass']){
    echo "password does not match please enter both password proper password";
    exit();
 }else{
    //matched both password
 }

 //database connect
 $dbconnect=mysqli_connect('localhost','root','','shweta');

 //insert query
 $sql =mysqli_query($dbconnect, "insert into coffee (id,fname,lname,email,pass,cpass) values ('','$fname','$lname','$email','$pass','$cpass')");

 if($sql){
    echo "
    <script>
        alert('sucessfully registered');
    </script>";
  }else{
    echo "Something went wrong failed to insert";
     die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cafe | website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/coffee-3642712_1280.png">
    
<!--    animation css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.compat.css">
<!--    menu icon-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--script tag-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
   
   <header>
       <nav>
           <div class="row clearfix">
              <img src="images/coffee-3642712_1280.png" class="logo animated flash">
              
              <ul class="main-nav animated slideInDown" id="check-class">
                  <li><a href="#collection">Coffee Collection</a></li>
                  <li><a href="#aboutus">About us</a></li>
                  <li><a href="#footer">Contact us</a></li>
                  <li><a href="#" title="click here to login" id="login" onclick="login">Log-in</a></li>
              </ul>
              
        <div class="login-form">
           <h1>Welcome!</h1>
               
            <form action="login.php">
                 <label>Username</label>
                  <div>
                      <input type="text" placeholder="Username" name="username" required/>
                  </div>
                  
                 <label>Password</label>
                 <div>
                 <input type="password" placeholder="Password" name="password" required/>
                  </div>
                  <div>
                      <input type="submit" value="Log-in"/>
                  </div>
                 
          </form>
          
         </div>
              <a href="#" class="mobile-icon" onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
               
           </div>
       </nav>
       
       
    <div class="main-content-header animated bounceInLeft">
       <h1>WELCOME TO CAFE HOUSE<br> 
           FIND YOUR TASTE</h1>
           
           <a href="#" class="btn btn-full"><b>Order Now</b></a>
           <a href="#" class="btn btn-full2" class="openbtn" title="click here to join us" onclick="openForm()"><b>Show more</b></a>

    </div>
    
    
   </header>
   
   <div class="collection" id="collection">COFFE COLLECTION</div>
   
<!--   COFFEE CARDS start-->
<div class="contain">
   <div class="card">
     <div class="image">
          <img src="images/image.jfif" alt="">
      </div>
      
      <div class="content">
          <div class="title">Chocolate Cappuccino</div>
          <div class="sub-title">Chocolate</div>
          <div class="bottom">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, eveniet!</p>
          <button onclick="addbtn()" id="mybtn" value="ADD TO CART">ADD TO CART</button>
         </div>
        </div>
       
   </div>
</div>
<div class="contain2">
   <div class="card2">
     <div class="image2">
          <img src="images/PhotoImage.jfif" alt="">
      </div>
      
      <div class="content2">
          <div class="title2">Cinnamon Mocha</div>
          <div class="sub-title2">Hot Chocolate</div>
          <div class="bottom2">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, eveniet!</p>
          <button onclick="addbtn1()" id="mybtn1" value="ADD TO CART">ADD TO CART</button>
         </div>
        </div>
       
   </div>
</div>
<div class="contain3">
   <div class="card3">
     <div class="image3">
          <img src="images/nespresso-recipes-CAPPUCCINO-BANANA-SESAME-SEEDS.jpg" alt="">
      </div>
      
      <div class="content3">
          <div class="title3">Cappuccino</div>
          <div class="sub-title3">Banana & Sesame Seeds</div>
          <div class="bottom3">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, eveniet!</p>
          <button onclick="addbtn2()" id="mybtn2" value="ADD TO CART">ADD TO CART</button>
         </div>
        </div>
       
   </div>
</div>
 <div class="view">
     <button class="viewmore">View All....</button>
 </div>
  
<!--  about us-->
 <div class="aboutus" id="aboutus">
  <div class="container">
      
  </div>
    
  <div class="about">
           <h1 class="abt">About Us</h1>
            <p>Cafe House Offers a wide range of Coffees with a Delightfully unique Taste which you Enjoy these are purely made with no additives.</p>
            <P><b>Shop Opens at Morning 6AM To 9PM</b></P>
            <p><b>Order Timming: 7 AM - 8 PM.</b></p>
     </div>
    </div>
<!--  about us end-->
  
<!--  footer-->
   <div class="footer" id="footer">
    <div class="ftr">
       <ul class="foot">
          <h1><b>CONTACT</b></h1>
           <li>Cafehouse@gmail.com</li>
           <li>411002 Pune,</li>
           <li>Maharashtra</li>
       </ul>
        <ul class="footr">
               <h1><b>ONLINE COFFEE SHOP</b></h1>
                <li>Terms and Conditions</li>
                <li>Privacy Policy</li>
                <li>Returns and Cancellations</li>
        </ul>
        </div>
<!--        social media-->
        <div class="connect">
           <h1><b>CONNECT US</b></h1>
            <a href="#" title="facebook" class="fa fa-facebook"></a>
            <a href="#" title="google" class="fa fa-google"></a>
            <a href="#" title="instagram" class="fa fa-instagram"></a>
            <a href="#" title="youtube" class="fa fa-youtube"></a>
            <a href="#" title="twitter" class="fa fa-twitter"></a>
        </div>
        <div class="bt">
            <h6>@2020,CafeHouse powered by Coffino.</h6>
        </div>
   
    </div>
<!--  footer end-->
  
<!-- add to cart start-->
  <script>
    function addbtn(){
        
        var btn = document.getElementById("mybtn");
        
        if(btn.value == "ADD TO CART") {
            btn.value = "ADDED";
            btn.innerHTML = "ADDED";
            btn.style.backgroundColor="green";
        
        }else{
            btn.value = "ADD TO CART";
            btn.innerHTML = "ADDED";
        }
    }
    
    </script>
    <script>
    function addbtn1(){
        
        var btn = document.getElementById("mybtn1");
        
        if(btn.value == "ADD TO CART") {
            btn.value = "ADDED";
            btn.innerHTML = "ADDED";
            btn.style.backgroundColor="green";
        
        }else{
            btn.value = "ADD TO CART";
            btn.innerHTML = "ADDED";
        }
    }
    
    </script>
  <script>
    function addbtn2(){
        
        var btn = document.getElementById("mybtn2");
        
        if(btn.value == "ADD TO CART") {
            btn.value = "ADDED";
            btn.innerHTML = "ADDED";
            btn.style.backgroundColor="green";
        
        }else{
            btn.value = "ADD TO CART";
            btn.innerHTML = "ADDED";
        }
    }
    
    </script>
<!-- add to cart end-->
  
  
<!--
  <script>
    function openForm(){
        document.getElementById("overlay").style.display="block";
    }
    </script>
    <script>
    function closeForm(){
        document.getElementById("overlay").style.display="none";
    }
    </script>
-->
  
  
   <script type="text/javascript">
       $(document).ready(function(){
           var arrow = $(".arrow-up");
           var form = $(".login-form");
           var status = false;
           $("#login").click(function(event){
               event.preventDefault();
               if(status == false){
                   arrow.fadeIn();
                   form.fadeIn();
                   status = true;
               }else{
                   arrow.fadeOut();
                   form.fadeOut();
                   status = false;
               }
           })
           
       })
        
    </script>
    
<script type="text/javascript">
    function slideshow(){
        var x= document.getElementById('check-class');
        if(x.style.display === "none"){
            x.style.display="block";
        }else{
            x.style.display="none";
        }
    }
    
    </script>
   
     <script>
            $('.card').hover(function(){
               if($(this).hasClass("active")){
                   $('.card .bottom').slideUp(function(){
                      $('.card').removeClass("active"); 
                   });
               }else{
                $('.card').addClass("active"); 
                $('.card .bottom').stop().slideDown();
               }         
        });
        $('.card2').hover(function(){
               if($(this).hasClass("active")){
                   $('.card2 .bottom2').slideUp(function(){
                      $('.card2').removeClass("active"); 
                   });
               }else{
                $('.card2').addClass("active"); 
                $('.card2 .bottom2').stop().slideDown();
               }         
        });
        $('.card3').hover(function(){
               if($(this).hasClass("active")){
                   $('.card3 .bottom3').slideUp(function(){
                      $('.card3').removeClass("active"); 
                   });
               }else{
                $('.card3').addClass("active"); 
                $('.card3 .bottom3').stop().slideDown();
               }         
        });
    </script>
    
</body>
</html>


<?php
   $dbconnect=mysqli_connect("localhost","root","","shweta");
    if(mysqli_connect_errno($dbconnect)){
            echo "failed to connect";
        }
    else{
       // echo "connection sucessfull";
    }
?>









