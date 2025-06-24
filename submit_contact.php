<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "eventbuzz"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    if ($conn->query($sql) === TRUE) {
        // Redirect back to index.php with a success message
        header("Location: index.php?success=1");
        exit();
    } else {
        // Redirect back to index.php with an error message
        header("Location: index.php?success=0");
        exit();
    }
}
?>
