<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $secondlastname = $_POST['secondlastname'];
        $gener = $_POST['gener'];
        $birthdate = $_POST['birthdate'];
        $birthofstate = $_POST['birthofstate'];
        $status = 1;
        $query = mysqli_query($con, "insert into tbldatosusuario(Name,LastName,SecondLastName,Gener,Birthdate,Stateofbirth,Is_Active) values('$name','$lastname','$secondlastname','$gener','$birthdate','$birthofstate','$status')");
        
        $insertid = mysqli_insert_id($con);

        $iduser = $_SESSION['usuarioid'];
        
        $is = mysqli_query($con, "update  tbladmin set DatosId='$insertid' where id='$iduser'");
        
        if ($query) {
            $msg = "Registro completado";
            header('location:dashboard.php');
        } else {
            $error = "Algo salió mal. Inténtalo de nuevo.";
        }
    }

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Gobierno Abierto | Complete el registro</title>
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
                                    <h4 class="page-title">Complete el registro</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Registro </a>
                                        </li>
                                        <li class="active">
                                        Complete el registro
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
                                    <h4 class="m-t-0 header-title"><b>Complete el registro </b></h4>
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
                                            <form class="form-horizontal" name="datospersonal" method="post">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Nombre</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Apellido Paterno</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="lastname" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Apellido Materno</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="secondlastname" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Genero como en la identificación oficial</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" name="gener" required>
                                                            <option value="">Seleccione el genero</option>
                                                            <option value="M">Masculino</option>
                                                            <option value="F">Femenino</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Fecha nacimiento</label>
                                                    <div class="col-md-10">
                                                        <input type="date" class="form-control" name="birthdate" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Estado de nacimiento</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="birthofstate" required />
                                                    </div>
                                                </div>
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