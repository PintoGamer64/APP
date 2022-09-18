<?php


require('../librerias/fpdf/fpdf.php');
include_once '../configuraciones/bd.php';
$conexionBD=BD::crearInstancia(); // CONEXION DE NUESTRA BASE DE DATOS

//PROPIEDADES Y FUNCIONES PARA LA INFORMACION NQUE IRA EN NUESTRO PDF (FUETE, TIPO LETRA, POSICION, COLOR)
function agregarTexto($pdf,$texto,$x,$y,$align='L',$fuente,$size=10,$r=0,$g=0,$b=0){
    $pdf->SetFont($fuente,"",$size);
    $pdf->SetXY($x,$y);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(0,10,$texto,0,0,$align);
}

//FUNCION QUE ME PERMITIRA AGREGAR LA IMAGEN
function agregarImagen($pdf,$imagen,$x,$y){
    $pdf->Image($imagen,$x,$y,0);
}

$idcurso=isset($_GET['idcurso'])?$_GET['idcurso']:'';
$idalumno=isset($_GET['idalumno'])?$_GET['idalumno']:'';

//AQUI SACAMOS LOS DATOS NECESARIOS DE LAS TABLAS DE ALUMNOS Y CURSOS PERO SOLO MOSTRANDO EL NOMBRE Y EL NOMBRE CURSO
$sql="SELECT alumnos.nombre, alumnos.apellidos,cursos.nombre_curso
FROM alumnos, cursos WHERE alumnos.id=:idalumno AND cursos.id=:idcurso";
$consulta=$conexionBD->prepare($sql);
$consulta->bindParam(':idalumno', $idalumno);
$consulta->bindParam(':idcurso', $idcurso);
$consulta->execute();
$alumno=$consulta->fetch(PDO::FETCH_ASSOC);

//GENERAMOS NNUESTRO PDF DANDOLE PROPIEDADES DE TAMAÑO 
$pdf=new FPDF("L","mm",array(254,194));
$pdf->AddPage();
$pdf->setFont("Arial","B",16);
agregarImagen($pdf,"../src/certificado_.jpg",0,0);
agregarTexto($pdf,ucwords(utf8_decode($alumno['nombre']." ".$alumno['apellidos'])),10,80,'C',"Arial",30,0,80,11); //DATO DINAMICO
agregarTexto($pdf,$alumno['nombre_curso'],-250,135,'C',"Arial",30,0,80,11);
$pdf->Output();


print_r($alumno['nombre']." ".$alumno['apellidos']);
print_r($alumno['nombre_curso']);
?>