<!DOCTYPE html>
<html>

<head>
  <title>Order Confirmation</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Customize the styles as needed for your order confirmation page */

    /* Increase the font size and add some margin to the payment method label */
    label[for="payment-method"] {
      font-size: 18px;
      margin-bottom: 10px;
    }

    /* Increase the font size and add some margin to the payment method select box */
    #payment-method {
      font-size: 18px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <?php include "./src/components/Header.php" ?>
  <?php include "./src/components/Modal/Login.php" ?>
  <?php include "./src/components/Modal/Signup.php" ?>

  <main class="container">
    <h4 class="card-title" id="total-amount"></h4>
    <div class="d-flex overflow-auto">
      <div class="col" id="order-list"></div>
      <div class="col">
        <h2>Customer Information</h2>
        <form id="customer-info-form">
          <label for="name-input">Username:</label>
          <input type="text" id="name-input" name="name" required>

          <label for="email-input">Contact:</label>
          <input type="email" id="email-input" name="email" maxlength="11" required>

          <!-- <label for="address-input">Address:</label>
          <textarea id="address" name="address-input" required></textarea> -->
          <div class="d-flex gap-5" style="width: 100%;">
            <div class="dropdown w-50">
              <label for="municipality">Municipality:</label>
              <select class="btn btn-secondary dropdown-toggle w-100" id="municipalities-dropdown" name="municipality">
              </select>
            </div>
            <div class="dropdown w-50">
              <label for="payment-method">Barangay:</label>
              <select class="btn btn-secondary dropdown-toggle w-100" id="barangay-dropdown" name="payment-method">
              </select>
            </div>
          </div>

          <!-- Add a payment method selection field -->
          <div class="dropdown">
            <label for="payment-method">Payment Method:</label>
            <select class="btn btn-secondary dropdown-toggle w-50" id="payment-method" name="payment-method">
              <option class="dropdown-item" value="GCash">GCash</option>
              <option class="dropdown-item" value="Cash on Delivery">Cash on Delivery</option>
            </select>
          </div>

          <br> <!-- Add a line break for spacing -->
          <!-- <button type="submit">Submit Order & Pay</button> -->
          <button type="button" class="btn btn-primary btn-lg w-100" id="submit-pay">
            Submit Order & Pay
          </button>
        </form>
      </div>
    </div>

  </main>

  <?php include "./src/components/Footer.php" ?>

  <script src="./order.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Retrieve the selected product name from the query parameter
      const urlParams = new URLSearchParams(window.location.search);
      const productName = urlParams.get('product');

      // Update the product name in the order details section
      const productNameElement = document.getElementById("product-name");
      productNameElement.textContent = productName;
    });

    function handleSubmitOrder(event) {
      event.preventDefault();

      // Retrieve the selected product name from the query parameter
      const urlParams = new URLSearchParams(window.location.search);
      const productName = urlParams.get('product');

      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const address = document.getElementById('address').value;
      const paymentMethodElement = document.getElementById('payment-method');
      const paymentMethod = paymentMethodElement.options[paymentMethodElement.selectedIndex].text;

      const orderDetails = {
        productName: productName,
        customerName: name,
        customerEmail: email,
        customerAddress: address,
        paymentMethod: paymentMethod,
      };

      // Display the order details
      const orderDetailsContainer = document.getElementById('order-details');
      orderDetailsContainer.innerHTML = `
        <h3>Order Details</h3>
        <p><strong>Product:</strong> ${orderDetails.productName}</p>
        <p><strong>Name:</strong> ${orderDetails.customerName}</p>
        <p><strong>Email:</strong> ${orderDetails.customerEmail}</p>
        <p><strong>Address:</strong> ${orderDetails.customerAddress}</p>
        <p><strong>Payment Method:</strong> ${orderDetails.paymentMethod}</p>
      `;

      // Simulated payment process
      simulatePayment();

      // Redirect to the thank you page after a brief delay
      setTimeout(function() {
        window.location.href = "thankyou.html";
      }, 5000);
    }

    // Simulate a payment process by displaying a confirmation message
    function simulatePayment() {
      const paymentMessageContainer = document.createElement('div');
      paymentMessageContainer.classList.add('payment-message');
      paymentMessageContainer.innerHTML = `
        <p>Payment processing...</p>
        <p>Thank you for your payment!</p>
      `;

      document.body.appendChild(paymentMessageContainer);
    }

    const customerInfoForm = document.getElementById('customer-info-form');
    customerInfoForm.addEventListener('submit', handleSubmitOrder);
  </script>
</body>

</html>