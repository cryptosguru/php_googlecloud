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
    <link rel="icon" href="favicon.ico">
</head>

<body>

    <nav class="navbar bg-light topnav">
        <a href="login.php" class="navbar-brand"><img src="favicon.ico" class="icon"> GrocerEase </a>
    </nav>
    <div id="loginsection">
        <h1>Sign up</h1>
        <br>
        <form name="mainForm" action="" method="post">
            <div class="form-group">
                Create a username:
                <input type="text" class="form-control" name="username" required />
            </div>
            <div class="form-group">
                Create a password (8 characters minimum):
                <input type="password" class="form-control" name="password" required minlength="8" />
            </div>
            <br>
            <!-- <a href="home.php" class="btn logoutbutton addbutton"> Sign up </a> -->
            <input id="loginbutton" type="submit" value="Sign up" name="action" class="btn logoutbutton addbutton"
                title="Insert a friend into a friends table" />
        </form>
        <br>
        <br>
        <a href="login.php"> Already a member? Click here to log in!</a>

    </div>
</body>

</html>