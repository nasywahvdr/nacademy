<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title)?$title : 'default title' ?> </title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#1e2946]">
    <nav class="p-8 fixed w-full top-0 shadow-lg z-50 bg-[#3c528c]" data-aos="fade-down">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="assets/img/logoa.png" alt="Logo" class="w-10 h-10 rounded-full">
                <!-- Ganti "logo.png" dengan path logo -->
                <a href="#" class="text-xl font-bold text-[#c1cff7]">Nacademy</a>
            </div>
            <button class="md:hidden text-white" id="menu-toggle">☰</button>
            <ul class="hidden md:flex space-x-20 text-white" id="menu">
                <li><a href="index.php" class="hover:text-[#83a0ee]">Home</a></li>
                <li><a href="index.php#about" class="hover:text-[#83a0ee]">About NACADEMY</a></li>
                <li><a href="portofolio.php" class="hover:text-[#83a0ee]">Learn Here</a></li>
                <li><a href="admin/dashboard.php" class="hover:text-[#83a0ee]">Dashboard</a></li>
            </ul>
        </div>

        <!-- Mobile Menu -->
        <ul class="absolute top-full left-0 w-full bg-gray-900 text-white hidden flex-col space-y-4 p-4 md:hidden"
            id="mobile-menu">
            <li><a href="index.php" class="block hover:text-[#83a0ee]">Home</a></li>
            <li><a href="index.php#about" class="block hover:text-[#83a0ee]">About NACADEMY</a></li>
            <li><a href="portofolio.php" class="block hover:text-[#83a0ee]">Learn Here</a></li>
            <li><a href="admin/dashboard.php" class="block hover:text-[#83a0ee]">Dashboard</a></li>
        </ul>
    </nav>
