<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style>
        /* Center the entire content vertically and horizontally */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('pimg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            font-family: sans-serif;
        }

        /* Transparent container */
        .login-container {
            background-color: rgba(255, 255, 255, 0.5); /* Transparent white */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        /* Center the input fields */

        /* Style for the login button */
        button {
            background-color: #0074D9; /* Change to blue color */
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        button:hover {
            background-color: #005689; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Welcome</h1>
        <div class="button">
        <a href="login.php" class="button"><button>Login</button></a>
         <h4>or</h4>
        <a href="registration.php" class="button"><button>Register</button></a>
        </div>
    </div>
</body>
</html>

