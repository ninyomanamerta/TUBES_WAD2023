@extends('layouts.app')

@section('contents')
<main>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }

        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #e6e6e6;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
        }

        .login-title {
            margin-bottom: 20px;
            text-align: center;
        }

        .login-button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .login-button:hover {
            background-color: #45a049;
        }

        .signup-link {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="login-title">Login</h2>
        <form>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <div class="signup-link">
            <p>Don't have an account? <a href="register.html">Sign Up</a></p>
        </div>
    </div>
</body>
</html>
</main>
@endsection