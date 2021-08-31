<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Pessoa{
            private $nome;
            private $cpf;
            private $email;
            private $telefone;

            function getNome(){
                return $this->nome;
            }
            function setNome($nome){
                $this->nome = $nome;
            }
            function getCpf(){
                return $this->cpf;
            }
            function setCpf($cpf){
                $this->cpf = $cpf;
            }
            function getEmail(){
                return $this->email;
            }
            function setEmail($email){
                $this->email = $email;
            }
            function getTelefone(){
                return $this->telefone;
            }
            function setTelefone($telefone){
                $this->telefone = $telefone;
            }
        }
    ?>
    
</body>
</html>