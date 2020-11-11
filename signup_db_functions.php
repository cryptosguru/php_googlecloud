<?php 

function signUp($username, $password) {
    global $db;

    $authenticated = false;

    try {
        $query = "INSERT INTO login VALUES(:username, :password, now())";
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor(); 
        $authenticated = true;
    }
    catch (Exception $e) {
        $error_message = $e->getMessage();
        echo "<p>Error message: $error_message </p>";
    }
    return $authenticated;   
}
?>