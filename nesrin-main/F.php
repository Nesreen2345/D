<?php
session_start();

include "db_conn.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    // You can place code here for handling logged-in users (if needed)
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["comment"])) {
    $user_id = 1; // Replace with the actual user's ID
    $comment_text = $_POST["comment"];

    // You should use prepared statements to prevent SQL injection
    $sql = "INSERT INTO comments (user_id, comment_text) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $user_id, $comment_text);

    if ($stmt->execute()) {
        // After successfully inserting a comment, redirect to the comment page
        header("Location: f.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Retrieve comments from the database
$sql = "SELECT * FROM comments ORDER BY comment_id DESC";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your HTML head content here -->
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color:  #78a8b2;
        margin: 0;
        padding: 0;
    }
    input {
	display: block;
	border: 2px solid #ccc;
	width: 50%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color:#d0deeca2;
        border: 2px solid #ffffff;
        border-radius: 20px;
    }

    .comment {
        border: 1px solid #ddd;
        background-color: #f9f9f9;
        margin: 10px 0;
        padding: 10px;
        padding: 10px 10px;
    }

    /* New styles for comments */
    .commented-section {
        border: 1px solid #ccc;
        background-color: #c5c7c9b6;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 2px solid #ffffff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .commented-user {
        display: flex;
        align-items: center;
    }

    .commented-user img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }
    button {
	background: #0000006a;
    border: 2px solid #ffffff;
	padding: 10px 10px;
	color: #fff;
	border-radius:5px;
	margin-right: 5px;
	border: none;
}

    .commented-user h5 {
        margin: 0;
    }

    .commented-user span {
        color: #777;
    }

    .comment-text-sm {
        font-size: 16px;
        margin-top: 10px;
    }
    .add-comment-section {
            text-align: center;
        }

        .logo {
            text-align: center;
            padding: 20px;
        }

        .logo img {
            width: 100px;
        }
</style>
</head>
<body>
    <div class="container mt-5 mb-5">
        <!-- Add comment form -->
        <div class="add-comment-section mt-4 mb-4">
        <form method="POST" action="f.php">
    <div class="user-avatar">
        <img class="rounded-circle" src="https://i.imgur.com/qdiP4DB.jpg" width="38" alt="User Avatar">
    </div>
    <input type="text" class="form-control mr-3" name="comment" placeholder="Add comment">
    <button class="btn btn-primary" type="submit">Comment</button>
</form>

        </div>

        <!-- Display comments retrieved from the database -->
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="commented-section mt-2">';
                echo '<div class="commented-user d-flex flex-row align-items-center">';
                echo '<h5 class="mr-2">User ID: ' . $row["user_id"] . '</h5>';
                echo '<span class="dot mb-1"></span>';
                echo '<span class="mb-1 ml-2">';
                if (isset($row["date"])) {
                    echo 'Date: ' . $row["date"];
                } else {
                    echo '!لقد شاركتنا تعليقك';
                }
                echo '</span>';
                echo '</div>';
                echo '<div class="comment-text-sm">';
                echo '<span>' . $row["comment_text"] . '</span>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "No comments available.";
        }
        ?>
    </div>
</body>
</html>

