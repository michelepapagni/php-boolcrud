<?php

    include '../env.php';

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        die('Si è verificato un errore: ' . $conn->connect_error);
    }

    $id = $_POST['id'];

    if (empty($id))
    {
        die('Inserisci correttamente i valori');
    }

    $sql = "DELETE FROM `ospiti` WHERE `id` = $id;";

    $result = $conn->query($sql);

    if ($result == true)
    {
        die('Ok');
    }
    else {
        die('Ko');
    }

?>
