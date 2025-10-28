<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration - AgroLink</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="split-container">
      <!-- Left: Quote & Image -->
      <div
        class="split-left"
        style="
          background: url('<?=ROOT?>/assets/imgs/registerpage/register5.jpg') center
            center/cover no-repeat;
        "
      >
        <span class="quote-icon">&ldquo;</span>
        <div class="split-left-content">
          <p>
            The best produce comes straight from the source.<br />
            AgroLink connects you to Sri Lanka's freshest harvests.
          </p>
        </div>
      </div>
      <!-- Right: Registration Form -->
      <div class="split-right">
        <div class="form-box">
          <?php if(!empty($errors)):?>
            <div class="alert">
                <?= implode("<br>", $errors)?>
            </div>
            <?php endif?>
          <h1>Create AgroLink Account</h1>
          <!--<div class="subtitle">
            Enter your email and password to create your account
          </div>-->
          <form id="registerBuyerForm" autocomplete="off" method="POST">
            <div class="form-group">
              <label for="name">Name</label>
              <input
                type="text"
                id="name"
                name="name"
                class="form-control"
                required
                placeholder="Your name"
              />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                class="form-control"
                required
                placeholder="you@example.com"
              />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input
                type="password"
                id="password"
                name="password"
                class="form-control"
                required
                placeholder="********"
              />
            </div>
            <div class="form-group">
              <label for="confirm_password">Confirm Password</label>
              <input
                type="password"
                id="confirm_password"
                name="confirm_password"
                class="form-control"
                required
                placeholder="********"
              />
            </div>
            <div class="form-group">
              <label for="role">I am a:</label>
              <select id="role" name="role" class="form-control" required>
                <option value="">Select your role</option>
                <option value="farmer">Farmer</option>
                <option value="buyer">Buyer</option>
                <option value="transporter">Transporter</option>
              </select>
            </div>
          <div style="text-align: center;">
            <button type="submit" class="btn btn-primary btn-large">
              Create Account
            </button>
          </div>
        </form>
          <!-- <div class="or-divider">Or continue with</div>
          <button class="google-btn" type="button" onclick="loginWithGoogle()">
            <img
              src="https://www.svgrepo.com/show/475656/google-color.svg"
              alt="Google"
              class="google-icon"
            />
            Google
          </button> -->
          <div class="text-center">
            Already have an account?
            <a href="<?=ROOT?>/login">Sign in here</a>
          </div>
        </div>
      </div>
    </div>
    <script>
      document
        .getElementById("registerRoleSelect")
        .addEventListener("change", function () {
          if (this.value === "farmer") {
            window.location.href = "register_farmer.html";
          } else if (this.value === "transporter") {
            window.location.href = "register_transporter.html";
          }
        });
      function loginWithGoogle() {
        alert("Google login coming soon!");
      }
      document
        .getElementById("registerBuyerForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();
          alert("Account created! (Demo)");
        });
    </script>
  </body>
</html>
