<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cossette+Texte&family=Ramabhadra&display=swap');
    body{
        margin: 0;
        padding: 0;
        background-color: aliceblue;
        overflow-x: hidden;
    }

    *{
        box-sizing: border-box;
    }
    /* Custom Navbar Styles */
    .custom-navbar{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;

        background: rgba(255,255,255,0.49);
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

    .contact-section{
        padding-top: 150px;
        padding-bottom: 80px;
    }

    .title{
        font-size: 42px;
        color: black;
        font-family: "Ramabhadra", sans-serif;
        filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.3));
        animation: fade 0.5s ease;
    }

    .desc,
    .number,
    .address{
        font-family: "Cossette Texte", sans-serif;
        animation: fade 0.5s ease;
    }

    .number{
        font-size: 28px;
        font-weight: bold;
    }

    .contact-form{
        background: rgba(255,255,255,0.49);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0,0,0,0.1);
        backdrop-filter: blur(7px);
        -webkit-backdrop-filter: blur(7px);
        border: 1px solid rgba(255,255,255,0.3);

        padding: 30px;

        animation: latefade 1s ease;
    }
    /* Form Styles */
    .form-label{
        font-family: "Cossette Texte", sans-serif;
        color: black;
        filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.2));
    }

    .form-control{
        padding: 10px;
        border-radius: 8px;
    }

    .submit-btn{
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 5px;
        transition: 0.3s ease;
        width: 100%;
    }

    .submit-btn:hover{
        background-color: #45a049;
    }
    /* Footer Styles */
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
        /* Animations */
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
    /* Responsive Styles */
    @media(max-width: 768px){

        .navbar-brand{
            font-size: 24px;
        }

        .title{
            font-size: 32px;
            text-align: center;
        }

        .contact-info{
            text-align: center;
            margin-bottom: 40px;
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

        .title{
            font-size: 26px;
        }

        .contact-form{
            padding: 20px;
        }
    }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <!-- Navbar -->
        <div class="container">
            <a class="navbar-brand" href="#">PartyNeeds</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-lg-4 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index1.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index3.php" style="color: yellow !important;">
                            CONTACT US
                        </a>
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
        <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">

            <div class="row align-items-center g-5">
                <div class="col-lg-5 contact-info">
                    <h1 class="title mb-4">
                        Party Needs Contact Support
                    </h1>
                    <p class="desc"> Lorem ipsum dolor sit amet consectetur</p>
                    <p class="number">023034949</p>

                    <p class="address">Located at: Lorem ipsum dolor sit amet,consectetur adipisicing elit.</p>
                </div>
                <div class="col-lg-7">
                    <!-- Contact Form -->
                    <form class="contact-form">

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label for="name" class="form-label">Name: </label>

                                <input type="text" id="name" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="email" class="form-label">Email: </label>

                                <input type="email"  id="email" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">

                                <label for="contact" class="form-label">
                                    Contact:
                                </label>

                                <input type="tel" id="contact" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">

                                <label for="subject" class="form-label"> Subject:
                                </label>

                                <input type="text" id="subject" class="form-control" required>
                            </div>

                            <div class="col-12 mb-4">

                                <label for="help" class="form-label">
                                    How we can help you:
                                </label>

                                <textarea id="help"  rows="5" class="form-control"required></textarea>
                            </div>

                            <div class="col-12">
                                <!-- Submit Button -->
                                <button type="submit" class="submit-btn">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
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

                        <a href="https://facebook.com" class="social-icon">
                            f
                        </a>

                        <a href="https://twitter.com" class="social-icon">
                            𝕏
                        </a>

                        <a href="https://instagram.com" class="social-icon">
                            📷
                        </a>

                        <a href="https://linkedin.com" class="social-icon">
                            in
                        </a>

                    </div>

                </div>

            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; 2026 PartyNeeds. All rights reserved.</p>
            </div>

        </div>

    </footer>
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
    function goToLogin(){
        window.location.href = 'index.php';
    }

    </script>

</body>
</html>