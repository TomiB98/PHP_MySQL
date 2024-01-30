<?php
class Basedatos {
    private $conexion;
    public $error;

    function __construct($host, $user, $password, $base)
    {
        if (!$this->_connect($host, $user, $password, $base)) {
            $this->error = $this->conexion->connect_error;
        };
    }

    private function _connect($host, $user, $password, $base)
    {
        $this->conexion = new mysqli($host, $user, $password, $base);
    }

    public function ejecutarConsultas($query)
    {
        $array_resultado = [];
        $tipo = strtoupper(substr($query, 0, 6));

        switch ($tipo) {
            case 'INSERT':
                $resultado = $this->conexion->query($query);
                if(!$resultado) {
                    $this->error = $this->conexion->error;
                    return false;
                } else {
                    return $this->conexion->insert_id;
                }
                break;

            case 'SELECT':
                $resultado = $this->conexion->query($query);
                if(!$resultado) {
                    $this->error = $this->conexion->error;
                    return false;
                } else {
                    while($fila = $resultado->fetch_assoc()) {
                        $array_resultado[] = $fila; 
                    }
                    return $array_resultado;
                }
                break;

            case 'UPDATE':
            case 'DELETE':
                $resultado = $this->conexion->query($query);
                if(!$resultado) {
                    $this->error = $this->conexion->error;
                    return false;
                } else {
                    return $this->conexion->affected_rows;
                }
                break;

            default:
                $this->error = 'Consulta no permitida!';
                break;
        }
    }
}
?>