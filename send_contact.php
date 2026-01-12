<?php
$conn = new mysqli("localhost", "root", "", "ice_twin_db");

if ($conn->connect_error) {
    die("Database connection failed");
}

$full_name = $_POST['full_name'];
$city = $_POST['city'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt = $conn->prepare(
    "INSERT INTO contact_messages (full_name, city, contact, email, message)
     VALUES (?, ?, ?, ?, ?)"
);

$stmt->bind_param("sssss",
    $full_name,
    $city,
    $contact,
    $email,
    $message
);

$stmt->execute();
$stmt->close();
$conn->close();

header("Location: contact.html");
exit();
?>
