<?php

class TextFile
{
    protected $dataPath;

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

    public function save($record)
    {
        // Write to file
        $fileHandler = fopen($this->dataPath, 'a');
        fwrite($fileHandler, $record . PHP_EOL);
        fclose($fileHandler);
    }
}