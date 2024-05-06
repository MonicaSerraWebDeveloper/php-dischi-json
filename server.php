<?php

$string = file_get_contents('disc.json');
$discs = json_decode($string, true);

// if(isset($_GET['discIndex'])) {
//     $discIndex = intval($_GET['discIndex']);
//     $response = $discs[$discIndex]
// }

header ('Content-Type: application/json');
echo json_encode($discs)

?>