<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::CALCULADORA BASICA::</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div id= "calculadora">
    <!--Aprendiz: JUAN FELIPE HERRERA PINZON
        Curso Desarrollo Web PHP
        Taller: Manejo de funciones -->
     <h1>CALCULADORA BASICA</h1>
        <br>
        
    <form method="" action="index.php">

<input type="number" name="numero1" id="input" placeholder="INGRESE UN NUMERO" required>
<br>
<br>
<select name="opciones" id="input">
    <option value="0">Sumar</option>
    <option value="1">Restar</option>
    <option value="2">Multiplicar</option>
    <option value="3">Dividir</option>
    </select>
    <br>
    <br>
    <input type="number" name="numero2" id="input" placeholder="INGRESE UN NUMERO" required>
    <br>
    <br>
    <input type="submit" name="calcular" value="CALCULAR" id="input">
    <br>
    <br>
    <br>





</form>

</center>
</div>

</body>
</html>
<center>
<div id="resultado">
<?php

include("clase.php");



if(isset($_REQUEST['calcular'])){
    $n1=$_REQUEST['numero1'];
    $n2=$_REQUEST['numero2'];
    $op=$_REQUEST['opciones'];

    switch($op){

        case 0:echo "$n1 + $n2 = " .Matematica::sumar($n1, $n2);break;
        case 1:echo "$n1 - $n2 = " .Matematica::restar($n1, $n2);break;
        case 2:echo "$n1 * $n2 = " .Matematica::multiplicar($n1, $n2);break;
        case 3:echo "$n1 / $n2 = " .Matematica::dividir($n1, $n2);break;
        

    }

}

?>

</div>

</center>
<footer class = "footer">By JuanF.Herrera Calculadora Básica 2022 © Todos los derechos reservados </footer>

<br>
<br>
<br>
<br>
<br>