<?php
/*
 $wawa = 2;
 $precio = 2500;
    $descuento = $precio - ($precio* 20/100); 
    $descuento2 = $precio - ($precio* 10/100); 
    $wawa > 2 ? print("compraste ". $wawa . " camisas a ". $wawa * $descuento) : print("compraste ". $wawa . " camisa a ". $wawa * $descuento2 );
$edad = 60;
$genero = "m";
if($genero == "m"){
    if($edad > 60)
    print(" se puede jubilar");
else{
    print(" no");
}
}elseif($genero == "f"){
    if($edad >= 54)
    print(" se puede jubilar");
else{
    print(" no puede");
}
}else{
    print(" Ingrese un genero valido");
}
$edad > 60 && $genero = "m" ? print() : print();
*/
$w = readline("hola, ingrese numero 1 ");
$www =  readline("hola, ingrese numero 2 ");
$ww =  readline("hola, ingrese la operacion ");
switch($ww){
case "+" : print($w + $www);
break;
case "-" : print($w - $www);
break;
case "/" : if($w == 0 || $www == 0){
print("No se puede dividir en 0");
}else{
    print($w / $www);
} ;
break;
case "*" : print($w * $www);
break;
default : print ("no existe ese operador lul");
}
?>