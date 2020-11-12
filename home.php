<?php
require ('connectdb.php');
require ('home_db_functions.php');

session_start();

if(!isset($_SESSION['username'])) {
     header("Location: login.php");
    //header("Location:http://example.com/login.php"); Change for Google Cloud
}
//session has started sucessfully
else { 
    $items = getAllitems();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['logout']) && $_POST['logout'] == 'Log out') {
            session_destroy();
            header("Location: login.php");
        }

    // if (!empty($_POST['action']) && $_POST['action'] == 'Add') {
    //   additem($_POST['name'], $_POST['major'], $_POST['year']);
    //   $items = getAllitems();
    // }
    // elseif (!empty($_POST['action']) && $_POST['add_shopping_list'] == 'Add') {
    //   addItemToShoppingList($name, $major, $year)
    // }

        elseif (!empty($_POST['addItem']) && ($_POST['addItem'] == 'Add item to All Foods')) {      
            $itemnameinput = $_POST['itemnameinput']; 
            $itemcategoryinput = $_POST['itemcategoryinput'];  
            
            if (addItemToAllFoods($itemnameinput, $itemcategoryinput)) {
                $items = getAllItems();    
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
    <meta name="description" content="Home page for the GrocerEase app">
    <title>GrocerEase - Know your foods</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <nav class="navbar bg-light topnav">
        <a href="home.php" class="navbar-brand"><img src="logowide.png" height="35" /></a>

        <form class="form-inline" name="logoutForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <span class="navbar-text" id="usernamedisplay">
                Welcome <?php echo $_SESSION['username'] ?>
            </span>
            <span>
                <input id="logoutbutton" type="submit" value="Log out" name="logout"
                    class="btn logoutbutton addbutton" />
            </span>
        </form>
    </nav>
    <div class="w3-sidebar w3-bar-block" id="sidebar">
        <a href="home.php" class="w3-bar-item w3-button active">All Foods</a>
        <a href="" class="w3-bar-item w3-button sidenavbutton">My Inventory</a>
        <a href="" class="w3-bar-item w3-button sidenavbutton">My Shopping List</a>
    </div>
    <div id="tablecontainer">
        <h1>Add item</h1>
        <form name="addItemForm" class="form-inline" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="itemnameinput" class="form-inline-item-15">Item name:</label>
            <input type="text" name="itemnameinput" class="form-inline-item-30">
            <label for="itemcategoryinput" class="form-inline-item-15">Item category:</label>
            <select name="itemcategoryinput" class="form-inline-item-30">
                <option value="Fruit">Fruit</option>
                <option value="Vegetables">Vegetables</option>
                <option value="Beverages">Beverages</option>
                <option value="Grains">Grains</option>
                <option value="Dairy">Dairy</option>
                <option value="Meat">Meat</option>
                <option value="Household">Household</option>
                <option value="Other">Other</option>
            </select>
            <input type="submit" value="Add item to All Foods" name="addItem" class="btn addbutton" />
        </form>
        <hr>
        </hr>
        <h1>All Foods</h1>
        <form name="" action="" method="post" class="form-inline" id="tablecategoryform">
            <label for="tablecategory" class="form-inline-item-15">Filter by category:</label>
            <select id="tablecategory" name="cars">
                <option value="All Foods">All Foods</option>
                <option value="Fruit">Fruit</option>
                <option value="Vegetables">Vegetables</option>
                <option value="Beverages">Beverages</option>
                <option value="Grains">Grains</option>
                <option value="Dairy">Dairy</option>
                <option value="Meat">Meat</option>
                <option value="Household">Household</option>
                <option value="Other">Other</option>
            </select>
        </form>
        <table class="w3-table w3-bordered w3-card-4">
            <thead>
                <tr class="tableheadrow">
                    <th width="20%">Item</th>
                    <th width="20%">Category</th>
                    <th width="30%">Add to My Inventory</th>
                    <th width="30%">Add to My Shopping List</th>
                </tr>
            </thead>
            <?php foreach ($items as $item): ?>
            <tr>
                <td>
                    <?php echo $item['name']; ?>
                </td>
                <td>
                    <?php echo $item['catagory']; ?>
                </td>
                <td>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <input type="submit" value="Add 1" name="add_inventory" class="btn addbutton"
                            title="Update the record" />
                        <input type="hidden" name="item_to_update" value="name_of_item_to_update" />
                    </form>
                </td>
                <td>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <input type="submit" value="Add 1" name="add_shopping_list" class="btn addbutton" />
                        <input type="hidden" name="item_name_shopping_list" value="<?php echo $item['name'] ?>" />
                        <input type="hidden" name="item_category_shopping_list"
                            value="<?php echo $item['catagory'] ?>" />
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>

<?php } ?>