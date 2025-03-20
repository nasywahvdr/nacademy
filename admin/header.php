<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title)?$title : 'default title' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    
    <!-- Navbar -->
    <nav class="bg-[#324475] p-4 text-white fixed top-0 w-full z-50 flex justify-between items-center shadow-md">
        <button id="menu-btn" class="md:hidden text-white text-2xl">
            ☰
        </button>
        <h1 class="text-lg font-semibold">Admin Dashboard</h1>
        <a href="../index.php" class="bg-[#465fa4] px-4 py-2 rounded">Kembali Ke Beranda</a>
    </nav>

    <!-- Sidebar -->
    <aside id="sidebar" class="bg-[#324475] text-white w-64 h-screen fixed top-0 left-0 pt-16 p-4 shadow-lg 
        absolute inset-y-0 transform -translate-x-full transition-transform md:translate-x-0">
        <button id="close-btn" class="text-white text-2xl absolute top-4 right-4 md:hidden">✖</button>
        <ul>
            <li class="mb-2 mt-6">
                <a href="dashboard.php" class="block px-4 py-2 rounded hover:bg-gray-700">Dashboard</a>
            </li>
        </ul>
    </aside>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');
        const sidebar = document.getElementById('sidebar');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
        });

        closeBtn.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
        });
    </script>

</body>

</html>
