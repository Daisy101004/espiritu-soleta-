<!DOCTYPE html>
<html>
<head>
  <title>Our Menu</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Add the provided CSS code here */
    .menu-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .menu-item img {  
      width: 200px; /* Adjust the width as needed */
      height: auto;
      margin-right: 10px;
    }

    .menu-item-content {
      display: flex;
      flex-direction: column;
    }

    .menu-item h3 {
      font-size: 20px;
      margin-bottom: 5px;
    }

    .price-and-button {
      display: flex;
      flex-direction: column; /* Updated to column layout */
      align-items: flex-start; /* Updated alignment */
      margin-top: 10px; /* Updated margin-top */
    }

    .menu-item .price {
      font-weight: bold;
      margin-bottom: 10px; /* Added margin-bottom */
    }

    .menu-item button {
      width: 120px;
      border: 0;
      padding: 10px 10px;
      outline: none;
      color: #fff;
      background: linear-gradient(to right, #333, #333);
      border-radius: 6px;
      cursor: pointer;
      transition: width 0.5s;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .menu-item button img {
      width: 30px;
      display: none;
    }

    .menu-item button:hover img {
      display: block;
      margin-left: 5px;
    }

    .menu-item button:hover {
      width: 140px;
    }
  </style>
</head>
<body>
  <?php include "./src/components/Header.php"?>

  <div class="container d-flex flex-wrap justify-content-between my-4 gap-5" id="menu-container">
    <div class="card" style="width: 18rem;">
      <img src="src/images/sharkfin.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Shark's Fin With Hainanase Rice</h5>
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="card-title">&#8369;55.00</h5>
          <button class="btn btn-primary" type="button" onclick="createOrderPage('Shark\'s Fin With Hainanese Rice')">ORDER</button>
        </div>
      </div>
    </div>
  </div>

  <?php include "./src/components/Footer.php"?>

  <script>
    function createOrderPage(productName) {
      console.log("clicked");
      // Create a new webpage or redirect to a new URL with the product name as a parameter
      window.location.href = "order.html?product=" + encodeURIComponent(productName);
    }
  </script>
  <script src="./menu.js" type="module"></script>
</body>
</html>