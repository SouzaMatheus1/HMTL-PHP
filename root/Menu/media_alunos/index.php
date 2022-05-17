<!DOCTYPE html>
<html lang="en">
<head>
    <font size=4 face='Comic Sans MS'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo média dos alunos</title>
</head>
<body bgcolor=#87CEFA background="thumb-1920-499486.jpg"><center>
<br><h1>MÉDIA DOS ALUNOS</h1><br>
<form action= 'index.php' method='post'><br><br><br><br><br><br>
    Nome: <input type="text" name="Nome"><br><br>

    Nota 1: <input type="text" name="nota1"><br><br>
    Nota 2: <input type="text" name="nota2"><br><br>
    Nota 3: <input type="text" name="nota3"><br><br>
    Nota 4: <input type="text" name="nota4"><br><br> 

    <input type="submit" name="submit" value="Ver média!" />
</form>
<br><br>
<?php

$nome = $_POST['Nome'];
$nota1 = $_POST['nota1'];
$nota1 = number_format($nota1, 2, '.', '');
$nota2 = $_POST['nota2'];
$nota2 = number_format($nota2, 2, '.', '');
$nota3 = $_POST['nota3'];
$nota3 = number_format($nota3, 2, '.', '');
$nota4 = $_POST['nota4'];
$nota4 = number_format($nota4, 2, '.', '');

$med = ($nota1+$nota2+$nota3+$nota4)/4;
$media = number_format($med, 2, '.', '');

echo"A média do alunx $nome é $media";

if ($media < 7.00){
    echo"<font color=\"#FF0000\"><br>O alunx $nome está de recuperação❌<br>";
}
else {
    echo"<font color=\"#008000\"><br>O alunx $nome passou direto<br>✅";
}
?>    
</center>
</body>
</html>