<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <style>
    /* background merah penuh */
    body {
      background-color: #d32f2f; /* merah */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* kotak login */
    .login-container {
      background-color: #f1f1f1; /* abu muda */
      padding: 40px 30px;
      border-radius: 15px 15px 60px 15px; /* sudut unik */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      width: 320px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #000;
    }

    /* label */
    .login-container label {
      display: block;
      text-align: left;
      margin-bottom: 5px;
      font-size: 14px;
      color: #000;
    }

    /* input */
    .login-container input {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 20px;
      box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1) inset;
      font-size: 14px;
    }

    /* tombol login */
    .login-container button {
      width: 100%;
      padding: 12px;
      background-color: #d32f2f; /* merah */
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      box-shadow: 0 4px 4px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s ease;
    }

    .login-container button:hover {
      background-color: #b71c1c; /* lebih gelap saat hover */
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    {{-- csrf protection --}}
    @if ($errors->any())
  <div style="color:red;">{{ $errors->first() }}</div>
@endif
    <form action="{{ route("login.process") }}" method="POST">
      @csrf 
      <label for="email">Email</label>
      <input type="username" id="email" name="username" placeholder="Email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Password" required>

      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
