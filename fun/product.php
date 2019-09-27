<?php 
include("conexion.php");
$variant = isset($_GET['variant']) ? $_GET['variant'] : null;
var_dump($variant);
	$sql = 'SELECT a._nombre, a._precio, (select GROUP_CONCAT(DISTINCT `_talla` SEPARATOR ", ") from `productos` where `_modelo` = a.`_modelo`) as tallas,
          (select GROUP_CONCAT(DISTINCT`_color`,"#",`_code_color` SEPARATOR ", ") from `productos` where `_modelo` = a.`_modelo`) as colores,
          a._foto, a._descripcion FROM `productos` as a where a._id = '.$variant.'';
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_row($result)) {

			$qrycolor = explode(",", $row[2]);

			$colorvar ="";
			foreach ($qrycolor as &$valor) {
			    $color = explode("#",$valor);
			    $colornom .= $color[0]." ";
			    $colorvar .= $color[1]." ";
			}

			$extra[]= array(            		           
				"_nombre"=>$row[0],
    			"_precio"=>$row[1],
    			"_foto" => $row[4],
    			"_descripcion"=>$row[5],
    			"tallas"=>$row[2],
    			"coloresVar"=>$colorvar,
    			"coloresNom"=>$colornom
			);	
		}
		$arr= array(
			"resultado"=>"proceso completo",
			"data"=>$extra            
		);		    
		echo json_encode($arr,JSON_UNESCAPED_UNICODE);

	} else {
		$arr= array(            
			"resultado"=>"proceso_incompleto",
			"mensaje"=>"Datos incorrectos"		            
		);		    
		echo json_encode($arr,JSON_UNESCAPED_UNICODE);	
	}

	mysqli_close($conn);
 ?>