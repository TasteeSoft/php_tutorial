<?php
$sql = "YOURQUERY";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // table Headers
    echo "<table border='1'>
  <tr>
    <th>Tableheader 1</th>
    <th>Tableheader 2</th>
    <th>Tableheader 3</th>
  </tr>";
  // output data of each row
    foreach ($result as $row) {        
        echo "<tr><td>" . $row["Arraykey1"] . "</td><td>" . $row["Arraykey2"] . "</td><td>" . $row["Arraykey3"] . "</td></tr>";
    }
    echo "</table><br>";
} else {
    echo "0 results";
}
?>