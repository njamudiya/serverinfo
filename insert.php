<!DOCTYPE html>
<html>
<head>
  <title>Insert Data</title>
</head>
<body>
  <h1>Insert Data</h1>
  
  <!-- Form for inserting data -->
  <form method="POST" action="save_data.php">
    <label for="server_name">Server Name:</label>
    <input type="text" id="server_name" name="server_name" required>
    <br><br>
    <label for="ip_address">IP Address:</label>
    <input type="text" id="ip_address" name="ip_address" required>
    <br><br>
    <label for="application">Application:</label>
    <input type="text" id="application" name="application" required>
    <br><br>
    <label for="description">Description:</label>
    <input type="text" id="description" name="description" required>
    <br><br>
    <label for="os">Operating System:</label>
    <select id="os" name="os" required>
      <option value="Windows">Windows</option>
      <option value="Linux">Linux</option>
      <option value="Mac">Mac</option>
    </select>
    <br><br>
    <label for="os_version">Operating System Version:</label>
    <select id="os_version" name="os_version" required>
      <option value="Windows 10">Windows 10</option>
      <option value="Ubuntu 20.04">Ubuntu 20.04</option>
      <option value="macOS Big Sur">macOS Big Sur</option>
    </select>
    <br><br>
    <label for="local_admin">Local Admin Account:</label>
    <input type="text" id="local_admin" name="local_admin" required>
    <br><br>
    <label for="local_admin_password">Local Admin Account Password:</label>
    <input type="password" id="local_admin_password" name="local_admin_password" required>
    <br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
