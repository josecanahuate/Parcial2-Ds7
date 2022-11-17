<!-- ESTA PARTE ES PARA CREAR EL CONTENIDO DE LOS PRODUCTOS / ARTICULOS-->
<?php
//en el model se colocan todos los atributos, metodos, todo lo que gestiona datos, devuelve datos, calculos
//los insert, select, delete, deben estar en el models.
//TODO LO QUE ALMACENE DATOS DEBE ESTAR EN EL MODELS.

class productos{
    private $id_producto;
    private $descripcion;
    private $costo_compra;
    private $precio_venta;
    private $cantidad_en_existencia;

    public function __construct($id_producto, $descripcion, $costo_compra, $precio_venta, $cantidad_en_existencia)
    {
        $this->id_producto = $id_producto;
        $this->descripcion = $descripcion;
        $this->costo_compra = $costo_compra;
        $this->precio_venta = $precio_venta;
        $this->cantidad_en_existencia = $cantidad_en_existencia;
    }

//Métodos
public function getId()
{
    // Devolvemos un atributo
    return $this->id_producto;
}

public function setId($id_producto)
{
    //Le damos un valor a un atributo
    $this->id_producto = $id_producto;
}


public function getDescripcion()
{
    // Devolvemos un atributo
    return $this->descripcion;
}

public function setDescripcion($descripcion)
{
    //Le damos un valor a un atributo
    $this->descripcion = $descripcion;
}

public function getCostoCompra()
{
    // Devolvemos un atributo
    return $this->costo_compra;
}

public function setCostoCompra($costo_compra)
{
    //Le damos un valor a un atributo
    $this->costo_compra = $costo_compra;
}

public function getPrecioVenta()
{
    // Devolvemos un atributo
    return $this->precio_venta;
}

public function setPrecioVenta($precio_venta)
{
    //Le damos un valor a un atributo
    $this->precio_venta = $precio_venta;
}

public function getExistencia()
{
    // Devolvemos un atributo
    return $this->cantidad_en_existencia;
}

public function setExistencia($cantidad_en_existencia)
{
    //Le damos un valor a un atributo
    $this->cantidad_en_existencia = $cantidad_en_existencia;
}


    public static function Mostrar_articulos(){
        $tabla_productos[]= ["id_producto"=>"1", "descripcion"=>"PlayStation 5 Call of Duty bundle", "costo_compra"=>"$750", "precio_venta"=>"$850", "cantidad_en_existencia"=>"Solo quedan 3"];
        $tabla_productos[]= ["id_producto"=>"2", "descripcion"=>"MacBook Pro 13.3 M2 512 SSD", "costo_compra"=>"$1,500", "precio_venta"=>"$1,830", "cantidad_en_existencia"=>"Solo quedan 5"];
        $tabla_productos[]= ["id_producto"=>"3", "descripcion"=>"Apple iPad Pro 4a Generación", "costo_compra"=>"$700", "precio_venta"=>"$1200", "cantidad_en_existencia"=>"Solo quedan 8"];
        $tabla_productos[]= ["id_producto"=>"4", "descripcion"=>"SUPER LAPTOP!!!! HP VICTUS", "costo_compra"=>"$750", "precio_venta"=>"$990", "cantidad_en_existencia"=>"Última unidad"];
        $tabla_productos[]= ["id_producto"=>"5", "descripcion"=>"iPhone 14 Pro Max 256gb", "costo_compra"=>"$1,500", "precio_venta"=>"$1,810", "cantidad_en_existencia"=>"Solo quedan 2"];
        return $tabla_productos;
    }

    public function Buscar_articulos(){
        $tabla_productos[]= ["id_producto"=>"1", "descripcion"=>"PlayStation 5 Call of Duty bundle", "costo_compra"=>"$750", "precio_venta"=>"$850", "cantidad_en_existencia"=>"Solo quedan 3"];
        $tabla_productos[]= ["id_producto"=>"2", "descripcion"=>"MacBook Pro 13.3 M2 512 SSD - 8GB Ram - Silver", "costo_compra"=>"$1,500", "precio_venta"=>"$1,830", "cantidad_en_existencia"=>"Solo quedan 5"];
        $tabla_productos[]= ["id_producto"=>"3", "descripcion"=>"Apple iPad Pro 4a Generación", "costo_compra"=>"$700", "precio_venta"=>"$1200", "cantidad_en_existencia"=>"Solo quedan 6"];
        $tabla_productos[]= ["id_producto"=>"4", "descripcion"=>"SUPER LAPTOP!!!! HP VICTUS", "costo_compra"=>"$750", "precio_venta"=>"$990", "cantidad_en_existencia"=>"Última unidad"];
        $tabla_productos[]= ["id_producto"=>"5", "descripcion"=>"iPhone 14 Pro Max 256gb", "costo_compra"=>"$1,500", "precio_venta"=>"$1,810", "cantidad_en_existencia"=>"Solo quedan 2"];
        foreach($tabla_productos as $tp){
            if ($this->id_producto == $tp["id_producto"])
            return $tp;
        }
         //si no se cumple lo de arriba, entonces arroja un array vacio.
        return [];  
    }

}

?>