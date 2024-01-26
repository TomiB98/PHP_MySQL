<?php
class Usuarios {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    function __construct($nom, $apll, $nac) {
        $this->nombre = $nom;
        $this->apellido = $apll;
        $this->fecha_nacimiento = $nac;
        //$fecha_nacimiento_obj = date_create_from_format('d/m/Y', $nac);
        //$this->fecha_nacimiento = $fecha_nacimiento_obj->format('Y-m-d');
    }

    private function calcular_edad() {
        $fecha_actual = new DateTime();
        $fecha_nacimiento = new DateTime($this->fecha_nacimiento);
        $edad = $fecha_actual->diff($fecha_nacimiento)->y;
        return $edad;
    }

    public function imprime_carcteristicas() {
        echo "<h3>Usuario</h3>";
        echo "<p>Nombre/s: ".$this->nombre."</p>";
        echo "<p>Apellido/s: ".$this->apellido."</p>";
        echo "<p>Edad: ".$this->calcular_edad()."</p>";
        //echo "<p>Edad: ".$this->fecha_nacimiento."</p>";
    }
}
?>