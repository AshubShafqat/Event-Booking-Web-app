 <?php
// star_rating.php

// Database credentials - Change these to your database info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventbuzz";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle AJAX POST request to submit rating
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rating'])) {
    $rating = intval($_POST['rating']);
    if ($rating >= 1 && $rating <= 5) {
        // Insert rating into database
        $stmt = $conn->prepare("INSERT INTO ratings (rating) VALUES (?)");
        $stmt->bind_param("i", $rating);
        $stmt->execute();
        $stmt->close();

        // Calculate average rating
        $result = $conn->query("SELECT AVG(rating) as avg_rating, COUNT(*) as count FROM ratings");
        $row = $result->fetch_assoc();
        $avg = round($row['avg_rating'], 2);
        $count = $row['count'];

        // Return JSON response
        echo json_encode([
            "success" => true,
            "averageRating" => $avg,
            "ratingCount" => $count
        ]);
    } else {
        echo json_encode(["success" => false, "message" => "Invalid rating value."]);
    }
    $conn->close();
    exit;
}

// Fetch average rating and count for initial page load
$result = $conn->query("SELECT AVG(rating) as avg_rating, COUNT(*) as count FROM ratings");
$row = $result->fetch_assoc();
$avg_rating = $row['avg_rating'] ? round($row['avg_rating'], 2) : 0;
$rating_count = $row['count'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Star Rating System</title>
<style>
        body {
            background-color: black;
            color: #eee;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            padding: 50px 20px;
            user-select: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1 {
            margin-bottom: 8px;
        }

        .rating {
            direction: rtl;
            font-size: 4rem;
            unicode-bidi: bidi-override;
            display: inline-block;
        }

        .rating input {
            display: none;
        }

        .rating label {
            color: #444;
            cursor: pointer;
            padding: 0 5px;
            transition: color 0.3s ease;
            user-select: none;
            text-shadow:
                0 0 2px #000,
                0 0 5px #000;
        }

        .rating input:checked ~ label,
        .rating label:hover,
        .rating label:hover ~ label {
            color: #ffd700;
            text-shadow:
                0 0 5px #ffdc73,
                0 0 15px #ffd700;
        }

        .avg-rating-container {
            margin-top: 30px;
            font-size: 1.5rem;
            color: #ffd700;
        }

        @media (max-width: 600px) {
            .rating {
                font-size: 3rem;
            }
        }

        .rating.disabled label {
            cursor: default;
        }

        #message {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #76ff03;
            min-height: 1.5em;
            transition: opacity 0.5s ease;
        }
    </style>
</head>
<body>
    <h1>YOU CAN ALSO RATE US</h1>
    <div>
        <form id="ratingForm" class="rating" aria-label="Star rating">
            <input type="radio" id="star5" name="rating" value="5" />
            <label for="star5" title="5 stars">&#9733;</label>

            <input type="radio" id="star4" name="rating" value="4" />
            <label for="star4" title="4 stars">&#9733;</label>

            <input type="radio" id="star3" name="rating" value="3" />
            <label for="star3" title="3 stars">&#9733;</label>

            <input type="radio" id="star2" name="rating" value="2" />
            <label for="star2" title="2 stars">&#9733;</label>

            <input type="radio" id="star1" name="rating" value="1" />
            <label for="star1" title="1 star">&#9733;</label>
        </form>
    </div>

    <div class="avg-rating-container" aria-live="polite">
        Average Rating: <span id="averageRating"><?php echo $avg_rating; ?></span> / 5
        (<span id="ratingCount"><?php echo $rating_count; ?></span> votes)
    </div>

    <div id="message" role="alert" aria-live="assertive"></div>

    <script>
        const form = document.getElementById('ratingForm');
        const avgRatingEl = document.getElementById('averageRating');
        const ratingCountEl = document.getElementById('ratingCount');
        const messageEl = document.getElementById('message');

        form.addEventListener('change', function(e) {
            const rating = form.rating.value;
            if (!rating) return;

            form.classList.add('disabled');
            messageEl.textContent = 'Submitting your rating...';

            fetch('', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                },
                body: 'rating=' + encodeURIComponent(rating)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    avgRatingEl.textContent = data.averageRating;
                    ratingCountEl.textContent = data.ratingCount;
                    messageEl.textContent = 'Thank you for your rating!';
                } else {
                    messageEl.textContent = 'Error: ' + (data.message || 'Unknown error');
                }
            })
            .catch(() => {
                messageEl.textContent = 'Network error. Please try again.';
            })
            .finally(() => {
                form.classList.remove('disabled');
            });
        });
    </script> 
  
</body>
</html>
