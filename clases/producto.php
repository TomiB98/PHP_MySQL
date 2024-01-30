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

    // public function seleccionar_producto($id) {
    //     $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM compras WHERE id_producto=$id");
    //     return $respuesta;
    // }

    // public function modificar_producto($id, $producto, $descripción, $precio) {
    //     $respuesta = $this->bd->ejecutarConsultas("UPDATE compras SET producto='$producto', descripcion='$descripción', precio=$precio WHERE id_producto=$id");
    //     return $respuesta;
    // }
}
?>