<?php
    require ('connectdb.php');
    require ('login_db_functions.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['login']) && $_POST['login'] == 'Log in') {
            $username = $_POST['username'];
            $password = $_POST['password'];
                
            if (logIn($username, $password)) {
                session_start();
                $_SESSION['username'] = $username;
                header("Location: home.php");
            }
            else {
                echo '<p style="color:red; position:absolute; top:550px; margin-left:25%;">The username or password does not exist. Please try again. </p>';
            }
        }
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Elliot Murdock">
    <meta name="description" content="Log in page for the GrocerEase app">
    <title>GrocerEase - Log in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

    <nav class="navbar bg-light topnav">
        <a href="login.php" class="navbar-brand"><img src="favicon.ico" class="icon"> GrocerEase </a>
    </nav>
    <div id="loginsection">
        <h1>Log in</h1>
        <br>
        <form name="mainForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                Username:
                <input type="text" class="form-control" name="username" required />
            </div>
            <div class="form-group">
                Password:
                <input type="password" class="form-control" name="password" required minlength="8" />
            </div>
            <br>
            <input type="submit" value="Log in" name="login" class="btn logoutbutton addbutton" />
        </form>
        <br>
        <br>
        <a href="signup.php"> New to GrocerEase? Click to sign up!</a>

    </div>
</body>

</html>