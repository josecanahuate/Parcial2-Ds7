<?php
//CONTROLLERS---recibe las peticiones, agarra los datos y los envia a las vistas.
//aqui se realizan las validaciones, tales como campos obligatorios, etc.. 
//AQUI SOLO SE COLOCA DATOS EN PHP

require_once("models/contacto.php");
class contacto_controller{

    public static function crear(){
        if (isset($_SESSION["usuario"])){
        $titulo_paginaprincipal = "Creacion de Comentario de Contacto";
        require_once("views/templates/header.php");
        require_once("views/templates/navbar.php");
        require_once("views/contacto/crear.php");
        require_once("views/templates/footer.php");
    } else
    header("location:index.php?c=".seg::codificar("principal")."&m=".seg::codificar("error"));
    }

    public static function mostrar(){
        #var_dump($_POST);
        if ($_POST) {
                //ESTE METODO VALIDAR_SESSION ESTA EN utils/seg.php/validarSession
                //si el usuario no es valido se envia un mensaje de acceso restringido
            if (!isset($_POST["token"]) || !seg::validarSession($_POST["token"])) {
                echo "Acceso Restringido";
                exit();
            }
           
//VALIDACIONES DE LOS CAMPOS NOMBRE, CORREO y COMENTARIO
        empty($_POST["txtnombre_contacto"])?$error[0] = "El Nombre de Contacto es Necesario": $nombre = $_POST["txtnombre_contacto"];
        empty($_POST["txtcorreo_contacto"])?$error[1] = "El Correo de Contacto es Necesario": $correo = $_POST["txtcorreo_contacto"];
        empty($_POST["txtcomentario_contacto"])?$error[2] = "El Comentario de Contacto es Necesario": $comentario = $_POST["txtcomentario_contacto"];
        // TERMINA LINEAS DE VALIDACIONES
        #var_dump($error); para ver algun error en el envio de validaciones.

            if (isset($error)){
                $titulo_paginaprincipal = "Creacion de Comentario de Contacto";
                require_once("views/templates/header.php");
                require_once("views/templates/navbar.php");
                require_once("views/contacto/crear.php");
                require_once("views/templates/footer.php");

            } else {
            //FILTER_SANITIZE_FULL_SPECIAL_CHARS EVITA QUE HACKERS ENTREN CODIGO A NUESTRA WEB
            $nombre = filter_var($nombre, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $correo = filter_var($correo, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $comentario = filter_var($comentario, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $contacto = new contacto($nombre, $correo, $comentario);
            $resultados = $contacto->getDatos();
            $titulo_paginaprincipal = "Mostrar Datos de Contacto";
            require_once("views/templates/header.php");
            require_once("views/templates/navbar.php");
            require_once("views/contacto/mostrar.php");
            require_once("views/templates/footer.php");
         }


        }
        
    }
}

?>