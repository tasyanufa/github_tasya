<?php
header('Content-Type: application/json');
$conn = mysqli_connect('localhost', "root", "xxx", "pajak");
$sqlQuery = "SELECT * FROM wajib_pajak";
$result = mysqli_query($conn, $sqlQuery);
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>