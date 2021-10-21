<?php 

//crear una carpeta

//$micarpeta = '/ruta/miserver/public_html/carpeta';
$micarpeta = 'nueva';
if (!file_exists($micarpeta)) {
    mkdir($micarpeta, 0777, true);
    echo 'creada con exito';
}



//copiar archivo a carpeta
if (copy('fatura.pdf' , 'nueva/fatura.pdf')) {
    echo 'Se ha copiado el archivo corretamente';
    }
    else {
    echo 'Se produjo un error al copiar el fichero';
    }
if (copy('imagen.pdf' , 'nueva/imagen.pdf')) {
    echo 'Se ha copiado el archivo corretamente';
    }
    else {
    echo 'Se produjo un error al copiar el fichero';
    }

    
?>

