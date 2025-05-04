
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ISAT U CLINIC</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      height: 100vh;
      background: url('img/background.png') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-card {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      width: 90%; /* Changed from fixed 300px to percentage */
      max-width: 400px;
      text-align: center;
      margin: auto; /* Center it horizontally */
    }

    @media (max-width: 480px) {
      .login-card {
        padding: 20px;
        width: 95%;
      }
    }

    .login-card h2 {
      color: #095d7e;
      margin-bottom: 24px;
    }

    .login-card input {
      width: 70%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    .login-card button {
      width: 70%;
      padding: 12px;
      background-color: #00b4db;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      margin-top: 12px;
      transition: background 0.3s ease;
    }

    .login-card button:hover {
      background-color: #009bb8;
    }

    .login-card a {
      display: block;
      margin-top: 16px;
      color: #095d7e;
      text-decoration: none;
    }

    .login-card a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h2>Clinic Login</h2>
    <form action="index.php" method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
      <a href="welcome.php">← Back to Portal</a>
    </form>
  </div>
  
</body>
</html>