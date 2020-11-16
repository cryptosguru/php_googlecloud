<?php 

function logIn($username, $password) {
    global $db;

    $authenticated = false;
    $query = "SELECT * FROM login WHERE username=:username LIMIT 1;";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $results = $statement->fetch(PDO::FETCH_ASSOC); //array
    if (password_verify($password, $results['password'])) {
        $authenticated = true;
        updateLogInTime($username, $results['password']);
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