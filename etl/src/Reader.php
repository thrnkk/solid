<?php

namespace App;

use App\File;

class Reader {

    private $directory;
    private $file;

    public function getDirectory(): string {
        return $this->directory;
    }

    public function setDirectory(string $directory): void {
        $this->directory = $directory;
    }

    public function getFile(): string {
        return $this->file;
    }

    public function setFile(string $file): void {
        $this->file = $file;
    }

    public function readFile() {

        $path = $this->getDirectory() . '/' . $this->getFile();

        $file = new File();
        $file->readCSV($path);

        return $file->getData();
    }

}