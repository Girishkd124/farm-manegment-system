<?php
// updateSession.php

// Start or resume the PHP session
session_start();

// Get the current value from the AJAX request
$currentValue = isset($_GET['currentValue']) ? $_GET['currentValue'] : '';

// Store the value in the session
$_SESSION['inputValue'] = $currentValue;

// Respond with the updated value
echo "Value updated in session: " . $_SESSION['inputValue'];
?>
