<?php

    include '../env.php';

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        die('Si è verificato un errore: ' . $conn->connect_error);
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $date_of_birth = $_POST['date_of_birth'];
    $document_type = $_POST['document_type'];
    $document_number = $_POST['document_number'];

    if (empty($id) || empty($name) || empty($lastname) || empty($date_of_birth) || empty($document_type) || empty($document_number))
    {
        die('Inserisci correttamente i valori');
    }

    $sql = "UPDATE `ospiti` SET `name` = '$name', `lastname` = '$lastname', `date_of_birth` = '$date_of_birth', `document_type` = '$document_type', `document_number` = '$document_number', `updated_at` = NOW() WHERE `id` = $id";

    $result = $conn->query($sql);

    if ($result == true)
    {
        die('Ok');
    }
    else {
        die('Ko');
    }

?>
