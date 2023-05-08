<?php 
  session_start();
  if(isset($_SESSION["user"])) {
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>AZA Explorers: Login</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" cache="false" />
  <link rel="stylesheet" href="css/plugin.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
</head>
<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="row m-n">
      <div class="col-md-4 col-md-offset-4 m-t-lg">
        <section class="panel">
          <header class="panel-heading text-center">
            <h1 class="deep-shadow fw-bold display-6 text-uppercase text-light text-center">
              <span style="color: #e9b310;">
                A<span style="color: yellow;">Z</span>A
              </span>
              Explorers
            </h1>

            <h6 class="fw-bold my-4 text-uppercase">Sign In</h6>
          </header>

          <?php
            $user_name = "";
            $password = "";

            if (isset($_POST["login"])) {
              require('server/util.php');
              // utility functions
              $util = new util();
              $conn = $util->conn;

              $user_name = $util->strip_username($_POST['username']);
              $password = mysqli_real_escape_string($conn, $_POST['password']);

              $query = "SELECT * FROM users 
                        WHERE username = '$user_name'";

              $result = mysqli_query($conn, $query);
              $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

              if ($user) {
                if (password_verify($password, $user["password"])) {
                  session_start();
                  $_SESSION["user"] = "yes";
                  header("Location: dashboard.php");
                  die();
                } else {
                  echo "<div class='alert alert-danger'>Password or username do not match.</div>";
                } 
              } else {
                echo "<div class='alert alert-danger'>Username does not exist.</div>";
              }
            }
          ?>

          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="panel-body" method="POST">
            <div class="form-group">
              <label class="control-label">Username</label>
              <input type="text" placeholder="Enter your username" class="form-control" name="username" value="<?php echo $user_name; ?>">
            </div>

            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" id="inputPassword" placeholder="Enter your Password" class="form-control" name="password" value="<?php echo $password; ?>">
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox"> Keep me logged in
              </label>
            </div>

            <a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a>
            <button type="submit" class="btn btn-info" name="login">Sign in</button>
            <div class="line line-dashed"></div>
            <a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a>
            <a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
            <div class="line line-dashed"></div>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a href="register.php" class="btn btn-white btn-block">Create an account</a>
          </form>
        </section>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>Mobile first web app framework base on Bootstrap<br>&copy; 2013</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
	<script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- app -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/app.data.js"></script>
</body>
</html>