<?php
// Database configuration
$DATABASE_CONFIG = [
    "host" => "103.76.248.50",
    "user" => "certifyp_invoice_user2",
    "password" => "Windows321", // Replace with the actual password
    "database" => "certifyp_restaurant",
];

// Test database connection
try {
    // Create a new MySQLi connection
    $conn = new mysqli(
        $DATABASE_CONFIG['host'],
        $DATABASE_CONFIG['user'],
        $DATABASE_CONFIG['password'],
        $DATABASE_CONFIG['database']
    );

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    echo "Database connection successful!";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Close connection if it was established
    if (isset($conn) && $conn->ping()) {
        $conn->close();
    }
}
?>
