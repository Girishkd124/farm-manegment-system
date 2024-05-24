<?php
      include('header.php');
      ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agrolight";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the buyer table
$sql = "SELECT username, fullname, email FROM buyer";
$result = $conn->query($sql);

echo '<html>
        <head>
            <title>Buyer Data</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                h2 {
                    color: #333;
                    text-align:center;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 20px;
                }
                th, td {
                    padding: 10px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                }
                th {
                    background-color: #f2f2f2;
                }
                a {
                    text-decoration: none;
                    color: #3498db;
                }
                a:hover {
                    text-decoration: underline;
                }
            </style>
        </head>
        <body>
            <h2 style="margin-top:30px;">Buyer Data</h2>
            <table border="1">
                <tr>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>';

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['username']}</td>
                <td>{$row['fullname']}</td>
                <td>{$row['email']}</td>
                <td><a href='delete_buyer.php?username={$row['username']}'>Delete</a></td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No buyers found</td></tr>";
}

echo '</table>
      </body>
    </html>';

//  for farmer

// Fetch data from the buyer table
$sql = "SELECT username, fullname, email FROM farmer";
$result = $conn->query($sql);

echo '<html>
        <head>
            <title>Farmer Data</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                h2 {
                    color: #333;
                    text-align:center;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 20px;
                }
                th, td {
                    padding: 10px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                }
                th {
                    background-color: #f2f2f2;
                }
                a {
                    text-decoration: none;
                    color: #3498db;
                }
                a:hover {
                    text-decoration: underline;
                }
            </style>
        </head>
        <body>
            <h2 style="margin-top:30px;">Farmer Data</h2>
            <table border="1">
                <tr>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>';

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['username']}</td>
                <td>{$row['fullname']}</td>
                <td>{$row['email']}</td>
                <td><a href='delete_buyer.php?username={$row['username']}'>Delete</a></td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No Farmer found</td></tr>";
}

echo '</table>
      </body>
    </html>';

$conn->close();
?>
