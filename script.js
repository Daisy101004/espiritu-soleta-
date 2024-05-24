// JavaScript code for login and signup forms

// Get the login form and attach a submit event listener
const loginForm = document.getElementById('login-form');
loginForm.addEventListener('submit', handleLoginSubmit);

// Function to handle login form submission
function handleLoginSubmit(event) {
  event.preventDefault(); // Prevent the form from submitting

  // Get the entered email and password
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // Perform your login logic here
  // e.g., send an API request to validate the credentials

  // Reset the form fields
  loginForm.reset();
}

// Get the signup form and attach a submit event listener
const signupForm = document.getElementById('signup-form');
signupForm.addEventListener('submit', handleSignupSubmit);

// Function to handle signup form submission
function handleSignupSubmit(event) {
  event.preventDefault(); // Prevent the form from submitting

  // Get the entered signup data
  const username = document.getElementById('username').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // Perform your signup logic here
  // e.g., send an API request to create a new user

  // Reset the form fields
  signupForm.reset();
}