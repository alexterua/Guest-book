<?php

require_once __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    protected $records;

    public function getData()
    {
        // Get array records
        return $this->records;
    }

    public function append($text)
    {
        // Add record in array records
        if (isset($text)) {
            $record = $text;
            $this->records[] = $record;
            return $record;
        } else {
            return $record = null;
        }
    }
}