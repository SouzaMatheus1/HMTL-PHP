<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Hipoteticus</title>
</head>
<body background="op1.jpg">
<header>
        <div class="cabeçalho">
            
        Hipoteticus LTDA.

        </div> 
    </header>
    <main>
        <div class="nav">      
            <form action='index.php' method='post'>
                Horas trabalhadas: 
                <input type="text" name="horas"><br><br>
                Horas extras: 
                <input type="text" name="extra"><br><br>
                Deseja incluir vale transporte? 
                    <select id="vale" name="transporte">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                <br>
                <input type="submit" value="Enviar">
            </form>

            <?php
                $horast = $_POST['horas'];
                $horase = $_POST['extra'];
                $valet = $_POST['transporte'];

                if($valet == "sim"){
                    $salariobruto = ($horast*10.00) + ($horase*15.00);
                    $dezporcento = $salariobruto*0.10;
                    $seisporcento = ($salariobruto*0.06);
                    $salariobruto = $salariobruto - $seisporcento;
                    $salarioliquido = ($salariobruto - $dezporcento - $seisporcento);
                }else{
                    $salariobruto = ($horast*10.00) + ($horase*15.00);
                    $dezporcento = $salariobruto*0.10;
                    $salarioliquido = $salariobruto - $dezporcento;
                }
                echo"<br>O salário bruto é: R$ $salariobruto<br>";
                echo"Enquanto o salário liquido é: R$ $salarioliquido<br>";
            ?>
        </div>
    </main>    
</body>
</html>