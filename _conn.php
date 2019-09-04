<?php

$conn = new PDO ("mysql:dbname=canvasjs_db; host=localhost", "root", "n3w@5iT3");

$stmt = $conn->prepare("SELECT * FROM datapoints ORDER BY x");

$stmt->execute();

$query = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($query as $row) {
	
	foreach ($row as $key => $value){
		
	echo "<strong>".$key. ":</strong>".$value."<br/>";	
	}
	
	echo "==============================================================<br>";
	
}

?>