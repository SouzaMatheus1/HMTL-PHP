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
        <title>Hipoteticus academia</title>
    </head>
    <body style="background-image: url(wowc.jpg)"> 
        <header>
            <div class="cabeçalho">
                
                Hipoteticus LTDA.

            </div> 
        </header>
            <main>
                <div class="nav">      
                    <form action='index.php' method='post'>
                        Nome completo: <input type="text" name="nome" style="width: 243px"><br>
                        CPF: <input type="text" name="cpf" style="width: 322px"><br>
                        Sexo:   <select name="sexo">
                                    <option value="valor1">Masc</option>
                                    <option value="valor2" selected>Fem</option>
                                    <option value="valor1">Outro</option>
                                </select>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Idade: <input type="text" name="idade" ><br>
                        Altura: <input type="text" name="altura" style="width: 308px"><br>
                        Peso: <input type="text" name="peso" style="width: 316px"><br>
                        <input type="submit" value="ok">
                    </form>

                    <?php
                        $nome = $_POST['nome'];
                        $cpf = $_POST['cpf'];
                        $sexo = $_POST['sexo'];
                        $idade = $_POST['idade'];
                        $altura = $_POST['altura'];
                        $peso = $_POST['peso'];

                        $imc = ($peso / ($altura*$altura))*10000;

                        echo"<br>$nome";

                        if($imc <= 18.5){
                            echo"<br>Magreza<br>";
                        }elseif($imc > 18.5 && $imc < 24.9){
                            echo"<br>Normal<br>";
                        }elseif($imc > 24.9 && $imc < 30.0){
                            echo"<br>Sobrepeso<br>";
                        }else{
                            echo"<br>Obesidade<br>";
                        }
                    ?>
                </div>
            </main>    
    </body>
</html>