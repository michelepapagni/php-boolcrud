<?php

    include '../env.php';

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        die('Si è verificato un errore: ' . $conn->connect_error);
    }

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $date_of_birth = $_POST['date_of_birth'];
    $document_type = $_POST['document_type'];
    $document_number = $_POST['document_number'];

    if (empty($name) || empty($lastname) || empty($date_of_birth) || empty($document_type) || empty($document_number))
    {
        die('Inserisci correttamente i valori');
    }

    $sql = "INSERT INTO `ospiti` (`name`, `lastname`, `date_of_birth`, `document_type`, `document_number`, `created_at`, `updated_at`) VALUES ('$name', '$lastname', '$date_of_birth', '$document_type', '$document_number', NOW(), NOW());";

    $result = $conn->query($sql);

    if ($result == true)
    {
        die('Ok');
    }
    else {
        die('Ko');
    }

?>
