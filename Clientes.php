<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Senac</title>
</head>
<body>
    <?php
        //Faz a requisição da classe Cliente.classe
        require ("./class/Cliente.classe.php");

        //Criar o objeto
        $c1 = new Cliente();
        echo $c1->setClass("João",123456789-12, 800, 1000, 1);
        $c1->sacar(500);
        $c1->saldo();
        $c1->sacar(400);
        $c1->saldo();
        $c1->sacar(200);
        $c1->saldo();
        $c1->sacar(600);
        $c1->saldo();
        $c1->sacar(1000);
        $c1->saldo();

        

        
    ?>
</body>
</html>