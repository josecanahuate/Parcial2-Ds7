
<?php
if (session_status() == 1) session_start();
require_once("models/productos.php");
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">  <img src="./img/thestore2.png" style="width:100px" class="img-fluid" alt="..."></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo "index.php?c=".seg::codificar("productos")."&m=".seg::codificar("productos_principal")?>">Inicio</a>
                </li>
                <?php if (isset($_SESSION["usuario"])){?>


            </ul>
            <!-- AQUI DEBO MOSTRAR SOLAMENTE CUANDO ESTE LOGEADO-->
            <form action="<?php echo "index.php?c=".seg::codificar("productos")."&m=".seg::codificar("mostrar_Productos") ?>" class="d-flex" method="post">
                <input class="form-control me-2" name="id_producto" id="id_producto" type="text" placeholder="Buscar Por ID" aria-label="Search">
                &nbsp;
                <input type="hidden" value="<?php echo seg::getToken() ?>" name="token">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
                
            </form>


            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <!--PHP para Mostrar Nombre de Usuario -->
                    &nbsp;
                    <?php echo $_SESSION["nombre"] ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!--esta linea de abajo encripta los datos mostrados en la url, este metodo esta alojado en utils/seg.php-->
                        <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("usuarios")."&m=".seg::codificar("cerrar_sesion")?>">Cerrar Sesión</a></li>
                    </ul>
                </li>
                <?php }else { ?>
                <li class="nav-item">
                    <!-- se debe colocar exactamente el mismo nombre del controlador-->
                    <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("usuarios")."&m=".seg::codificar("login")?>" tabindex="-1">Login</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>





