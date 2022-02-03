<?php

namespace App;

class File {

    private $data = array();

    public function setData(string $name, string $cpf, string $email): void {

        array_push(
            $this->data, 
            ['name' => iconv('iso-8859-1', 'utf-8', $name), 'cpf' => $cpf, 'email' => $email]
        );
    }

    public function getData(): array {
        return $this->data;
    }

    public function readCSV(string $path): void {
        
        $handle = fopen($path, 'r');

        while ($line = fgetcsv($handle, 10000, ';')) {
            $this->setData($line[0], $line[1], $line[2]);
        }

        fclose($handle);
    }

    public function readTXT(string $path): void {
        
        $handle = fopen($path, 'r');

        while (!feof($handle)) {

            $line = fgets($handle);
            
            $this->setData(
                substr($line, 11, 30),
                substr($line, 0, 11),
                substr($line, 41, -1)
            );
        }

        fclose($handle);
    }

}