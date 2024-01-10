<?php
include('conexiune_bd.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = mysqli_real_escape_string($conexiune, $_POST['nume']);
    $prenume = mysqli_real_escape_string($conexiune, $_POST['prenume']);


    $sql = "INSERT INTO om (nume, prenume) VALUES ('$nume', '$prenume')";

    if (mysqli_query($conexiune, $sql)) {
        echo "Datele au fost adăugate cu succes în baza de date.";
    } else {
        echo "Eroare: " . $sql . "<br>" . mysqli_error($conexiune);
    }
}

mysqli_close($conexiune);
?>