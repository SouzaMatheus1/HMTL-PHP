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
    <body background="fundo.jpg">
        <header>
                <div class="cabeçalho">
                    
                    Hipoteticus LTDA.

                </div> 
        </header>
            <main>
                <div class="nav">      
                    <form action='index.php' method='post'>
                        Número para a tabuada: <input type="number" name="num"><br>
                        <input type="submit" value="ok">
                    </form>

                    <?php
                    $num = $_POST['num'];

                    for($i = 0; $i <= 10; $i++){
                        $tabuada = $num * $i;
                        echo"<br>$num x $i = $tabuada";
                    }
                
                    ?>

                </div>
            </main>    
    </body>
</html>