<?php
require_once "./auth/account.php";
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name=description content="iVerify provides verification and screening solutions to the corporate and private sectors through a unified, standardized, ethical data verification and referencing model.">
    <meta name=author content="ThankGod Okoro">
    <meta property="og:url" content="https://www.iverify.ng"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="iVerify&trade; :: Verification, Due Diligence, Certificarte Verification, Fraud Detection"/>
    <meta name="og:description" content="iVerify provides verification and screening solutions to the corporate and private sectors through a unified, standardized, ethical data verification and referencing model.">
    <meta name="keywords" content="Verification,iVerify.ng,Verify me,iVerify,Identity Verification,Due Diligence,Certificate Verification,Property Verification,Tenant Verification,Employee Verification,Domestic Staff Verification,Company Verification,Family Research,Document Verification,Verification in Nigeria,Identity Verification Companies,Identity Verification Companies in Nigeria">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.imgur.com/muLDDf6.png"/>
    <title>Admin Login :: iVerify&trade;</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
      <link class="js-stylesheet" href="css/light.css" rel="stylesheet">

  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('img/bg.jpeg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
              <div class="text-center mb-3">
                  <img src="img/logo.png" width="150">
              </div>
            <h2 class="mb-2 text-center">Welcome back!</h2>
              <p class="lead text-center">
                  Sign in to your account to continue
              </p>
              <?php
                if (isset($_SESSION['message'])) {
              ?>
                    <div class="alert alert-danger" role="alert">
                        <div class="alert-message text-center lead">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                    </div>
              <?php
                    unset($_SESSION['message']);
                }
              ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
              <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="text" required class="form-control" placeholder="sample@iverify.ng" name="email">
              </div>

              <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" required class="form-control" placeholder="Your Password" name="password">
              </div>
              
              <div class="d-flex mb-3 align-items-center">
                <span class="ml-auto">
                    <a href="password-reset" class="text-dark" style="text-decoration: none;">Forgot Password?</a>
                </span>
              </div>

                <div class="d-grid">
                    <button type="submit" name="admin_login_btn" class="btn btn-block btn-lg btn-primary">Log In</button>
                </div>

            </form>
          </form>
        </div>
      </div>
    </div>

    
  </div>

  <script src="js/app.js"></script>
  </body>
</html>