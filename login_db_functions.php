<?php 

function logIn($username, $password) {
    global $db;

    $authenticated = false;
    $query = "SELECT * FROM login WHERE username=:username AND password=:password LIMIT 1;";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $results = $statement->fetchAll(); //array
    if (count($results) == 1) {
        $authenticated = true;
        updateLogInTime($username, $password);
    }

    $statement->closeCursor(); 
    
    return $authenticated;   
}

function updateLogInTime($username, $password) {
    global $db;

    $query = "UPDATE login SET time=now() WHERE username=:username AND password=:password LIMIT 1";
    
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();    
}

?>