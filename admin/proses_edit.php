<?php
require '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST["description"]);
    $link = htmlspecialchars($_POST["link"]);

    // Cek apakah user mengunggah gambar baru
    if (!empty($_FILES["image"]["name"])) {
        $target_dir = "../assets/img/";
        $image_name = basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image_name;

        // Validasi tipe file
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ["jpg", "jpeg", "png", "gif"];

        if (!in_array($imageFileType, $allowed_types)) {
            die("Hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.");
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Update data termasuk gambar baru
            $sql = "UPDATE portfolios SET title=?, description=?, image=?, link=? WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssi", $title, $description, $image_name, $link, $id);
        } else {
            die("Gagal mengunggah gambar.");
        }
    } else {
        // Update tanpa mengganti gambar
        $sql = "UPDATE portfolios SET title=?, description=?, link=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $title, $description, $link, $id);
    }

    if ($stmt->execute()) {
        header("Location: dashboard.php?success=edit");
        exit();
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
}
if ($stmt->execute()) {
    header("Location: dashboard.php?success=edit");
    exit();
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}
?>