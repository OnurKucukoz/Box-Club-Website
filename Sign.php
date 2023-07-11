<?php
session_start();
include_once("database.php");
$username = "";
$email    = "";
$errors = array();
$db = getConn();
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $hashedd = password_hash($password, PASSWORD_DEFAULT);
    $query = "SELECT * FROM users WHERE email='$email' ";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $row = mysqli_fetch_assoc($results);
        if (password_verify($password, $row['password'])) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $email;
            $_SESSION['success'] = $password;
            header("Location:home.php");
        } else {
            function_alert("Wrong username/password combination!");
        }
    } else {
        function_alert("There is no such user!");
    }
}

mysqli_close($db);

function function_alert($message)
{
    echo "<script>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center" style="background-color: #121212;">
    <form class="form-signin" action="Sign.php" method="post">
        <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
        <a class="navbar-brand" href="index.php">FIGHT<span style="color: red;">CLUB</span></a>

        <h1 class="h3 mb-3 font-weight-normal">Please login</h1>
        <label for="inputEmail" class="sr-only"></label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only"></label>

        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox mb-3">
            <!-- <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label> -->

            <p>Are you new? Register from <a href="signUp.php">here</a></p>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_user">Sign in</button>
        <!--<p class="mt-5 mb-3 text-muted">© 2017-2018</p>-->
    </form>


    <gdiv class="ginger-extension-writer" style="display: none;">
        <gdiv class="ginger-extension-writer-frame"><iframe src="chrome-extension://kdfieneakcjfaiglcfcgkidlkmlijjnh/writer/index.html"></iframe></gdiv>
    </gdiv>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>