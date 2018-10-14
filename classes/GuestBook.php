<?php

class GuestBook
{
    protected $dataPath;
    protected $records;

    public function __construct($path)
    {
        $this->dataPath = $path;

        // Read from file
        $fileHandler = fopen($this->dataPath, 'r');
        while (!feof($fileHandler)) {
            $this->records[] = fgets($fileHandler, 1024);
        }
        fclose($fileHandler);
    }

    public function getData()
    {
        // Get array records
        return $this->records;
    }

    public function save($record)
    {
        // Write to file
        $fileHandler = fopen($this->dataPath, 'a');
        fwrite($fileHandler, $record . PHP_EOL);
        fclose($fileHandler);
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