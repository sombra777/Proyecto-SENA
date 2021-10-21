<?php
//Buscar la carpeta y su contenido
$Urlcarpeta = $_POST['Url-carpeta'];
$path = $Urlcarpeta;
$total_archivos = analizar_directorio($path);
// echo "Hay $total_archivos archivos en el la carpeta : $path<br>";
//------------------------------------------------------------- 
function analizar_directorio($path) {
$total_archivos = 0;
$files = array();
$dir = opendir($path);
while ($elemento = readdir($dir)){
    if( $elemento != "." && $elemento != ".."){
     // Si es una carpeta
        if( is_dir($path."/".$elemento) ){
         // Muestro la carpeta
            echo("Procesando subdirectorio: ". $elemento . "<br>");
            $total_archivos += analizar_directorio($path."/".$elemento);
     // Si es un fichero
        } else {
            $total_archivos++;
            $files[] = $elemento;
        }
    }
    
}
// echo '<h2>'.$path.'</h2>';
// echo '<ul>';
for($i=0; $i<count( $files ); $i++){
    echo '<li>'.$files[$i]."</li>";
}
// echo '</ul>';

return $total_archivos;

}


?>

