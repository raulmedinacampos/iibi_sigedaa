<?php
session_start();

$header = "";
$html = "";

$header .= '<div class="header">';
$header .= '<table>';
$header .= '<tr>';
$header .= '<td><img src="images/unam_pdf.jpg" alt="" width="55pt" /></td>';
$header .= '<td><p><strong>Guía Simple de Archivos</strong></p></td>';
$header .= '<td witdh="85pt">&nbsp;</td>';
$header .= '</tr>';
$header .= '</table>';
$header .= '</div>';

$html .= '<div class="datos izq">';
$html .= '<p><strong>Fondo:</strong> UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO</p>';
$html .= '<p><strong>Código de la Unidad Universitaria:</strong> ______</p>';
$html .= '<p><strong>Fecha de elaboración:</strong> dd / mm / aaaa</p>';
$html .= '</div>';

$html .= '<div class="datos der">';
$html .= '<p><strong>Nombre de la Unidad Universitaria:</strong> _______</p>';
$html .= '<p><strong>Página:</strong> _______ <strong>de</strong> _______</p>';
$html .= '</div>';

$html .= '<div class="clear"></div>';

$html .= '<table>';
$html .= '<tr>';
$html .= '<td class="titulo" colspan="7">Identificación</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="7" class="centrado">ARCHIVO DE TRÁMITE</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="3">NOMBRE DEL ÁREA PRODUCTORA DE LA DOCUMENTACIÓN</td>';
$html .= '<td colspan="4">&nbsp;</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="2">NOMBRE DEL RESPONSABLE DEL ARCHIVO DE TRÁMITE:</td>';
$html .= '<td>CARGO:</td>';
$html .= '<td colspan="4">NÚMERO TELEFÓNICO:<br />CORREO ELECTRÓNICO:</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="7">DIRECCIÓN DEL ARCHIVO DE TRÁMITE:</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td class="titulo" colspan="7">Contexto</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<th rowspan="2">Nivel</th>';
$html .= '<th rowspan="2">Código de clasificación</th>';
$html .= '<th rowspan="2">Descripción de la serie o subserie</th>';
$html .= '<th colspan="2">Fechas extremas</th>';
$html .= '<th rowspan="2">Volumen</th>';
$html .= '<th rowspan="2">Ubicación física</th>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<th>inicio</th>';
$html .= '<th>cierre</th>';
$html .= '</tr>';
for ( $i=0; $i<3; $i++ ) {
	$html .= '<tr>';
	$html .= '<td>&nbsp;</td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '</tr>';
}
$html .= '</table>';

$html .= '<br />';

$html .= '<table>';
$html .= '<tr>';
$html .= '<td class="titulo" colspan="7">Identificación</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="7" class="centrado">ARCHIVO DE CONCENTRACIÓN</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="3">NOMBRE DEL ÁREA PRODUCTORA DE LA DOCUMENTACIÓN</td>';
$html .= '<td colspan="4">&nbsp;</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="2">NOMBRE DEL RESPONSABLE DEL ARCHIVO:</td>';
$html .= '<td>CARGO:</td>';
$html .= '<td colspan="4">NÚMERO TELEFÓNICO:<br />CORREO ELECTRÓNICO:</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="7">DIRECCIÓN DEL ARCHIVO DE CONCENTRACIÓN:</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td class="titulo" colspan="7">Contexto</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<th rowspan="2">Nivel</th>';
$html .= '<th rowspan="2">Código de clasificación</th>';
$html .= '<th rowspan="2">Descripción de la serie o subserie</th>';
$html .= '<th colspan="2">Fechas extremas</th>';
$html .= '<th rowspan="2">Volumen</th>';
$html .= '<th rowspan="2">Ubicación física</th>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<th>inicio</th>';
$html .= '<th>cierre</th>';
$html .= '</tr>';
for ( $i=0; $i<3; $i++ ) {
	$html .= '<tr>';
	$html .= '<td>&nbsp;</td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '</tr>';
}
$html .= '</table>';

$html .= '<br />';

$html .= '<table>';
$html .= '<tr>';
$html .= '<td class="titulo" colspan="7">Identificación</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="7" class="centrado">ARCHIVO HISTÓRICO</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="3">NOMBRE DEL ÁREA PRODUCTORA DE LA DOCUMENTACIÓN</td>';
$html .= '<td colspan="4">&nbsp;</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="2">NOMBRE DEL RESPONSABLE DEL ARCHIVO HISTÓRICO:</td>';
$html .= '<td>CARGO:</td>';
$html .= '<td colspan="4">NÚMERO TELEFÓNICO:<br />CORREO ELECTRÓNICO:</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="7">DIRECCIÓN DEL ARCHIVO HISTÓRICO:</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td class="titulo" colspan="7">Contexto</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<th rowspan="2">Nivel</th>';
$html .= '<th rowspan="2">Código de clasificación</th>';
$html .= '<th rowspan="2">Descripción de la serie o subserie</th>';
$html .= '<th colspan="2">Fechas extremas</th>';
$html .= '<th rowspan="2">Volumen</th>';
$html .= '<th rowspan="2">Ubicación física</th>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<th>inicio</th>';
$html .= '<th>cierre</th>';
$html .= '</tr>';
for ( $i=0; $i<3; $i++ ) {
	$html .= '<tr>';
	$html .= '<td>&nbsp;</td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '</tr>';
}
$html .= '</table>';

$html .= '<br />';

$html .= '<div class="firmas">';
$html .= '<div class="firma dos">';
$html .= '<p>ELABORÓ</p>';
$html .= '<p class="cargo">RESPONSABLE DE ARCHIVO</p>';
$html .= '<p class="nombre">NOMBRE Y FIRMA</p>';
$html .= '</div>';  //.firma1

$html .= '<div class="firma">';
$html .= '<p>VALIDÓ</p>';
$html .= '<p class="cargo">ÁREA COORDINADORA DE ARCHIVOS</p>';
$html .= '<p class="nombre">NOMBRE Y FIRMA</p>';
$html .= '</div>';  //.firma2
$html .= '</div>';  //.firmas

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $_SERVER['HTTP_HOST'].'/sigedaa/css/formatos.css');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$stylesheet = curl_exec($ch);
curl_close($ch);

include_once 'inc/mpdf/mpdf.php';
$mpdf = new mPDF("c", "Letter-L", 0, "", 20, 20, 38, 15, 10);

$mpdf->SetHTMLHeader($header);
$mpdf->WriteHTML($stylesheet, 1);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>