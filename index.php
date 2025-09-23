<?php

require_once "User.php";
require_once "UserManager.php";

$user1 = new User(1, "Gustavo", "gustavo@unimar.br", "unimar");

echo "<h3>Dados do Usuário:</h3>";
echo "<p>Usuário: $user1->name </p>";
echo "<p>Email: $user1->email </p>";
echo "<p>Senha: $user1->passwordHash </p>";

$userManager = new UserManager();

echo "<h3>Atualizando nome e email:</h3>";
echo $userManager->updateName($user1, "Daniel");

echo "<p>Usuário: $user1->name </p>";
echo "<p>Email: $user1->email </p>";
echo "<p>Senha: $user1->passwordHash </p>";

echo $userManager->login($user1, "unimar");
?>


