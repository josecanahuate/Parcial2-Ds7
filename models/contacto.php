<?php
//en el model se colocan todos los atributos, metodos, todo lo que gestiona datos, devuelve datos, calculos
//los insert, select, delete, deben estar en el models.
//TODO LO QUE ALMACENE DATOS DEBE ESTAR EN EL MODELS.


class contacto{
    private $nombre;
    private $correo;
    private $comentario;

    public function __construct($nombre, $correo, $comentario)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->comentario = $comentario;
    }

    public function getDatos(){
        return ["nombre"=>$this->nombre, "correo"=>$this->correo,"comentario"=>$this->comentario];

    }
}

?>
