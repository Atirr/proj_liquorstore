 <?php
$servername = "localhost";
$username = "username";
$password = "password";
$database = "contactform";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?> 