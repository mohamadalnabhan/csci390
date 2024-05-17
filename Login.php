<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .form {
            width: 300px;
            margin: 80px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #10cab7;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 40px);
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: calc(100% - 40px);
            background-color: #10cab7;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #0da79e;
        }

        p {
            margin-top: 20px;
        }

        a {
            color: #10cab7;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
include "confing.php"
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<
</body>
</html>
