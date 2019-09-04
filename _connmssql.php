<?php

$conn = new PDO ("odbc:sqlsrv_microsoft", "sa", "Visconde@137");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY id");

$stmt->execute();

$query = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($query as $row) {
	
	foreach ($row as $key => $value){
		
	echo "<strong>".$key. ":</strong>".$value."<br/>";	
	}
	
	echo "==============================================================<br>";
	
}

?>