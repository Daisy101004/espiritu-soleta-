<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <!-- for styling -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <!-- for fetching data from database -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
  <?php include "./src/components/Modal/Login.php" ?>
  <?php include "./src/components/Modal/Signup.php" ?>
  <nav class="navbar bg-dark border-bottom border-body d-flex justify-content-between px-4" style="width: 100%;" data-bs-theme="dark">
    <a class="logo navbar-brand" href="index.php">
      <img style="border-radius: 100%; height: 70px; width: 70px" src="Banner Image/logo.png" alt="Dear Cravings Logo">
    </a>
    <ul class="nav nav-pills">
      <li class="nav-item"><a href="index.php">Home</a></li>
      <li class="nav-item"><a href="menu.php">Menu</a></li>
      <li class="nav-item"><a href="review.php">Review</a></li>
      <li class="nav-item"><a href="contact.php">Contact</a></li>
      <li class="nav-item"><a href="about.php">About</a></li>
      <li class="nav-item" id="login-logout">Log in / Sign up</li>
      <a href="order.php" style="position:relative;" id="order-count">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
        </svg>
      </a>
    </ul>
  </nav>

  <script>
    const cartCount = document.querySelector("#cart-count");
    const orderCount = document.querySelector("#order-count");
    const loginLogout = document.querySelector("#login-logout");
    const isUserLogin = JSON.parse(localStorage.getItem("userlogin"));

    if (isUserLogin) {
      loginLogout.textContent = "Log out";
    } else {
      loginLogout.textContent = "Log in / Sign up";
    }

    loginLogout.addEventListener("click", () => {
      if (isUserLogin) {
        localStorage.clear();
        alert("Successfully Logout");
        location.reload();
      } else {
        loginLogout.setAttribute("data-bs-toggle", "modal");
        loginLogout.setAttribute("data-bs-target", "#exampleModalCenter");
      }
    })
    const localStorageData = JSON.parse(localStorage.getItem("cart-item"));
    const total = Object.values(localStorageData).reduce((prev, current) => prev + current, 0);
    if (total > 0) {
      orderCount.innerHTML += `<p id="cart-count" style="position: absolute; color:aqua; top:-12px; right:-12px; background:coral; border-radius:50%; height:25px; width:25px; text-align:center;">${total}</p>`
    }
  </script>
</body>

</html>