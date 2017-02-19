<?php
include("config.php");
$searchTerm = $_GET['term'];
$query = $db->query("SELECT * FROM indexing WHERE file LIKE '%".$searchTerm."%' ORDER BY file ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['file'];
}
echo json_encode($data);

?>
