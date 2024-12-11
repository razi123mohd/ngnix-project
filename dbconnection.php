$servername = "localhost";
$username = "razi";  // MySQL username
$password = "razi123";  // MySQL password
$dbname = "mywebsite";  // MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
