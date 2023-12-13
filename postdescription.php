<?php
include('includes/config.php');
$pid = $_GET['id'];

if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
if(isset($_POST['submit']))
{
    //Verifying CSRF Token
    // if (!empty($_POST['csrftoken']))
    // {
    //   if (hash_equals($_SESSION['token'], $_POST['csrftoken']))
    //   {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $comment=$_POST['comment'];
        $postid=intval($_GET['id']);
        $st1='0';
        $query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
        if($query){
            echo "<script>alert('comentario enviado exitosamente. El comentario se mostrará después de la revisión del administrador.');</script>";
            // unset($_SESSION['token']);
        }
        else {
            echo "<script>alert('Algo salió mal. Inténtalo de nuevo.');</script>";
        }
    //   }
    //   else {
        // echo "<script>alert('TOKEN NO ES IGUAL.');</script>";
    //   }
    // }
}
if(isset($_POST['subsubmit']))
{
    $idcomment = $_POST['idcomment'];
    $name=$_POST['subname'];
    $email=$_POST['subemail'];
    $comment=$_POST['subcomment'];
    $postid=intval($_GET['id']);
    $st1='0';
    $query=mysqli_query($con,"insert into tblsubcomments(name,email,comment,status) values('$name','$email','$comment','$st1')");
    $insertid = mysqli_insert_id($con);  
    $is = mysqli_query($con, "update tblcomments set SubCommentId='$insertid' where id='$idcomment'");
    if($query){
        echo "<script>alert('comentario enviado exitosamente. El comentario se mostrará después de la revisión del administrador.');</script>";
        // unset($_SESSION['token']);
    }
    else {
        echo "<script>alert('Algo salió mal. Inténtalo de nuevo.');</script>";
    }
}
if (isset($_GET['id'])) {
    $query = mysqli_query($con, "
        SELECT post.id, post.PostTitle, post.CategoryId AS cid, cate.CategoryName AS category, sub.Subcategory AS subcategory, post.PostDetails, post.PostingDate, post.UpdationDate, post.Is_Active, post.PostUrl, post.PostImage, post.totalVisit FROM tblposts post
        LEFT JOIN tblcategory cate ON cate.id=post.CategoryId
        LEFT JOIN tblsubcategory sub ON sub.SubCategoryId=post.SubCategoryId
        WHERE post.id='$_GET[id]' ORDER BY post.PostingDate DESC LIMIT 3
      	")
        or die('error: ' . mysqli_error($con));
    $data  = mysqli_fetch_assoc($query);
}
$fechainicio = new DateTime($data['PostingDate']);
$fechadia = new DateTime($data['PostingDate']);
$fechames = new DateTime($data['PostingDate']);
$mes = $fechainicio->format('m');
//Consultando el total de Visitas
$sqlTotalVisitas  = ("SELECT totalVisit FROM tblposts WHERE tblposts.id='$_GET[id]' ");
$sqlTotalVisitas  = mysqli_query($con, $sqlTotalVisitas);
//Validando si existe alguna visita
if (mysqli_num_rows($sqlTotalVisitas) == 0) {
    //Actualizando el total de Visitas
    $queryVisitas = ("INSERT INTO tblposts (totalVisit) VALUES ('1')");
    $ResultVisitas = mysqli_query($con, $queryVisitas);
    // echo '<h1 style="color:green;text-align:center; font-size:80px">
    //       <strong> 1 Visita</strong>
    //      </h1>';
    header("Location: blog/index.php");
} else {
    $RowData   = mysqli_fetch_array($sqlTotalVisitas);
    $BDvisitas = (int) ($RowData['totalVisit'] + 1);
    //Actualizando el total de Visitas
    $UpdateVisitas = ("UPDATE tblposts SET totalVisit='" . $BDvisitas . "' WHERE tblposts.id='$_GET[id]' ");
    $ResultVisitas = mysqli_query($con, $UpdateVisitas);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participacion ciudadana - Gobierno Abierto</title>
    <link href="https://cdn.jsdelivr.net" rel="preconnect" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.0.2/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-6VTsNhIHFxNglfMLfhvvJFxXZbdvT1UXhm7+wVMAda9c+2NIFu4zmlKKz/bJthi/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/css/Style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.index.css">
</head>
<body>
    <div class="header-background">
        <header class="nocontent">
            <div id="header-mid">
                <div class="ic-container-fluid">
                    <div id="logo" title="Clic para regresar a la página de inicio">
                        <p class="defaultLogo">
                            <a href="index.php"><img style="max-width:345px; outline:none!important" class="" src="assets/img/Agencia_Digital.png" alt="Logo BC"></a>
                        </p>
                    </div>
                    <div class="contactoSoporte">
                        <h1>GOBIERNO ABIERTO</h1>
                    </div>
                </div>
            </div>
            <div class="">
                <nav class="navbar navbar-expand-lg" style="background: #6a1c32;">
                    <!-- Container wrapper -->
                    <div class="container-fluid ">
                        <!-- Toggle button -->
                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation" style="color: #fff; padding: 16px 0;">
                            <i class="fas fa-bars"></i>
                        </button>
                        <!-- Collapsible wrapper -->
                        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                            <!-- Left links -->
                            <ul id="nav" class="sf-js-enabled" style="padding: 16px 0;">
                                <li id="navTab01">
                                    <a class="mainNavItem " href="index.php">Gobierno Abierto</a>
                                </li>
                                <li id="navTab03">
                                    <a class="mainNavItem" href="transparenciaproactiva.php">Transparencia Proactiva</a>
                                </li>
                                <li id="navTab04">
                                    <a class="mainNavItem" href="participacionciudadana.php">Participación Ciudadana</a>
                                </li>
                            </ul>
                            <!-- Left links -->
                        </div>
                        <!-- Collapsible wrapper -->
                    </div>
                    <!-- Container wrapper -->
                </nav>
            </div>
        </header>
    </div>
    <div class="pnlImagen">
        <!-- <img class="imgEncabezado" src="assets/img/021.png" alt="IMG-ENGOBIERNO"> -->
    </div>
    <br>
    <br>
    <main role="main" class="container-fluid">
        <style>
            img {
                pointer-events: none;
            }

            body,
            html {
                background-color: white !important;
            }

            .seccion-tramites-frecuentes .tarjeta .tramites-servicios-linea,
            .seccion-contadores .tarjeta .tramites-servicios-linea {
                border: none;
                box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.10);
                padding: 30px 40px;
            }

            .titulo-tys {
                margin-bottom: 35px;
                font-size: 38px !important;
                color: #6A1B31 !important;
                font-weight: 700 !important;
                line-height: 40px
            }

            .subtitulo {
                /*font-size:20px!important;*/
                font-size: 0.75rem;
                color: #606060;
                font-weight: 600;
            }

            .subtitulo::after {
                content: '';
                border-bottom: 5px solid #B17A44;
                width: 80px;
                display: block;
                margin: 0 auto;
            }

            .seccion-tramites-frecuentes .tarjeta .tramites-servicios-linea h5 {
                font-weight: 700;
                font-size: 22px !important;
                background-image: unset;
                background-color: #6A1B31;
                line-height: 24px !important;
            }

            .seccion-tramites-frecuentes .tarjeta .tramites-servicios-linea p {
                color: #4c4c4c;
                font-weight: 500;
                font-size: 18px !important;
            }

            .seccion-tramites-frecuentes .tarjeta .tramites-servicios-linea .boton-outline {
                border: 1px solid #6A1B31;
                background-color: white;
                color: #6A1B31;
                padding: 8px 15px;
                text-align: center;
                border-radius: 50px;
            }

            .seccion-tramites-frecuentes .tarjeta .tramites-servicios-linea .boton-outline:hover {
                border: 1px solid #6A1B31;
                background-color: #6A1B31;
                color: white;
            }

            .foto-sola {
                margin: 20px 30px;
                border-radius: 10px 10px 10px 10px;
                width: calc(100% - 60px);
                margin-bottom: 0px;
            }

            .a {
                color: #858484;
            }

            .text-right {
                text-align: right !important;
            }
        </style>
        <section id="hero" style="background: linear-gradient(180deg, 0%, #FFFBF2 49.48%, rgba(255, 255, 255, 0) 100%);">
            <div class="container seccion-tramites-frecuentes" style="margin-top: 60px;">
                <div class="row">
                    <div class="col-md-12 reveal" style="text-align: center;">
                        <div class="titulo-tys">
                            <?php echo $data['PostTitle']; ?>
                            <!-- <br>
                            <p style="text-align: center; font-size: 14px; line-height: 1.1em;" class="justified-blocks"><strong> </strong><br>
                                //
                            </p>
                            <h class="subtitulo">
                            </h> -->
                        </div>
                    </div>
                    <div class="carta reveal">
                        <div class="card mb-4 no-border">
                            <div class="card-body">
                                <!-- <h2 class="card-title text-center"><?php echo htmlentities($data['PostTitle']); ?></h2> -->
                                <p>
                                    <b>Categoría : </b>
                                    <a href="blog/category.php?catid=<?php echo htmlentities($data['cid']) ?>">
                                        <?php echo htmlentities($data['category']); ?>
                                    </a> |
                                    <b>Subcategoría : </b>
                                    <?php echo htmlentities($data['subcategory']); ?> |
                                    &nbsp;<span><i class="fa fa-eye"></i> <?php echo $BDvisitas; ?> </span> |
                                    &nbsp;<b>Publicado el dia </b>
                                    <?php echo $fechainicio->format('d'); ?> de
                                    <?php echo '
                                    ';
                                    if ($mes == '1') {
                                        echo 'enero';
                                    } else if ($mes == '2') {
                                        echo 'febrero';
                                    } else if ($mes == '3') {
                                        echo 'marzo';
                                    } else if ($mes == '4') {
                                        echo 'abril';
                                    } else if ($mes == '5') {
                                        echo 'mayo';
                                    } else if ($mes == '6') {
                                        echo 'junio';
                                    } else if ($mes == '7') {
                                        echo 'julio';
                                    } else if ($mes == '8') {
                                        echo 'agosto';
                                    } else if ($mes == '9') {
                                        echo 'septiembre';
                                    } else if ($mes == '10') {
                                        echo 'octubre';
                                    } else if ($mes == '11') {
                                        echo 'noviembre';
                                    } else if ($mes == '12') {
                                        echo 'diciembre';
                                    }
                                    echo ' '; ?> del 20<?php echo $fechainicio->format('y'); ?>
                                </p>
                                <hr />
                                <img class="img-fluid rounded" src="blog/admin/postimages/<?php echo htmlentities($data['PostImage']); ?>" alt="<?php echo htmlentities($data['PostTitle']); ?>">
                                <br>
                                <br>
                                <div style="text-align:justify;">
                                    <span style="font-size:medium;font-family:Montserrat, sans-serif;">
                                        <?php echo $data['PostDetails']; ?>
                                    </span>
                                    <div class="text-right">
                                        <a class="section-atencion-ciudadana-paddinginfo" href="blog/index.php" role="button">Ver todas las noticias &gt;</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="card-footer text-muted" style="display: flex;justify-content: space-between;align-items: center; height: 50px;">
                                <?php
                                $sta=1;
                                $cont = mysqli_query($con,"select count(*)as conteo from tblcomments where postId='$pid' and status='$sta'");
                                $rs = mysqli_fetch_assoc($cont);
                                $conteo = $rs['conteo'];
                                ?>
                                <div><?php echo $conteo; ?> Comentarios</div>
                                <div>comment</div>
                            </div>
                            <hr>
                            <div class="my-4">
                                <div class="card-body">
                                <form name="Comment" method="post">
                                    <!-- <input name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" /> -->
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                                </div>
                            </div>
                            <style>
                                .comment {
                                    overflow: hidden;
                                    display: flex;
                                    width: 100%;
                                    margin: 10px;
                                }
                                .comment img {
                                    width: 70px;
                                    height: 70px;
                                }
                                .comment .conten-comment {
                                    width: 80%;
                                    margin-left: 10px;
                                }
                                .comment .res {
                                    display: grid;
                                }
                            </style>
                            <div>
                                <br>
                                <!---Comment Display Section --->
                                <?php
                                $query=mysqli_query($con,"select id,name,comment,postingDate from tblcomments where postId='$pid' and status=1");
                                while ($row=mysqli_fetch_array($query)) {
                                    $fechainicio = new DateTime($row['postingDate']);
                                    $fechadia = new DateTime($row['postingDate']);
                                    $fechames = new DateTime($row['postingDate']);
                                    $mes = $fechainicio->format('m');
                                ?>
                                <div class="comment media mb-4">
                                    <img class="d-flex mr-3 rounded-circle" src="blog/images/usericon.png" alt="">
                                    <div class="conten-comment media-body">
                                        <h5 class="mt-0"><?php echo htmlentities($row['name']);?> <br />
                                            <span style="font-size:11px;">
                                                <b>at</b>
                                                <?php echo $fechainicio->format('d'); ?> de
                                                <?php echo '
                                                ';
                                                if ($mes == '1') {
                                                    echo 'enero';
                                                } else if ($mes == '2') {
                                                    echo 'febrero';
                                                } else if ($mes == '3') {
                                                    echo 'marzo';
                                                } else if ($mes == '4') {
                                                    echo 'abril';
                                                } else if ($mes == '5') {
                                                    echo 'mayo';
                                                } else if ($mes == '6') {
                                                    echo 'junio';
                                                } else if ($mes == '7') {
                                                    echo 'julio';
                                                } else if ($mes == '8') {
                                                    echo 'agosto';
                                                } else if ($mes == '9') {
                                                    echo 'septiembre';
                                                } else if ($mes == '10') {
                                                    echo 'octubre';
                                                } else if ($mes == '11') {
                                                    echo 'noviembre';
                                                } else if ($mes == '12') {
                                                    echo 'diciembre';
                                                }
                                                echo ' '; ?> del 20<?php echo $fechainicio->format('y'); ?>
                                            </span>
                                        </h5>
                                        <?php echo htmlentities($row['comment']);?>
                                        <!-- SELECT tblsubcomments.name,tblsubcomments.comment,tblsubcomments.postingDate FROM tblcomments join tblsubcomments on tblsubcomments.id=tblcomments.SubCommentId WHERE tblcomments.id=2 and tblsubcomments.status=1 -->
                                        <?php
                                            $idcoment = $row['id'];
                                            $subquery=mysqli_query($con, "SELECT tblsubcomments.name as subname,tblsubcomments.comment as subcomment,tblsubcomments.postingDate as subpostingDate FROM tblcomments join tblsubcomments on tblsubcomments.id=tblcomments.SubCommentId WHERE tblcomments.id=$idcoment and tblsubcomments.status=1");
                                            while ($subrow=mysqli_fetch_array($subquery)){
                                                $subfechainicio = new DateTime($subrow['subpostingDate']);
                                                $subfechadia = new DateTime($subrow['subpostingDate']);
                                                $subfechames = new DateTime($subrow['subpostingDate']);
                                                $submes = $subfechainicio->format('m');
                                                ?>
                                                <div>
                                                    <div class="comment media mb-4">
                                                        <img class="d-flex mr-3 rounded-circle" src="blog/images/usericon.png" alt="">
                                                        <div class="conten-comment media-body">
                                                            <h5 class="mt-0"><?php echo htmlentities($subrow['subname']);?> <br />
                                                                <span style="font-size:11px;">
                                                                    <b>at</b>
                                                                    <?php echo $subfechainicio->format('d'); ?> de
                                                                    <?php echo '
                                                                    ';
                                                                    if ($submes == '1') {
                                                                        echo 'enero';
                                                                    } else if ($submes == '2') {
                                                                        echo 'febrero';
                                                                    } else if ($submes == '3') {
                                                                        echo 'marzo';
                                                                    } else if ($submes == '4') {
                                                                        echo 'abril';
                                                                    } else if ($submes == '5') {
                                                                        echo 'mayo';
                                                                    } else if ($submes == '6') {
                                                                        echo 'junio';
                                                                    } else if ($submes == '7') {
                                                                        echo 'julio';
                                                                    } else if ($submes == '8') {
                                                                        echo 'agosto';
                                                                    } else if ($submes == '9') {
                                                                        echo 'septiembre';
                                                                    } else if ($submes == '10') {
                                                                        echo 'octubre';
                                                                    } else if ($submes == '11') {
                                                                        echo 'noviembre';
                                                                    } else if ($submes == '12') {
                                                                        echo 'diciembre';
                                                                    }
                                                                    echo ' '; ?> del 20<?php echo $subfechainicio->format('y'); ?>
                                                                </span>
                                                            </h5>
                                                            <?php echo htmlentities($subrow['subcomment']);?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        ?>
                                        <div style="display: flex;justify-content: space-around;">
                                            <form name="formsubcomment" method="post">
                                                <div class="form-group">
                                                    <input type="text" name="subname" class="form-control" placeholder="Enter your fullname" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="subemail" class="form-control" placeholder="Enter your Valid email" required>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="subcomment" rows="3" placeholder="Comment" required></textarea>
                                                </div>
                                                <input type="hidden" name="idcomment" value="<?php echo htmlentities($row['id']);?>">
                                                <button type="submit" name="subsubmit">Responder</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="card-footer text-muted hidden">
                                <div class="text-right aos-init aos-animate" data-aos="fade-up">
                                    <div class="text-right">
                                        <strong>
                                            <?php $ip_add = $_SERVER['REMOTE_ADDR'];
                                            echo "para estadísticas se obtiene" ?>
                                        </strong>
                                        <div class="text-right"><strong><?php echo "la Ips: " . $ip_add; ?></strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div style="display: none;">
            <div id="carta-banners" class="carta reveal">
                <img class="d-none d-md-block" src="http://retys.bajacalifornia.gob.mx/Content/img/banner-ventanilla-escritorio.png" />
                <img class="d-block d-md-none" src="http://retys.bajacalifornia.gob.mx/Content/img/banner-ventanilla-movil.png" />
            </div>
        </div>
        <style>
            .boton-sig-pagina {
                background: white;
                border: 1px solid #6A1B31;
                color: #6A1B31;
                width: 100%;
                padding: 10px 20px;
                text-align: center;
                font-weight: 500;
                border-radius: 100px;
            }

            .boton-sig-pagina:hover {
                background: linear-gradient(180deg, #64192E 0%, #680C26 17.71%, #720D29 83.33%, #671B31 100%);
                color: white;
            }

            .section-yosoy-title {
                color: #6A1B31 !important;
                font-weight: 800 !important;
                font-size: 1.5em !important;
                line-height: 1.8;
            }

            .section-atencion-ciudadana i {
                position: relative;
                top: 5px;
                left: 5px;
                color: #BD945C;
                font-size: 1.7em;
                margin-right: 15px;
            }

            .section-atencion-ciudadana img {
                width: 180px;
            }

            .section-atencion-ciudadana a {
                color: #6A1B31 !important;
                font-weight: 500;
            }

            .section-atencion-ciudadana h5 {
                color: #0E0D0D !important;
                font-weight: 800 !important;
                font-size: 1.1em !important;
            }

            .section-atencion-ciudadana p {
                font-weight: 500 !important;
                color: #565656 !important;
                margin-bottom: 0px !important;
                line-height: 1.8;
            }

            .section-atencion-ciudadana a:link,
            .section-atencion-ciudadana a:visited,
            .section-atencion-ciudadana a[href^=tel] {
                color: #6A1B31;
                font-weight: 700;
                text-decoration: none;
            }

            @media (max-width: 599px) {
                .visible-escritorio {
                    display: none;
                }
            }

            @media (min-width: 600px) {
                .visible-movil {
                    display: none;
                }
            }

            #carta-banners {
                padding: 0;
            }

            #carta-banners img {
                max-width: 100%;
                border-radius: 0.375rem;
            }

            .w3-red {
                color: #6A1B31;
                font-weight: 600;
                text-decoration: underline;
            }

            .w3-button {
                display: block;
                background-color: transparent;
                border: none;
                padding-left: 0px;
                margin-top: 50px;
            }

            @media (max-width: 767px) {
                .w3-button {
                    margin-top: 10px;

                }
            }

            .w3-button:hover {
                color: #6A1B31 !important;
                text-decoration: underline;
            }

            /**********Card de Tramite ****************/
            .tramites-servicios-linea {
                border-radius: 20px;
                padding: 25px 20px 20px 20px;
                background: #FFFFFF;
                box-shadow: 0 0 0 rgba(0, 0, 0, 0);
                transition: all 0.3s ease-in-out;
                border: 1px solid #e8e8e9;
                height: 90%;
                margin-bottom: calc(var(--bs-gutter-x));
            }

            .tramites-servicios-linea img {
                width: 55px !important;
                height: 55px !important;
            }

            .tramites-servicios-linea h5 {
                font-size: 1em !important;
                font-style: normal;
                font-weight: 700;
                line-height: 20px;
                color: #5C5C5C;
            }

            .tramites-servicios-linea p {
                font-size: .8em !important;
                font-style: normal;
                font-weight: 500;
                line-height: 20px;
                color: #565656;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 4;
                line-clamp: 4;
                -webkit-box-orient: vertical;
            }

            .tramites-servicios-linea:hover {
                box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.25);
                cursor: pointer;
            }

            .tramites-servicios-linea a {
                text-decoration: none;

            }

            .tramites-servicios-linea a:hover {
                text-decoration: none !important;

            }

            .button-large-tramites-servicios {
                border: 1px solid #6A1B31 !important;
                width: 100%;
                border-radius: 25px !important;
                padding: .75rem .75rem !important;
                color: #6A1B31 !important;
            }

            .button-large-tramites-servicios:hover {
                background-color: #6A1B31 !important;
                color: white !important;
            }

            @media (max-width: 767px) {
                .w3-sidebar {
                    padding: 24px;
                }
            }

            .nav-pills-custom .nav-link {
                color: #aaa;
                background: #fff;
                position: relative;
                border: 1px solid #e8e8e9;
            }

            .nav-pills-custom .nav-link.active {
                color: #6A1B31 !important;
                background: #fff;
                /*border-left: 5px solid #6A1B31;*/
                border-left: 5px solid #BC955A;
            }

            .nav-pills .nav-link.active,
            .nav-pills .show>.nav-link {
                color: #6A1B31 !important;
                background: #fff !important;
            }



            .nav-pills-custom .nav-link::before {
                border-left: none !important;
            }

            @media (min-width: 992px) {
                .nav-pills-custom .nav-link::before {
                    content: '';
                    display: block;
                    border-top: 8px solid transparent;
                    border-left: 10px solid #fff;
                    border-bottom: 8px solid transparent;
                    position: absolute;
                    top: 50%;
                    right: -10px;
                    transform: translateY(-50%);
                    opacity: 0;
                }
            }

            .nav-pills-custom .nav-link.active::before {
                opacity: 1;
            }

            .tramites-servicios-linea img {
                margin-bottom: 6px;
            }

            .tabs-opciones .nav-pills-custom .nav-link {
                cursor: pointer;
            }
        </style>
    </main>
    <style>
        body {
            background-image: url("img/escudoM2.png");
            background-repeat: no-repeat;
            background-color: #f5f5f5;
        }
    </style>
    <?php include 'includes/footer.php'; ?>
    <script src="integrarBlogs.js"></script>
    <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/boosted@5.0.2/dist/js/boosted.bundle.min.js" integrity="sha384-a3K6jz95fJEM/VHhViODijMUDGZsk3kzR9A9te5dH5jYIoXW7scODk+TtVjLhCW2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/slide.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <!-- Bootstrap JS -->
</body>
</html>