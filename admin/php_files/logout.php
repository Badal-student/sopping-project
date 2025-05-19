<?php
    include 'config.php';
    /* Start the session */
    session_start();
    /* remove all session variables */
    session_unset(); 
    /* destroy the session */
    session_destroy();
/* Check if connection exists before closing */
if (isset($conn) && $conn) {
    mysqli_close($conn);
}

header("Location: {$base_url}admin/index.php");
exit;
?>