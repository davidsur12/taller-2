<!DOCTYPE html>
<html>
    <head>
        <title>jhonatan dueñas</title>

       
        <link href="styles/style1.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
	  <div class="contenedorpadre">
      <div class="contenedor">
	
	
    <H1 align="center">  ejercicio 1 </H1>
    <center>

    <form action="index.php" method="post" align="center"  class="contenedor1">
 <p>Su nombre: <input type="text" name="nombre"  class="redondeado" /></p>
 <p>Su edad: <input type="number" name="edad"  class="redondeado" /></p>
 <p><input type="submit" value="Enviar"/></p>
</form>
</center>
<?php

/*
if (isset($_REQUEST['nombre'])): ?>
    <p>¿De verdad te llamas <?php echo $_REQUEST['nombre']; ?>? Qué nombre más bonito.</p>
<?php endif; */


//$nombre=isset($_POST['nombre']);
//$edad=isset($_POST['edad']);

 
    

        if( (isset($_POST['nombre']) && !empty($_POST['nombre'])) && (isset($_POST['edad']) && !empty($_POST['edad']))) {
$edad=(int) $_POST['edad']  ;  
if($edad >= 18){
    echo "<center>";
    echo "Biembenido " . $_POST['nombre'] ;
    echo "</center>";
} else{
    echo "<center>";
    echo "eres menor de edad no puedes accerder al sitio" ;
    echo "</center>";
}

        }
    
      if( (isset($_POST['nombre']) && empty($_POST['nombre'])) or (isset($_POST['edad']) && empty($_POST['edad']))){
        echo "<center>";
        echo "uno de los campos esta vacio";
        echo "</center>";
      }
     



?>

<hr>
<H1 align="center">  ejercicio 2 </H1>

<center>
<form action="index.php" method="post" align="center">
 <p>numero: <input type="number" name="numero"   class="redondeado"/></p>
 <p><input type="submit" value="Enviar" /></p>
</form>
</center>

<?php

if( (isset($_POST['numero']) && !empty($_POST['numero'])) ) {

$numero = $_POST['numero'];
if(($numero %2) == 0){
    echo "<center>";
    echo "el numero " . $numero .  " es  par";
    echo "</center>";
}else{
    echo "<center>";
    echo "el numero " . $numero .  " no es  par";
echo "</center>";

}

}

if( (isset($_POST['numero']) && empty($_POST['numero'])) ){
    echo "<center>";
echo "ingresa un numero";
echo "</center>";


}

?>


<hr>
<H1 align="center">  ejercicio 3 </H1>
<center>
<p>ingresa un numero del 1 al 7</P>
<form action="index.php" method="post" align="center">
 <p>numero: <input type="number" name="numerodia"   class="redondeado"/></p>
 <p><input type="submit" value="Enviar" /></p>
</form>
</center>
<?php 

if( (isset($_POST['numerodia']) && !empty($_POST['numerodia'])) ) {

    $numerodia = $_POST['numerodia'];
    echo "<center>";
    switch($numerodia){
        
 case 1:
    echo "lunes";
    break;
    case 2:
        echo "martes";
        break;
        case 3:
            echo "miercoles";
            break;
            case 4:
                echo "jueves";
                break;
                case 5:
                    echo "viernes";
                    break;
                    case 6:
                        echo "sabado";
                        break;
                        case 7:
                            echo "domingo";
                            break;
    


    }
    echo "</center>";
    }

?>

<hr>
<H1 align="center">  ejercicio 4 </H1>

<p align="center">numeros pares del 1 al 20</P>
<?php
$n=1;

while($n <= 20){

    echo "<center>";

    if(($n % 2)==0){
        echo($n );
    }
    echo "</center>";
    $n++;
    
}



?>



<hr>
<H1 align="center">  ejercicio 5 </H1>

<p align="center">numeros pares del 1 al 20 con multiplos de 4</P>
<?php
$n=1;

while($n <= 20){

    echo "<center>";

    if(($n % 2)==0){
        
        if(($n%4)==0){
            echo($n ." es multplo de 4 <br>");

        }
        else{
            echo($n ." no es multplo de 4 <br>" );

        }
      
    }
    echo "</center>";
    $n++;
    
}


?>

<hr>
<H1 align="center">  ejercicio 6 </H1>

<p align="center">numeros  primos del 1 al 100</P>
<?php
$num=2;
$num2=1;
$cont=0;
//aqui
while($num <= 100){

    echo "<center>";

    while($num2 <= $num){
if(($num % $num2) == 0){

    $cont++;
}
if($cont > 2){
    $cont=0;
    $num2=1;
    break;
}
$num2++;
}

if($cont == 2){
    $cont=0;
    $num2=1;
echo($num . "  es primo");

}
    
    echo "</center>";
    $num++;
    
}
//aqui

?>


<hr>
<H1 align="center">  ejercicio 7 </H1>

<p align="center">escribir  los numeros del 1 al 100 con dos excepciones para los numeros divisibles por 3 imprime fizz y para los numeros  divisibles por 5 imprimir buzz</P>

<?php 
 echo "<center>";
for($i = 1 ; $i<=100 ; $i++){
	


if(($i%3) ==  0 && ($i%5) ==  0){//verifico si es divisible entre 3 y 5 imprimo fizzbuzz
	
		echo("FizzBuzz" . "<br>");
}
else{ //si no  es divisible entre 3 y 5
	if(($i%3) ==  0){ // si es divisible entre 3
		
			echo("Fizz" . "<br>");//imprimo
	}
	else if(($i%5) == 0){ // si es divisible entre 3
		echo("Buzz" . "<br>");//imprimo
	}
	else{
		
		echo($i . " <br>");//imprimo
	}
	
}
	
	
}
 echo "</center>";

?>

<hr>
<H1 align="center">  ejercicio 8 </H1>

<p align="center">en un areglo escribir los dias de la semana con su respectivo key o indice en un areglo. imprima en pantalla su areglo con uso de foreach</P>



<?php


$dias=array("lunes" , "martes" , "miercoles" , "jueves" , "viernes" , "sabado" , "domingo");

foreach($dias as $valor){
	
	echo "<center>";
	echo($valor );
	echo "</center>";
}


?>
final
</div>

</div>



<H1 align="center">  nombre : jhonatan david  dueñas rosero </H1>



    </body>
</html>