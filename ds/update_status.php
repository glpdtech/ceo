<?php
$status = $_POST['status'] ?? 'default';
$statusData = json_decode(file_get_contents('status.json'), true);

if ($status) {
    $statusData['status'] = $status;
    file_put_contents('status.json', json_encode($statusData));
    echo "Status updated to: $status";
} else {
    echo "Error: No status received.";
}
?>
