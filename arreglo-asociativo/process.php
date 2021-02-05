<?php
        $registro = $_POST['registro'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $lugartrabajo = $_POST['lugartrabajo'];
        $departamento = $_POST['departamento'];
        $sueldo = $_POST['sueldo'];

        // 
        if($registro == "success"){
            if(!empty($nombre) && !empty($apellido) && !empty($cedula) && !empty($lugartrabajo) && !empty($departamento) && !empty($sueldo)){
                $equipo = array(
                    'nombre' => $nombre,
                    'apellido' => $apellido,
                    'cedula' => $cedula,
                    'lugartrabajo' => $lugartrabajo,
                    'departamento' => $departamento,
                    'sueldo' => $sueldo,
                );
                echo json_encode(array("data"=>$equipo, "mensaje"=>"ingresado correctamente"));
            } else {
                echo json_encode(array("data"=>null, "mensaje"=>"Las variables son inválidas"));
            }
        }
?>