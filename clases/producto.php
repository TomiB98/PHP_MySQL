<?php
class Producto {
    public $bd;

    function __construct($base) {
        $this->bd = $base;
    }

    public function listar_productos() {
        $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM productos ORDER BY codigo");
        return $respuesta;
    }

    public function insertar_productos($producto, $descripción, $precio) {
        $respuesta = $this->bd->ejecutarConsultas("INSERT INTO productos VALUES (DEFAULT, '$producto', '$descripción', '$precio')");
        return $respuesta;
    }

    // public function seleccionar_producto($id) {
    //     $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM compras WHERE id_producto=$id");
    //     return $respuesta;
    // }

    public function modificar_producto($codigo, $producto, $descripción, $precio) {
        $respuesta = $this->bd->ejecutarConsultas("UPDATE compras SET producto='$producto', descripcion='$descripción', precio=$precio WHERE codigo=$codigo");
        return $respuesta;
    }

    public function eliminar_producto($codigo) {
        $respuesta = $this->bd->ejecutarConsultas("DELETE FROM productos WHERE codigo=$codigo");
        return $respuesta;
    }
}
?>