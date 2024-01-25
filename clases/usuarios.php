<?php
class Usuarios {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    function __construct($nom, $apll, $nac) {
        $this->nombre = $nom;
        $this->apellido = $apll;
        $this->fecha_nacimiento = $nac;
    }

    private function calcular_edad() {
        $fecha_actual = new DateTime();
        $fecha_nacimiento = new DateTime($this->fecha_nacimiento);
        $edad = $fecha_actual->diff($fecha_nacimiento)->y;
        return $edad;
    }

    public function imprime_carcteristicas() {
        echo "<p>Nombre: ".$this->nombre."</p>";
        echo "<p>Apellido: ".$this->apellido."</p>";
        echo "<p>Edad: ".$this->calcular_edad()."</p>";
    }
}
?>