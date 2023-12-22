<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['submit'])) {
        $user   = $_POST['user'];
        $email  = $_POST['email'];
        $tipo   = $_POST['rol'];
        $p = "s3cr3t#2023";
        $password = password_hash($p, PASSWORD_DEFAULT);
        $status = 1;
        $query = mysqli_query($con, "insert into tbladmin(AdminUserName,AdminPassword,AdminEmailId,RolId,Is_Active) values('$user','$password','$email','$tipo','$status')");
        if ($query) {
            $msg = "Usuario creado";
        } else {
            $error = "Algo salió mal. Inténtalo de nuevo.";
        }
    }
    $rol = $_SESSION['usuariorol'];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Gobierno Abierto | Agregar usuario</title>
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <?php include('includes/topheader.php'); ?>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <?php include('includes/leftsidebar.php'); ?>
            <!-- Left Sidebar End -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Agregar usuario</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Usuarios </a>
                                        </li>
                                        <li class="active">
                                            Agregar usuario
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Agregar usuario </b></h4>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!---Success Message--->
                                            <?php if ($msg) { ?>
                                                <div class="alert alert-success" role="alert">
                                                    <strong>Bien hecho!</strong> <?php echo htmlentities($msg); ?>
                                                </div>
                                            <?php } ?>
                                            <!---Error Message--->
                                            <?php if ($error) { ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Oh, error!</strong> <?php echo htmlentities($error); ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal" name="user" method="post">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Usuario</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="user" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Correo electrónico</label>
                                                    <div class="col-md-10">
                                                        <input type="email" class="form-control" name="email" required />
                                                    </div>
                                                </div>
                                                <?php
                                                if($rol == 1)
                                                {
                                                    ?>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Rol</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="rol" required>
                                                            <option>Seleccione un rol</option>
                                                            <option value="1">SuperAdministrador</option>
                                                            <option value="2">Administrador</option>
                                                            <option value="3">Usuario</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <?php
                                                }
                                                if($rol == 2) 
                                                {
                                                    ?>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Rol</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="rol" required>
                                                            <option>Seleccione un rol</option>
                                                            <option value="2">Administrador</option>
                                                            <option value="3">Usuario</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <?php
                                                }
                                                ?>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                        <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                            Enviar
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->
                <?php include('includes/footer.php'); ?>
            </div>
        </div>
        <script>
            var resizefunc = [];
        </script>
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    </body>
    </html>
<?php } ?>