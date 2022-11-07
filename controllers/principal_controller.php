<?php
require_once("utils/seg.php");
class principal_controller {
//se crea el metodo index para hacer el llamado
//por este metodo arrancara la pagina, pero las peticiones llegaran por index.php principal
    public static function index() {
        //se hace al llamado a la pagina principal que contiene el codigo HTML
        //de igual forma si se necesita alguna VALIDACION aqui debe insertarse
//cualquier asignacion se declaran antes de la pagina que contenga esa variable, en este caso header.php

        if (isset($_COOKIE["usuario"])) {//se hace el llamado a la cookie 
        $_SESSION["usuario"]=seg::decodificar($_COOKIE["usuario"]); // se almacena y se decodifica el usuario
        $_SESSION["nombre"]=seg::decodificar($_COOKIE["nombre"]); // se almacena y se decodifica el nombre
    }
        $titulo_paginaprincipal = "Pagina Principal";
        require_once("views/templates/header.php");
        require_once("views/templates/navbar.php");
        require_once("views/principal/index.php");
        require_once("views/templates/footer.php");
        
    }

    public static function error() {
        require_once("views/templates/header.php");
        require_once("views/templates/navbar.php");
        require_once("views/principal/error.php");
        require_once("views/templates/footer.php");

    }

}

?>