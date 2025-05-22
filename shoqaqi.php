<?php
// Connect to your database
$host = "localhost";
$username = "root";
$password = ""; // or your DB password
$dbname = "info";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['country']) && is_array($_GET['country']) && count($_GET['country']) >= 10) {
    // Get selected countries directly
    $countries = $_GET['country'];
    
    // Create a string like: 'USA','India','China'
    $inClause = "'" . implode("','", $countries) . "'";

    $sql = "SELECT City, Country, Aqi FROM infotable WHERE Country IN ($inClause)";
    $result = $conn->query($sql);

    // Display as a table
    if ($result->num_rows > 0) {
        echo "<h2 style=\"text-align:center\">Showing AQI Records for Selected Countries</h2>";
        echo "<table border='1' cellpadding='10' style='border-collapse: collapse; margin: 0 auto;'>";
        echo "<tr><th>City</th><th>Country</th><th>AQI</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["City"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Country"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["Aqi"]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data found.";
    }
} else {
    echo "<p style='color:red; text-align:center;'>Please select at least 10 countries.</p>";
}

$conn->close();
?>
