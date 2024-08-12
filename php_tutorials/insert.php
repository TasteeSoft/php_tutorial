<?php
echo '<form action="insert.php" method="POST">';
		echo 'Dropdown1: <select name="dropdown1">';
			$sql = 'YOURQUERY';
			$result = $mysqli->query($sql);
			foreach ($result as $row) 
			{
				echo '<option value="' . $row['Arraykey1'] .'">' . $row['Arraykey2'] .'</option>';
			}
		echo '</select><br>';
		
		echo 'Dropdown2: <select name="dropdown2">';
			$sql = 'YOURQUERY';
			$result = $mysqli->query($sql);
			foreach ($result as $row) 
			{
				echo '<option value="' . $row['Arraykey1'] .'">' . $row['Arraykey2'] .'</option>';
			}
		echo '</select><br>';
		echo 'Date: <input type="text" name="date" value="'.date('Y-m-d H:i:s').'"><br>';
		echo '<input type="submit" value="save">';
	echo '</form>';

	if (!empty($_POST['kunde']))
	{
		$sql = 'INSERT INTO verleih (Arraykey1, Arraykey2, Arraykey3) VALUES (?,?,?);'; // or delete
		// prepared statement
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param('iis' ,$_POST['Dropdown1 (integer)'], $_POST['Dropdown2 (integer)'], $_POST['Text (string, Date)']);
		$stmt->execute();
	}
?>