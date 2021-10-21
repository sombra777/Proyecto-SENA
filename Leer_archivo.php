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

        $textojson = json_encode($texto);   // formato json


        
        // switch (true) {
        //     case stristr($texto ,"Cuenta" || "letra") == TRUE:
        //         echo "<br>Es una Letra de cambio</br>";
        //         echo $texto;
        //         break;
        //     case stristr($texto ,'Factura' || 'factura'):
        //         echo "<br>Es una factura</br>";
        //         break;
        //     case stristr($texto ,'cuenta de cobro' || 'Cuenta de cobro'):
        //         echo "<br>Es una Cuenta de cobro</br>";
        //         break;
        //         case stristr($texto ,'cuenta de cobro' || 'Cuenta de cobro'):
        //             echo "<br>Es una Cuenta de cobro</br>";
        //             break;
        //     default:
        //         echo "<br>Es otro tipo de documento </br>";
        //         break;
        // }
//////HAY QUE HACER QUE ESTOOOO SIRVA BIEN (Toy que chillo mk)
        if (stristr($textojson,'Factura' || 'factura')) {
            echo " <br>Es una factura </br> ";
        }
        if (stristr($textojson, 'cuenta de cobro' || 'Cuenta de cobro')) {
            echo " <br>Es una Cuenta de cobro </br> ";
        }
        if (stristr($textojson,'LETRA DE CAMBIO' || 'letra de cambio' || 'Letra de cambio' || 'Letradecambio')) {
            echo "<br>Es una Letra de cambio</br>";
        }

        
        


?>