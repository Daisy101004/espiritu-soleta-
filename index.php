<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include "./src/components/Header.php" ?>

  <div class="d-flex flex-row" style="display: flex; padding: 10px 30px">
    <section id="home" style="width: 50%;">
      <h1>Welcome to Dear Cravings</h1>
      <p>This cozy eatery offers a diverse menu, from savory starters to delectable desserts, all crafted with care and creativity. With a passion for quality ingredients and inventive recipes, each dish promises a memorable dining experience. Whether you seek comfort food or culinary adventures, Dear
        Cravings is the perfect destination for a culinary journey you won't
        forget.</p>
    </section>

    <div class="banner-image" style="width: 50%;">
      <img style="width: 450px; height: 450px; border-radius: 20px" src="Banner Image/banner01.jpg" alt="Banner Image">
    </div>
  </div>

  <?php include "./src/components/Footer.php" ?>
</body>

</html>