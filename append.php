<?php

require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/GuestBookRecord.php';

$guestBook = new GuestBook();
$record = new GuestBookRecord($_GET['message']);

$guestBook->append($record);
$guestBook->save();

header("Location: /");