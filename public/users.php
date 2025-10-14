<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Infra\FileUserRepository;
use App\Application\UserService;
use App\Domain\UserValidator;

$filePath = __DIR__ . '/../storage/users.txt';

$repo = new FileUserRepository($filePath);
$validator = new UserValidator();

$service = new UserService($repo, $validator);

$users = $service->listUserService();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Usuários Cadastrados</title>
</head>
<body>
    <h2>Usuários Cadastrados</h2>
    <?php
    if (empty($users)) {
        echo "<p>Nenhum usuário cadastrado.</p>";
    } else {
        echo "<table>";
        echo "<tr><th>Nome</th><th>E-mail</th></tr>";

        foreach ($users as $u) {
            $name = $u['name'] ?? '';
            $email = $u['email'] ?? '';
            echo "<tr><td>$name</td><td>$email</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
