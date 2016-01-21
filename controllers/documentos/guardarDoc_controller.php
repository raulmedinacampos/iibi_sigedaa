<?php
session_start();

$tipo_documento = (isset($_POST['tipo_documento'])) ? addslashes($_POST['tipo_documento']) : "";
$asunto = (isset($_POST['asunto'])) ? addslashes($_POST['asunto']) : "";
$destinatario = (isset($_POST['dirigido_a'])) ? addslashes($_POST['dirigido_a']) : "";
$numOficio = (isset($_POST['num_oficio'])) ? addslashes($_POST['num_oficio']) : "";
$cargoDes = (isset($_POST['cargo'])) ? addslashes($_POST['cargo']) : "";
$remitente = (isset($_POST['remitente'])) ? addslashes($_POST['remitente']) : "";
$cargoRem = (isset($_POST['cargo_remitente'])) ? addslashes($_POST['cargo_remitente']) : "";

$otra_institucion = (isset($_POST['otra_institucion'])) ? addslashes($_POST['otra_institucion']) : "";
$dependencia= (isset($_POST['dependencia_unam'])) ? addslashes($_POST['dependencia_unam']) : $otra_institucion;

$subDep = (isset($_POST['entidad_subordinada'])) ? addslashes($_POST['entidad_subordinada']) : "";
$ccp = (isset($_POST['ccp'])) ? addslashes($_POST['ccp']) : "";
$info_relevante = (isset($_POST['informacion_relevante'])) ? addslashes($_POST['informacion_relevante']) : "";
$anexos = (isset($_POST['anexo'])) ? addslashes($_POST['anexo']) : "";
$num_hojas = (isset($_POST['num_hojas'])) ? addslashes($_POST['num_hojas']) : "";
$atender_por= (isset($_POST['atender_por'])) ? addslashes($_POST['atender_por']) : "";
$no_orginal = (isset($_POST['chk_no_original'])) ? 1 : 0;

$idUsuAlta = $_SESSION['idUsuario']; 

$_SESSION['siglasArea'] = $_SESSION['siglasArea'];

$maxID=maximo("idDocumento", "documento")+1;

$consecArea = maxEnAnioCond("consecArea", "fechaAlta", "documento","areaAtencion='".$_SESSION['siglasArea']."'")+1;

$folio = "E/".$_SESSION['siglasArea']."/".$consecArea."/".date('Y');

$valores= $maxID.','.$consecArea.',"'.$atender_por.'",null,"'.$folio.'",'.$tipo_documento.',"'.$asunto.'","'.$numOficio.'","'.$destinatario.'","'.$cargoDes.'","'.$remitente.'","'.$cargoRem.'","'.$dependencia.'","'.$subDep.'","'.$ccp.'","'.$info_relevante.'","'.$anexos.'",'.$num_hojas.','.$no_orginal.',null,null,null,'.$idUsuAlta.',null,now(),null,1';
 
$insertar = insertar("documento", $valores);
if($insertar[0]==1){
	echo "<p>Número de folio ".$folio."</p>";
	echo "<p>Recibido</p>". $_SESSION['iniciales'];
	echo "<p>Fecha</p>".date(d)."/".date(m)."/".date(y);
	echo "<p>Hora</p>".date(H).":".date(i);}
else 
	echo "Ocurió un problema, favor de comunicarse con el adminsitrador.";

?>