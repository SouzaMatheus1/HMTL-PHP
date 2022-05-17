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
    <body style="background-image: url(shrek.jpg)"> 
        <header>
            <div class="cabeçalho">
                
                Hipoteticus LTDA.

            </div> 
        </header>
            <main>
                <div class="nav">      
                    <form action='index.php' method='post'>
                        Horas trabalhadas: <input type="text" name="horas"><br>
                        Horas extras: <input type="text" name="extra"><br>
                        <input type="submit" value="ok">
                    </form>

                    <?php
                    
                        $horast = $_POST['horas'];
                        $horase = $_POST['extra'];
                        $horaextra = $horase*15.00;
                        $porhora = $horast*10.00;
                        $salariobruto = $porhora + $horaextra;
                        $dezporcento = $salariobruto*0.01;
                        $salarioliquido = $salariobruto - $dezporcento;

                        echo"<br>O salário bruto é: R$$salariobruto<br>";
                        echo"Enquanto o salário liquido é: R$$salarioliquido<br>";
                    ?>
                </div>
            </main>    
    </body>
</html>