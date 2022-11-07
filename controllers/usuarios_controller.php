<?php
    require_once("models/usuario.php");
    class usuarios_controller{

        public static function login() {
            $msg = isset($_GET["msg"])?$_GET["msg"]:""; //envia msj, sí usuario o password estan incorrectos
            #var_dump($_GET);
            $titulo_paginaprincipal = "Login de Usuario";
            require_once("views/templates/header.php");
            require_once("views/templates/navbar.php");
            require_once("views/usuarios/login.php");
            require_once("views/templates/footer.php");
        }

        public static function validar() {
            #var_dump($_POST); //para validar que los datos estan llegando 
            if ($_POST) {
                //si el usuario no es valido se envia un mensaje de acceso restringido
            if (!isset($_POST["token"]) || !seg::validarSession($_POST["token"])) {
                echo "Acceso Restringido";
                exit();
            }
        $obj = new usuario($_POST["txtusuario"], $_POST["txtpassword"],"","");
        $resultado = $obj->validar_usuario();
        //var_dump($resultado); para ver si se esta validando o no, el usuario
        #var_dump($resultado);
        //validacion cuando usuario sea correcto (o sea mayor a 0)
        if (count($resultado)>0){
            $_SESSION["usuario"] = $resultado["usuario"];
            $_SESSION["nombre"] = $resultado["nombre"];
            if(isset($_POST["chkrecordar"])){ //si se marco la casilla recordar, se guardaran los datos de nombre // y usuario por 1 minuto = +60
                //seg::codificar es para encriptar las cookies y nadie en la web pueda modificarlas
                setcookie("usuario", seg::codificar($resultado["usuario"]), time()+60); //se almacenara por 1 min el dato usuario
                setcookie("nombre", seg::codificar($resultado["nombre"]), time()+60); // se almacenara por 1 min el dato nombre
            }
            //si el usuario es correcto dirigira a su pagina
            header("location:index.php");
        } else
            header("location:index.php?c=".seg::codificar("usuarios")."&m=".seg::codificar("login"). "&msg=Usuario o Password incorrectos!!");
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