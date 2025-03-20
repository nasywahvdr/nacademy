<?php session_start() ?>
<?php
$title = 'dashboard admin'; 
include '../admin/header.php' ?>
<?php require '../config.php' ?>

<?php
$sql = "SELECT * FROM portfolios";
$result = $conn->query($sql);

?>

<main class="ml-0 md:ml-64 mt-16 p-6">
    <?php if (isset($_SESSION['success'])): ?>
        <div class="bg-green-500 text-white p-3 rounded mb-4">
            <?= $_SESSION['success']; ?>
        </div>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>
    
    <?php if (isset($_GET['success']) && $_GET['success'] == 'edit'): ?>
    <div class="bg-green-500 text-white p-3 rounded mb-4">
        Portofolio berhasil diperbarui!
    </div>
    <script>
        // Hapus parameter success dari URL setelah 1 detik
        setTimeout(() => {
            const url = new URL(window.location.href);
            url.searchParams.delete('success');
            window.history.replaceState({}, document.title, url);
        }, 1000);
    </script>
<?php endif; ?>


    <?php if (isset($_SESSION['error'])): ?>
        <div class="bg-red-500 text-white p-3 rounded mb-4">
            <?= $_SESSION['error']; ?>
        </div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <h1 class="text-2xl font-bold mb-4 text-center md:text-left">Daftar Portofolio</h1>
    
    <div class="flex justify-center md:justify-start">
        <a href="add.php">
            <button class="bg-[#141b2f] text-white font-bold py-2 px-4 rounded mb-4 transition">
                Tambah Data
            </button>
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-4 overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300 min-w-[600px]">
            <thead class="bg-[#252323] text-white">
                <tr>
                    <th class="border border-gray-300 p-2">No</th>
                    <th class="border border-gray-300 p-2">Title</th>
                    <th class="border border-gray-300 p-2">Description</th>
                    <th class="border border-gray-300 p-2">Image</th>
                    <th class="border border-gray-300 p-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM portfolios";
                $result = $conn->query($sql);
                $no = 1;

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr class="hover:bg-gray-100">';
                        echo '<td class="border border-gray-300 p-2 text-center">' . $no++ . '</td>';
                        echo '<td class="border border-gray-300 p-2">' . htmlspecialchars($row['title']) . '</td>';
                        echo '<td class="border border-gray-300 p-2 max-w-xs truncate">' . htmlspecialchars($row['description']) . '</td>';
                        echo '<td class="border border-gray-300 p-2 text-center">';
                        $file_path = '../assets/img/' . $row['image'];
                        if (file_exists($file_path)) {
                            echo '<img src="' . $file_path . '" alt="' . htmlspecialchars($row['title']) . '" class="w-16 h-16 object-cover rounded">';
                        } else {
                            echo '<p class="text-red-500">Gambar tidak ditemukan</p>';
                        }
                        echo '</td>';
                        echo '<td class="border border-gray-300 p-2 text-center whitespace-nowrap">';
                        echo '<a href="edit.php?id=' . $row['id'] . '" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 inline-block">Edit</a>';
                        echo '<a href="delete.php?id=' . $row['id'] . '" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 inline-block ml-2" onclick="return confirm(\'Apakah Anda yakin ingin menghapus portofolio ini?\');">Hapus</a>';
                        echo '</td>';                        
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="6" class="text-center py-4">Tidak ada data portofolio</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</main>



<?php include '../admin/footer.php' ?>