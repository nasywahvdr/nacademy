
<?php include 'config.php' ?>

<?php 
$title = "Nacademy";
include 'layouts/header.php'; ?>
<!-- hero section -->
<section id="home"
    class="h-screen mt-32 flex flex-col-reverse md:flex-row items-center justify-center px-6 md:px-16 mt-10 sm:mt-10">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-8">
        <!-- Left Side - CTA -->
        <div class="text-center md:text-left" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-lg text-[#b2c4f5] font-semibold">Hi Welcome To NACADEMY Official Website</h2>
            <h1 class="text-4xl md:text-6xl text-white font-bold leading-tight">Hi, I'm Nasy! As Your Virtual Assistant</h1>
            <p class="mt-4 text-gray-300">
                Welcome to our website! We're here to provide you anything with a passion for creating
                impactful digital experiences. Let’s learn code and build something amazing together!
            </p>


        </div>

        <!-- Right Side - Image -->
        <div class="flex justify-center relative" data-aos="fade-left" data-aos-duration="1200">
            <div
                class="relative w-64 md:w-80 h-64 md:h-80 rounded-full overflow-hidden border-4 border-white bg-white flex items-center justify-center">
                <img src="assets/img/imagei.png" alt="My Photo" class="absolute">
            </div>
        </div>



    </div>
</section>

<!-- about us -->
<section id="about" class="py-20 px-6 md:px-20 text-white bg-[#7494ec] relative overflow-hidden"
    style="min-height: 90vh;">
    <!-- Floating Symbols -->
    <div class="absolute top-4 left-10 text-[#FD6F00] text-6xl opacity-30 animate-spin-slow">
        <i class="fas fa-code"></i>
    </div>
    <div class="absolute bottom-16 right-10 text-[#FD6F00] text-6xl opacity-30 animate-bounce">
        <i class="fas fa-laptop-code"></i>
    </div>
    <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2 text-[#FD6F00] text-7xl opacity-10 animate-pulse">
        <i class="fas fa-terminal"></i>
    </div>

    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center relative z-10">
        <!-- Left Side - About Me -->
        <div
            class="relative bg-gray-800 p-10 rounded-xl shadow-xl md:-rotate-2 transform hover:rotate-0 transition duration-300">
            <h2 class="text-4xl md:text-6xl font-extrabold text-[#b2c4f5]">About NACADEMY</h2>
            <p class="mt-4 text-gray-300 leading-relaxed">Hello! Welcome To <span class="text-white font-semibold">NACADEMY</span>,
            your go-to platform for learning and growing in the world of technology! In this website, we aim to provide you with the tools and resources to master coding, from building stunning websites to understanding complex computer systems. Whether you're a beginner or looking to refine your skills, you'll find a variety of tutorials, guides, and interactive lessons tailored just for you, focusing on both front-end and back-end technologies.
            </p>

            <p class="mt-4 text-gray-300 leading-relaxed">
            Explore how to perform essential tasks like  <span class="text-white font-semibold"> installing operating systems, setting up Microsoft Office applications, or troubleshooting computer issues. </span>Our step-by-step guides are designed to make even the most technical processes simple and easy to follow.
Our mission is to empower individuals with the knowledge to create impactful digital experiences. We believe learning should be accessible, engaging, and practical. So dive in, explore, and let’s embark on this exciting journey of learning and building together. Happy coding!
                    </p>
        </div>


        <!-- Right Side - Education Section -->
        <div
            class="relative bg-gray-900 p-10 rounded-xl shadow-xl md:rotate-2 transform hover:rotate-0 transition duration-300">
            <h3 class="text-2xl font-semibold text-[#b2c4f5]">What We Gonna Learn?</h3>
            <ul class="mt-3 text-gray-300 list-disc list-inside space-y-3">
                <li><span class="font-medium text-white">Pengertian dan sejarah website. </span>Apa itu website?</li>
                <li><span class="font-medium text-white">Teknologi website. </span>Penjelasan tentang apa yang dimaksud teknologi website</li>
                <li><span class="font-medium text-white">Bahasa Pemrograman website. </span>Ada berapa dan apa saja bahasa pemrograman itu?</li>
                <li><span class="font-medium text-white">Manfaat website. </span>Manfaat website penggunaan dan berguna untuk apa?</li>
                <li><span class="font-medium text-white">Text Editor. </span>Text Editor atau menggunakan aplikasi apa yang dibuat untuk coding?</li>
                <li><span class="font-medium text-white">Evaluasi praktek mengerjakan script HTML</span></li>
            </ul>

        </div>
    </div>



</section>



<!-- section contact -->
<section class="bg-[#28365e] text-white py-16" id="contact">
    <div class="max-w-4xl mx-auto text-center px-6">
        <h2 class="text-lg text-gray-400">Let's Connect</h2>
        <h1 class="text-4xl font-bold">Contact Me</h1>
        <p class="text-gray-400 mt-4 max-w-2xl mx-auto">
            If you are interested in join volunteer on our website or have any questions, feel free to contact me and directly through
            WhatsApp! See You On My Roomchat
        </p>

        <!-- WhatsApp Contact -->
        <div class="mt-8 flex justify-center">
            <a href="https://wa.me/6288223503663" target="_blank"
                class="px-6 py-3 bg-green-500 text-white text-lg font-semibold rounded-lg shadow-lg flex items-center gap-2 transition hover:bg-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                    <path
                        d="M13.6 2.4A7.931 7.931 0 0 0 8 0C3.6 0 0 3.6 0 8c0 1.4.4 2.7 1.1 3.8L0 16l4.2-1.1c1.1.6 2.4.9 3.8.9 4.4 0 8-3.6 8-8 0-2.1-.9-4.1-2.4-5.6zM8 14.6c-1.2 0-2.3-.3-3.3-.8l-.2-.1-2.5.7.7-2.5-.1-.2C1.6 10.5 1.4 9.3 1.4 8c0-3.6 3-6.6 6.6-6.6 1.8 0 3.4.7 4.7 1.9 1.2 1.2 1.9 2.9 1.9 4.7 0 3.6-3 6.6-6.6 6.6zm3.6-4.9c-.2-.1-1.3-.6-1.5-.7-.2-.1-.4-.1-.5.1-.1.1-.5.7-.6.8-.1.1-.2.1-.3 0-.2-.1-.8-.3-1.5-1-.6-.6-.9-1.2-1-1.5 0-.1 0-.2.1-.3.1-.1.7-.5.8-.6.1-.1.1-.3.1-.5 0-.1-.6-1.3-.7-1.5-.2-.3-.3-.3-.5-.3h-.4c-.1 0-.4.1-.6.3-.2.2-.8.7-.8 1.6s.8 1.8.9 2c.1.1 1.6 2.5 3.9 3.4.5.2.9.3 1.2.4.5.2 1 .1 1.3.1.4 0 1.3-.5 1.4-1 .2-.5.2-1 .1-1z" />
                </svg>
                Chat via WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include 'layouts/footer.php' ?>