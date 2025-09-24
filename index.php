<?php

require_once "src/User.php";
require_once "src/UserManager.php";

$userManager = new UserManager();

echo "<h3>Criando usuário com e-mail válido e senha forte</h3>";
$gustavo = $userManager->makeRegister(2, "Gustavo Henrique", "1992080@unimar.br", "Senha321");

echo "<h3>Dados do usuário:</h3>";
echo "<p>Usuário: $gustavo->name </p>";
echo "<p>Email: $gustavo->email </p>";
echo "<p>Senha: $gustavo->passwordHash </p>";
echo "<br>";
echo "<h3> Casos de Uso Obrigatórios</h3>";
echo "<h3> Caso 1 - Cadastro válido</h3>";
$maria = $userManager->makeRegister(3, "Maria Oliveira", "maria@email.com", "Senha123");

echo "<h3> Caso 2 - Cadastro com email inválido</h3>";
$pedro = $userManager->makeRegister(4, "Pedro", "pedro@@email.com", "Senha123");

echo "<h3> Caso 3 - Tentativa de login com senha errada</h3>";
echo $userManager->makeLogin($maria, "unimar");

echo "<h3> Caso 4 - Reset de senha válido</h3>";
echo $userManager->resetPassword($maria, "NovaSenha1");

echo "<h3> Caso 5 - Cadastro de usuário com e-mail duplicado</h3>";
$mario = $userManager->makeRegister(5, "Mario", "maria@email.com", "Senha123");

echo "<br>";
echo "<p>* Só estou mostrando a senha para mostrar que está com hash, sei que em um projeto não se deve fazer isso.</p>";