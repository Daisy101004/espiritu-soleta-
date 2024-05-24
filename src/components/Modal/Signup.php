<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <!-- SignUp Modal -->
  <div class="modal fade" id="signUpModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="contact-number">Contact Number</label>
            <input type="text" class="form-control" id="contact-number" aria-describedby="contactNumberHelpHelp" placeholder="Enter Contact Number" maxlength="11">
            <small id="contactNumberHelp" class="form-text text-muted">We'll never share your Contact Number with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="password-signin">Password</label>
            <input type="password" class="form-control" id="password-signin" placeholder="Password">
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <p>No account yet? <a data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Log in</a></p>
          <div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="submit-signin-btn">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type='text/javascript'>
    const username = document.querySelector("#username");
    const contactNumber = document.querySelector("#contact-number");
    const passwordSignin = document.querySelector("#password-signin");
    const submitSigninBtn = document.querySelector("#submit-signin-btn");
    console.log("ahahahaha", submitSigninBtn);
    submitSigninBtn.addEventListener("click", () => {
      console.log("sdfsdfsdf");
      if (contactNumber == "" && passwordSignin == "" && username == "") {
        alert("empty")
      } else {
        $.post("./connections/functions.php", {
            username: username.value,
            contactNumber: contactNumber.value,
            password: passwordSignin.value
          })
          .done(function(data) {
            // localStorage.setItem("userlogin", true);
            //   localStorage.setItem("userinfo", JSON.stringify({
            //     username: info[0],
            //     contact: info[1],
            //     id: [2]
            //   }))
            alert(data);
            UserEdit = false;
          });
      }
    })
  </script>
</body>

</html>