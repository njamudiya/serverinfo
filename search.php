<!DOCTYPE html>
<html>
<head>
  <title>Search</title>
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
  <h1>Search</h1>
  
  <!-- Form for searching records -->
  <form method="GET" action="search.php">
    <label for="search_query">Search by Server Name or IP Address:</label>
    <input type="text" id="search_query" name="search_query" required>
    <input type="submit" value="Search">
  </form>
  
  <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      $searchQuery = $_GET['search_query'];
      $records = file('inventory.txt');
      $results = [];
      
      foreach ($records as $record) {
        if (strpos($record, $searchQuery) !== false) {
          $results[] = $record;
        }
      }
      
      if (count($results) > 0) {
        echo '<h2>Search Results:</h2>';
        echo '<table>';
        echo '<tr>';
        echo '<th>Server Name</th>';
        echo '<th>IP Address</th>';
        echo '<th>Application</th>';
        echo '<th>Description</th>';
        echo '<th>Operating System</th>';
        echo '<th>OS Version</th>';
        echo '<th>Local Admin Account</th>';
        echo '</tr>';
        
        foreach ($results as $result) {
          $data = explode("\n", trim($result));
          
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
        
        echo '</table>';
      } else {
        echo '<p>No results found.</p>';
      }
    }
  ?>
</body>
</html>
