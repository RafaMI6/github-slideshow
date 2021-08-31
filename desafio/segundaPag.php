<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="segundaPage.css">
    <title>Document</title>
</head>
<body>
    <?php
        require_once './classes/Carro.php';
        require_once './classes/Locacao.php';
        $retLocal = $_POST["retLocal"];
        $retData = $_POST["retData"];
        $retHora = $_POST["retHora"];
        $devLocal = $_POST["devLocal"];
        $devHora = $_POST["devHora"];
        $devData = $_POST["devData"];

        $c[0] = new Carro("Grupo FS - Intermediario Sedan", "Cronos", "Fiat", "Preto", "139 CV", true);
        $c[1] = new Carro("Grupo C - Econômico Com Ar", "HB20", "Hyundai", "Cinza", "130 CV", true);
        $c[2] = new Carro("Grupo CK - Econômico C/ Ar", "GM Onix", "Chevrolet", "Branco", "116 CV", true);
        $c[3] = new Carro("Grupo FX - Intermediário Automático", "Peugeot 208", "Peugeot", "Azul", "136 CV", true);
        $c[4] = new Carro("Grupo FK - Intermediário", "Versa", "Nissan", "vermelho", "114 CV", true);
        $c[5] = new Carro("Grupo FK - Intermediário", "Sandero", "Renault", "cinza", "150 CV", true);
    ?>
    <header>
    </header>
    <main>
        <div id="mainDiv">
            <div id="carros">
                <div class="cardCar" id="carOne">
                    <div class="timg">
                        <h3><?php echo $c[0]->getGrupo(); ?></h3>
                        <img src="./mycar/CRON.png" alt="Fiat Cronos">
                    </div>
                    <div class="cardinfor">
                        <h2>Informações</h2>
                        <p>Marca: <?php echo $c[0]->getMarca(); ?></p>
                        <p>Modelo: <?php echo $c[0]->getModelo();?></p>
                        <p>Cor: <?php echo $c[0]->getCor();?></p>
                        <p>Potencia: <?php echo $c[0]->getPotencia();?></p>
                        <p>Ar Condicionado: <?php echo $c[0]->getAr_condicionado();?></p>
                        <p>Preço: R$ 145,45</p>
                    </div>
                    <form action="terceiraPage.php" method="post">
                        <input type="hidden" name="grupo" value="<?php echo $c[0]->getGrupo(); ?>">
                        <input type="hidden" name="modelo" value="<?php echo $c[0]->getModelo(); ?>">
                        <input type="hidden" name="cor" value="<?php echo $c[0]->getCor(); ?>">
                        <input type="hidden" name="potencia" value="<?php echo $c[0]->getPotencia(); ?>">
                        <input type="hidden" name="ar_condicionado" value="<?php echo $c[0]->getAr_condicionado(); ?>">

                        <input type="hidden" name="retLocal" value="<?php echo $retLocal; ?>">
                        <input type="hidden" name="retData" value="<?php echo $retData; ?>">
                        <input type="hidden" name="retHora" value="<?php echo $retHora; ?>">
                        <input type="hidden" name="devLocal" value="<?php echo $devLocal; ?>">
                        <input type="hidden" name="devData" value="<?php echo $devData; ?>">
                        <input type="hidden" name="devHora" value="<?php echo $devHora; ?>">
                        
                        <div id="bntContinuar">
                            <input type="submit" value="Continuar">
                        </div>
                    </form>
                </div>

                <div class="cardCar" id="carTwo">
                    <div class="timg">
                        <h3><?php echo $c[1]->getGrupo() ?></h3>
                        <img src="./mycar/HB20.png" alt="Hyundai HB20">
                    </div>
                    <div class="cardinfor">
                        <h2>Informações</h2>
                        <p>Marca: <?php echo $c[1]->getMarca() ?></p>
                        <p>Modelo: <?php echo $c[1]->getModelo()?></p>
                        <p>Cor: <?php echo $c[1]->getCor()?></p>
                        <p>Potencia: <?php echo $c[1]->getPotencia()?></p>
                        <p>Ar Condicionado: <?php echo $c[1]->getAr_condicionado()?></p>
                        <p>Preço: R$ 140,98</p>
                    </div>
                    <form action="terceiraPage.php" method="post">
                        <input type="hidden" name="grupo" value="<?php echo $c[1]->getGrupo(); ?>">
                        <input type="hidden" name="modelo" value="<?php echo $c[1]->getModelo(); ?>">
                        <input type="hidden" name="cor" value="<?php echo $c[1]->getCor(); ?>">
                        <input type="hidden" name="potencia" value="<?php echo $c[1]->getPotencia(); ?>">
                        <input type="hidden" name="ar_condicionado" value="<?php echo $c[1]->getAr_condicionado(); ?>">

                        <input type="hidden" name="retLocal" value="<?php echo $retLocal; ?>">
                        <input type="hidden" name="retData" value="<?php echo $retData; ?>">
                        <input type="hidden" name="retHora" value="<?php echo $retHora; ?>">
                        <input type="hidden" name="devLocal" value="<?php echo $devLocal; ?>">
                        <input type="hidden" name="devData" value="<?php echo $devData; ?>">
                        <input type="hidden" name="devHora" value="<?php echo $devHora; ?>">
                        
                        <div id="bntContinuar">
                            <input type="submit" value="Continuar">
                        </div>
                    </form>
                </div>

                <div class="cardCar" id="carThree">
                    <div class="timg">
                        <h3><?php echo $c[2]->getGrupo() ?></h3>
                        <img src="./mycar/ONIX.png" alt="GM Onix">
                    </div>
                    <div class="cardinfor">
                        <h2>Informações</h2>
                        <p>Marca: <?php echo $c[2]->getMarca() ?></p>
                        <p>Modelo: <?php echo $c[2]->getModelo()?></p>
                        <p>Cor: <?php echo $c[2]->getCor()?></p>
                        <p>Potencia: <?php echo $c[2]->getPotencia()?></p>
                        <p>Ar Condicionado: <?php echo $c[2]->getAr_condicionado()?></p>
                        <p>Preço: 140,98</p>
                    </div>
                    <form action="terceiraPage.php" method="post">
                        <input type="hidden" name="grupo" value="<?php echo $c[2]->getGrupo(); ?>">
                        <input type="hidden" name="modelo" value="<?php echo $c[2]->getModelo(); ?>">
                        <input type="hidden" name="cor" value="<?php echo $c[2]->getCor(); ?>">
                        <input type="hidden" name="potencia" value="<?php echo $c[2]->getPotencia(); ?>">
                        <input type="hidden" name="ar_condicionado" value="<?php echo $c[2]->getAr_condicionado(); ?>">

                        <input type="hidden" name="retLocal" value="<?php echo $retLocal; ?>">
                        <input type="hidden" name="retData" value="<?php echo $retData; ?>">
                        <input type="hidden" name="retHora" value="<?php echo $retHora; ?>">
                        <input type="hidden" name="devLocal" value="<?php echo $devLocal; ?>">
                        <input type="hidden" name="devData" value="<?php echo $devData; ?>">
                        <input type="hidden" name="devHora" value="<?php echo $devHora; ?>">
                        
                        <div id="bntContinuar">
                            <input type="submit" value="Continuar">
                        </div>
                    </form>
                </div>

                <div class="cardCar" id="carFour">
                    <div class="timg">
                        <h3><?php echo $c[3]->getGrupo() ?></h3>
                        <img src="./mycar/PEUA.png" alt="Peugeot 208">
                    </div>
                    <div class="cardinfor">
                        <h2>Informações</h2>
                        <p>Marca: <?php echo $c[3]->getMarca() ?></p>
                        <p>Modelo: <?php echo $c[3]->getModelo()?></p>
                        <p>Cor: <?php echo $c[3]->getCor()?></p>
                        <p>Potencia: <?php echo $c[3]->getPotencia()?></p>
                        <p>Ar Condicionado: <?php echo $c[3]->getAr_condicionado()?></p>
                        <p>Preço: 160,90</p>
                    </div>
                    <form action="terceiraPage.php" method="post">
                        <input type="hidden" name="grupo" value="<?php echo $c[3]->getGrupo(); ?>">
                        <input type="hidden" name="modelo" value="<?php echo $c[3]->getModelo(); ?>">
                        <input type="hidden" name="cor" value="<?php echo $c[3]->getCor(); ?>">
                        <input type="hidden" name="potencia" value="<?php echo $c[3]->getPotencia(); ?>">
                        <input type="hidden" name="ar_condicionado" value="<?php echo $c[3]->getAr_condicionado(); ?>">

                        <input type="hidden" name="retLocal" value="<?php echo $retLocal; ?>">
                        <input type="hidden" name="retData" value="<?php echo $retData; ?>">
                        <input type="hidden" name="retHora" value="<?php echo $retHora; ?>">
                        <input type="hidden" name="devLocal" value="<?php echo $devLocal; ?>">
                        <input type="hidden" name="devData" value="<?php echo $devData; ?>">
                        <input type="hidden" name="devHora" value="<?php echo $devHora; ?>">
                        
                        <div id="bntContinuar">
                            <input type="submit" value="Continuar">
                        </div>
                    </form>
                </div>

                <div class="cardCar" id="carFive">
                    <div class="timg">
                        <h3><?php echo $c[4]->getGrupo() ?></h3>
                        <img src="./mycar/VEFF.png" alt="Nissan Versa">
                    </div>
                    <div class="cardinfor">
                        <h2>Informações</h2>
                        <p>Marca: <?php echo $c[4]->getMarca() ?></p>
                        <p>Modelo: <?php echo $c[4]->getModelo()?></p>
                        <p>Cor: <?php echo $c[4]->getCor()?></p>
                        <p>Potencia: <?php echo $c[4]->getPotencia()?></p>
                        <p>Ar Condicionado: <?php echo $c[4]->getAr_condicionado()?></p>
                        <p>Preco: 170,90</p>
                    </div>
                    <form action="terceiraPage.php" method="post">
                        <input type="hidden" name="grupo" value="<?php echo $c[4]->getGrupo(); ?>">
                        <input type="hidden" name="modelo" value="<?php echo $c[4]->getModelo(); ?>">
                        <input type="hidden" name="cor" value="<?php echo $c[4]->getCor(); ?>">
                        <input type="hidden" name="potencia" value="<?php echo $c[4]->getPotencia(); ?>">
                        <input type="hidden" name="ar_condicionado" value="<?php echo $c[4]->getAr_condicionado(); ?>">

                        <input type="hidden" name="retLocal" value="<?php echo $retLocal; ?>">
                        <input type="hidden" name="retData" value="<?php echo $retData; ?>">
                        <input type="hidden" name="retHora" value="<?php echo $retHora; ?>">
                        <input type="hidden" name="devLocal" value="<?php echo $devLocal; ?>">
                        <input type="hidden" name="devData" value="<?php echo $devData; ?>">
                        <input type="hidden" name="devHora" value="<?php echo $devHora; ?>">
                        
                        <div id="bntContinuar">
                            <input type="submit" value="Continuar">
                        </div>
                    </form>
                </div>

                <div class="cardCar" id="carSixe">
                    <div class="timg">
                        <h3><?php echo $c[5]->getGrupo() ?></h3>
                        <img src="./mycar/SNDF.png" alt="Renault Sandero">
                    </div>
                    <div class="cardinfor">
                        <h2>Informações</h2>
                        <p>Marca: <?php echo $c[5]->getMarca() ?></p>
                        <p>Modelo: <?php echo $c[5]->getModelo()?></p>
                        <p>Cor: <?php echo $c[5]->getCor()?></p>
                        <p>Potencia: <?php echo $c[5]->getPotencia()?></p>
                        <p>Ar Condicionado: <?php echo $c[5]->getAr_condicionado()?></p>
                        <p>Preço: 170,00</p>
                    </div>
                    <form action="terceiraPage.php" method="post">
                        <input type="hidden" name="grupo" value="<?php echo $c[5]->getGrupo(); ?>">
                        <input type="hidden" name="modelo" value="<?php echo $c[5]->getModelo(); ?>">
                        <input type="hidden" name="cor" value="<?php echo $c[5]->getCor(); ?>">
                        <input type="hidden" name="potencia" value="<?php echo $c[5]->getPotencia(); ?>">
                        <input type="hidden" name="ar_condicionado" value="<?php echo $c[5]->getAr_condicionado(); ?>">

                        <input type="hidden" name="retLocal" value="<?php echo $retLocal; ?>">
                        <input type="hidden" name="retData" value="<?php echo $retData; ?>">
                        <input type="hidden" name="retHora" value="<?php echo $retHora; ?>">
                        <input type="hidden" name="devLocal" value="<?php echo $devLocal; ?>">
                        <input type="hidden" name="devData" value="<?php echo $devData; ?>">
                        <input type="hidden" name="devHora" value="<?php echo $devHora; ?>">
                        
                        <div id="bntContinuar">
                            <input type="submit" value="Continuar">
                        </div>
                    </form>
                </div>
            </div>

            <div id="cardRes">
                <div id="tituloCardRes">
                    <h2>Resumo da Reserva</h2>
                </div>
                <div id="inforReserva">
                    <h3>Retirada</h3>
                    <p>
                        <strong>
                            <?php
                                date_default_timezone_set('America/Sao_Paulo');
                                $data = new DateTime($retData);
                                $formatter = new IntlDateFormatter('pt_BR',
                                    IntlDateFormatter::FULL,
                                    IntlDateFormatter::NONE,
                                    'America/Sao_Paulo',
                                    IntlDateFormatter::GREGORIAN);
                                echo $formatter->format($data) . " ás $retHora";
                            ?>
                        </strong>
                    </p>
                    <p><?php echo $retLocal ?></p>

                    <h3>devolução</h3>
                    <p>
                     <strong>
                            <?php
                                date_default_timezone_set('America/Sao_Paulo');
                                $data = new DateTime($devData);
                                $formatter = new IntlDateFormatter('pt_BR',
                                    IntlDateFormatter::FULL,
                                    IntlDateFormatter::NONE,
                                    'America/Sao_Paulo',
                                    IntlDateFormatter::GREGORIAN);
                                echo $formatter->format($data) . " ás $devHora";
                            ?>
                        </strong>
                    </p>
                    <p><?php echo $devLocal; ?></p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>