<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Log in | AdminLTE 3 </title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback" />

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />

  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />

  <link rel="stylesheet" href="dist/css/adminlte.min2167.css?v=3.2.0" />
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="index2.html" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="./backend/login_user.php" method="POST">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Enter Username or Email" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" />
                <label for="remember"> Remember Me </label>
              </div>
            </div>

            <div class="col-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block">
                Sign In
              </button>
            </div>
          </div>
        </form>

        <p class="mb-1">
          <a href="forgot-password.php">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.php" class="text-center">Register a new membership</a>
        </p>
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
          echo "<p style='color: red;'>{$_SESSION['error']}</p>";
          unset($_SESSION['error']);
        }
        ?>
      </div>
    </div>
  </div>

  <script src="plugins/jquery/jquery.min.js"></script>

  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="dist/js/adminlte.min2167.js?v=3.2.0"></script>
</body>

</html>