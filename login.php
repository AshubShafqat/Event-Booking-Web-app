<?php
$packageName = isset($_GET['package_name']) ? $_GET['package_name'] : 'Unknown Package';
?>

<form action="confirmation.php" method="post">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Username, Phone Number, City, and Date Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif; background-color: #333; /* Background color */
            margin: 0; padding: 0;
            display: flex; justify-content: center;
            align-items: center; height: 100vh;  color: #fff;
        }
        .container {
            background: #222;   padding: 20px 30px; border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 400px;
        }
        h2 {
            text-align: center; margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;  font-weight: bold; margin-bottom: 5px; color: #ccc;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd; border-radius: 4px;  background-color: #444; color: #fff;
        }
        .form-group input:focus,
        .form-group select:focus {
            outline: none; border-color: #3867d6; /* Blue color */
        }
        .btn {
            width: 100%;  padding: 10px;
            background-color: #3867d6; /* Button color */ color: #fff;
            border: none;
            border-radius: 4px; cursor: pointer;
            font-size: 16px; margin-top: 10px;
        }
        .btn:hover {
            background-color: #2e56a6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="color: #3867d6;">Event Booking</h2>
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <input type="hidden" name="package_name" value="<?php echo htmlspecialchars($packageName); ?>">
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" id="time" name="time" placeholder="Enter time" required>
            </div>
            <div class="form-group">
                <label for="city">Select City</label>
                <select id="city" name="city" required>
                    <option value="" disabled selected>Select your city</option>
                    <option value="karachi">Karachi</option>
                    <option value="multan">Multan</option>
                    <option value="faisalabad">Faisalabad</option>
                    <option value="sheikhupura">Sheikhupura</option>
                    <option value="lahore">Lahore</option>
                </select>
            </div>
            <h2 style="color: #3867d6;">Select Date for Event</h2>
            <div class="form-group">
                <label for="event-date">Event Date</label>
                <input type="date" id="event-date" name="event_date" required>
            </div>
            <button type="submit" class="btn">book the event</button>
        </form>
    </div>
</body>
