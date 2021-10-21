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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

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

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>