<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

// Get connections to port 80
$connections = shell_exec('netstat -tn | grep :80 | grep ESTABLISHED | wc -l');

// Get RAM usage
$free = shell_exec('free -m');
preg_match('/Mem:\s+(\d+)\s+(\d+)/', $free, $matches);
$ramUsage = round(($matches[2] / $matches[1]) * 100);

// Get last 5 Apache logs
$logs = shell_exec('sudo tail -n 5 /var/log/apache2/access.log');

echo json_encode([
    'connections' => trim($connections),
    'ram' => $ramUsage,
    'logs' => $logs ?: "No logs available"
]);
?>
