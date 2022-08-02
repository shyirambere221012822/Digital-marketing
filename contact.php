<?php
require("connection.php");
if(isset($_POST['submit'])){
  $Names=$_POST["Fname"];
  $PhoneNo=$_POST["Phone"];
  $Comments=$_POST["comments"];
$query="INSERT INTO contact(Names,PhoneNo,Comments) VALUES ('$Names','$PhoneNo','$Comments')";
               $result=mysqli_query($con,$query);
               if($result){
                 echo "submitted";  
               }
               else{
               echo "unisubmitted -".mysqli_error($con);
               }
              }
               ?> 
               <hr/>
<!DOCTYPE html>
<head>
<title>Find Us</title>


<link rel="stylesheet"type="text/css"href="login.html>
</head>
<body>
<table border="0"width="100%"height="700px">
 <header class="header"><div>
    <a href="#" class="logo">Digital Marketing</a><tr>
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
</nav></div>
  </header>
  <main>
    <div class="intro">
      <h1>Connect with Us</h1>
<form method="post"action="#"size="12"><font color="white"><b>
<label for="PhoneNumber">Phone number:</label><b><p>+255-7347653-00</p>
<label for="FromEmailAddress">Email address*:</label><b><p>Digital marketing.rw</p>
  Names:</br><input type="text"Name="Fname" required></br></br>
  PhoneNo:</br><input type="numeric"name="Phone" required></br></br>
  <label for="Comments">Comments*:</label>
<input type="text"Name="comments" size=" required>
* - required fields
<button><a href="Home.php"><input type="submit" name="submit" value="submit"></a></button>
   </b></font></div>
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
/* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 720px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80");
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

    .intro button {
      background-color: #fffhhh;
      color: #dfghdf;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
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
</center>
</div>
</body>
</html>


