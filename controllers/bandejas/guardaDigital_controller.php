<?php
session_start();


$dirDestino = "/opt/csw/apache2/share/htdocs/sigedaa/digitales/".$ruta;



boolean isMultipart = ServletFileUpload.isMultipartContent(request);
		
/***************/


int tamañoMaximoArchivo = 1024*1024*12; //valor en bytes --> (11MB)

DiskFileItemFactory diskFile = new DiskFileItemFactory();
diskFile.setSizeThreshold(tamañoMaximoArchivo);
//	List items = upload.parseRequest(request); // Parse the request

String fieldvalue ="";
// http://stackoverflow.com/questions/2422468/how-to-upload-files-in-jsp-servlet/2424824#2424824

List<FileItem> items = new ServletFileUpload(new DiskFileItemFactory()).parseRequest(request);
for (FileItem item : items) {
	if (item.isFormField()) {
		// Process regular form field (input type="text|radio|checkbox|etc", select, etc).
		//         String fieldname = item.getFieldName();
		fieldvalue = item.getString();
		//         out.print("<br>campo: "+fieldname+", valor: "+fieldvalue);
	}/* else {
	Comentadas porque pueden servir para lo de más abajo pero no lo revisé =P
	// Process form file field (input type="file").
	String fieldname = item.getFieldName();
	String filename = FilenameUtils.getName(item.getName());
	InputStream filecontent = item.getInputStream();}*/
}//del for extraño

if(items.size()>0){

	FileItem item = (FileItem) items.get(0);
	if (!item.isFormField()){
		String fileName = item.getName();
		String temp2="";
		char tempc;

		if(fileName.lastIndexOf('\\')!=-1)
			fileName = fileName.substring(fileName.lastIndexOf('\\'),fileName.length());

		for(int ii=0; ii<fileName.length()-5; ii++){
			tempc=fileName.charAt(ii);
			if(Character.isLetterOrDigit(tempc))
				temp2=temp2+tempc;}

		fileName=temp2+fileName.substring(fileName.length()-5,fileName.length());
				

		if(idFuncion==1)
			fileName = "Act"+idActividad.replace(".","")+"_"+fileName;
		if(idFuncion==2)
			fileName = "Meta"+idMeta.replace(".","")+"_"+fileName;
											
		//			out.print("<br>nombrearchivo: "+fileName);
											

		File uploadedFile = new File(directorioDestino,fileName);
		diskFile.setRepository(uploadedFile);
		item.write(uploadedFile);
											
		//			out.println("<p> Se subio en el directorio --> " + uploadedFile.getPath() );
		//		out.println("<p> Con el nombre --> " + uploadedFile.getName()+"<br>");
		int hecho=0;
		String valores;
		int maxId = db.contarInt(periodo+".documentoeva")+1;
											
		if(idFuncion==1){
		//la funcion es guardar documento probatorio de actividad
											
		String idEvaActividad = idActividad+"."+parcial;
		hecho = db.actualizar(periodo+".evaactividad","idDocumentoEva="+maxId,"idEvaActividad='"+idEvaActividad+"'");

		valores = maxId+",'"+numProyecto+"','A"+idEvaActividad+"','"+ruta+"','"+fieldvalue+"','"+fileName+"',"+parcial+",curdate(),"+idUsuario+",1";
		hecho = db.insertar(periodo+".documentoeva", valores);
												
		if(hecho==1){%>
			<script language="javascript">
				alert("El archivo se ha subido con éxito");
			</script>
			<form name="f1" action="evaActividad.jsp">
				<input name="idActividad" type="hidden" value="<%=idActividad%>" />
			</form>
			<script language="javascript">
				document.f1.submit();
			</script><%} //de if hecho == 1
			}//funcion 1 - actividades
											
			//out.print("<br>valores:"+valores+"<br>");

	}//de if !item.isFormField
}//if items.size>0

 
 
 *//*****************/




$maxID=maximo("idArchivoDigital", "archivoDigital")+1;
$nombre = normalizar($nombre);
-->$ruta = prepararRuta();
//preguntar a rebeca para organizar archivos
$idUsuModif = $_SESSION['idUsuario'];

$valores = $maxID.",'".$nombre."','".$ruta."',1,'PDF',1,".$idUsuModif.",now(),1";

insertar($tabla, $valores);
$newVar = mysqli_insert_id($GLOBALS['conexion']);

$valores = "estatus = 2, idArchivoDigital=".$newVar; 
$condicion = "idDocumento = ".$idDocumento;

actualizar("documento", $valores, $condicion);

$data = array(
		'contenido' => $contenido,
		'expediente' => $expediente,
);

Flight::render('template/layout', $data);
?>