<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="validation.js" defer></script>
  <style>
    html,body{
      height:100%;
    }
    body{
      display:flex;
      align-items:center;
      justify-content:center;
      margin:0;
      font-family:Arial,Helvetica,sans-serif;
      background:#f5f7fa
    }
    .wrapper{
      width:360px;
      background:#fff;
      padding:24px;
      border-radius:8px;
      box-shadow:0 8px 24px rgba(20,30,60,.08);
      text-align:left
    }
    .wrapper h1{
      margin:0 0 12px;
      font-size:22px;
      text-align:center
    }
    form div{
      display:flex;
      align-items:center;
      gap:10px;
      margin:10px 0
    }
    form label{width:36px;
    height:36px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#6b7280
  }
    form input{
      flex:1;padding:10px;
      border:1px solid #e5e7eb;
      border-radius:6px;
      font-size:14px
    }
    button[type=submit]{
      width:100%;
      padding:10px;
      margin-top:8px;
      border:0;
      background:#2563eb;
      color:#fff;border-radius:6px;
      font-weight:600;
      cursor:pointer
    }
    p{font-size:14px;
    color:#374151;
    text-align:center;
}
    #error-message{
      color:#b91c1c;
    text-align:center;
    min-height:18px;
  }
  </style>
</head>
<body>
  <div class="wrapper">
    <h1>Signup</h1>
    <p id="error-message"></p>
    <form id="form" action="add.php" method="post">
      <div>
        <label for="username-input">
          <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z"/></svg>
        </label>
        <input type="text" name="username" id="username-input" placeholder="Username" required>
      </div>
      <div>
        <label for="email-input">
          <span>@</span>
        </label>
        <input type="email" name="email" id="email-input" placeholder="Email address" required>
      </div>
      <div>
        <label for="phone-input">
          <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20"><path d="M686-146 556-276q-18-18-41-23t-47 5q-44 17-96 17-35 0-63.5-10T185-119q-35-12-60-37t-37-60Q66-296 66-343q0-52 17-95t17-47l119-119q12-12 29-14t30 6l92 46q16 8 26.5 22.5T468-552l-45 45q-10 10-11 24t5 26l51 126q12 31 34 53l126 51q14 5 26 5t24-11l45-45q14 14 22.5 26.5T850-311l46 92q10 17 6 30t-14 29L686-146Z"/></svg>
        </label>
        <input type="tel" name="number" id="phone-input" placeholder="Phone number" pattern="[0-9+\-() ]{7,}" required>
      </div>
        <div>
        <label for="password-input">
          <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z"/></svg>
        </label>
        <input type="password" name="password" id="password-input" placeholder="Password" required>
        <input type="checkbox" onclick="myclasa()">Show Password
      </div>
      <button type="submit" name="signup">Signup</button>
    </form>
    <p>Already have an Account? <a href="indexLogin.php">login</a> </p>
  </div>
</body>
  <script>
    function myclasa() {
      var x = document.getElementById("password-input");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
</html>