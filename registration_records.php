<?php
// Assuming you have a MySQL connection, replace the placeholders with your actual credentials

$servername = "localhost";
$username = "globalaiethics_root";
$password = "Password@2020*";
$dbname = "globalaiethics_leads";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'users' table
$sql = "SELECT id, full_name, email, phone FROM users";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">ID</th>';
    echo '<th scope="col">Full Name</th>';
    echo '<th scope="col">Email</th>';
    echo '<th scope="col">Phone</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th scope="row">' . $row['id'] . '</th>';
        echo '<td>' . $row['full_name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No records found';
}

// Close the database connection
$conn->close();
?>
