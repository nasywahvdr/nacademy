<?php
$title = 'Learn More';
include 'layouts/header.php'; ?>
<?php include 'config.php'; ?>



<section class="py-12 bg-[#141b2f]">
    <div class="container mx-auto">
        <!-- Judul dan Deskripsi -->
        <div class="text-center mb-12 mt-20">
            <h1 class="text-4xl font-bold text-white mb-4">Modul dan Materi</h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                Belajar tentang materi bahasa pemrograman website juga pengertian website disini dan juga seputar informasi teknologi lainnya. Feel free to explore them!
            </p>
        </div>

        <!-- Grid Portfolio -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php
            // Query untuk mengambil data portofolio
            $sql = "SELECT * FROM portfolios";
            $result = $conn->query($sql);

            // Cek apakah ada data
            if ($result->num_rows > 0) {
                // Loop melalui setiap baris data
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="bg-[#28365e] p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">';
                    echo '<img src="assets/img/' . $row['image'] . '" alt="' . $row['title'] . '" class="w-full h-48 object-cover rounded-t-lg">';
                    echo '<h3 class="text-xl font-bold mt-4 text-white">' . $row['title'] . '</h3>';
                    echo '<p class="text-gray-400 mt-2">' . $row['description'] . '</p>';
                    echo '<a href="' . $row['link'] . '" target="_blank" class="mt-4 inline-block bg-[#141b2f] text-white py-2 px-4 rounded">Baca Selengkapnya</a>';
                    echo '</div>';

                }
            } else {
                // Jika tidak ada data
                echo '<p class="text-center text-gray-400">No projects found.</p>';
            }
            ?>
        </div>
    </div>
</section>


<?php include 'layouts/footer.php'; ?>