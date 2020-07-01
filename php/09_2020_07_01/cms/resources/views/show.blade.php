<?php 
	echo "<table border ='1'>";
foreach ($name as $key => $value) {
}
echo '<tr>';
	foreach ($value as $key1 => $value1) {
		echo "<th>$key1</th>";
	}
	echo '</tr>';
foreach ($name as $key => $value) {
	echo '<tr>';
	foreach ($value as $key1 => $value1) {
		echo "<td>$value1</td>";
	}
	echo '</tr>';
}
echo "</table>";
 ?>