<?php

require_once "User.php";

class UserManager {
    private array $users = [];

    public function makeRegister(int $id, string $name, string $email, string $password): ?user {
        foreach ($this->users as $existingUser) {
            if ($existingUser->email === $email) {
                echo "E-mail já está em uso!<br>";
                return null;
            }
        }

        if (!User::validateEmail($email)) {
            echo "Email inválido, a conta nao foi criada!<br>";
            return null;
        }

        if (!User::validatePassword($password)) {
            echo "Senha inválida, a conta nao foi criada!<br>";
            return null;
        }

        $user = new User($id, $name, $email, $password);
        $this->users[$user->id] = $user;
        echo "Parabéns, $user->name! Sua conta foi criada.";
        return $user;
    }

    public function resetPassword(User $user, string $newPassword): string {
        if (isset($this->users[$user->id])) {
            if (!User::validatePassword($newPassword)) {
                echo "Senha inválida, a senha nao foi atualizada!<br>";
                return null;
            }

            $newPasswordHash = $this->users[$user->id]->passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);
            return "Senha do usuário atualizado para: $newPasswordHash!";
        }

        return "Usuário não encontrado";
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
