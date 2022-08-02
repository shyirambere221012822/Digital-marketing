<!DOCTYPE html>
<head>
<title>Product</title>
</head>
<body>
 <header class="header"><div>
    <a href="#" class="logo">Digital Marketing</a>
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
    <div class="product">
  <div class="container">
    
 <h1>Special products with offers</h1><br><br>
 <button><input type="text" name="search" placeholder="search an item"><a href="LogIn.php" ><input type="submit"name="searchEngine" value="search item"></a></button>   
<div class="product-item">
  <!...single product.....>
 <div class="product">
  <div class="container">
<div class="product-img">
<div class="work">
        <p class="work-heading">Jordan</p>
        <p class="work-text"><img src="C:\xampp\htdocs\digital market\New folder (2)/images.jfif" alt="HTML5 Icon"></p>
      </div>
    </div><br>
<div class="product-btns">
<button type="button" class="btn-cart">Add to cart
<span><i class="fas fa-plus"></i></span>
</button>
<button type="button" class="btn-buy">buy now
<span><i class="fas fa-shopping-cart"></i></span>
</button>
</div>
<div class="product-info">
<div class="product-info-top">
<h2 class="sm-title">Details</h2>
</div>
<a href="#" class="product-name">NIKE RO</a>
<p class="product-price">rwf20,000</p>
</div></div><br>

<div class="product-item">
<!...single product.....>
 <div class="product">
  <div class="container">
<div class="product-img">
<div class="work">
        <p class="work-heading">Suites</p>
        <p class="work-text"><img src="C:\xampp\htdocs\digital market\New folder (2)/download (4).jpg" alt="HTML5 Icon"></p>
      </div>
    </div>
<div class="product-btns">
<button type="button" class="btn-cart">Add to cart
<span><i class="fas fa-plus"></i></span>
</button>
<button type="button" class="btn-buy">buy now
<span><i class="fas fa-shopping-cart"></i></span>
</button>
</div>
<div class="product-info">
<div class="product-info-top">
<h2 class="sm-title">Details</h2>
</div>
<a href="#" class="product-name">Vest 250pro</a>
<p class="product-price">rwf80,000</p>
</div>
</div>
 <div class="product">
  <div class="container">
<div class="product-img">
<div class="work">
        <p class="work-heading">Cadashian</p>
        <p class="work-text"><img src="C:\xampp\htdocs\digital market\New folder (2)/images (1).jfif" alt="HTML5 Icon"></p>
      </div>
    </div>
<div class="product-btns">
<button type="button" class="btn-cart">Add to cart
<span><i class="fas fa-plus"></i></span>
</button>
<button type="button" class="btn-buy">buy now
<span><i class="fas fa-shopping-cart"></i></span>
</button>
</div>
<div class="product-info">
<div class="product-info-top">
<h2 class="sm-title">Details</h2>
</div>
<a href="#" class="product-name">Catapiller</a>
<p class="product-price">rwf15,000</p>
</div>
</div>
</div>
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
    .product {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 0px 40px;
    }

    .product .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 10px;
    }
.product .container h1  {
   font-family: sans-serif;
      font-size: 60px;
      color:black;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }
    .product .container button {
      background-color: #7700ff;
      color: rgb(252, 252, 252);
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 10px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }


    .product .container .product-item {
      background-color: #fffhhh;
      color: #dfghdf;
      padding: 10px 5px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }
      .product .container .product-item .product-img {
           font-size: 15px;
           color: #585858;
           margin: 10px 10;
}
.product .container .product-item .product-img .work {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    
  .product .container .product-item .product-img .work .work-heading {
      font-size: 20px;
      color: #333333;
      text-transform: uppercase;
      margin: 10px 0;
    }

   .product .container .product-item .product-img .work .work-text {
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
</center>
</div>
</body>
</html>

