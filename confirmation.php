<?php
// Database connection details
$servername = "localhost"; 
$username = "root"; //username: default is 'root'
$password = ""; //default is an empty string
$dbname = "eventbuzz"; 
// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username']; // Username from form
$phone = $_POST['phone']; // Phone number from form
$city = $_POST['city']; // Selected city from form
$event_date = $_POST['event_date']; // Selected date from form
$packageName = $_POST['package_name']; //package name from price

// Prepare SQL query to insert data into the booking table
$sql = "INSERT INTO bookings (username, phone, city, event_date,package_name) 
        VALUES ('$username', '$phone', '$city', '$event_date', '$packageName')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    // Successful insertion message
    echo "
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #333;
                color: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                background: #222;
                padding: 20px 30px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                text-align: center;
                width: 400px;
            }
            h2 {
                margin-bottom: 20px;
            }
            p {
                font-size: 16px;
                margin-bottom: 10px;
            }
                h2{
color: #3867d6;
                }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Booking Successful</h2>
            <p>Thank you, <strong>$username</strong>. Your booking is confirmed for <strong>$event_date</strong> in <strong>$city</strong>. <span>Payment is pending. You have to make the transaction via Cash after event. </span>
            </p>
        </div>
    </body>
    </html>
    ";
} else {
    // Error message if query fails
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>