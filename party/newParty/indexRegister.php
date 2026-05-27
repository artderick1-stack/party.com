<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cossette+Texte&family=Ramabhadra&display=swap');
  /* Global Styles */
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    body{
      min-height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:20px;
      font-family:Arial, Helvetica, sans-serif;

      background:
      linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
      url('g.png') center/cover no-repeat;
    }
  /* Register Card */
    .register-card{
      width:min(420px, 95vw);

      background: rgba(255, 255, 255, 0.49);
      border-radius: 24px;
      box-shadow: 0 24px 60px rgba(15, 23, 42, 0.18);
      backdrop-filter: blur(7px);
      -webkit-backdrop-filter: blur(7px);
      border: 1px solid rgba(255, 255, 255, 0.3);

      padding:32px;
      animation:fadeIn 0.6s ease;
    }
/* Animation */
    @keyframes fadeIn{
      from{
        opacity:0;
        transform:translateY(20px);
      }
      to{
        opacity:1;
        transform:translateY(0);
      }
    }

    .register-card h1{
      text-align:center;
      margin-bottom:12px;

      color:white;
      font-size:2rem;

      font-family: "Ramabhadra", sans-serif;

      filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
    }

    .register-card .subtitle{
      text-align:center;
      margin-bottom:28px;
      color:white;
      font-size:0.95rem;
      font-family: "Cossette Texte", sans-serif;
      filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
    }

    /* Forms */
    .form-group{
      margin-bottom:18px;
    }

    .form-group label{
      display:block;
      margin-bottom:8px;

      color:white;
      font-size:0.95rem;

      font-family: "Cossette Texte", sans-serif;

      filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
    }

    .form-group input{
      width:100%;
      padding:12px 14px;

      border:1px solid #d1d5db;
      border-radius:12px;

      font-size:1rem;
      outline:none;

      transition:0.3s ease;
    }

    .form-group input:focus{
      border-color:#0ea5e9;
      box-shadow:0 0 0 4px rgba(14,165,233,0.12);
    }

    .show-password{
      margin-top:10px;

      display:flex;
      align-items:center;
      gap:8px;

      color:white;
      font-size:0.9rem;

      font-family: "Cossette Texte", sans-serif;

      filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
    }

    .show-password input{
      width:auto;
      cursor:pointer;
    }

    .signup-button{
      width:100%;
      padding:14px;

      border:none;
      border-radius:12px;

      background:#4f46e5;
      color:white;

      font-size:1rem;
      cursor:pointer;

      transition:0.3s ease;

      margin-top:10px;

      filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
    }

    .signup-button:hover{
      background:#4338ca;
      transform:translateY(-2px);
    }
    /* Footer */
    .footer-text{
      margin-top:20px;
      text-align:center;

      color:white;
      font-size:0.92rem;

      font-family: "Cossette Texte", sans-serif;

      filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
    }

    .footer-text a{
      color:#0ea5e9;
      text-decoration:none;
      font-weight:bold;
    }

    .footer-text a:hover{
      text-decoration:underline;
    }

    #error-message{
      text-align:center;
      color:#ffb4b4;
      margin-bottom:15px;
      min-height:18px;

      font-family: "Cossette Texte", sans-serif;
    }

    @media (max-width:480px){

      .register-card{
        padding:24px 20px;
      }

      .register-card h1{
        font-size:1.7rem;
      }

      .form-group input{
        padding:11px 12px;
        font-size:0.95rem;
      }

      .signup-button{
        padding:12px;
        font-size:0.95rem;
      }
    }

  </style>
</head>

<body>
  <!-- Register Card -->
  <div class="register-card">
    <h1>Sign Up</h1>
    <p class="subtitle">Sign up to continue to PartyNeeds.</p>

    <p id="error-message"></p>
    <!-- Forms -->
    <form id="form" action="add.php" method="post">

      <div class="form-group">
        <label for="username-input">Username</label>
        <input type="text" name="username"  id="username-input" placeholder="Enter username"required>
      </div>

      <div class="form-group">
        <label for="email-input">Email</label>
        <input type="email" name="email" id="email-input" placeholder="Enter email address" required>
      </div>

      <div class="form-group">
        <label for="phone-input">Phone Number</label>
        <input type="tel" name="number" id="phone-input" placeholder="Enter phone number" pattern="[0-9+\-() ]{7,}"required>
      </div>

      <div class="form-group">
        <label for="password-input">Password</label>
        <input type="password" name="password" id="password-input" placeholder="Enter password" required >
      
        <div class="show-password">
          <input type="checkbox" onclick="togglePassword()">
          <span>Show Password</span>
        </div>
      </div>
    <!-- Sign Up Button -->
      <button type="submit" name="signup" class="signup-button"> Sign Up</button>
    </form>
    <div class="footer-text">
      Already have an account?
      <a href="index.php">Login</a>
    </div>
  </div>
  <!-- Javascript -->
  <script>
    function togglePassword() {
      var x = document.getElementById("password-input");

      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>

</body>
</html>