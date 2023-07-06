<?php
require_once '../vendor/autoload.php'; // Include the required libraries (e.g., Google API client)

// Get the ID token from the POST data
$idToken = $_POST['id_token'];

// Verify the ID token
$client = new Google_Client(['client_id' => '215792497641-k8483mpf67k4qhsv5e4bj0q98mal6lq8.apps.googleusercontent.com']);
$payload = $client->verifyIdToken($idToken);

if ($payload) {
    // The ID token is valid
    $userEmail = $payload['email'];

    // Perform necessary actions with the user email (e.g., store it in the session, authenticate the user, etc.)

    // Return a success response
    http_response_code(200);
    echo 'Login successful!';
} else {
    // The ID token is invalid
    http_response_code(401);
    echo 'Invalid ID token';
}
?>
