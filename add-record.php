<?php

require_once __DIR__ . '/data.php';

if (isset($_GET['add-record'])) {
    $text = $_GET['add-record'];

    $record = $guestBook->append($text);
    $guestBook->save($record);
}

header("Location: /");