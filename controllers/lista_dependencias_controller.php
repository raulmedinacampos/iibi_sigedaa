<?php
session_start();

$dep = array();
$where = (isset($_GET['q'])) ? $_GET['q'] : "";

$dependencia = seleccionarTodo("*", "cDependencia", "1 order by dependencia");
if ( isset($dependencia[1]) && mysqli_num_rows($dependencia[1]) > 0 ) {
	while( $row = mysqli_fetch_array($dependencia[1]) ) {
		$dep[] = $row[1];
	}
}

echo json_encode($dep);
?>