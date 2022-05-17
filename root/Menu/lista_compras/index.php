<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200&family=Josefin+Sans:wght@200&family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Lista de compras</title>
</head>
<body background="thumb-1920-499490.jpg" >
    <header>
        <div class="start">
            <p class="titulo-menu">Boa tarde!</p>
        </div>
        <div class="meio">   
            <?php
                $saldo = 1500.00;
                $saldo = number_format($saldo, 2,'.', '');

                echo "Seu saldo atual é de R$: $saldo<br><br>";
                
                $arroz = "Arroz";
                $Arroz = 24.9678;
                $Arroz = number_format($Arroz, 2,'.', '');

                $feijao = "Feijão";
                $Feijão = 13.99;
                $$feijao = number_format($$feijao, 2,'.', '');

                $cafe = "Café";
                $Café = 16.9621512;
                $$cafe = number_format($$cafe, 2,'.', '');

                $cerveja = "Bhrama";
                $Bhrama = 32.961265126;
                $$cerveja = number_format($$cerveja, 2,'.', '');

                $agua = "Cristal";
                $Cristal = 2.49;
                $$agua = number_format($$agua, 2,'.', '');

                echo $arroz, " = R$", $$arroz,"<br>";
                echo $feijao, "= R$", $$feijao,"<br>";
                echo $cafe, " = R$", $$cafe,"<br>";
                echo $cerveja, " = R$", $$cerveja,"<br>";
                echo $agua, " = R$", $$agua, "<br>";

                $total = $$arroz+$$feijao+$$cafe+$$cerveja+$$agua;
                echo"<br> O total é: R$$total ";
                $novosaldo = $saldo - $total;

                echo "<br>Seu saldo atual é: R$$novosaldo";


            ?>
        </div>
    </header>
</body>
</html>