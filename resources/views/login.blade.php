<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(to right, #007BFF, #00c6ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
          
        }

        .login-logo h2 {
            margin: 0 0 20px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
            margin-right: 30px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: blue;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #218838;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .additional-links {
            margin: 20px 0;
        }

        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }

            .form-group input {
                font-size: 14px;
            }

            .btn {
                font-size: 14px;
            }

            .login-logo h2 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <h2>Login</h2>
            </div>
            <div class="login-form">
                <form action="login" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Username/Email</label>
                        <input type="text" name="name" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="additional-links">
                        <a href="{{ url ('forgot-password')}}">Forgot Password?</a>
                        <br>
                        <span>If you don't have an account, you can <a href="{{ url ('register')}}">Register</a></span>
                    </div>
                    <button type="submit" class="btn">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
