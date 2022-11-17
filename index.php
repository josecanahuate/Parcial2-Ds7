<?php
//ESTE SI ES EL INDEX PRINCIPAL POR DND TODO SE VA EJECUTAR, AQUI SE VA INCLUIR SOLO CODIGO PHP.
//INDEX.PHP FUNCIONA COMO UN DIRECCIONADOR, ESTE SE ENCARGARA DE ENVIAR DATOS A LOS CONTROLADORES,
//LOS CONTROLADORES SE ENCARGARAN DE IR AL MODELO, Y LUEGO A LAS VISTAS. Y LAS VISTAS MOSTRARAN LOS DATOS. 
    
    require_once("controllers/usuarios_controller.php");
    require_once("controllers/productos_controller.php");
    require_once("controllers/principal_controller.php");
    require_once("utils/seg.php");

    #principal_controller::index();
    
    #var_dump($_GET);
    if (count($_GET) == 0)
    call_user_func("principal_controller::index");
    else  {
        $controlador = seg::decodificar($_GET["c"]);
        $metodo = seg::decodificar($_GET["m"]);
        if (isset($_SESSION["token"]) && !isset($_GET["id_producto"])) {
            call_user_func($controlador . "_controller::" . $metodo);
        } elseif (isset($_SESSION["token"]) && isset($_GET["id_producto"])) {
            call_user_func($controlador . "_controller::" . $metodo);
        } elseif ($controlador == "usuarios" && $metodo == "validar") {
            call_user_func($controlador . "_controller::" . $metodo);
        } else {
            call_user_func("principal_controller::index");
        }

    }

    /*
    $valor = base64_encode("Este texto se va a modificar");
    echo "Texto codificado ".$valor;
    echo "<br>El Texto decodificado es ".base64_decode($valor);
*/

#echo "<br>El token es ".seg::getToken();

?>
