<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 40px;
      width: 350px;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 20px 0;
      border-radius: 4px;
      border: 1px solid #ddd;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
      outline: none;
      border-color: #3498db;
    }

    .btn {
      padding: 15px 20px;
      border: none;
      border-radius: 4px;
      background-color: #3498db;
      color: white;
      cursor: pointer;
      width: 100%;
    }

    .btn:hover {
      background-color: #2980b9;
    }

    
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form action="/menu">
      <label for="email">EMAIL</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="password">PASSWORD</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

      <button type="submit" class="btn">SIGN IN</button>
    </form>

  </div>
</body>
</html>