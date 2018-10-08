<?php

require_once 'functions.php';
require_once 'data.php';

if (isset($_GET['add-record'])) {
    $record = $_GET['add-record'];
    $records[] = writeGuestBook($path, $record);
} else {
    $record = null;
}

header("Location: /");