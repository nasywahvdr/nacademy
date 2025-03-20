<?php
include '../config.php';
$title = 'Edit Data';
include 'header.php';

// Ambil data portofolio berdasarkan ID
$id = $_GET['id'] ?? null;
if (!$id) {
    die("ID tidak ditemukan.");
}

$sql = "SELECT * FROM portfolios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die("Data tidak ditemukan.");
}
?>

<main class="ml-64 mt-16 p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Portofolio</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">

            <div class="mb-4">
                <label for="title" class="block font-semibold">Title</label>
                <input type="text" name="title" id="title" value="<?= htmlspecialchars($row['title']); ?>" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block font-semibold">Description</label>
                <textarea name="description" id="description" class="w-full border p-2 rounded" required><?= htmlspecialchars($row['description']); ?></textarea>
            </div>

            <div class="mb-4">
                <label for="link" class="block font-semibold">Link</label>
                <input type="url" name="link" id="link" value="<?= htmlspecialchars($row['link']); ?>" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold">Gambar Saat Ini</label>
                <img src="../assets/img/<?= htmlspecialchars($row['image']); ?>" class="w-32 h-32 object-cover rounded">
            </div>

            <div class="mb-4">
                <label for="image" class="block font-semibold">Upload Gambar Baru (Opsional)</label>
                <input type="file" name="image" id="image" class="w-full border p-2 rounded">
            </div>

            <button type="submit" class="bg-[#FD6F00] text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
            <a href="dashboard.php" class="ml-4 text-gray-600">Batal</a>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>
