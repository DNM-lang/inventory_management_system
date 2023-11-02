<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}

if (isset($_GET['id'])) {
    // Handle the item deletion here.
    $itemId = $_GET['id'];
    
    // Connect to the database and delete the item by ID.
    $conn = new mysqli("localhost", "root", "", "project");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM products WHERE product_id = $itemId";

    if ($conn->query($sql) === TRUE) {
        echo "Item deleted successfully.";
    } else {
        echo "Error deleting item: " . $conn->error;
    }

    $conn->close();
}
?>
