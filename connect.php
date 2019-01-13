<?php
    # PDO (PHP Data Objects) Summary
    # Main PDO Classes
    # PDO - Represents a connection between PHP & DB
    # PDOStatement - Represent a prepared statement and after execution an associated result
    # PDOException - Represents errors raised by PDO
    
    // Server Variables
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'user_info';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Set the PDO error mode to Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected Successfully";
    }

    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    // // Set DSN
    // //$dsn = 'mysql:host='. $host .';dbame='. $dbname;
    // $dsn = 'mysql:host=localhost;dbname=pdo';

    // // Create a PDO Instance
    // $pdo = new PDO($dsn, $user, $pass);

    // If you want to define your default attribute used array query
    // You can define them here so as you wont bother to write them
    // While calling a fetch method eg. ->fetch(PDO::FETCH_OBJ)
    // You will just leave blank and it will use the defined one
    // Eg. ->fetch() unless you want to override it you have to
    // Specify eg. ->fetch(PDO::FETCH_ASSOC)
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>