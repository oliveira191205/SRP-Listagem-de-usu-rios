<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Application\UserService;
use App\Domain\UserValidator;
use App\Infra\FileUserRepository;

$file = __DIR__ . '/../storage/users.txt';

$service = new UserService(new FileUserRepository($file), new UserValidator);

$response = $service->register($_POST);
$httpCode = $response ? 201 : 422;

http_response_code($httpCode);

echo $response ? 'Usuário cadastrado com sucesso' : 'Falha no cadastro';