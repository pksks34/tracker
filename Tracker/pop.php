<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'tracker';
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
$file=$_POST["file"];
$query = $db->query("SELECT nm from indexing where file='$file'");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['nm'];
}
echo json_encode($data);

?>