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
        class Carro{
            private $grupo;
            private $modelo;
            private $marca;
            private $cor;
            private $potencia;
            private $ar_condicionado;

            function __construct($grupo, $modelo, $marca, $cor, $potencia, $ar_condicionado)
            {
                $this->setGrupo($grupo);
                $this->setModelo($modelo);
                $this->setMarca($marca);
                $this->setCor($cor);
                $this->setPotencia($potencia);
                $this->setAr_condicionado($ar_condicionado);
            }


            function getGrupo(){
                return $this->grupo;
            }
            function setGrupo($grupo){
                $this->grupo = $grupo;
            }
            function getModelo(){
                return $this->modelo;
            }
            function setModelo($modelo){
                $this->modelo = $modelo;
            }
            function getMarca(){
                return $this->marca;
            }
            function setMarca($marca){
                $this->marca = $marca;
            }
            function getCor(){
                return $this->cor;
            }
            function setCor($cor){
                $this->cor = $cor;
            }
            function getPotencia(){
                return $this->potencia;
            }
            function setPotencia($potencia){
                $this->potencia = $potencia;
            }
            function getAr_condicionado(){
                return $this->ar_condicionado;
            }
            function setAr_condicionado($ar_condicionado){
                $this->ar_condicionado = $ar_condicionado;
            }
        }

    ?>
    
</body>
</html>