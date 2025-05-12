<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UPUCC Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="hero">
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('images/1.png') }}" alt="UPUCC Logo">
                <span>UPUCC</span>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="hero-content">
            <div class="hero-text">
                <h1>UNIVERSITAS POTENSI UTAMA<br>COMPUTER CLUB</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore alias quidem quasi qui ea blanditiis voluptatibus impedit facilis minima, assumenda ut, architecto ipsa iusto excepturi ratione cupiditate obcaecati officia sed nam laudantium exercitationem. Cumque a, repudiandae, tenetur sint repellat quis vero voluptatum ipsa praesentium maxime culpa nobis quam sapiente dolores labore aliquid assumenda temporibus mollitia numquam odio cupiditate explicabo debitis? (isi konten bisa disesuaikan)</p>
            </div>
            <div class="hero-image">
                <!-- <img src="{{ asset('images/polygon.png') }}" alt="shadow"> -->
                <img src="{{ asset('images/7.png') }}" alt="Ilustrasi Laptop">

            </div>
        </div>
    </header>
</body>
</html>
