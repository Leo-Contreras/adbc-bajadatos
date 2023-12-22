<?php
    $id_usuario = $_SESSION['usuarioid'];
    $is = mysqli_query($con, "SELECT DatosId FROM tbladmin WHERE id='$id_usuario'");
    $rs = mysqli_fetch_assoc($is);
    $datos = $rs['DatosId'];
?>
<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <a href="dashboard.php" class="logo"><span>Gobierno<span>Abierto</span></span><i class="mdi mdi-layers"></i></a>
        <!-- Image logo -->
        <!--<a href="index.html" class="logo">-->
        <!--<span>-->
        <!--<img src="assets/images/logo.png" alt="" height="30">-->
        <!--</span>-->
        <!--<i>-->
        <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
        <!--</i>-->
        <!--</a>-->
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Navbar-left -->
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <button class="button-menu-mobile open-left waves-effect">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
            </ul>
            <!-- Right(Notification) -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown user-box">
                    <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                        <?php
                        if($datos == null) 
                        {
                            ?>
                            <li>
                                <h5>Hola, <?php echo $_SESSION['login']; ?></h5>
                            </li>
                            <?php
                        }
                        else{
                            $rst = mysqli_query($con, "SELECT name,lastname,secondlastname FROM tbldatosusuario WHERE id='$datos'");
                            $rsp = mysqli_fetch_assoc($rst);
                            $name = $rsp['name'];
                            $last = $rsp['lastname'];
                            $second = $rsp['secondlastname'];
                            ?>
                            <li>
                                <h5>Hola, <?php echo $name; ?> <?php echo $last; ?> <?php echo $second; ?></h5>
                            </li>
                            <?php
                        }
                        ?>
                        <li><a href="change-password.php"><i class="ti-settings m-r-5"></i>Cambiar la contraseña</a></li>
                        <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul> <!-- end navbar-right -->
        </div><!-- end container -->
    </div><!-- end navbar -->
</div>