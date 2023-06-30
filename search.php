<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
</head>
<body>
    <h1>Search</h1>
    <form action="search.php" method="GET">
        <label>Search by Server Name or IP Address:</label>
        <input type="text" name="search_query" required><br>
        <input type="submit" value="Search">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Retrieve search query
        $searchQuery = $_GET["search_query"];

        // Read data from servers.txt
        $serverData = file_get_contents("data/servers.txt");
        $servers = explode("\n", $serverData);

        // Search for matching server records
        $matchingServers = array();
        foreach ($servers as $server) {
            $fields = explode("\t", $server);
            $serverName = $fields[0];
            $ipAddress = $fields[1];
            // Retrieve other server information

            // Perform search based on server name or IP address
            if (strpos($serverName, $searchQuery) !== false || strpos($ipAddress, $searchQuery) !== false) {
                $matchingServers[] = $server;
            }
        }

        // Display matching server records
        if (!empty($matchingServers)) {
            echo "<h2>Matching Servers:</h2>";
            echo "<ul>";
            foreach ($matchingServers as $server) {
                $fields = explode("\t", $server);
                $serverName = $fields[0];
                $ipAddress = $fields[1];
                // Retrieve other server information

                echo "<li>Server Name: $serverName</li>";
                echo "<li>IP Address: $ipAddress</li>";
                // Display other server information
                echo "<br>";
            }
            echo "</ul>";
        } else {
            echo "<p>No matching servers found.</p>";
        }
    }
    ?>
</body>
</html>
