# 🛡️ Sistema de Usuários e Autenticação

## 📄 Descrição do Projeto
Este projeto consiste em um sistema simples de gerenciamento de usuários, desenvolvido em **PHP**, que simula as funcionalidades de **cadastro, login e reset de senha**.  

O objetivo principal é aplicar conceitos de **Design Patterns** e boas práticas de **Clean Code**, seguindo os princípios **PSR-12**, **KISS** e **DRY**.  

O sistema permite:

- 📝 Cadastro de usuários com validação de e-mail e senha forte.
- ❌ Verificação de e-mails duplicados.
- 🔑 Login de usuários com autenticação de senha.
- 🔄 Reset de senha com validação.
- ✏️ Atualização de nome e e-mail de usuários.

---

## 🛠️ Tecnologias Utilizadas
- PHP 8.x
- HTML (para exibição de mensagens e testes)
- PSR-12 (padrão de código)
- PHP `password_hash` e `password_verify` para segurança de senhas

---

## 📁 Estrutura do Projeto

- **index.php**: Script principal que executa os casos de uso e testa o sistema.  
- **src/User.php**: Classe `User`, responsável por armazenar dados do usuário e validar e-mails e senhas.  
- **src/UserManager.php**: Classe `UserManager`, responsável por gerenciar os usuários (cadastro, login, atualização e reset de senha).

---

## 🎯 Casos de Uso Implementados
O projeto cobre os seguintes casos de uso obrigatórios:

1. **Cadastro válido**: Usuário é criado com e-mail válido e senha forte.  
2. **Cadastro com e-mail inválido**: Usuário não é criado e uma mensagem de erro é exibida.  
3. **Tentativa de login com senha incorreta**: Login falha com mensagem de erro.  
4. **Reset de senha válido**: Usuário altera a senha com sucesso.  
5. **Cadastro de usuário com e-mail duplicado**: Sistema impede duplicidade de e-mails.

---

## 🚀 Como Executar
1. Certifique-se de ter um servidor PHP instalado (ex: XAMPP, MAMP ou PHP built-in server).  
2. Clone ou baixe o projeto.  
3. Coloque os arquivos na pasta do servidor (`htdocs` no XAMPP, por exemplo).  
4. Abra o navegador e acesse `http://localhost/UserAuthPHP/index.php`.  
5. Observe as mensagens e testes de cadastro, login e reset de senha diretamente na página.

---

## 🧩 Boas Práticas Aplicadas
- ✅ **PSR-12**: Seguindo padrões de formatação e nomenclatura.  
- 💡 **KISS (Keep It Simple, Stupid)**: Código simples, direto e fácil de entender.  
- 🔁 **DRY (Don’t Repeat Yourself)**: Evitando duplicação de código, utilizando funções de validação centralizadas.

---

## 👥 Participantes
- **Gustavo Henrique Vieira da Silva**  
  - RA: 1992080  
