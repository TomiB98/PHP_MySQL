<?php
class Carrito {
    public $bd;

    function __construct($base) {
        $this->bd = $base;
    }

    public function introducir_compra($código, $producto, $descripción, $precio) {
        $respuesta = $this->bd->ejecutarConsultas("INSERT INTO compras VALUES (DEFAULT, '$código', '$producto', '$descripción', '$precio')");
        return $respuesta;
    }

    public function eliminar_compra($id) {
        $respuesta = $this->bd->ejecutarConsultas("DELETE FROM compras WHERE id_compra=$id");
        return $respuesta;
    }

    public function listar_compra() {
        $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM compras ORDER BY producto");
        return $respuesta;
    }
}
?>