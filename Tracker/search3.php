<?php
include("config.php");
$searchTerm = $_GET['term'];
$query = $db->query("SELECT * FROM indexing WHERE pan LIKE '%".$searchTerm."%' ORDER BY pan ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['pan'];
}
echo json_encode($data);

?>
