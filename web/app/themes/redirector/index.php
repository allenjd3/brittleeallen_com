<?php
if ( ! is_user_logged_in() ) {

    $request_uri = $_SERVER['REQUEST_URI'];

    // Optional: skip REST API
    if (defined('REST_REQUEST') && REST_REQUEST) {
        return;
    }

    // Skip admin pages and login
    if (is_admin() || str_starts_with($request_uri, '/wp-login.php')) {
        return;
    }

    // Optional: skip GraphQL
    if (str_starts_with($request_uri, '/graphql') || str_starts_with($request_uri, '/wp-graphql')) {
        return;
    }

    // Redirect everything else for non-logged-in users
    wp_redirect('https://brittleeallen.com', 302);
    exit;
}