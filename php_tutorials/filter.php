<?php
$sql = 'YOURQUERY';
$result = $conn->query($sql);

echo '<form action="filter.php" method="POST">';
if ($result->num_rows > 0) {
    echo "Dropdown: <select name='dropdowninput'>";
    foreach ($result as $row) {
        echo '<option value="' . $row["Arraykey1"] . '">' . $row['Arraykey2'] . '</option>';
    }
    echo '</select>';
    echo 'Textinput: <input type="text" name="textinput" value="">';
    echo '<input type="submit" value="suchen">';
echo '</form>';

print_r($_POST);

$sql = 'YOURQUERY';
// check if return empty
if (!empty($_POST['dropdown'])) $sql .= ' AND table.entity = ' .$_POST['dropdowninput'];
if (!empty($_POST['textinput'])) $sql .= ' AND table.entity LIKE "%'.$_POST['textinput'].'%"';

$result = $conn->query($sql);
echo '<table border="1">';
    foreach ($result as $row) {
        echo '<tr><td>'. $row['Arraykey1'] . '</td><td>'. $row['Arraykey2'] . '</td><td>' . $row['Arraykey3'] . '</td></tr>';
    }
echo '</table>';
} else {
    echo "0 results";
}
?>