<?php

require_once "User.php";

class UserManager {
    private array $users = [];

    public function addUser(User $user): string {
        $this->users[$user->id] = $user;
        return "Usuário adicionado ao sistema!";
    }
    
    public function updateEmail(User $user, string $newEmail): string {
        if (isset($this->users[$user->id])) {
            $this->users[$user->id]->email = $newEmail;
            return "Email do usuário atualizado para $newEmail!";
        }

        return "Usuário não encontrado";
    }

    public function updateName(User $user, string $newName): string {
        if (isset($this->users[$user->id])) {
            $this->users[$user->id]->name = $newName;
            return "Nome do usuário atualizado para $newName;!";
        }

        return "Usuário não encontrado";
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
