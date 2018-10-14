<?php

require_once __DIR__ . '/data.php';

$records = $guestBook->getData();

require_once 'index.view.php';
