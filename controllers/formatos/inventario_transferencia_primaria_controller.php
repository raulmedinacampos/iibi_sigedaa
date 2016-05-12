<?php
session_start();

$header = "";
$html = "";

$header .= '<div class="header">';
$header .= '<table>';
$header .= '<tr>';
$header .= '<td><img src="images/unam_pdf.jpg" alt="" width="55pt" /></td>';
$header .= '<td><p><strong>Inventario de Transferencia Primaria</strong></p></td>';
$header .= '<td witdh="85pt">&nbsp;</td>';
$header .= '</tr>';
$header .= '</table>';
$header .= '</div>';

$html .= '<div class="datos izq">';
$html .= '<p><strong>Fondo:</strong> UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO</p>';
$html .= '<p><strong>Código de la Unidad Universitaria:</strong> ______</p>';
$html .= '<p><strong>Nombre del responsable del archivo de trámite:</strong> ______</p>';
$html .= '</div>';

$html .= '<div class="datos der">';
$html .= '<p><strong>Nombre de la Unidad Universitaria:</strong> _______</p>';
$html .= '<p><strong>Número de transferencia:</strong> ______ <strong></p>';
$html .= '<p><strong>Fecha de elaboración:</strong> dd / mm / aaaa</p>';
$html .= '<p><strong>Página:</strong> _______ <strong>de</strong> _______</p>';
$html .= '</div>';

$html .= '<div class="clear"></div>';

$html .= '<table>';
$html .= '<tr>';
$html .= '<th rowspan="2">Número de caja</th>';
$html .= '<th rowspan="2">Número consecutivo</th>';
$html .= '<th rowspan="2">Código de clasificación</th>';
$html .= '<th rowspan="2">Nombre del expediente</th>';
$html .= '<th rowspan="2">Descripción del expediente</th>';
$html .= '<th colspan="3">Valor documental</th>';
$html .= '<th colspan="3">Clasificación de la información</th>';
$html .= '<th colspan="2">Fechas extremas</th>';
$html .= '<th colspan="2">Plazos de conservación</th>';
$html .= '<th rowspan="2">Observaciones</th>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<th>a</th>';
$html .= '<th>l</th>';
$html .= '<th>f</th>';
$html .= '<th>p</th>';
$html .= '<th>r</th>';
$html .= '<th>c</th>';
$html .= '<th>apertura</th>';
$html .= '<th>cierre</th>';
$html .= '<th>trámite</th>';
$html .= '<th>concentración</th>';
$html .= '</tr>';
for ( $i=0; $i<6; $i++ ) {
	$html .= '<tr>';
	$html .= '<td>&nbsp;</td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '<td></td>';
	$html .= '</tr>';
}
$html .= '</table>';

$html .= '<p>El presente inventario consta de ___ fojas y ampara la cantidad de ______ expedientes ';
$html .= 'de los años de ____, contenidos en ____ cajas, y un peso aproximado de ______ kg</p>';

$html .= '<div>';
$html .= '<div class="firma primero">';
$html .= '<p>AUTORIZA</p>';
$html .= '<p class="cargo">RESPONSABLE DEL ÁREA PRODUCTORA DE LA DOCUMENTACIÓN</p>';
$html .= '<p class="nombre">NOMBRE Y FIRMA</p>';
$html .= '</div>';  //.firma1

$html .= '<div class="firma">';
$html .= '<p>ENTREGA</p>';
$html .= '<p class="cargo">RESPONSABLE DE ARCHIVO DE TRÁMITE</p>';
$html .= '<p class="nombre">NOMBRE Y FIRMA</p>';
$html .= '</div>';  //.firma2

$html .= '<div class="firma ultimo">';
$html .= '<p>RECIBE LA DOCUMENTACIÓN</p>';
$html .= '<p class="cargo">RESPONSABLE DE ARCHIVO DE CONCENTRACIÓN</p>';
$html .= '<p class="nombre">NOMBRE Y FIRMA</p>';
$html .= '</div>';  //.firma3
$html .= '</div>';  //div

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