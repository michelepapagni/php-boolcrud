<?php

//Partendo da un id deve ritornare l'array dell'ospite associato
function findById($id)
{
    include 'env.php';

    $ospite = [];

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        die('Si è verificato un errore: ' . $conn->connect_error);
    }

    $sql = "SELECT * FROM `ospiti` WHERE `id` = $id LIMIT 1";

    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        $ospite = $result->fetch_assoc();
    }

    return $ospite;
}

?>
