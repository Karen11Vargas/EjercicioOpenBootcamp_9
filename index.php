<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
    
 <?php
    
    require 'Persona.php';

    $persona->setNombre("KarenL");
    $persona->setEdad(16);
    $persona->setTelefono(123456);
    $cliente->setCredito(12);
    $trabajador->setSalario(1.30000);



    echo '<h3>Nombre: </h3>'.$persona->getNombre()."<br>";
    echo '<h3>Edad: </h3>' .$persona->getEdad()."<br>";
    echo '<h3>Telefono: </h3>' .$persona->getTelefono()."<br>";
    echo '<h3>Credito: </h3>' .$cliente->getCredito()."<br>";
    echo '<h3>Saldo: </h3>' .$trabajador->getSalario()."<br>";



 ?>
</body>
</html>
