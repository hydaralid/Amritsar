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

.container {
    color:black;
    font-size: 50px;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Header styles */
header {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
}

.logo {
  font-size: 24px;
}

.nav-links {
  list-style: none;
  display: flex;
}

.nav-links li {
  margin-right: 20px;
}

.nav-links li a {
  text-decoration: none;
  color: #fff;
  
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

/* Products section styles */
.products {
  padding: 0px 0;
}

.products h2 {
  font-size: 32px;
  text-align: center;
  margin-bottom: 20px;
}

.product {
  text-align: center;
  margin-bottom: 30px;
}

.product img {
  width: 600px;
  height: 400px;
  object-fit: cover;
  margin-bottom: 10px;
}

.product h3 {
  font-size: 20px;
  margin-bottom: 10px;
}

.product p.price {
  font-size: 16px;
  margin-bottom: 10px;
}

.btn {
  display: inline-block;
  background-color: #ff5500;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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
    <div class="container">
      <nav>
        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php">Back</a></li>
          <li><a href="logout.php">Logout</a></li>

        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <h2>Welcome to our Store</h2>
      <p>Shop the latest trends in</p>
    </div>
  </section>

  <section class="products">
    <div class="container">
      <h2>Featured Products</h2>
      <div class="product">
        <img src="shopping1.jpg" alt="Product 1">
        <h3>Trilium Mall</h3>
        <p class="price">Spread over an area of about 5.54 acres of land, Trilium Mall is one of the most beautiful malls in Amritsar. Trilium Mall is also earthquake resistant and is designed by famously known RTKL from the USA. This mall in Amritsar has a large area for both for retail and entertainment.</p>
      </div>
      <div class="product">
        <img src="shopping2.jpg" alt="Product 2">
        <h3>Alpha One </h3>
        <p class="price">This mall in Amritsar has a large variety of national and international brands spread over a vast area with a conglomeration of different entertainment sections, as well. One of the most important and attractive parts of Alpha One Mall is its Amritsari Bazaar.</p>
      </div>
      <div class="product">
        <img src="shopping3.jpg" alt="Product 3">
        <h3>Soul Space Wagah Plaza</h3>
        <p class="price">Situated 20 KM away from the iconic Wagah border, the Wagah Plaza is a must-visit when you go shopping in Amritsar. Wagah Plaza, of recent origin, is a perfect mix of cultural, traditional and modern outlook. You need for ethnicity as well as contemporary can be fed here in this mall of Amritsar, without a doubt.</p>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Shopping Site. All rights reserved.</p>
  </footer>
</body>
</html>

