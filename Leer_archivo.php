<?php
include "vendor/autoload.php";

//Buscar el Documento pdf
        $Url = $_POST['Url-archivo'];
        $parseador = new \Smalot\PdfParser\Parser();
        $nombreDocumento = $Url;
        $documento = $parseador->parseFile($nombreDocumento);

            if ($documento->getText()) {
            echo 'es texto';
        }else {
            echo('es imagen'); 
        } 

        $texto = $documento->getText();

        $texto = json_encode($texto);   // formato json

        if (stristr($texto, 'factura')) {
            echo " <br>Es una factura </br> ";


            
        } elseif (stristr($texto, 'cuenta de cobro' || 'Cuenta de cobro')) {
            echo " <br>Es una Cuenta de cobro </br> ";



        } elseif (stristr($texto,'LETRA DE CAMBIO' || 'letra de cambio' || 'Letra de cambio' || 'Letradecambio')) {
            echo "<br>Es una Letra de cambio</br>";
        }

        echo $texto;
        


?>