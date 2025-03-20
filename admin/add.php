<?php include '../config.php' ?>


<?php
$title = 'Tambah Data'; 
include 'header.php' ?>
<main class="ml-64 mt-16 p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Portofolio</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="title" class="block font-semibold">Title</label>
                <input type="text" name="title" id="title" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block font-semibold">Description</label>
                <textarea name="description" id="description" class="w-full border p-2 rounded" required></textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block font-semibold">Upload Image</label>
                <input type="file" name="image" id="image" class="w-full border p-2 rounded" accept="image/*" required>
            </div>

            <div class="mb-4">
                <label for="link" class="block font-semibold">Link</label>
                <input type="url" name="link" id="link" class="w-full border p-2 rounded" required>
            </div>

            <button type="submit" class="bg-[#FD6F00] text-white px-4 py-2 rounded hover:bg-blue-600">Tambah</button>
        </form>
    </div>
</main>

<?php include 'footer.php' ?>