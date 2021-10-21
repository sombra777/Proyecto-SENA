<?php
    $formato = array('.pdf');
    if(isset($_POST['boton'])){
        //PARA CAPTURAR EL NOMBRE DEL ARCHIVO
        $nombreArchivo = $_FILES['Url-archivo']['name'];
        $nombreTmpArchivo = $_FILES['Url-archivo']['tmp_name'];
        $ext = substr($nombreArchivo,strrpos($nombreArchivo, '.'));
        if(in_array($ext, $formato)){
            //para subir un archivo a una carpeta
            if(move_uploaded_file($nombreTmpArchivo, "archivo/$nombreArchivo")){
                 echo "Archivo subido exitosamente";
            }

        }else{
            echo"No señor, Archivo no permitido";
        }
    }
    // session_start();

    // require 'database.php';

    // if (isset($_SESSION['user_id'])) {
    //     $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    //     $records->bindParam(':id', $_SESSION['user_id']);
    //     $records->execute();
    //     $results = $records->fetch(PDO::FETCH_ASSOC);

    //     $user = null;

    //     if (count($results) > 0) {
    //     $user = $results;
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
        <?php if(!empty($user)): ?>
        <br> Welcome. <?= $user['email']; ?>
        <br>You are Successfully Logged In
        <a href="main.php">
            Logout
        </a>
    <?php endif; ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Gestor de archivos</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <span><i class="fas fa-folder"></i>Carpeta</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                
            </div>

            <!-- Sidebar Message -->
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- FORMULARIO DE SUBIR LOS ARCHIVOS-->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method = "POST" enctype = "multipart/form-data">
                        <div class="input-group">
                            <div class="input-group-append">
                                <div class="input-group">
                                    <input type="file" id="inputFile" onchange="selectFolder(event);" webkitdirectory mozdirectory msdirectory odirectory directory multiple="multiple" class="" name="Url-archivo" >
                                    <input type="submit" value = "Subir archivos" name = "boton">
                                </div>
                            </div>
                        </div>
                    </form>
                </nav>

                
                <div class="container-fluid d-flex row-vh-100" >
                    <img src="img/carpeta-de-windows.jpeg" class="img-fluid" width="250px" alt="">
                </div>
                <div class="row">
                    <p class="m-3">
                        
                </div>

            </div>
            <!-- End of Main Content -->
                <script>
                    function getUrl(){
                        var url = document.getElementById('inputFile').files[0].name;
                        alert(url);
                        }

                </script>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>