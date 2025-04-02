<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");  // Allow all origins (for testing)
header("Access-Control-Allow-Methods: GET"); 
//windows file 
// VM's IP 
$vm_ip = "192.168.138.129"; 

// Use curl to fetch stats from VM
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://$vm_ip/apache_stats.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>