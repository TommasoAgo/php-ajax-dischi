<?php

include __DIR__ . '/database.php';

header('Content-Type: application/json');

if ( isset($_GET['genere']) && $_GET['genere'] != "" ) {

    $filteredDatabase = [];

    foreach ($database as $riga) {

        if ( strtolower($riga['genre']) == strtolower($_GET['genere']) ) {

            $filteredDatabase[] = $riga;

        }

    }

    echo json_encode($filteredDatabase);

} else {
    echo json_encode($database);
}

?>