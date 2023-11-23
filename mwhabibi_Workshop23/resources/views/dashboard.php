<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>mwhabibi_</title>
</head>

<body id="home">
    <header>
        <!-- NAVBAR -->
        <section class="navbar">
            <div class="container">
                <div class="box-navbar animate__animated animate__fadeInDown">
                    <div class="box">
                        <h1 style="color: rgb(101, 136, 100);">_HELLO</h1>
                        <h1 style="color: rgb(238, 238, 238);">WORLD.</h1>
                    </div>
                    <div class="box menu-navbar">
                        <ul>
                            <li>
                                <i class="ri-home-3-line"></i>
                                <a href="#home">Home</a>
                            </li>
                            <li>
                                <i class="ri-information-line"></i>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <i class="ri-gallery-line"></i>
                                <a href="#gallery">Gallery</a>
                            </li>
                        </ul>
                    </div>
                    <div class="box menu-bar">
                        <i class="ri-menu-3-fill" style="color: rgba(255, 255, 255, 0.719);"></i>
                    </div>
                </div>
            </div>
        </section>
        <!-- NAVBAR END -->

        <!-- HERO -->
        <section class="hero">
            <h1 class="animate__animated animate__bounceIn">MOHAMMAD WALID HABIBI</h1>
            <div class="ghost">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </section>
        <!-- HERO END -->
    </header>

    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="container">
            <div class="box-about">
                <div class="box" data-aos="fade-right" data-aos-duration="1000">
                    <h1>Hello World</h1>
                    <p>I am a man with the name Mohammad Walid Habibi. I am form Ponorogo, The East Java of Indonesia, And i was born on July 10, 2004. I entered the IT world quite late in the 2019-2020 range, around that year I had just entered Vocational High School majoring in Computer & Network Engineering. This is my first Landing Page, That's all, Thank you.</p>
                </div>
                <div class="box" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="famous3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT END -->

    <!-- FAMOUS -->
    <section class="famous" id="famous">
        <div class="container">
            <div class="card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                <div class="percent" style="--clr:orange; --num:70;">
                    <div class="dot"></div>
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
                    </svg>
                    <div class="number">
                        <h2>70<span>%</span></h2>
                        <p>HTML</p>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <div class="percent" style="--clr:rgb(82, 95, 225); --num:49;">
                    <div class="dot"></div>
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
                    </svg>
                    <div class="number">
                        <h2>50<span>%</span></h2>
                        <p>CSS</p>
                    </div>
                </div>
    </section>
    <!-- FAMOUS END -->

    <!-- GALLERY -->
    <section class="gallery" id="gallery">
        <div class="container">
            <div class="box-gallery">
                <img src="famous1.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                <img src="famous2.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <img src="img.about1.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                <img src="famous5.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                <!-- <img src="./image/famous5.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600"> -->
            </div>
        </div>
    </section>
    <!-- GALLERY END -->

    <!-- CONTACT -->

    <!-- CONTACT END -->

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2022 by MWhabibi</p>
    </footer>
    <!-- FOOTER END -->

    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>