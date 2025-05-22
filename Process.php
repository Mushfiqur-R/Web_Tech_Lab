<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Preview</title>
    <link href="Process.css" rel="stylesheet">
</head>
<body>
    <h2>Submitted Information Preview</h2>
  <div class="container">
    /*<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "userdata"; 
    
    $conn = new mysqli($host, $user, $pass, $dbname);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirmpass = $_POST['confirmpass'] ?? '';
        $dob = $_POST['dob'] ?? '';
        $country = $_POST['country'] ?? '';
        $favcolor = $_POST['favcolor'] ?? '';
        $gender = $_POST['gender'] ?? '';

        echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;margin:auto auto' >";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        
        echo "<tr><td>Full Name</td><td>" . htmlspecialchars($name) . "</td></tr>";
        echo "<tr><td>Email</td><td>" . htmlspecialchars($email) . "</td></tr>";
        echo "<tr><td>Password</td><td>" . htmlspecialchars($password) . "</td></tr>";
        echo "<tr><td>Confirm Password</td><td>" . htmlspecialchars($confirmpass) . "</td></tr>";
        echo "<tr><td>Date of Birth</td><td>" . htmlspecialchars($dob) . "</td></tr>";
        echo "<tr><td>Country</td><td>" . htmlspecialchars($country) . "</td></tr>";
        echo "<tr><td>Favorite Color</td> 
                <td>
                    <span style='display:inline-block;width:20px;height:20px;background:" . htmlspecialchars($favcolor) . ";border:1px solid #000;vertical-align:middle;'></span>
                    &nbsp;" . htmlspecialchars($favcolor) . "
                </td></tr>";
        echo "<tr><td><strong>Gender</strong></td><td>" . htmlspecialchars($gender) . "</td></tr>";
        
        echo "</table>";
        
    } else {
        echo "<p>No data submitted.</p>";
    }

    $stmt = $conn->prepare("INSERT INTO userdata (name, email, password, confirmpass, dob, country, favcolor, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $password, $confirmpass, $dob, $country, $favcolor, $gender);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='index.html';</script>";
    } else {
        echo "Database error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
    exit;

    ?> */
    <div class="buttons">
    <button onclick="window.location.href='index.html'">Cancel</button>
    <button onclick="alert('Confirmed registration'); window.location.href='index.html'" name="">Confirm</button>
    </div>
    </div>
</body>
</html>
