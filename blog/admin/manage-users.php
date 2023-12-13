<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    if ($_GET['action'] == 'del' && $_GET['rid']) {
        $id = intval($_GET['rid']);
        $query = mysqli_query($con, "update tbladmin set Is_Active='0' where id='$id'");
        $msg = "Usuario inactivo";
    }
    // Code for restore
    if ($_GET['resid']) {
        $id = intval($_GET['resid']);
        $query = mysqli_query($con, "update tbladmin set Is_Active='1' where id='$id'");
        $msg = "Usuario restablecido con exito";
    }
    // Code for Forever deletionparmdel
    if ($_GET['action'] == 'parmdel' && $_GET['rid']) {
        $id = intval($_GET['rid']);
        $query = mysqli_query($con, "delete from tbladmin where id='$id'");
        $delmsg = "Usuario eliminado permanentemente";
    }
    //Code for restore password
    if($_GET['action'] == "res") {
        $id = intval($_GET['pas']);
        $p = "s3cr3t#2023";
        $pas = password_hash($p, PASSWORD_DEFAULT);
        $query = mysqli_query($con, "update tbladmin set AdminPassword='$pas' where id='$id'");
        $msg = "Restored password";
    }

    $rol = $_SESSION['usuariorol'];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title> Gobierno Abierto | Administrar usuarios</title>
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
                                    <h4 class="page-title">Administrar usuarios</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Usuarios</a>
                                        </li>
                                        <li class="active">
                                            Administrar usuarios
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <?php if ($msg) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <strong>Bien hecho!</strong> <?php echo htmlentities($msg); ?>
                                    </div>
                                <?php } ?>
                                <?php if ($delmsg) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Oh, error!</strong> <?php echo htmlentities($delmsg); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="demo-box m-t-20">
                                        <div class="m-b-30">
                                            <a href="add-user.php">
                                                <button id="addToTable" class="btn btn-success waves-effect waves-light">Agregar <i class="mdi mdi-plus-circle-outline"></i></button>
                                            </a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Usuario</th>
                                                        <th>Correo electrónico</th>
                                                        <th>Rol</th>
                                                        <!-- <th>Last updation Date</th> -->
                                                        <th>Accción</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = "";
                                                    if($rol == 1)
                                                    {
                                                        $query = mysqli_query($con, "Select a.id,a.AdminUserName,a.AdminEmailId,r.nombre as RolId from tbladmin a left join tblroles r on r.id=a.RolId where a.Is_Active=1");
                                                    }
                                                    if($rol == 2)
                                                    {
                                                        $query = mysqli_query($con, "Select a.id,a.AdminUserName,a.AdminEmailId,r.nombre as RolId from tbladmin a left join tblroles r on r.id=a.RolId where (a.Is_Active=1) and (a.RolId=2 || a.RolId=3)");
                                                    }
                                                    // $query = mysqli_query($con, "Select id,AdminUserName,AdminEmailId,CreationDate,UpdationDate from tbladmin where Is_Active=1");
                                                    $cnt = 1;
                                                    $rowcount=mysqli_num_rows($query);
                                                    if($rowcount==0)
                                                    {
                                                    ?>
                                                    <tr>

                                                    <td colspan="7" align="center"><h3 style="color:red">No hay registros</h3></td>
                                                    <tr>
                                                    <?php 
                                                    } else {
                                                    while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <tr>
                                                            <th scope="row"><?php echo htmlentities($cnt); ?></th>
                                                            <td><?php echo htmlentities($row['AdminUserName']); ?></td>
                                                            <td><?php echo htmlentities($row['AdminEmailId']); ?></td>
                                                            <td><?php echo htmlentities($row['RolId']); ?></td>
                                                            <!-- <td><?php echo htmlentities($row['UpdationDate']); ?></td> -->
                                                            <td><a href="manage-users.php?pas=<?php echo htmlentities($row['id']); ?>&action=res" title="Restored password" onclick="return confirm('Do you want to reset this password?')"><i class="fa fa-key" style="color: #29b6f6;"></i></a>
                                                                &nbsp;<a href="manage-users.php?rid=<?php echo htmlentities($row['id']); ?>&action=del" title="Disable user"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
                                                        </tr>
                                                    <?php
                                                        $cnt++;
                                                    }} ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--- end row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="demo-box m-t-20">
                                        <div class="m-b-30">
                                            <h4><i class="fa fa-trash-o"></i> Usuarios eliminados</h4>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored-bordered table-bordered-danger">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Usuario</th>
                                                        <th>Correo electrónico</th>
                                                        <th>Rol</th>
                                                        <!-- <th>Last updation Date</th> -->
                                                        <th>Accción</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = "";
                                                    if($rol == 1)
                                                    {
                                                        $query = mysqli_query($con, "Select a.id,a.AdminUserName,a.AdminEmailId,r.nombre as RolId from tbladmin a left join tblroles r on r.id=a.RolId where a.Is_Active=0");
                                                    }
                                                    if($rol == 2)
                                                    {
                                                        $query = mysqli_query($con, "Select a.id,a.AdminUserName,a.AdminEmailId,r.nombre as RolId from tbladmin a left join tblroles r on r.id=a.RolId where (a.Is_Active=0) and (a.RolId=2 || a.RolId=3)");
                                                    }
                                                    // $query = mysqli_query($con, "Select id,AdminUserName,AdminEmailId,CreationDate,UpdationDate from  tbladmin where Is_Active=0");
                                                    $cnt = 1;
                                                    $rowcount=mysqli_num_rows($query);
                                                    if($rowcount==0)
                                                    {
                                                    ?>
                                                    <tr>

                                                    <td colspan="7" align="center"><h3 style="color:red">No hay registros</h3></td>
                                                    <tr>
                                                    <?php 
                                                    } else {
                                                    while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <tr>
                                                            <th scope="row"><?php echo htmlentities($cnt); ?></th>
                                                            <td><?php echo htmlentities($row['AdminUserName']); ?></td>
                                                            <td><?php echo htmlentities($row['AdminEmailId']); ?></td>
                                                            <td><?php echo htmlentities($row['RolId']); ?></td>
                                                            <!-- <td><?php echo htmlentities($row['UpdationDate']); ?></td> -->
                                                            <td>
                                                                <?php
                                                                if($rol == 1)
                                                                {
                                                                    ?>
                                                                <a href="manage-users.php?resid=<?php echo htmlentities($row['id']); ?>"><i class="ion-arrow-return-right" title="Restore this user"></i></a>
                                                                &nbsp;<a href="manage-users.php?rid=<?php echo htmlentities($row['id']); ?>&action=parmdel" title="Delete forever" onclick="return confirm('¿Realmente deseas eliminarlo?')"> <i class="fa fa-trash-o" style="color: #f05050"></i>
                                                                    <?php
                                                                }
                                                                if($rol == 2)
                                                                {
                                                                    ?>
                                                                <a href="manage-users.php?resid=<?php echo htmlentities($row['id']); ?>"><i class="ion-arrow-return-right" title="Restore this user"></i></a>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        $cnt++;
                                                    }} ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- container -->
                    </div> <!-- content -->
                    <?php include('includes/footer.php'); ?>
                </div>
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
            <!-- App js -->
            <script src="assets/js/jquery.core.js"></script>
            <script src="assets/js/jquery.app.js"></script>
    </body>
    </html>
<?php } ?>