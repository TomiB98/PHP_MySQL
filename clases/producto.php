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
}
?>