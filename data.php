<?php

require_once 'functions.php';

$path = __DIR__ . '/guestbook.txt';

$records = readGuestBook($path);