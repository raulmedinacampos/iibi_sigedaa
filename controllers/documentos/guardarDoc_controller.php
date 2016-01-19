<?php

/*Todos los nuevos controladores deben declararse en index.php (lÃ­nea 44)*/
session_start();

$tipo_documento = (isset($_POST['tipo_documento'])) ? addslashes($_POST['tipo_documento']) : "";
$asunto = (isset($_POST['asunto'])) ? addslashes($_POST['asunto']) : "";
$dirigido_a = (isset($_POST['dirigido_a'])) ? addslashes($_POST['dirigido_a']) : "";
$num_oficio = (isset($_POST['num_oficio'])) ? addslashes($_POST['num_oficio']) : "";
$cargo = (isset($_POST['cargo'])) ? addslashes($_POST['cargo']) : "";
$remitente = (isset($_POST['remitente'])) ? addslashes($_POST['remitente']) : "";
$cargoRem = (isset($_POST['cargo_remitente'])) ? addslashes($_POST['cargo_remitente']) : "";

$otra_institucion = (isset($_POST['otra_institucion'])) ? addslashes($_POST['otra_institucion']) : "";
$dependencia= (isset($_POST['dependencia_unam'])) ? addslashes($_POST['dependencia_unam']) : $otra_institucion;

$subDep = (isset($_POST['entidad_subordinada'])) ? addslashes($_POST['entidad_subordinada']) : "";
$ccp = (isset($_POST['ccp'])) ? addslashes($_POST['ccp']) : "";
$info_relevante = (isset($_POST['informacion_relevante'])) ? addslashes($_POST['informacion_relevante']) : "";
$anexo = (isset($_POST['anexo'])) ? addslashes($_POST['anexo']) : "";
$num_hojas = (isset($_POST['num_hojas'])) ? addslashes($_POST['num_hojas']) : "";
$atender_por= (isset($_POST['atender_por'])) ? addslashes($_POST['atender_por']) : "";
$no_orginal = (isset($_POST['no_original'])) ? addslashes($_POST['no_original']) : "";

$idUsuarioModif = 1;  
/*tomar el idUsuario de la session*/

$_SESSION['siglasArea'] = "SAD";
  
$maxID=maximo("idDocumento", "documento")+1;

$consecArea = maxEnAnioCond("consecArea", "fechaAlta", "documento","areaAtencion='".$_SESSION['siglasArea']."'")+1;


$folio = "E/".$_SESSION['areaSiglas']."/".$consecArea."/2016";
/*arreglar el año para que sea el actual*/

$valores= $maxID.','.$consecArea.',"'.$_SESSION['siglasArea'].'",null,'.$tipo_documento.',"'.$asunto.'","'.$numOficio.'","'.$destinatario.'","'.$cargo.'","'.$remitente.'","'.$cargoRem.'","'.$dependencia.'","'.$subDep.'","'.$ccp.'","'.$info_relevante.'","'.$anexos.'",'.$num_hojas.','.$no_orginal.',null,null,null,null,curdate(),null,1';

$insertar = insertar("documento", $valores);
if($insertar[0]==1)
	echo "El alert con folio y demás";
else 
	echo "Alert con mensaje de error, vuelva a intentar";

?>