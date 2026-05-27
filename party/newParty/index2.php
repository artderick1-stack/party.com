<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cossette+Texte&family=Ramabhadra&display=swap');
    body{
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }
    *{
        box-sizing: border-box;
    }
    .custom-navbar{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;

        background: rgba(255, 255, 255, 0.49);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0,0,0,0.1);
        backdrop-filter: blur(7px);
        -webkit-backdrop-filter: blur(7px);
        border: 1px solid rgba(255,255,255,0.3);
    }

    .navbar-brand{
        font-family: "Cossette Texte", sans-serif;
        color: black !important;
        font-size: 32px;
        filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
    }

    .nav-link{
        color: black !important;
        font-family: "Cossette Texte", sans-serif;
        font-size: 18px;
        transition: 0.3s ease;
    }

    .nav-link:hover{
        color: yellow !important;
    }

    .log-btn{
        border-radius: 5px;
        border: none;
        background-color: gray;
        color: white;
        font-size: 18px;
        padding: 10px 20px;
        transition: 0.3s ease;
    }

    .log-btn:hover{
        background-color: rgb(42, 41, 41);
    }

    /* ABOUT SECTION */

    .container-about{
        background-color: aliceblue;
        padding-top: 130px;
        padding-bottom: 80px;
    }

    .about-title{
        text-align: center;
        font-family: "Ramabhadra", sans-serif;
        font-weight: 800;
        animation: fade 0.5s ease;
    }

    .img-about{
        width: 100%;
        max-width: 400px;
        border-radius: 10px;
        filter: drop-shadow(3px 3px 2px #555);
        transition: 0.3s ease;
        cursor: pointer;
        animation: fadeIn 0.5s ease-in-out;
    }

    .img-about:hover{
        transform: scale(1.05);
        filter: drop-shadow(5px 5px 10px #555);
    }

    .description{
        font-family: "Cossette Texte", sans-serif;
        font-size: 15px;
        text-align: justify;
        line-height: 1.8;
        animation: fadeInR 0.5s ease-in-out;
    }

    /* TEAM SECTION */

    .container-caro{
        background-color: wheat;
        padding: 100px 0;
    }

    .dev-section{
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 1s ease, transform 1s ease;
    }

    .dev-section.appear{
        opacity: 1;
        transform: translateY(0);
    }

    .devIT{
        font-size: 35px;
        font-family: "Ramabhadra", sans-serif;
        font-weight: 800;
    }

    .devdesc{
        font-family: "Cossette Texte", sans-serif;
        font-size: 15px;
        text-align: justify;
        line-height: 1.8;
    }
    .carousel-wrapper{
        overflow: hidden;
        width: 100%;
        max-width: 550px;
        margin: auto;

        opacity: 0;
        transform: translateY(50px);
        transition: opacity 1s ease, transform 1s ease;
    }
    .carousel-wrapper.appear{
        opacity: 1;
        transform: translateY(0);
    }
    .carousel-track{
        display: flex;
        gap: 20px;
        transition: transform 0.5s linear;
    }
    .team-card{
        min-width: 100%;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        transition: 0.3s ease;
    }

    .team-card:hover{
        transform: translateY(-5px);
    }

    .devs{
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .card-content{
        padding: 20px;
    }

    .card-title-custom{
        font-size: 22px;
        font-family: "Ramabhadra", sans-serif;
        margin-bottom: 10px;
    }

    .card-text-custom{
        font-size: 14px;
        font-family: "Cossette Texte", sans-serif;
        color: #666;
    }

    /* Footer */

    footer{
        background-color: #333;
        color: white;
        padding: 60px 20px 20px;
    }

    .footer-section h3{
        font-size: 20px;
        font-family: "Ramabhadra", sans-serif;
        margin-bottom: 15px;
        color: white;
    }

    .footer-section p,
    .footer-section a{
        color: #ddd;
        text-decoration: none;
        font-size: 14px;
        font-family: "Ramabhadra", sans-serif;
    }

    .footer-section a:hover{
        color: white;
    }

    .social-media{
        display: flex;
        gap: 15px;
    }

    .social-icon{
        display: flex;
        align-items: center;
        justify-content: center;

        width: 40px;
        height: 40px;

        background-color: #555;
        color: white !important;
        border-radius: 50%;

        transition: 0.3s ease;
    }

    .social-icon:hover{
        background-color: #777;
    }

    .footer-bottom{
        text-align: center;
        border-top: 1px solid #555;
        margin-top: 30px;
        padding-top: 20px;
        color: #999;
        font-size: 14px;
        font-family: "Ramabhadra", sans-serif;
    }
    @keyframes fade{
        from{
            opacity: 0;
            transform: translateY(20px);
        }
        to{
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn{
        from{
            opacity: 0;
            transform: translateY(20px);
        }
        to{
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInR{
        from{
            opacity: 0;
            transform: translateX(20px);
        }
        to{
            opacity: 1;
            transform: translateX(0);
        }
    }
    @media(max-width: 768px){

        .navbar-brand{
            font-size: 24px;
        }

        .container-about{
            text-align: center;
        }

        .description{
            text-align: center;
            margin-top: 20px;
        }

        .dev-section{
            text-align: center;
            margin-bottom: 40px;
        }

        .devdesc{
            text-align: center;
        }

        .social-media{
            justify-content: center;
        }

        .footer-section{
            text-align: center;
        }
    }

    @media(max-width: 480px){

        .navbar-brand{
            font-size: 20px;
        }

        .devIT{
            font-size: 28px;
        }

        .carousel-wrapper{
            max-width: 280px;
        }

        .devs{
            height: 180px;
        }
    }

    </style>
</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">

            <a class="navbar-brand" href="#">PartyNeeds</a>

            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

                <ul class="navbar-nav gap-lg-4 text-center">
                    <!-- Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="index1.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php" style="color: yellow !important;">
                            ABOUT US
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index3.php">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index4.php">RENT</a>
                    </li>
                </ul>
            </div>
                <!-- Login Button -->
            <button class="log-btn d-none d-lg-block" onclick="goToLogin()">Login</button>

        </div>
    </nav>
    <!-- About Us Section -->
    <section class="container-about">
        <div class="container">
            <h1 class="about-title mb-5">About Us</h1>
            <div class="row align-items-center g-5">
                <div class="col-lg-5 text-center">
                    <img src="about-img.png" alt="About Image" class="img-about img-fluid">
                </div>
                <div class="col-lg-7">
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Carousel -->
    <section class="container-caro">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="dev-section">
                        <h1 class="devIT">Meet the Team</h1>
                        <p class="devdesc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="carousel-wrapper">
                        <div class="carousel-track">
                            <div class="team-card">
                                <img class="devs" src="person-icon.png" alt="Dev 1">
                                <!-- Team Member Info Cards  -->
                                <div class="card-content">
                                    <h3 class="card-title-custom">Dev 1</h3>
                                    <p class="card-text-custom">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                             <!-- Team Member Info Cards  -->
                            <div class="team-card">
                                <img class="devs" src="person-icon.png" alt="Dev 2">
                                <div class="card-content">
                                    <h3 class="card-title-custom">Dev 2</h3>
                                    <p class="card-text-custom">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>

                            </div>
                                 <!-- Team Member Info Cards  -->
                            <div class="team-card">
                                <img class="devs" src="person-icon.png" alt="Dev 3">
                                <div class="card-content">
                                    <h3 class="card-title-custom">Dev 3</h3>
                                    <p class="card-text-custom">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>

                            </div>
                                 <!-- Team Member Info Cards  -->
                            <div class="team-card">
                                <img class="devs" src="person-icon.png" alt="Dev 4">
                                <div class="card-content">
                                    <h3 class="card-title-custom">Dev 4</h3>
                                    <p class="card-text-custom">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Footer -->
    <footer>

        <div class="container">

            <div class="row g-5">

                <div class="col-lg-3 col-md-6 footer-section">

                    <h3>About PartyNeeds</h3>

                    <p>
                        Your one-stop shop for all party rental needs.
                        We provide high-quality equipment and services
                        to make your events unforgettable.
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 footer-section">
                    <!-- Quick Links -->
                    <h3>Quick Links</h3>

                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index2.html">About Us</a></li>
                        <li><a href="index3.html">Contact Us</a></li>
                        <li><a href="index4.html">Rent</a></li>
                    </ul>

                </div>
                    <!-- Contact Info -->
                <div class="col-lg-3 col-md-6 footer-section">

                    <h3>Contact Info</h3>

                    <p>Email: gmail@partyneeds.com</p>
                    <p>Phone: 09696969676767</p>
                    <p>Address: Langkiwa Binan Laguna</p>

                </div>
                    <!-- Social Media -->
                <div class="col-lg-3 col-md-6 footer-section">

                    <h3>Follow Us</h3>

                    <div class="social-media">
                        <a href="https://facebook.com" class="social-icon">f</a>
                        <a href="https://twitter.com" class="social-icon">𝕏</a>
                        <a href="https://instagram.com" class="social-icon">📷</a>
                        <a href="https://linkedin.com" class="social-icon">in</a>
                    </div>

                </div>

            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 PartyNeeds. All rights reserved.</p>
            </div>

        </div>

    </footer>
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script>

    const fadeElement1 = document.querySelectorAll('.dev-section');
    const fadeElement2 = document.querySelectorAll('.carousel-wrapper');

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if(entry.isIntersecting){
                entry.target.classList.add('appear');
            }

        });

    });

    fadeElement1.forEach(el => observer.observe(el));
    fadeElement2.forEach(el => observer.observe(el));


    const track = document.querySelector(".carousel-track");
    const cards = document.querySelectorAll(".team-card");

    let i = 0;

    setInterval(() => {

        i++;

        if(i >= cards.length){
            i = 0;
        }

        track.style.transform = `translateX(-${i * 103}%)`;

    }, 2000);

    function goToLogin(){
        window.location.href = 'index.php';
    }

    </script>

</body>
</html>