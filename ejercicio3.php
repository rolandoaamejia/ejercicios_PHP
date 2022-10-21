// El metodo Get muestra los datos a traves de la URL y el POST los oculta

<?php
if($_GET){

    $nombre=$_GET['nombre'];

    echo "Hola " .$nombre;
    
}
?>