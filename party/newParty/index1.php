<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartyNeeds</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global Styles */
    @import url('https://fonts.googleapis.com/css2?family=Cossette+Texte&family=Ramabhadra&display=swap');
    body{
        margin: 0;
        padding: 0;
    }

    html, body{
        overflow-x: hidden;
    }

    *{
        box-sizing: border-box;
    }
    /* Background and Typography */
    .bg{
        background:
        linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url('g.png') center/cover no-repeat;
        height: 75vh;
        width: 100%;
        min-height: 500px;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 40px;
    }

    .custom-navbar{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 10;

        background: rgba(255, 255, 255, 0.49);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(7px);
        -webkit-backdrop-filter: blur(7px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .navbar-brand{
        font-family: "Cossette Texte", sans-serif;
        color: white !important;
        font-size: 32px;
        filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
    }

    .nav-link{
        color: white !important;
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

    .tagline{
        text-align: center;
    }

    .h2-custom{
        font-family: "Ramabhadra", sans-serif;
        font-size: 40px;
        color: white;
        margin: 0;
        animation: fade 0.5s ease;
    }
    
    .tagline p{
        font-family: "Cossette Texte", sans-serif;
        font-size: 18px;
        color: white;
        margin: 0;
        animation: fade 0.5s ease;
    }
/*Animation and Effects */
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

    @keyframes latefade{
        from{
            opacity: 0;
            transform: translateY(20px);
        }
        to{
            opacity: 1;
            transform: translateY(0);
        }
    }
    .search-bar{
        background-color: white;
        filter: drop-shadow(5px 5px 10px #555);
        border-radius: 50px;
        padding: 8px 14px;
        width: 500px;
        max-width: 500px;
        animation: latefade 1s ease;
    }

    .search-bar input{
        border: none !important;
        box-shadow: none !important;
        border-radius: 999px;
    }

    .search-btn{
        border-radius: 999px;
        background-color: #333;
        color: white;
        border: none;
        padding: 10px 16px;
    }

    .search-btn:hover{
        background-color: #555;
    }

    .title-service{
        margin-top: 100px;
        text-align: center;

        opacity: 0;
        transform: translateY(50px);
        transition: opacity 1s ease, transform 1s ease;
    }

    .title-service.appear{
        opacity: 1;
        transform: translateY(0);
    }

    .our-services{
        font-family: "Ramabhadra", sans-serif;
        font-size: 40px;
    }

    .services{
        margin-top: 80px;

        opacity: 0;
        transform: translateY(50px);
        transition: opacity 1s ease, transform 1s ease;
    }

    .services.appear{
        opacity: 1;
        transform: translateY(0);
    }

    .service-item{
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);

        transition: 0.3s ease;
        cursor: pointer;

        height: 100%;
    }

    .service-item:hover{
        transform: translateY(-5px);
        filter: drop-shadow(5px 5px 10px #555);
    }
    /* Service Card Styles */
    .card-img{
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .service-content{
        padding: 24px;
    }

    .service-content h3{
        font-family: "Ramabhadra", sans-serif;
        font-size: 24px;
    }
    /* Description Styles */
    .desc{
        color: black;
        text-align: justify;
        line-height: 1.6;
        font-size: 16px;
    }
    /* Footer Styles */
    footer{
        background-color: #333;
        color: white;
        padding: 60px 20px 20px;
        margin-top: 100px;
    }

    .footer-section h3{
        font-family: "Ramabhadra", sans-serif;
        margin-bottom: 15px;
    }

    .footer-section p,
    .footer-section a{
        font-family: "Ramabhadra", sans-serif;
        color: #ddd;
        text-decoration: none;
        font-size: 14px;
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

        border-radius: 50%;
        background-color: #555;
        color: white !important;

        transition: 0.3s ease;
    }

    .social-icon:hover{
        background-color: #777;
    }

    .footer-bottom{
        border-top: 1px solid #555;
        margin-top: 30px;
        padding-top: 20px;
        text-align: center;
        color: #999;
        font-family: "Ramabhadra", sans-serif;
    }
/*Responsive Styles */
    @media(max-width: 768px){

        .navbar-brand{
            font-size: 24px;
        }

        .h2-custom{
            font-size: 30px;
        }

        .search-bar{
            width: 100%;
            max-width: 350px;
        }

        .our-services{
            font-size: 30px;
        }

        .social-media{
            justify-content: center;
        }

        .footer-section{
            text-align: center;
        }
    }

    @media(max-width: 480px){

        .h2-custom{
            font-size: 24px;
        }

        .our-services{
            font-size: 24px;
        }

        .search-bar{
            width: 95%;
        }

        .search-btn{
            font-size: 12px;
        }
    }
    </style>
</head>

<body>
    <!-- Layout Container -->
    <nav class="navbar navbar-expand-lg custom-navbar">
         <!-- Navbar -->
        <div class="container">
            <a class="navbar-brand" href="#">PartyNeeds</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <!-- Links -->
                <ul class="navbar-nav gap-lg-4 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="color: yellow !important;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php">ABOUT US</a>
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
            <button class="log-btn d-none d-lg-block" onclick="goToLogin()">Login
            </button>

        </div>
    </nav>
     <!-- Main Content -->
    <section class="bg">
        <div class="tagline">
            <h2 class="h2-custom">Placeholder</h2>
            <p>Welcome to PartyNeeds!</p>
        </div>
        <!-- Search Bar -->
        <div class="container d-flex justify-content-center">
            <form class="search-bar d-flex align-items-center gap-2" action="#" method="get">
                <input type="search" name="q" class="form-control" placeholder="Search party rents...">
                <button type="submit" class="search-btn">Search</button>
            </form>
        </div>

    </section>
            <!-- Our Services -->
    <div class="title-service">
        <h2 class="our-services">Our Services</h2>
    </div>

    <section class="services container">
        <div class="row justify-content-center g-4">
            <div class="col-lg-4 col-md-6">
                <!-- Tent Rental -->
                <div class="service-item">
                    <img class="card-img" src="tent.png" alt="Tent Rental">
                    <div class="service-content">
                        <h3>Tent Rental</h3>
                        <p class="desc">
                            A portable shelter used for outdoor events,
                            providing shade and protection from weather
                            conditions.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Chair Rental -->
            <div class="col-lg-4 col-md-6">

                <div class="service-item">

                    <img class="card-img" src="chairs.png" alt="Chair Rental">

                    <div class="service-content">
                        <h3>Chair Rental</h3>

                        <p class="desc">
                            Seating furniture designed to provide comfort
                            and support for guests during gatherings or
                            activities.
                        </p>
                    </div>

                </div>

            </div>
                <!-- Videoke Rental -->
            <div class="col-lg-4 col-md-6">

                <div class="service-item">

                    <img class="card-img" src="videoke.png" alt="Videoke Rental">

                    <div class="service-content">
                        <h3>Videoke Rental</h3>

                        <p class="desc">
                            An entertainment system that allows users to
                            sing along to music with lyrics displayed on a
                            screen.
                        </p>
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
                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6 footer-section">
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

    const fadeElement1 = document.querySelectorAll('.services');
    const fadeElement2 = document.querySelectorAll('.title-service');

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if(entry.isIntersecting){
                entry.target.classList.add('appear');
            }

        });

    });

    fadeElement1.forEach(el => observer.observe(el));
    fadeElement2.forEach(el => observer.observe(el));

    function goToLogin(){
        window.location.href = 'index.php';
    }

    </script>

</body>
</html>