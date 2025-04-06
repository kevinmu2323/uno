<?php
session_start(); 

$resu1=0;
$resu2=0;
$resu1 = ($_SESSION['resu1']) ? $_SESSION['resu1'] : 0;
$resu2 = ($_SESSION['resu2']) ? $_SESSION['resu2'] : 0; 

 if($num1=$_POST['Num1'])
 {
    $_SESSION['resu1'] +=$num1;
    
 }
 if($num2=$_POST['Num2'])
 {
    $_SESSION['resu2'] +=$num2;
 }
    if($resu1==500)
    {
        echo "Ganador n°1";
    }
if(isset($_POST['Borrar']))
{
    
    $_SESSION['resu1'] = 0;
    $_SESSION['resu2'] = 0;
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form action="uno.php" method="post">
        <p>Jugador n°1</p>
        <input type="text" id="Num1" name="Num1" >
        <p>Jugador n°2</p>
    <input type="text" id="Num2" name="Num2"  >
        <input type="submit" id="consultar" name="consultar" >
        <button type="sudmit" id="Borrar" name="Borrar" placeholder="Borrar">Borrar</button>
 <p>Resultado del n°1= <?php echo$_SESSION['resu1'] ?></p>
 <p>Resultado del n°2= <?php echo $_SESSION['resu2'] ?></p>

</body>
</html>

    </form>