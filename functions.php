<?php

// Debugging
function dd ($arr)
{
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';
    die;
}

// Read from file
function readGuestBook ($path)
{
    $records = [];

    $fileHandler = fopen($path, 'r');
    while (!feof($fileHandler)) {
        $records[] = fgets($fileHandler, 1024);
    }
    fclose($fileHandler);

    return $records;
}

function writeGuestBook ($path, $record)
{
    $fileHandler = fopen($path, 'a');
    fwrite($fileHandler, PHP_EOL . $record);
    fclose($fileHandler);

    return $record;
}