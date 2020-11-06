<?php
require ('connectdb.php');
require ('friend_db.php');

$friends = getAllFriends();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['action']) && $_POST['action'] == 'Add') {
    addFriend($_POST['name'], $_POST['major'], $_POST['year']);
    $friends = getAllFriends();
  }
  elseif (!empty($_POST['action']) && $_POST['action'] == 'Delete') {
    deleteFriend($_POST['friend_to_delete']);
    $friends = getAllFriends();
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
        <a href="home.php" class="w3-bar-item w3-button active">All foods</a>
        <a href="" class="w3-bar-item w3-button sidenavbutton">My Inventory</a>
        <a href="" class="w3-bar-item w3-button sidenavbutton">My Shopping List</a>
    </div>
    <div id="datatable">
        <h1>All foods</h1>
        <table class="w3-table w3-bordered w3-card-4" style="width:70%">
            <thead>
                <tr class="tableheadrow">
                    <th width="20%">Item</th>
                    <th width="20%">Category</th>
                    <th width="30%">Add to My Inventory</th>
                    <th width="30%">Add to My Shopping List</th>
                </tr>
            </thead>
            <tr>
                <td>
                    filler text
                </td>
                <td>
                    filler text
                </td>
                <td>
                    <form action="" method="post">
                        <input type="submit" value="Add" name="action" class="btn addbutton"
                            title="Update the record" />
                        <input type="hidden" name="friend_to_update" value="name_of_friend_to_update" />
                    </form>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="submit" value="Add" name="action" class="btn addbutton"
                            title="Permanently delete the record" />
                        <input type="hidden" name="friend_to_delete" value="" />
                    </form>
                </td>
            </tr>

        </table>
    </div>
</body>

</html>


<!-- 
<h1>Frienddd book</h1>
<form name="mainForm" action="simpleform.php" method="post">
  <div class="form-group">
    Your name:
    <input type="text" class="form-control" name="name" required />        
  </div>  
  <div class="form-group">
    Major:
    <input type="text" class="form-control" name="major" required /> 
  </div>  
  <div class="form-group">
    Year:
    <input type="number" class="form-control" name="year" required max="4" min="1" />        
  </div> 
     
  <input type="submit" value="Add" name="action" class="btn btn-dark" title="Insert a friend into a friends table" />
  <input type="submit" value="Confirm update" name="action" class="btn btn-dark" title="Confirm update a friend" />
  
</form>   -->

<!--   
<hr/>
<h2>List of Friends</h2>
<table class="w3-table w3-bordered w3-card-4 center" style="width:70%">
  <thead>
  <tr style="background-color:#B0B0B0">
    <th width="25%">Name</th>        
    <th width="25%">Major</th>        
    <th width="25%">Year</th> 
    <th width="10%">Update ?</th>
    <th width="10%">Delete ?</th> 
  </tr>
  </thead> -->
<?php foreach ($friends as $item): ?>
<!-- <tr>
    <td><? echo $item['name']; ?></td>
    <td><? echo $item['major']; ?></td>        
    <td><? echo $item['year']; ?></td>       
    <td>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="submit" value="Update" name="action" class="btn btn-primary" title="Update the record" />             
        <input type="hidden" name="friend_to_update" value="name_of_friend_to_update" />
      </form> 
    </td>                        
    <td>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="submit" value="Delete" name="action" class="btn btn-danger" title="Permanently delete the record" />      
        <input type="hidden" name="friend_to_delete" value="<?php echo $item['name'] ?>" />
      </form>
    </td>                                              
  </tr> -->
<?php endforeach; ?>
<!-- </table> -->