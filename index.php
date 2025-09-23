<?php

require_once "User.php";
require_once "UserManager.php";

$userManager = new UserManager();

$user1 = $userManager->makeRegister(1, "Daniel", "daniel@@unimar.br", "unimar");
$user2 = $userManager->makeRegister(2, "Gustavo", "gustavo@unimar.br", "unimar");

echo "<h3>Atualizando nome e email:</h3>";
echo $userManager->updateName($user2, "Gustavo Henrique");
echo "<br>";
echo $userManager->updateEmail($user2, "1992080@unimar.br");

echo "<h3>Dados do Usuário:</h3>";
echo "<p>Usuário: $user2->name</p>";
echo "<p>Email: $user2->email</p>";
echo "<p>Senha: $user2->passwordHash</p>";

echo "<h3>Tentando login com senha correta</h3>";
echo $userManager->makeLogin($user2, "unimar");

echo "<h3>Tentando login com senha incorreta</h3>";
echo $userManager->makeLogin($user2, "fiap");

echo "<h3> Casos de Uso Obrigatórios</h3>";
echo "<h3> Caso 1 - Cadastro válido</h3>";
$maria = $userManager->makeRegister(3, "Maria Oliveira", "maria@email.com", "Senha123");

echo "<h3> Caso 2 - Cadastro com email inválido</h3>";
$pedro = $userManager->makeRegister(4, "Pedro", "pedro@@email.com", "Senha123");

echo "<h3> Caso 3 - Tentativa de login com senha errada</h3>";
echo $userManager->makeLogin($maria, "unimar");