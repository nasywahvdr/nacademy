<?php
session_start(); // Start session
require '../config.php'; // Include database configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST["description"]);
    $link = htmlspecialchars($_POST["link"]);

    // Upload Image
    $target_dir = "../assets/img/";
    $image_name = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image_name;

    // Validate the image file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ["jpg", "jpeg", "png", "gif"];

    if (!in_array($imageFileType, $allowed_types)) {
        $_SESSION['error'] = "Only JPG, JPEG, PNG, and GIF files are allowed.";
        header("Location: dashboard.php"); // Redirect back with error
        exit();
    }

    // Check if the image was uploaded successfully
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Prepare the SQL query
        $sql = "INSERT INTO portfolios (title, description, image, link) VALUES (?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ssss", $title, $description, $image_name, $link);

            // Execute the statement
            if ($stmt->execute()) {
                $_SESSION['success'] = "Portfolio successfully added!"; // Save success message
            } else {
                $_SESSION['error'] = "Database error: " . $stmt->error;
            }

            $stmt->close(); // Close the prepared statement
        } else {
            $_SESSION['error'] = "Failed to prepare SQL statement: " . $conn->error;
        }
    } else {
        $_SESSION['error'] = "Failed to upload the image.";
    }

    // Redirect back to the dashboard with success or error messages
    header("Location: dashboard.php");
    exit();
}
?>
