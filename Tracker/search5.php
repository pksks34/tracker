<?php
include("config.php");
$searchTerm = $_GET['term'];
$query = $db->query("SELECT * FROM billing WHERE bill LIKE '%".$searchTerm."%' ORDER BY bill ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['bill'];
}
echo json_encode($data);

?>
