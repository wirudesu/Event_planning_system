<?php
// Function to sanitize and clean user inputs
function clean($input) {
    // Remove leading and trailing whitespace
    $cleaned_input = trim($input);
    
    // Convert special characters to their HTML entities
    $cleaned_input = htmlspecialchars($cleaned_input, ENT_QUOTES, 'UTF-8');
    
    return $cleaned_input;
}
?>
