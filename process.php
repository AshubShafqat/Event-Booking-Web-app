<?php
include 'db_connection.php';

// Retrieve form data
$username = $_POST['username'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$event_date = $_POST['event_date'];
$package_Name = $_POST['package_name']; // Retrieve package_name

// Debugging output
echo "Username: $username<br>";
echo "Phone: $phone<br>";
echo "City: $city<br>";
echo "Event Date: $event_date<br>";
echo "Package Name: $package_Name<br>";

// Check if the package_name is empty
if (empty($package_Name)) {
    echo "Error: package_name is empty!";
    exit();
}

// Insert into the database
$sql = "INSERT INTO bookings (username, phone, city, event_date, package_name) 
        VALUES ('$username', '$phone', '$city', '$event_date', '$package_Name')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
    header("Location: confirmation.php?package_name=" . urlencode($package_Name));
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
