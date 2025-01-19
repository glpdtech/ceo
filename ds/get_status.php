<?php
$statusData = json_decode(file_get_contents('status.json'), true);
echo json_encode($statusData);
?>
