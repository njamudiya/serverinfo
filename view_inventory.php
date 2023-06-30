<!DOCTYPE html>
<html>
<head>
    <title>View Inventory</title>
</head>
<body>
    <h1>Server Inventory</h1>
    <table>
        <tr>
            <th>Server Name</th>
            <th>IP Address</th>
            <!-- Add more table headers for other server information -->
        </tr>
        <?php
        // Read data from servers.txt
        $serverData = file_get_contents("data/servers.txt");
        $servers = explode("\n", $serverData);

        foreach ($servers as $server) {
            $fields = explode("\t", $server);
            $serverName = $fields[0];
            $ipAddress = $fields[1];
            // Retrieve other server information

            echo "<tr>";
            echo "<td><a href='device_kb.php?server=$serverName'>$serverName</a></td>";
            echo "<td>$ipAddress</td>";
            // Display other server information in respective table cells
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
