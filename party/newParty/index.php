<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Cossette+Texte&family=Ramabhadra&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: "Cossette Texte", sans-serif;

    background:
    linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
    url('g.png') center/cover no-repeat;

    min-height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;

    padding: 20px;
}
.login-card{
    width: 100%;
    max-width: 420px;
    background: rgba(255,255,255,0.15);
    border-radius: 24px;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.25);
    box-shadow:0 8px 32px rgba(0,0,0,0.25);
    padding: 40px 32px;
    animation: fadeUp 0.8s ease;
}

@keyframes fadeUp{
    from{
        opacity: 0;
        transform: translateY(25px);
    }

    to{
        opacity: 1;
        transform: translateY(0);
    }
}

.login-card h1{
    text-align: center;

    color: white;

    font-size: 2rem;

    margin-bottom: 12px;

    font-family: "Ramabhadra", sans-serif;

    filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
}

.login-card p{
    text-align: center;

    color: white;

    margin-bottom: 28px;

    line-height: 1.6;

    filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
}

.form-group{
    margin-bottom: 20px;
}

.form-group label{
    display: block;

    margin-bottom: 8px;

    color: white;

    font-size: 15px;

    filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
}

.form-group input[type="text"],
.form-group input[type="password"]{
    width: 100%;

    padding: 14px 16px;

    border-radius: 14px;

    border: 1px solid rgba(255,255,255,0.2);

    background: rgba(255,255,255,0.2);

    color: white;

    font-size: 15px;

    outline: none;

    transition: 0.3s ease;
}

.form-group input::placeholder{
    color: rgba(255,255,255,0.8);
}

.form-group input:focus{
    border-color: #38bdf8;

    box-shadow:
    0 0 0 4px rgba(56,189,248,0.2);
}

.show-password{
    margin-top: 10px;

    display: flex;
    align-items: center;
    gap: 8px;

    color: white;

    font-size: 14px;
}

.show-password input{
    width: auto;
}

.login-button{
    width: 100%;

    padding: 14px;

    border: none;

    border-radius: 14px;

    background: #4f46e5;

    color: white;

    font-size: 16px;

    font-family: "Ramabhadra", sans-serif;

    cursor: pointer;

    transition: 0.3s ease;

    margin-top: 8px;
}

.login-button:hover{
    background: #4338ca;

    transform: translateY(-2px);
}

.footer-text{
    margin-top: 22px;

    text-align: center;

    color: white;

    font-size: 14px;

    filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
}

.footer-text a{
    color: #38bdf8;

    text-decoration: none;

    font-weight: bold;
}

.footer-text a:hover{
    text-decoration: underline;
}

@media (max-width: 768px){

.login-card{
    padding: 32px 24px;
}

.login-card h1{
    font-size: 1.8rem;
}

.login-card p{
    font-size: 14px;
}
}

@media (max-width: 480px){

body{
    padding: 15px;
}

.login-card{
    padding: 28px 20px;
    border-radius: 20px;
}

.login-card h1{
    font-size: 1.6rem;
}

.form-group label{
    font-size: 14px;
}

.form-group input{
    padding: 12px 14px;
    font-size: 14px;
}

.login-button{
    padding: 12px;
    font-size: 15px;
}

.footer-text{
    font-size: 13px;
}
}
    </style>
</head>
<body>
    <div class="login-card">
        <h1>Welcome Back</h1>
        <p>Sign in to continue to your account.</p>

        <form action="log.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="you123">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <div class="show-password">
                    <input type="checkbox" onclick="myclasa_nalang_ulit()">
                    <span>Show Password</span>
                </div>
            </div>
            <button type="submit" name="submit" class="login-button">Login</button>
        </form>
        <div class="footer-text">
            <span>Don't have an account? <a href="indexRegister.php">Sign up</a></span>
        </div>
    </div>
</body>
    <script>
        function myclasa_nalang_ulit() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</html>