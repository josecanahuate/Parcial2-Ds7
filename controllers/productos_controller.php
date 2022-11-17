<!-- ESTA PARTE ES PARA CREAR EL CONTENIDO DE LOS PRODUCTOS / ARTICULOS-->
<?php
    require_once("models/productos.php");
    class productos_controller{
        
        public static function productos_principal() {
            //productos_principal -> Pagina Principal
            if (isset($_SESSION["usuario"])){
            require_once("views/templates/header.php");
            require_once("views/templates/navbar.php");
            require_once("views/productos/crear_productos.php"); 
            require_once("views/templates/footer.php");
        } else
        header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("error"));
        }

        public static function productos_mostrar() {
            //productos_mostrar -> Pagina Principal
            if (isset($_SESSION["usuario"])){
            require_once("views/templates/header.php");
            require_once("views/templates/navbar.php");
            require_once("views/productos/mostrar_productos.php"); 
            require_once("views/templates/footer.php");
        } else
        header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("error"));
        }

        public static function mostrar_Productos(){
        if ($_POST) {
            $token= filter_var($_POST["token"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $_SESSION["token"] = $_POST["token"] ;
            if (!isset($_POST["token"]) || !seg::validarSession($_POST["token"])) {
                echo "Acceso restringido";
                exit();
            }

            $id_producto= filter_var($_POST["id_producto"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $obj = new productos($id_producto, "", "", "", "");
            $resultado = $obj->Buscar_articulos();
            var_dump($_POST["id_producto"]);
            
            if (count($resultado) > 0) {
            header("location: index.php?c=".seg::codificar("productos")."&m=". seg::codificar("productos_principal"). "&id_producto=". $id_producto."#productos");
            }else{
            //header("location: index.php?c=".seg::codificar("productos")."&m=". seg::codificar("productos_principal")."#productos");
            }
        }
        }    

            
    public static function cerrar_sesion() {
            session_destroy();
            setcookie("usuario", seg::codificar($_SESSION["usuario"]), time()-60); 
            setcookie("nombre", seg::codificar($_SESSION["nombre"]), time()-60); 
            header("location:index.php");
    }

}

?>