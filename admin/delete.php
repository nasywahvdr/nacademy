<?php
session_start();
require '../config.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Ambil data gambar sebelum dihapus
    $sql = "SELECT image FROM portfolios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        // Hapus gambar dari folder
        $image_path = "../assets/img/" . $row['image'];
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        // Hapus data dari database
        $sql_delete = "DELETE FROM portfolios WHERE id = ?";
        $stmt_delete = $conn->prepare($sql_delete);
        $stmt_delete->bind_param("i", $id);

        if ($stmt_delete->execute()) {
            $_SESSION['success'] = "Portofolio berhasil dihapus!";
        } else {
            $_SESSION['error'] = "Gagal menghapus portofolio.";
        }
    } else {
        $_SESSION['error'] = "Portofolio tidak ditemukan.";
    }
}

header("Location: dashboard.php");
exit();
?>
