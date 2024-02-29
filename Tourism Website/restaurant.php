<!DOCTYPE html>
<html lang="en">
<head>
<style>
  /* Reset default styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
}

/* Header styles */
header {
  background-color: #f8f8f8;
  padding: 20px;
}

nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo {
  font-size: 24px;
}

.nav-links {
  list-style: none;
}

.nav-links li {
  display: inline-block;
  margin-left: 20px;
}

.nav-links li a {
  text-decoration: none;
  color: #333;
}

/* Hero section styles */
.hero {
  background-image: url('hero-image.jpg');
  background-size: cover;
  background-position: center;
  height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  text-align: center;
}

.hero-text {
  margin-bottom: 50px;
}

.hero-text h2 {
  font-size: 36px;
  margin-bottom: 20px;
}

.btn {
  display: inline-block;
  background-color: #ff5500;
  color: #fff;
  padding: 10px 30px;
  border-radius: 4px;
  text-decoration: none;
}

/* Menu section styles */
.menu {
  text-align: center;
  padding: 50px;
}

.menu h2 {
  font-size: 32px;
  margin-bottom: 20px;
}

.menu-items {
  display: flex;
  justify-content: center;
  margin-top: 30px;
}

.menu-item {
  margin-right: 30px;
}

.menu-item img {
  width: 250px;
  height: 200px;
  object-fit: cover;
  border-radius: 4px;
}

.menu-item h3 {
  margin-top: 10px;
  font-size: 24px;
}

.menu-item p {
  margin-top: 10px;
  color: #777;
}

.menu-item .price {
  display: block;
  font-weight: bold;
  margin-top: 10px;
  color: #ff5500;
}

/* About section styles */
.about {
  background-color: #f8f8f8;
  padding: 50px;
}

.about h2 {
  font-size: 32px;
  margin-bottom: 20px;
}

.about p {
  color: #777;
}

/* Contact section styles */
.contact {
  text-align: center;
  padding: 50px;
}

.contact h2 {
  font-size: 32px;
  margin-bottom: 20px;
}

.contact p {
  color: #777;
}

.contact-details {
  list-style: none;
  margin-top: 20px;
}

.contact-details li {
  margin-top: 10px;
}

.contact-details li i {
  margin-right: 10px;
}

/* Footer styles */
footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px;
}

  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <h1>Restaurant Name</h1>
      </div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>



  <section class="menu">
    <h2>Our Menu</h2>
    <div class="menu-items">
      <div class="menu-item">
        <img src="image1.jpeg" alt="Menu Item 1">
        <h3>Menu Item 1</h3>
        <p>Langar Ka Prasad.<br>
            Amritsari Kulcha.<br>
            Sarso Da Saag<br>Makki Di Roti.</p>
        <span class="price">&#x20B9;800</span>
      </div>
      <div class="menu-item">
        <img src="image2.jpg" alt="Menu Item 2">
        <h3>Menu Item 2</h3>
        <p> rice & dal<br> roti & sabzi<br> channa, kheer and sheera</p>
        <span class="price">&#x20B9;1200</span>
      </div>
      <div class="menu-item">
        <img src="image3.jpg" alt="Menu Item 3">
        <h3>Menu Item 3</h3>
        <p>maida roti<br>rice & dal<br>kheer,Lassi</p>
        <span class="price">&#x20B9;1000</span>
      </div>
    </div>
  </section>

  <section class="about">
    <h2>About food</h2>
    <p>The meals are simple and vegetarian, with a usual serving of pickle, rotis (bread), dal (lentils), and kheer (rice pudding).
    The popular cuisines of Amritsar include tanduri kulchas, channa bhatura, multi-layered parathas, marmalades, puirs, mutton tikka, seekh kabab, barbecued chicken and fried fish among several others. There are a number of dessert and sweet options too that are available in Amritsar.</p>
</section>

  <section class="contact">
    <h2>Contact Us</h2>
    <ul class="contact-details">
      <li><i class="fas fa-map-marker-alt"></i> Amritsar Restaurant Street, City</li>
      <li><i class="fas fa-phone"></i> +1234567890</li>
      <li><i class="fas fa-envelope"></i> restaurant.com</li>
    </ul>
  </section>

  <footer>
    <p>&copy; 2023 Restaurant Name. All rights reserved.</p>
  </footer>
</body>
</html>
