<?php
error_reporting(E_ALL);
include_once 'Classes/PHPExcel.php';
////////////////////////CONEXION//////////////////////////////
	///localhost, nombre del servidor<br />
	///root, nombre de la cuenta de usuario<br />
	/// '' contraseña, sino tiene deje vacio
	///BD, nombre de la base de datos
	$conexion = mysql_connect('localhost','root','');
	mysql_select_db('BD',$conexion);
/////////////////////////////////////////////////////////////
$objXLS = new PHPExcel();
$objSheet = $objXLS->setActiveSheetIndex(0);
////////////////////TITULOS///////////////////////////
$objSheet->setCellValue('A1', 'No');
$objSheet->setCellValue('B1', 'Nombre Region');
$objSheet->setCellValue('C1', 'Nombre dos');

	$numero=1;
	$can=mysql_query("SELECT * FROM region");
	while($dato=mysql_fetch_array($can)){
		$numero++;
		$objSheet->setCellValue('A'.$numero, $dato['id']);
		$objSheet->setCellValue('B'.$numero, $dato['nombre']);
		$objSheet->setCellValue('C'.$numero, $dato['nombre']);
	}
	
$objXLS->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
$objXLS->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
$objXLS->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
$objXLS->getActiveSheet()->setTitle('REGIONES');
$objXLS->setActiveSheetIndex(0);
$objWriter = PHPExcel_IOFactory::createWriter($objXLS, 'Excel5');
$objWriter->save(__DIR__ . "\Regiones.xls");
echo 'Archivo Guardado en '.(__DIR__ . "\Regiones.xls");
?>