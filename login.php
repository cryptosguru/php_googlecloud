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
        <h1>Log in</h1>
        <br>
        <form name="mainForm" action="" method="post">
            <div class="form-group">
                Username:
                <input type="text" class="form-control" name="password" required />
            </div>
            <div class="form-group">
                Password:
                <input type="password" class="form-control" name="year" required max="4" min="1" />
            </div>
            <br>
            <a href="home.php" class="btn logoutbutton addbutton"> Log in </a>
            <!-- <input id="loginbutton" type="submit" value="Log in" name="action" class="btn addbutton"
                title="Insert a friend into a friends table" /> -->
        </form>
    </div>
</body>

</html>