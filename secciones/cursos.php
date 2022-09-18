<?php

//AQUI LLAMMOS LA BASE DE DATOS

include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia(); //METODO PARA LLAMARLO

// RECEPCION DE INSTRUCCIONES
$accion = $_POST['acciontype'];
$nameC = $_POST['nameC'];
$teacherC = $_POST['teacherC'];
$typeC = $_POST['typeC'];
$descriptionC = $_POST['descriptionC'];
$requirementsC = $_POST['requirementsC'];
$skillsC = $_POST['skillsC'];
$startC = $_POST['startC'];
$endC = $_POST['endC'];
$durationC = $_POST['durationC'];

if ($accion != '') {

    switch ($accion) {

        case 'agregar':
            $key1 = 5;
            $key2 = 10;
            $sql = "INSERT INTO courses (id, numbercourse, namecourse, teacher, typeformation, description, requirements, skills, start, end, duration, token) VALUES (NULL, :numbercourse, :namecourse, :teacher, :typeformation, :description, :requirements, :skills, :start, :end, :duration, :token)";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':numbercourse', $key1);
            $consulta->bindParam(':namecourse', $nameC);
            $consulta->bindParam(':teacher', $teacherC);
            $consulta->bindParam(':typeinformation', $typeC);
            $consulta->bindParam(':description', $descriptionC);
            $consulta->bindParam(':requirements', $requirementsC);
            $consulta->bindParam(':skills', $skillsC);
            $consulta->bindParam(':start', $startC);
            $consulta->bindParam(':end', $endC);
            $consulta->bindParam(':duration', $durationC);
            $consulta->bindParam(':token', $key2);
            $consulta->execute();
            break;

        case 'editar':
            $sql = "UPDATE cursos SET nombre_curso=:nombre_curso WHERE id=:id";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->bindParam(':nombre_curso', $nombre_curso);
            $consulta->execute();
            break;

        case 'borrar':
            $sql = "DELETE FROM cursos WHERE id=:id";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            break;

        case 'Seleccionar':
            $sql = "SELECT * FROM cursos WHERE id=:id";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $curso = $consulta->fetch(PDO::FETCH_ASSOC);
            $nombre_curso = $curso['nombre_curso'];
            break;
    }
}
