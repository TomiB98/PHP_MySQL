<?php
class Users {
    public $bd;

    function __construct($base) {
        $this->bd = $base;
    }

    public function sign_Up($email, $password) {
        $respuesta = $this->bd->ejecutarConsultas("INSERT INTO registro VALUES ('$email', '$password')");
        return $respuesta;
    }

    public function log_In($email, $password) {
        $consulta = $this->bd->ejecutarConsultas("SELECT email, contrasena FROM registro WHERE email='$email'");
        $usu = $consulta;

        if(count($usu) !== 0) {
            // $separar_datos = mysqli_fetch_assoc($consulta);
            //$verificacion = password_verify($password, $separar_datos['contrasena']);
            $verificacion = password_verify($password, $usu[0]['contrasena']);
            if($verificacion) {
                return true;
            }
        } else {
            return false;
        }
    }
}
?>