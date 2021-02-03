<?php
    $registro = $_POST['registro'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $lugartrabajo = $_POST['lugartrabajo'];
    $departamento = $_POST['departamento'];
    $sueldo = $_POST['sueldo'];

    // && !empty($nombre) && !empty($apellido) && !empty($cedula) && !empty($lugartrabajo) && !empty($departamento) && !empty($sueldo)
    if($registro == "success" ){
        $equipo = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'cedula' => $cedula,
            'lugartrabajo' => $lugartrabajo,
            'departamento' => $departamento,
            'sueldo' => $sueldo,
        );
        echo json_encode(array("data"=>$equipo, "mensaje"=>"ingresado correctamente"));

    }


?>