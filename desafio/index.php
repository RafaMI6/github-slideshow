<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="locacor.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div id="divHeader">
            <div id="logoLocaliza">
                <h1>Localiza</h1>
            </div>
            <div id="divInput">
                <form action="segundaPag.php" method="POST">
                    <div id="carRetirada">
                        <input type="text" name="retLocal" id="retLocal" placeholder="Digite o local de retirada">
                        <input type="date" name="retData" id="retData" placeholder="Data">
                        <input type="time" name="retHora" id="retHora" placeholder="Hora">
                    </div>
                    <div id="carDevolucao">
                        <input type="text" name="devLocal" id="devLocal" placeholder="Digite o local de devolução">
                        <input type="date" name="devData" id="devData" placeholder="Data">
                        <input type="time" name="devHora" id="devHora" placeholder="Hora">
                    </div>
                    <div id="btcontinuar"><input type="submit" name="extensão" value="continua"></div>
                </form>
            </div>
        </div>
    </header>
</body>
</html>