<?php

require_once __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    protected $path;
    protected $data = [];

    public function __construct()
    {
        $this->path = realpath(__DIR__ . '/../guestbook.txt');

        // Read from file
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            $this->data[] = new GuestBookRecord($line);
        }
    }

    public function getRecords()
    {
        // Get array records
        return $this->data;
    }

    public function append(GuestBookRecord $record)
    {
        // Add record in array records
        $this->data[] = $record;
    }

    public function save()
    {
        // Write to file
        $lines = [];
        foreach ($this->data as $record) {
            $lines[] = $record->getMessage();
        }
        file_put_contents($this->path, implode("\n", $lines));
    }
}