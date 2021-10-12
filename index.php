<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>
    <H1 align="center">  ejercicio 1 </H1>
    

    <form action="index.php" method="post" align="center">
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="number" name="edad" /></p>
 <p><input type="submit" value="Enviar"/></p>
</form>

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

<form action="index.php" method="post" align="center">
 <p>numero: <input type="number" name="numero" /></p>
 <p><input type="submit" value="Enviar"/></p>
</form>

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
<H1 align="center">  nombre : jhonatan david  dueñas rosero </H1>

    </body>
</html>