<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Preview</title>
</head>
<body>
    <h2>Submitted Information Preview</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirmpass = $_POST['confirmpass'] ?? '';
        $dob = $_POST['dob'] ?? '';
        $country = $_POST['country'] ?? '';
        $favcolor = $_POST['favcolor'] ?? '';
        $gender = $_POST['gender'] ?? '';

        echo "<p><strong>Full Name:</strong> " . htmlspecialchars($name) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>";
        echo "<p><strong>Confirm Password:</strong> " . htmlspecialchars($confirmpass) . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($dob) . "</p>";
        echo "<p><strong>Country:</strong> " . htmlspecialchars($country) . "</p>";
        echo "<p><strong>Favorite Color:</strong> <span style='display:inline-block;width:20px;height:20px;background:$favcolor;'></span> " . htmlspecialchars($favcolor) . "</p>";
        echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>
    <button>Confirm</button>
</body>
</html>
