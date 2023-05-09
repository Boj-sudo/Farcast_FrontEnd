<?php
  session_start();
  if (isset($_SESSION["user"])) {
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>AZA Explorers: Register</title>
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
  <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="row m-n">
      <div class="col-md-4 col-md-offset-4 m-t-lg">
        <section class="panel">
          <header class="panel-heading bg bg-primary text-center">
                <h1 class="deep-shadow fw-bold display-6 text-uppercase text-light text-center">
					<span style="color: #e9b310;">
						A<span style="color: yellow;">Z</span>A
					</span>
					Explorers
				</h1>

                <h6 class="fw-bold my-4 text-uppercase">Create an Account</h6>
          </header>

          <?php
            $first_name = $last_name = $user_name = "";
            $password = $passowrd_repeat = "";
            $user_type = "";

            if (isset($_POST['submit'])) {
              require('server/util.php');
              // Utility functions
              $util = new util();
              $conn = $util->conn;

              $first_name = $util->strip($_POST['firstname']);
              $last_name = $util->strip($_POST['lastname']);
              $user_name = $util->strip_username($_POST['username']);

              $user_type = $util->strip($_POST['type']);

              $grade = intval($_POST['grade']);

              $password = mysqli_real_escape_string($conn, $_POST['password']);
              $passowrd_repeat = mysqli_real_escape_string($conn, $_POST['passwordRepeat']);

              $subject_list = $_POST['subjects'];

              if (empty($first_name) OR empty($last_name) OR empty($user_name) OR empty($user_type) OR empty($grade) OR empty($subject_list) OR empty($password) OR empty($passowrd_repeat)) {
                echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                        All fields are required.
                      </div>";
              }

              if (strlen($password) < 8) {
                echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                        Password must be at least 8 characters long.
                      </div>";
              }

              if ($password !== $passowrd_repeat) {
                echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                        Password does not match.
                      </div>";
              } elseif ($util->usernameExists($user_name)) {
                echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                        Username already exists.
                      </div>";
              } elseif (empty($subject_list)) {
                echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                        Please select at least one subject.
                      </div>";
              } else {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $userID = uniqid("LNR-");

                $query = "INSERT INTO users (userID, name, surname, grade, username, password, type, language)
                          VALUES ('$userID', '$first_name', '$last_name', '$grade', '$user_name', '$passwordHash', '$user_type', 'English');";

                $result = mysqli_query($conn, $query);

                if ($result == false) {
                  echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                          Something went wrong, Please make sure that all the details are valid.
                        </div>";
                } else {
                  echo "<div class='alert alert-success my-2 p-2 text-center' role='alert'>
                          You are registered successfully.
                        </div>";

                  header("Location: login.php");
                  die();
                }

                // Add the subjects for new user and reset existing variables
                $query = "";
                $result = false;

                foreach ($subject_list as $subject) {
                  $query = "INSERT INTO subjects (userID, name)
                            VALUES ('$userID', '$subject');";

                  $result = mysqli_query($conn, $query);

                  if ($result == false) {
                    echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                            Unable to add the selected subject(s), please contact account administrator.
                          </div>";
                  } else {
                    echo "<div class='alert alert-success my-2 p-2 text-center' role='alert'>
                            Subject(s) added successfully.
                          </div>";
                  }
                }
              }
            }
          ?>
          
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="panel-body" method="POST">
            <div class="form-group">
              <label class="control-label">First Name</label>
              <input type="text" placeholder="eg. Your first name" class="form-control" name="firstname" value="<?php echo $first_name; ?>">
            </div>
            
            <div class="form-group">
              <label class="control-label">Last Name</label>
              <input type="text" placeholder="eg. Your last name" class="form-control" name="lastname" value="<?php echo $last_name; ?>">
            </div>

            <div class="form-group">
              <label class="control-label">Username</label>
              <input type="text" placeholder="eg. Your username" class="form-control" name="username" value="<?php echo $user_name; ?>">
            </div>

            <div class="form-group">
              <label class="control-label">Usertype</label>
              <select id="grade" name="type" class="form-control" aria-label="Default select example">
									<option value="learner" selected>Learner</option>
                  <option value="teacher">Teacher</option>
                  <option value="parent">Parent</option>
              </select>
            </div>

            <div class="form-group">
              <label class="control-label">Grade</label>
              <select id="grade" name="grade" class="form-control" aria-label="Default select example">
									<option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
                  <option value="7">7</option>
              </select>
            </div>

            <div class="form-group">
              <label class="control-label">Subject</label>
              <select id="multiple-checkboxes" multiple="multiple" class="form-control" name="subjects[]">
									<option value="geography">Geography</option>
									<option value="natural sciences">Natural Sciences</option>
									<option value="mathematics">Mathematics</option>
							</select>
            </div>

            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" id="inputPassword" placeholder="Password" class="form-control" name="password" value="<?php echo $password; ?>">
            </div>

            <div class="form-group">
              <label class="control-label">Repeat Password</label>
              <input type="password" placeholder="Confirm password" class="form-control" name="passwordRepeat" value="<?php echo $passowrd_repeat; ?>">
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox"> Agree the <a href="#">terms and policy</a>
              </label>
            </div>

            <button type="submit" class="btn btn-info" name="submit">Sign up</button>

            <div class="line line-dashed"></div>
            <p class="text-muted text-center"><small>Already have an account?</small></p>
            <a href="login.php" class="btn btn-white btn-block">Sign in</a>
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