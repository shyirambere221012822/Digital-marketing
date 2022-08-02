<?php
require("connection.php");
if(isset($_POST['search']))
     {
    
$SearchedItem=$_POST["search"];
      $query="SELECT * FROM  producer WHERE productName ='$SearchedItem'";
        $result=mysqli_query($con,$query);
        if($result){
          echo "searched  product available";  
        }
        else{
        echo "searched is not availabe now".mysqli_error($con);
        }
      }
?> 
<hr/>


<!DOCTYPE html>
<head>
<title>Digital Marketing</title>

</head>
<body> 


<table border="0"width="100%"height="700px">
 <header class="header"><div>
    <a href="#" class="logo"><b>Digital Marketing</b></a><tr>
 <nav class="nav-items">
<font face="cinzel"><b>
<a href="Home.php">Home</a>
<a href="Shop.php">Shop</a>
<a href="Producers.php">Producer</a>
<a href="LogIn.php">LogIn</a>
<a href="SignUp.php">SignUp</a>
<a href="Cart.php">Cart</a>
<a href="Contact.php">Contact</a>
</b></font>
</nav>
  </header>
  <main>

    <div class="intro">
      <h1>Welcome to our website</h1>
      <p>All you need is here!!</p>
      <button><input type="text" name="search" placeholder="search an item"><a href="LogIn.php" ><input type="submit"name="searchEngine" value="search item"></a></button>
    </div>
<div class="Products">
      <div class="work">
        <p class="work-heading">Houses</p>
        <p class="work-text"><img src="C:\xampp\htdocs\digital market\New folder (2)/download (1).jpg" alt="HTML5 Icon" style="width:128px;height:128px;"></p>
      </div>
      <div class="work">
        <p class="work-heading">Clothes for Men</p>
        <p class="work-text"><img src="C:\xampp\htdocs\digital market\New folder (2)/images (3).jpg" alt="HTML5 Icon" style="width:128px;height:128px;"></p>
      </div>
      <div class="work">
        <p class="work-heading">Dresses</p>
        <p class="work-text"><img src="C:\xampp\htdocs\digital market\New folder (2)/download (2).jpg" alt="HTML5 Icon" style="width:128px;height:128px;"></p>
      </div>
<div class="work">
        <p class="work-heading">Men Shoes</p>
        <p class="work-text"><img src="C:\xampp\htdocs\digital market\New folder (2)/download (6).jpg" alt="HTML5 Icon" style="width:128px;height:128px;"></p>
      </div>
<div class="work">
        <p class="work-heading">Women Shoes</p>
        <p class="work-text"><img src="C:\xampp\htdocs\digital market\New folder (2)/download (5).jpg" alt="HTML5 Icon" style="width:128px;height:128px;"></p>
      </div>
<div class="work">
        <p class="work-heading">Suites</p>
        <p class="work-text"><img src="C:\xampp\htdocs\digital market\New folder (2)/download (4).jpg" alt="HTML5 Icon" style="width:128px;height:128px;"></p>
      </div><br><tr><th><br><br><br><br><br><br><br><br></th></tr>
  </main>
 <footer class="footer">
<div class="about-us">
      <div class="about-us-text">
        <h2>About Us</h2>
        <p>we advertise and sell product and services frequently</p>
      </div>
    <div class="copy"><b>&copy; 2022 Digital Marketing</b></div>
    </div>
    </div>
  </footer>
  
<style>
body {
     background-color: #f5f5f5;
 background-repeat: no-repeat;
 background-size: cover;
width: 100%;
}
<style>
  
    /* CSS for header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
     
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: blue;
      padding: 35px 20px;
    }

   

.intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 520px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro p {
      font-size: 20px;
      color: #d1d1d1;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .intro button {
      background-color: #5edaf0;
      color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }
 .Products {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 80px;
    }

    .Products .work {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .Products .work .work-heading {
      font-size: 20px;
      color: #333333;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .Products .work .work-text {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }
 .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: white;
      padding: 40px 80px;

    .about-us {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .about-us-text h2 {
     font-size: 30px;
      color: #333333;
      text-transform: uppercase;
      margin: 0;
    }

    .about-us-text p {
     font-size: 15px;
color: #fff;
      margin: 10px 0;
    }
.footer .copy {
      color: #fff;
    }
</style>
</style>


  
</body>
</html> 