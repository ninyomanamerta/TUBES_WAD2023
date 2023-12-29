@extends('layouts.app')

@section('contents')
<main>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        /* Same CSS as the registration page for consistency */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 4px;
        }
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Login</h2>
        <form action="/submit-your-login-form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="psw">Password:</label>
            <input type="password" id="psw" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>

</main>
@endsection