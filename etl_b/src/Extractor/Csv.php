<?php

namespace App\Extractor;

class Csv extends File {
    
    public function read(string $path): array {
        
        $handle = fopen($path, 'r');

        while ($line = fgetcsv($handle, 10000, ';')) {
            $this->setData($line[0], $line[1], $line[2]);
        }

        fclose($handle);

        return $this->getData();
    }

}