<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Verificador de positivo</title>
</head>
    <body>
        <header>
            <div class="cabeçalho">
                    <h1 class="texto-cabeça">Verificador de números</h1>
                <div class="imagem-head">
                        <img src="shrek.png">
                </div>
            </div>
        </header>
        <main>
            <div class="corpo"> 
                    <form action= 'index.php' method='post'><br><br><br><br><br><br>
                        Número: <input type="number" name="numero"><br><br>
                        <input type="submit" name="submit" value="Ver resultado!" />
                    </form>

                <?php
                
                    $numero = $_POST['Número'];

                    if ($numero < 0){
                        echo"<br>O número informado é negativo";
                    }
                    else if ($numero == 0){
                        echo"<br>O número informado é igual a zero";
                    }else{
                        echo"<br>O número informado é positivo";
                    }

                ?>
                </div>
        </main>
    </body>
</html>