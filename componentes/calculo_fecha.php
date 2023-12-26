<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$fechaTurno = date("Y-m-d", mktime(0, 0, 0, $month, $day, $year));
$fechaActual = date('Y-m-d');

if($fechaTurno<$fechaActual){
    header("Location: ../unidad2.php?vencido");
} else {
    $calcular = strtotime($fechaTurno) - strtotime($fechaActual);
    $dias = intval($calcular/86400);
    header("Location: ../unidad2.php?dias=$dias");
}
?>