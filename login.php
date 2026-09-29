<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email == "admin@gmail.com" && $password == "12345") {

        header("Location: index.php");
        exit();

    } else {

        $error = "Invalid email or password";

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - ForeverYNG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">

    <div class="login-box">

        <h2>Welcome to ForeverYNG</h2>

        <p>Sign in to your account</p>

        <form action="#" method="POST">

            <div class="mb-3">

                <label class="form-label">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter your email"
                    required
                >

            </div>


            <div class="mb-3">

                <label class="form-label">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter your password"
                    required
                >

            </div>


            <button type="submit"
                    class="btn login-btn">
                Sign In
            </button>

        </form>

        <p class="register-text">
            Don't have an account?
            <a href="#">Create Account</a>
        </p>

    </div>

</div>

</body>

</html>