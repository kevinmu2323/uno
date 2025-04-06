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
