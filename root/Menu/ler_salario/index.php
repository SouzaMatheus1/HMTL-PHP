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
        <title>Hipotheticus loja</title>
    </head>
    <header>
        <div class="cabeçalho">

            Hipotheticus LTDA.

        </div>
    </header>
    <body style="background-image: url(burro.jpg)" >
        <main>
            <div class="nav">
                <form action='index.php' method='post'>
                    Quanto você vendeu? <input type="text" name="vendas"><br><br>
                    <input type="submit" value="ok">
                </form>
                <?php
                    $vendas = $_POST['vendas'];
                    $salario = 1500.00;

                    if($vendas <= 15000.00){
                        $tresporcento = $vendas*0.03;
                        $salariofinal = $salario + $tresporcento;

                    }else{
                        $cincoporcento = $vendas*0.05;
                        $salariofinal = $salario + $cincoporcento;
                    
                    }
                    
                    echo"<br>O salário do vendeor é de: R$ $salariofinal";
                ?>
            </div>
        </main>
    </body>
</html>