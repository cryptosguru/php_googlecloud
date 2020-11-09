<?php
require ('connectdb.php');
require ('item_db.php');

$items = getAllitems();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // if (!empty($_POST['action']) && $_POST['action'] == 'Add') {
  //   additem($_POST['name'], $_POST['major'], $_POST['year']);
  //   $items = getAllitems();
  // }
  // elseif (!empty($_POST['action']) && $_POST['add_shopping_list'] == 'Add') {
  //   addItemToShoppingList($name, $major, $year)
  // }
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
    <link rel="icon" href="favicon.ico">
</head>

<body>
    <nav class="navbar bg-light topnav">
        <a href="home.php" class="navbar-brand"><img src="favicon.ico" class="icon"> GrocerEase </a>

        <form class="form-inline">
            <span class="navbar-text" id="usernamedisplay">
                Welcome user56
            </span>
            <span>
                <a href="login.php" class="btn logoutbutton addbutton"> Log out </a>
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
        <form class="form-inline" action="/action_page.php">
            <label for="itemnameinput" class="form-inline-item-15">Item name:</label>
            <input type="text" id="itemnameinput" name="itemnameinput" class="form-inline-item-30">
            <label for="itemcategoryinput" class="form-inline-item-15">Item category:</label>
            <select id="itemcategoryinput" name="cars" class="form-inline-item-30">
                <option value="volvo">Fruit</option>
                <option value="saab">Vegetables</option>
                <option value="fiat">Beverages</option>
                <option value="volvo">Grains</option>
                <option value="saab">Dairy</option>
                <option value="fiat">Meat</option>
                <option value="audi">Household</option>
                <option value="audi">Other</option>
            </select>
            <input type="submit" value="Add item to All Foods" name="action" class="btn addbutton" />
        </form>
        <hr>
        </hr>
        <h1>All Foods</h1>
        <form name="" action="" method="post" class="form-inline" id="tablecategoryform">
            <label for="tablecategory" class="form-inline-item-15">Filter by category:</label>
            <select id="tablecategory" name="cars">
                <option value="volvo">All Foods</option>
                <option value="volvo">Fruit</option>
                <option value="saab">Vegetables</option>
                <option value="fiat">Beverages</option>
                <option value="volvo">Grains</option>
                <option value="saab">Dairy</option>
                <option value="fiat">Meat</option>
                <option value="audi">Household</option>
                <option value="audi">Other</option>
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
                    <? echo $item['name']; ?>
                </td>
                <td>
                    <? echo $item['catagory']; ?>
                </td>
                <td>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <input type="submit" value="Add" name="add_inventory" class="btn addbutton"
                            title="Update the record" />
                        <input type="hidden" name="item_to_update" value="name_of_item_to_update" />
                    </form>
                </td>
                <td>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <input type="submit" value="Add" name="add_shopping_list" class="btn addbutton" />
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