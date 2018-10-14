<?php

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/classes/GuestBook.php';

$path = __DIR__ . '/guestbook.txt';
$guestBook = new GuestBook($path);