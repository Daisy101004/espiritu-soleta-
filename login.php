<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['email'])) {
    // Redirect to the home page or any other desired page
    header('Location: index.html');
    exit();
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform necessary validation and sanitization

    // Check if the login is successful (you'll need to implement your own logic here)
    $login_successful = false; // Assuming login is unsuccessful by default

    // Perform the login check and set the $login_successful variable accordingly
    // Replace this with your own login logic
    if ($email === 'user@example.com' && $password === 'password123') {
        $login_successful = true;
    }

    // Redirect the user based on the login result
    if ($login_successful) {
        // Store email in session
        $_SESSION['email'] = $email;

        // Redirect to the home page or a success page
        header('Location: index.html');
        exit();
    } else {
        // Set an error message in the session
        $_SESSION['login_error'] = 'Invalid email or password';

        // Redirect back to the login page
        header('Location: login.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="logsig.css">
  </head>
  <body>
    <!-- Login form -->
    <form id="login-form" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Log in</button>
    </form>
    <p>No account yet? <a href="signup.html">Sign up</a></p>
    <script src="script.js"></script>
  </body>
</html>