<?php
    require_once("config.php");

    class Util {
        public $conn; // perform database queries

        function __construct() {
            // initialize database connection
            $this->conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE)
            // display database connection error
            or die("Database: Connection failed.");
        }

        function __destruct() {
            // close connection
            mysqli_close($this->conn);
        }

        // Get rid of spaces, new lines, unwanted characters etc.
        public function strip($data) {
            $data = preg_replace("@\n@", "", $data);
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        public function strip_username($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        // Database retrieve data method(s)
        public function usernameExists($username) {
            // get user information
            $query = "SELECT * FROM users
                      WHERE username = '{$username}'";

            $row = $this->conn->query($query);

            // if the user is found, and contains at one row
            if ($row !== false) {
                // user exists
                if ($row->num_rows > 0) {
                    return true;
                }
            } 
            
            return false;
        }

        // database retrieve data method(s)
        public function IsValidUser($username, $password) {
            // Get user information
            $query = "SELECT * FROM users
                      WHERE username = $username";

            $row = $this->conn->query($query);

            $data = null;

            // if the $result is not false, and contains at least one row
            $hash_password = "";
            if ($row !== false) {
                if ($row->num_rows > 0) {
                // user exists
                $data = mysqli_fetch_array($row);
                $hash_password = $data['password'];

                    if (password_verify($password, $hash_password)) {
                        return $data;
                    }
                }
            } else {
                echo "<div class='alert alert-danger my-2 p-2 text-center' role='alert'>
                        Unable to sign in at the moment, please try again later.
                      </div>";

                return null;
            }
        }
    }
?>