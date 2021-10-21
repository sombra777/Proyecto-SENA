
<?php
    session_start();

    require 'database.php';

    if (!empy($_POST['email']) && !empy($_POST['password'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (count($results) > 0 && password_verify($_POST['password'])) {
        $_SESSION ['user_id'] = $results ['id'];
        header('location:  /php-login');
        }else{
            $message('no se pudo ingresar');
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<!--  -->
<!-- <form action="Leer_archivo.php" method="POST">
    <h3>Ingrese La direccion del archivo</h3>
    <p>Url: <input type="text" name="Url-archivo" ></p>
    
    <p><input type="submit" value="Enviar"></p>
</form> -->

<!-- <form action="MostrarCarpeta.php" method="post">
    <h3>Ingrese La direccion del repositorio</h3>
    <p>Url - Carpeta: <input type="text" name="Url-carpeta"></p>
    <p><input type="submit" value="Mostrar"></p>
    
</form> -->

<h2>Selecciona una imagen:</h2>
	<form action="Procesar.php" enctype="multipart/form-data" method="POST">
		<input type="file" name="imagen" required>
		<br>
		<br>
		<button type="submit">Enviar</button>
	</form>

    

</body>
</html>





<<<<<<< HEAD









<!-- # Incluir autoload




// switch (stristr($texto,'')) {
//     case 'factura' || 'Factura':
//         echo " <br>Es una factura </br> ";
//         break;
//     case 'cuenta de cobro' || 'Cuenta de cobro':
//         echo " <br>Es una Cuenta de cobro </br> ";
//         break;
//     case 'PAGARÉ' || 'pagaré' || 'Pagaré':
//         echo "<br>Es un Pagaré </br> ";
//         break;
// }

// if(stristr($texto, 'factura')) {
//     echo " <br>Es una factura </br> ";
// }
// if(stristr($texto, 'cuenta de cobro' || 'Cuenta de cobro')) {
    
//     echo " <br>Es una Cuenta de cobro </br> ";

    
// }
// if(stristr($texto, 'PAGARÉ' || 'pagaré' || 'Pagaré')) {
    
//     echo " <br>Es un Pagaré </br> ";
    
    
// }




// echo "<pre>";
// echo $texto;
// echo "</pre>";
    // echo "<br> </br>";
    // include('manipular.php');

    
    // function showFiles($path){

    //     $dir = opendir($path);
    //     if(eregi(".*\.pdf", $path.$current))
    //     $files = array();
    //     while ($current = readdir($dir)){
    //         if( $current != "." && $current != "..") {
    //             if(is_dir($path.$current)) {
    //                 showFiles($path.$current.'/');
    //             }
    //             else {
    //                 $files[] = $current;
    //             }
    //         }
    //     }
    //     echo '<h2>'.$path.'</h2>';
    //     echo '<ul>';
    //     for($i=0; $i<count( $files ); $i++){
    //         echo '<li>'.$files[$i]."</li>";
    //     }
    //     echo '</ul>';
    // }

=======
<body class="bg-gradient-primary">
    <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
    <?php endif; ?>
        <div class="container">

        <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-8 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                    <!-- Nested Row within Card Body -->

                        <div class="row-vw-100">

                            <div class="col-lg-10-vw-100">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>

                                        <img src="img\login.png" class="m-4" width="250px" alt="">

                                    

                                    </div>
                                <form action="login.php" method="POST">
                                    <input name="email" type="text" placeholder="Enter your email">
                                    <input name="password" type="password" placeholder="Enter your Password">
                                    <input type="submit" value="Submit">
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
>>>>>>> d4d3e6393958855fd259f09a46781c95c389bb6c








    // function unirContenidosFicheros($path){
    //     $unioncontenidos= "";
    //     echo "<h1>Leyendo ficheros de una carpeta:</h1>";
    //     // Abrimos la carpeta que nos pasan como parámetro
    //     $dir = opendir($path);
    //     // Leo todos los ficheros de la carpeta
    //     while ($elemento = readdir($dir)){
    //      // Tratamos los elementos . y .. que tienen todas las carpetas
    //         if( $elemento != "." && $elemento != ".."){
    //       // Si es una carpeta
    //         if( is_dir($path.$elemento) ){
    //        // Muestro la carpeta
    //         echo "<p><strong>CARPETA: ". $elemento ."</strong></p>";
    //        // Si es un fichero
    //         } else {
    //        // Con este proceso leemos el fichero
    //         $fp = fopen($path.$elemento, "rb");
    //         $unioncontenidos .= fread($fp, filesize($path.$elemento));
    //         fclose($fp);
    //         echo "<br />". $elemento;
    //         }
    //         }
    //     }
        
    //     // Mostramos el resultado final
    //     echo "<h2>Resultado final</h2><pre><code>". $unioncontenidos ."</code></pre>";
    //     }
        
    //     unirContenidosFicheros("Repositorio/");


 -->