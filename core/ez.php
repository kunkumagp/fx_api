<?php
include "db_connection.php";

getAllCurrency();

function init(){
    echo ("asd");
    var_dump($_ENV);
}

function getAllCurrency(){
    
    $url = $GLOBALS['API_V3'].$GLOBALS['API_TYPE']."/list?type=".$GLOBALS['API_TYPE']."&access_key=".$GLOBALS['APP_KEY'];

    echo $url;

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}