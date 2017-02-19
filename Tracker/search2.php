<?php
include("config.php");
$searchTerm = $_GET['term'];
$query = $db->query("SELECT * FROM indexing WHERE nm LIKE '%".$searchTerm."%' ORDER BY nm ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['nm'];
}
echo json_encode($data);

?>
