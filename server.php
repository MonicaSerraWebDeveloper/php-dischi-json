<?php

// Creaiamo una variabile chiamata $string dove gli passiamo la lettura del file JSON
$string = file_get_contents('disc.json');
// Creiamo una variabile per cambiare il nostro file JSON contenuto nella variabile $string in una struttura dati php tramite la funzione json_decode
$discs = json_decode($string, true);

$response = $discs;

if(isset($_GET['discIndex'])) {
    $discIndex = intval($_GET['discIndex']);
    $response = $discs[$discIndex];
}

// La funzione header() ci permette di far leggere correttamente i dati a Javascript e quindi specifichiamo che le informazioni restituite sono di tipo JSON
header ('Content-Type: application/json');

// Traduziamo quindi il nostro dato contenuto in $discs che sappiamo essere una struttura dati di php e la traduciamo in formato JSON utilizzando la funzione json_encode(). In sostanza stiamo trasformando gli array php in oggetti json
echo json_encode($response);

?>