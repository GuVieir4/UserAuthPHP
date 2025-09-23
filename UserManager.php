<?php

require_once "User.php";

class UserManager {
    
    public function updateName(User $user, string $newName): string {
        $user->name = $newName;
        return "Nome do usuário atualizado para $user->name!";
    }

    public function updateEmail(User $user, string $newEmail): string {
        $user->email = $newEmail;
        return "Email do usuário atualizado para $user->email!";
    }

    public function login(User $user, string $password): string {
        if ($user->verifyPassword($password)) {
            return "Bem vindo, $user->name!";
        } else {
            return "Senha incorreta, tente novamente!";
        }
    }
}

?>
