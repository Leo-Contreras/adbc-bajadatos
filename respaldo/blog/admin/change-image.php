<?php
session_start();
include('includes/config.php');
error_reporting(0);
$icn = null;
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['update'])) {
        $anterior = $_POST['imagenAnterior'];
        $imgfile = $_FILES["postimage"]["name"];
        // get la extensión de la imagen
        $extension = substr($imgfile, strlen($imgfile) - 4, strlen($imgfile));
        // extensiones permitidas
        $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
        // Validación para extensiones permitidas .in_array() función busca una matriz para un valor específico.
        if (!in_array($extension, $allowed_extensions)) {
            echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
        } else {
            //cambiar el nombre del archivo de imagen
            $imgnewfile = md5($imgfile) . $extension;
            // Código para mover la imagen al directorio
            if(move_uploaded_file($_FILES["postimage"]["tmp_name"], "postimages/" . $imgnewfile)){
                $postid = intval($_GET['pid']);
                $query = mysqli_query($con, "update tblposts set PostImage='$imgnewfile' where id='$postid'");
                $e = mysqli_errno($con);
                if ($query) {
                    unlink($anterior);
                    $msg = "Publicar imagen destacada actualizada ";
                } else {
                    $error = "Algo salió mal . Inténtalo de nuevo. ".$e;
                }
            }
            else {
                $error = "Algo salió mal. Inténtalo de nuevo. ".$e;
            }

        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Gobierno Abierto | Actualizar imagen</title>
        <!-- Summernote css -->
        <link href="../plugins/summernote/summernote.css" rel="stylesheet" />
        <!-- Select2 -->
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <!-- Jquery filer css -->
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
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
        <script>
            function getSubCat(val) {
                $.ajax({
                    type: "POST",
                    url: "get_subcategory.php",
                    data: 'catid=' + val,
                    success: function(data) {
                        $("#subcategory").html(data);
                    }
                });
            }
        </script>
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <?php include('includes/topheader.php'); ?>
            <!-- ========== Left Sidebar Start ========== -->
            <?php include('includes/leftsidebar.php'); ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Actualizar imagen </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"> Publicaciones </a>
                                        </li>
                                        <li>
                                            <a href="#"> Editar Publicación </a>
                                        </li>
                                        <li class="active">
                                            Actualizar imagen
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
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
                        <form name="addpost" method="post" enctype="multipart/form-data">
                            <?php
                            $postid = intval($_GET['pid']);
                            $query = mysqli_query($con, "select PostImage,PostTitle from tblposts where id='$postid' and Is_Active=1 ");
                            while ($row = mysqli_fetch_array($query)) {
                                $icn = $row['PostImage'];
                            ?>
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="p-6">
                                            <div class="">
                                                <form name="addpost" method="post">
                                                    <div class="form-group m-b-20">
                                                        <label for="exampleInputEmail1">Titulo de publicación</label>
                                                        <input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['PostTitle']); ?>" name="posttitle" readonly>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="card-box">
                                                                <h4 class="m-b-30 m-t-0 header-title"><b>Imagen de publicación actual</b></h4>
                                                                <img src="postimages/<?php echo htmlentities($row['PostImage']); ?>" width="300" />
                                                                <br />
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card-box">
                                                            <h4 class="m-b-30 m-t-0 header-title"><b>Nueva imagen destacada</b></h4>
                                                            <input type="text" id="imagenAnterior" name="imagenAnterior" value="postimages/<?php echo $icn; ?>" hidden>
                                                            <input type="file" class="form-control" id="postimage" name="postimage" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Actualizar </button>
                                                </form>
                                            </div>
                                        </div> <!-- end p-20 -->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->
                <?php include('includes/footer.php'); ?>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
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
        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>
        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>
    </body>
    </html>
<?php } ?>