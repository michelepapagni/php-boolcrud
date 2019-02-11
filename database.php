<?php

    include 'env.php';

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        die('Si è verificato un errore: ' . $conn->connect_error);
    }

    $sql = 'SELECT * FROM `ospiti`';

    $results = $conn->query($sql);

    $ospiti = [];

    if ($results->num_rows > 0)
    {
        while ($row = $results->fetch_assoc())
        {
            $ospiti[] = $row;
        }
    }

    $conn->close();

?>
