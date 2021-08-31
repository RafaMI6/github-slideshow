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
        require_once 'Carro.php';
        require_once 'Pessoa.php';
        require_once 'segundaPag.php';
        class Locacao{
            private $preco;
            private $local_retirada;
            private $data_retirada;
            private $hora_retirada;
            private $local_devolucao;
            private $data_devolucao;
            private $hora_devolucao;
            
            function __construct($preco, $local_retirada, $data_retirada, $hora_retirada, $local_devolucao, $data_devolucao, $hora_devolucao)
            {
                $this->setPreco($preco);
                $this->setLocal_retirada($local_retirada);
                $this->setData_retirada($data_retirada);
                $this->setHora_retirada($hora_retirada);
                $this->setLocal_devolucao($local_devolucao);
                $this->setData_devolucao($data_devolucao);
                $this->setHora_devolucao($hora_devolucao);
            }


            function precoQuantidade(){
                
            }
            function getPreco(){
                return $this->preco;
            }
            function setPreco($preco){
                $this->preco = $preco;
            }
            function getLocal_retirada(){
                return $this->local_retirada;
            }
            function setLocal_retirada($local_retirada){
                $this->local_retirada = $local_retirada;
            }
            function getData_retirada(){
                return $this->data_retirada;
            }
            function setData_retirada($data_retirada){
                $this->data_retirada = $data_retirada;
            }
            function getHora_retirada(){
                return $this->hora_retirada;
            }
            function setHora_retirada($hora_retirada){
                $this->hora_retirada = $hora_retirada;
            }
            function getLocal_devolucao(){
                return $this->local_devolucao;
            }
            function setLocal_devolucao($local_devolucao){
                $this->local_devolucao = $local_devolucao;
            }
            function getData_devolucao(){
                return $this->data_devolucao;
            }
            function setData_devolucao($data_devolucao){
                $this->data_devolucao = $data_devolucao;
            }
            function getHora_devolucao(){
                return $this->hora_devolucao;
            }
            function setHora_devolucao($hora_devolucao){
                $this->hora_devolucao = $hora_devolucao;
            }
        }
    ?>
    
</body>
</html>