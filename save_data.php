<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $serverName = $_POST['server_name'];
  $ipAddress = $_POST['ip_address'];
  $application = $_POST['application'];
  $description = $_POST['description'];
  $os = $_POST['os'];
  $osVersion = $_POST['os_version'];
  $localAdmin = $_POST['local_admin'];
  $localAdminPassword = $_POST['local_admin_password'];
  
  // Create a new record
  $record = "Server Name: $serverName\nIP Address: $ipAddress\nApplication: $application\nDescription: $description\nOperating System: $os\nOS Version: $osVersion\nLocal Admin Account: $localAdmin\nLocal Admin Account Password: $localAdminPassword\n\n";
  
  // Save the record to a file
  file_put_contents('inventory.txt', $record, FILE_APPEND);
  
  // Redirect back to the insert page
  header('Location: insert.php');
  exit();
}
?>
