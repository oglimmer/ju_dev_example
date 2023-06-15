<?php
// Database connection settings
$host = 'mysql_db';
$dbName = 'rechamberdb';
$username = 'app_user';
$password = 'app_pass';

try {
    // Create a new PDO instance
    $db = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);

    // Set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SELECT query
    $query = "SELECT * FROM test";
    $statement = $db->prepare($query);

    // Execute the query
    $statement->execute();

    // Fetch all rows as associative arrays
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Output the result
    foreach ($rows as $row) {
        // Access the values using column names
        echo "ID: " . $row['id'] . "<br>\n";
        echo "Name: " . $row['name'] . "<br>\n";
        echo "<br>\n";
    }
} catch (PDOException $e) {
    // Display any errors
    echo "Error: " . $e->getMessage();
}
?>