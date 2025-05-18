<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UPUCC</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/1.png" type="image/png">
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
    

    <!-- NAVBAR SUBSECTION -->
    <nav class="sub-navbar">
    <ul>
        <li><a href="#knowledge">Knowledge Technology</a></li>
        <li><a href="#multimedia">Multimedia</a></li>
        <li><a href="#security">Network Security</a></li>
        <li><a href="#programming">Programming</a></li>
    </ul>
</nav>

<!-- KATEGORI SECTION -->
<section class="categories">
    <div class="category-item" id="knowledge">
        <div class="text">
            <h2>KNOWLEDGE TECHNOLOGY</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime maiores odit laborum pariatur voluptatibus libero doloribus a hic. Deleniti, obcaecati! Error odio adipisci iste, vitae ad ex nemo maiores suscipit harum saepe perferendis aliquid ab similique quasi ratione aliquam itaque consectetur porro numquam incidunt assumenda, libero excepturi! Corrupti, voluptatum quos.</p>
            <a href="#" class="btn-small">Selengkapnya</a>
        </div>
        <div class="image">
            <img src="{{ asset('images/6.png') }}" alt="Robot">
        </div>
    </div>

    <div class="category-item reverse" id="multimedia">
        <div class="image">
            <img src="{{ asset('images/5.png') }}" alt="Multimedia">
        </div>
        <div class="text">
            <h2>MULTIMEDIA</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime maiores odit laborum pariatur voluptatibus libero doloribus a hic. Deleniti, obcaecati! Error odio adipisci iste, vitae ad ex nemo maiores suscipit harum saepe perferendis aliquid ab similique quasi ratione aliquam itaque consectetur porro numquam incidunt assumenda, libero excepturi! Corrupti, voluptatum quos.</p>
            <a href="#" class="btn-small">Selengkapnya</a>
        </div>
    </div>

    <div class="category-item" id="security">
        <div class="text">
            <h2>NETWORK SECURITY</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime maiores odit laborum pariatur voluptatibus libero doloribus a hic. Deleniti, obcaecati! Error odio adipisci iste, vitae ad ex nemo maiores suscipit harum saepe perferendis aliquid ab similique quasi ratione aliquam itaque consectetur porro numquam incidunt assumenda, libero excepturi! Corrupti, voluptatum quos.</p>
            <a href="#" class="btn-small">Selengkapnya</a>
        </div>
        <div class="image">
            <img src="{{ asset('images/4.png') }}" alt="Security">
        </div>
    </div>

    <div class="category-item reverse" id="programming">
        <div class="image">
            <img src="{{ asset('images/3.png') }}" alt="Programming">
        </div>
        <div class="text">
            <h2>PROGRAMMING</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime maiores odit laborum pariatur voluptatibus libero doloribus a hic. Deleniti, obcaecati! Error odio adipisci iste, vitae ad ex nemo maiores suscipit harum saepe perferendis aliquid ab similique quasi ratione aliquam itaque consectetur porro numquam incidunt assumenda, libero excepturi! Corrupti, voluptatum quos.</p>
            <a href="#" class="btn-small">Selengkapnya</a>
        </div>
    </div>
</section>

<section id="struktur" class="leadership-section">
    <h2>STRUKTUR KEPEMIMPINAN</h2>
        <p>Universitas Potensi Utama<br>Computer Club</p>

    <div class="carousel-container">
        <button class="carousel-btn left" onclick="scrollCarousel('left')">&#10094;</button>

    <div class="carousel" id="leadershipCarousel">
        <div class="member">
        <div class="photo" style="background-image: url('{{ asset('images/1.png') }}'); background-size: cover;"></div>
        <p>KETUA UMUM</p>
    </div>
        <div class="member">
        <div class="photo" style="background-image: url('{{ asset('images/1.png') }}'); background-size: cover;"></div>
        <p>WAKIL KETUA</p>
    </div>
    <div class="member">
        <div class="photo" style="background-image: url('{{ asset('images/1.png') }}'); background-size: cover;"></div>
        <p>KADIV</p>
    </div>
        <div class="member">
        <div class="photo" style="background-image: url('{{ asset('images/1.png') }}'); background-size: cover;"></div>
        <p>WAKADIV</p>
    </div>
    <!-- Tambah lagi kalau ada -->
    </div>

        <button class="carousel-btn right" onclick="scrollCarousel('right')">&#10095;</button>
    </div>
</section>


</body>
</html>
