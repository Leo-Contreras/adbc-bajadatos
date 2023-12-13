<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
            <?php
            $rol = $_SESSION['usuariorol'];
            if($rol == 1)
            {
                ?>
                <li class="menu-title">Navegación</li>
                <li class="has_sub">
                    <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Panel </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Usuarios </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-user.php">Agregar usuario</a></li>
                        <li><a href="manage-users.php">Administrar usuarios</a></li>
                        <li><a href="manage-datosusers.php">Administrar datos usuarios</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Categorias </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-category.php">Agregar categoría</a></li>
                        <li><a href="manage-categories.php">Administrar categorias</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Subcategorias</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-subcategory.php">Agregar subcategoria</a></li>
                        <li><a href="manage-subcategories.php">Administrar subcategorias</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Publicaciones </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-post.php">Agregar publicación</a></li>
                        <li><a href="manage-posts.php">Administrar publicaciones</a></li>
                        <li><a href="trash-posts.php">Publicaciones eliminadas</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Comentarios </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="unapprove-comment.php">A la espera de la aprobación </a></li>
                        <li><a href="manage-comments.php">Comentarios aprobados</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Subcomentarios </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="unapprove-subcomment.php">A la espera de la aprobación </a></li>
                        <li><a href="manage-subcomments.php">Subcomentarios aprobados</a></li>
                    </ul>
                </li>
                <?php
            }
            else if($rol == 2)
            {
                ?>
                    <li class="menu-title">Navegación</li>
                <li class="has_sub">
                    <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Panel </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Usuarios </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-user.php">Agregar usuario</a></li>
                        <li><a href="manage-users.php">Administrar usuarios</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Categorias </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-category.php">Agregar categoría</a></li>
                        <li><a href="manage-categories.php">Administrar categorias</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Subcategorias </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-subcategory.php">Agregar Subcategoria</a></li>
                        <li><a href="manage-subcategories.php">Administrar subcategorias</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Publicaciones </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-post.php">Agregar publicación</a></li>
                        <li><a href="manage-posts.php">Administrar publicaciones</a></li>
                        <li><a href="trash-posts.php">Publicaciones eliminadas</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Comentarios </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="unapprove-comment.php">A la espera de aprobación </a></li>
                        <li><a href="manage-comments.php">Comentarios aprobados</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Subcomentarios </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="unapprove-subcomment.php">A la espera de la aprobación </a></li>
                        <li><a href="manage-subcomments.php">Subcomentarios aprobados</a></li>
                    </ul>
                </li>
                <?php
            }
            else 
            {
                ?>
                    <li class="menu-title">Navegación</li>
                <li class="has_sub">
                    <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Panel </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Categorias </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-category.php">Agregar categoría</a></li>
                        <li><a href="manage-categories.php">Administrar categorias</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Subcategorias</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-subcategory.php">Agregar Subcategoria</a></li>
                        <li><a href="manage-subcategories.php">Administrar Subcategorias</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Publicaciones </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="add-post.php">Agregar publicación</a></li>
                        <li><a href="manage-posts.php">Administrar publicaciones</a></li>
                        <li><a href="trash-posts.php">Publicaciones eliminadas</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Comentarios </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="unapprove-comment.php">A la espera de aprobación </a></li>
                        <li><a href="manage-comments.php">Comentarios aprobados</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Subcomentarios </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="unapprove-subcomment.php">A la espera de la aprobación </a></li>
                        <li><a href="manage-subcomments.php">Subcomentarios aprobados</a></li>
                    </ul>
                </li>
                <?php
            }
            ?>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
        <div class="help-box">
            <h5 class="text-muted m-t-0">SOPORTE</h5>
            <p class=""><span class="text-custom">AGENCIA DIGITAL:</span> <br /> TIJUANA</p>
        </div>
    </div>
    <!-- Sidebar -left -->
</div>