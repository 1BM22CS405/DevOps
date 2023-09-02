<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Big+Shoulders+Text:100, 300, 400, 500, 600, 700, 800, 900&display=swap');
 
/* font-family: 'Big Shoulders Text',geneva; */

 
.about-section p,
.about-section h3 {
    text-align: center;
    width: 60%;
    margin: auto;
    font-family: 'Big Shoulders Text', geneva;
    font-size: 1.4em;
}
 
 
.row-flex {
    display: flex;
    flex-direction: row;
}
 
.flex-column-form {
    display: flex;
    flex-direction: column;
    flex: 1;
    margin: 30px 20px;
}
 
.btn.btn-primary {
    font-family: 'Big Shoulders Text', cursive;
    color: #ffffff;
    background-color: #95999e;
    text-transform: uppercase;
    font-size: 16px;
    padding: 5px 10px;
    letter-spacing: 2px;
    border: 0;
}
 
.btn.btn-primary:hover {
    background-color: #747474;
}
.opening-time,
.contact-address {
    flex: 1;
    margin: 30px 20px;
    font-size: 1.2em;
}
 
.form-group p {
    font-size: 1.2em;
}
 
.opening-time p span,
.contact-address p span {
    display: block;
}

 
 /* CSS for the logo */
    .logo {
      float: left;
      padding: 10px;
    }
   
    .logo img {
      height: 60px;
    }
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: right;
  font-size:18px;
  color: white;
  text-align:center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 18px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
/* CSS for the footer */
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 20px;
    }
   
    .footer-links a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
    }
</style>



</head>
<body style="background-color:#ffd9cc;">
<div class="navbar">
<li class="logo"><img src="C:\xampp\htdocs\website\images\logo2.jpg" alt="Logo"></li>
<a href="login.php">Login</a>
<a href="order1.html">Order online</a>
<a href="index.html">Reservation</a>
<a href="testimonial.html">Testimonial</a>

   <div class="dropdown">
    <button class="dropbtn">Menue
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="starters.html">Starters</a>
      <a href="maincourse1.html">Maincourse</a>
      <a href="dessert.html">Dessert</a>
<a href="Beverages.html">Beverages</a>
    </div>
  </div>
<div class="dropdown">
    <button class="dropbtn">Category
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="italian.html">Italian</a>
      <a href="chinese.html">Chinese</a>
      <a href="mexican.html">Mexican</a>
<a href="indian.html">Indian</a>
<a href="panasian.html">Panasian</a>
<a href="greek.html">Greek</a>
    </div>
  </div>
 
 

<a href="aboutus.html">About us</a>
</div>

  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
<br>
<br>
<br>

<footer>
    <div class="footer-links">
     
          <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/?lang=en-in"><i class="fa fa-twitter"></i></a>
          <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
   <a href="tel:+91-8879067589">Contact No : +91-8879067589</a><br>
   <a href="#branches"> Branches : </a>
          <a href="#branches">Jaynagar</a>
   <a href="#branches">J.P. Nagar</a>
   <a href="#branches">HSR Layout</a>
   <a href="#branches">Yelahanka</a>
         

    </div>
  </footer>
</body>
</html>
