<?php

declare(strict_types=1);

namespace App\Infra;

use App\Domain\UserRepository;

final class FileUserRepository implements UserRepository
{
    private string $filePath;

    public function __construct(string $filePath){
        $this->filePath = $filePath;
        $dir = dirname($this->filePath);
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        if (!file_exists($this->filePath)) {
            touch($this->filePath);
        }
    }

    /**
     * @param array{name:string,email:string,password:string} $user
     */
    public function save(array $user): void
    {
        file_put_contents(
            $this->filePath, 
            json_encode($user, JSON_UNESCAPED_UNICODE) . PHP_EOL, 
            FILE_APPEND
        );
    }
    
    public function findAll(): array
    {
        if (!file_exists($this->filePath)) { // se o arquivo não existir 
            return [];
        }

        $users = [];
        $lines = file($this->filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // os dois arqgumentos vao tirar as novas linhas e ignorar linhas vazias 

        foreach ($lines as $line) {
            $data = json_decode($line, true); //converte json em um array ou um objeto
            if ($data) {
                $users[] = $data;
            } // se data for true ele add em users
        } 

        return $users;
    }
}