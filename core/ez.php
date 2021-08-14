<?php
include "db_connection.php";


function init(){
    echo ("asd");
    var_dump($_ENV);
}

function saveCurrenciesToDB(){
    include "db_connection.php";

    $json_data = json_decode(file_get_contents("../constant/currencies.json"), true);

    foreach ($json_data['currencies'] as $key => $value) { 
        $id = $value['id'];
        $name = $value['name'];
        $symbol = $value['symbol'];
        $decimal = $value['decimal'];
        $status = "active";

        $sql = "INSERT INTO currencies  VALUES ('$id', '$name', '$symbol', '$decimal','$status')";
        if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id . "<br>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

    } 
    $conn->close();
}