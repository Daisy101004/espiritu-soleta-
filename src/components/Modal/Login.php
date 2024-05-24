<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <!-- Login Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="contact-signin">Contact Number</label>
            <input type="email" class="form-control" id="contact-signin" aria-describedby="contactNumberHelp" placeholder="Enter Contact Number" maxlength="11" required>
            <small id="contactNumberHelp" class="form-text text-muted">We'll never share your Contact Number with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" required>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <p>No account yet? <a data-bs-toggle="modal" data-bs-target="#signUpModalCenter">Sign up</a></p>
          <div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="submit-btn">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type='text/javascript'>
    const contactSignin = document.querySelector("#contact-signin");
    const password = document.querySelector("#password");
    const submitBtn = document.querySelector("#submit-btn");

    submitBtn.addEventListener("click", () => {
      if (contactSignin == "" && password == "") {
        alert("empty")
      } else {
        $.post("./connections/functions.php", {
            authContactNumber: contactSignin.value,
            authPassword: password.value
          })
          .done(function(data) {
            console.log(data);
            if (data == "Password or Contact not matched") {
              alert(data);
            } else {
              const info = data.split(",");
              localStorage.setItem("userlogin", true);
              localStorage.setItem("userinfo", JSON.stringify({
                username: info[0],
                contact: info[1],
                id: info[2]
              }))
              alert("Successfully Login");
              location.reload();
            }
            UserEdit = false;
          });
      }
    })
  </script>
</body>

</html>