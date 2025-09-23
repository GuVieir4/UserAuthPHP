<?php

require_once "User.php";

class UserManager {
    private array $users = [];

    public function makeRegister(int $id, string $name, string $email, string $password): ?user {
        if (!User::validateEmail($email)) {
            echo "Email inválido, a conta nao foi criada!<br>";
            return null;
    }

        $user = new User($id, $name, $email, $password);
        $this->users[$user->id] = $user;
        echo "Parabéns, $user->name! Sua conta foi criada.";
        return $user;
    }

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

    public function makeLogin(User $user, string $password): string {
        if ($user->verifyPassword($password)) {
            return "Bem vindo, $user->name!";
        } else {
            return "Senha incorreta, tente novamente!";
        }
    }
}

?>
