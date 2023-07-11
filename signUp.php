<?php
include_once("database.php");
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signUp.css" rel="stylesheet">
</head>

<body class="text-center" style="background-color: #121212">
    <form class="form-signin" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
        <a class="navbar-brand" href="index.php">FIGHT<span style="color: red;">CLUB</span></a>
        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
        <label for="inputName" class="sr-only"></label>
        <input type="name" name="username" id="inputName" class="form-control" placeholder="Name" required="" autofocus="">
        <label for="inputSurname" class="sr-only"></label>
        <input type="Surname" name="surname" id="inputSurname" class="form-control" placeholder="Surname" required="" autofocus="">

        <label for="inputEmail" class="sr-only"></label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">


        <p>Already member? Login from <a href="Sign.php">here</a></p>

        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="register">Sign up</button>
        <!--<p class="mt-5 mb-3 text-muted">© 2017-2018</p> -->
    </form>


    <gdiv class="ginger-extension-writer" style="display: none;">
        <gdiv class="ginger-extension-writer-frame"><iframe src="chrome-extension://kdfieneakcjfaiglcfcgkidlkmlijjnh/writer/index.html"></iframe></gdiv>
    </gdiv>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $surname = filter_input(INPUT_POST, "surname", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, surname , email, password)
            VALUES ('$username','$surname','$email','$hash')";

    try {
        mysqli_query($conn, $sql);
        function_alert("Successfully registered!");
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
mysqli_close($conn);

function function_alert($message)
{
    echo "<script>alert('$message');</script>";
}
?>