<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $serverName = $_POST["server_name"];
    $ipAddress = $_POST["ip_address"];
    // Retrieve other form fields

    // Validate and sanitize input as needed

    // Store the data in servers.txt
    $data = "$serverName\t$ipAddress\n";
    file_put_contents("data/servers.txt", $data, FILE_APPEND);

    // Redirect to view_inventory.php or any other page
    header("Location: view_inventory.php");
    exit;
}
?>
