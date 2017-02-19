<?php
include("config.php");
$searchTerm = $_GET['term'];
$query = $db->query("SELECT * FROM track WHERE assignment LIKE '%".$searchTerm."%' ORDER BY assignment ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['assignment'];
}
echo json_encode($data);

?>
