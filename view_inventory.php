<!DOCTYPE html>
<html>
<head>
  <title>View Inventory</title>
  <style>
    table {
      border-collapse: collapse;
    }
    
    th, td {
      border: 1px solid black;
      padding: 5px;
    }
  </style>
</head>
<body>
  <h1>View Inventory</h1>
  
  <!-- Display the inventory records -->
  <table>
    <tr>
      <th>Server Name</th>
      <th>IP Address</th>
      <th>Application</th>
      <th>Description</th>
      <th>Operating System</th>
      <th>OS Version</th>
      <th>Local Admin Account</th>
    </tr>
    <?php
      $records = file('inventory.txt');
      
      foreach ($records as $record) {
        $data = explode("\n", trim($record));
        
        echo '<tr>';
        echo '<td><a href="devices/'.$data[0].'.md">'.$data[0].'</a></td>';
        echo '<td>'.$data[1].'</td>';
        echo '<td>'.$data[2].'</td>';
        echo '<td>'.$data[3].'</td>';
        echo '<td>'.$data[4].'</td>';
        echo '<td>'.$data[5].'</td>';
        echo '<td>'.$data[6].'</td>';
        echo '</tr>';
      }
    ?>
  </table>
</body>
</html>
