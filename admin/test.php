<?php
$con = mysqli_connect("localhost", "root", "", "iith");
$start_time = microtime(true);

// Existing PHP code

$sql = "SELECT * FROM events ORDER BY id DESC";
$res = mysqli_query($con, $sql);

$end_time = microtime(true);
$execution_time = $end_time - $start_time;

echo "Execution time for SQL query: " . $execution_time . " seconds";
?>
