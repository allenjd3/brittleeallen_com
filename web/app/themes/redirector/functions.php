<?php
// Redirect all normal traffic to brittleeallen.com
add_action('template_redirect', function () {
    $request_uri = $_SERVER['REQUEST_URI'];

    // Don't redirect if this is an API request
    if (defined('REST_REQUEST') && REST_REQUEST) {
        return;
    }

    // Don't redirect GraphQL requests (adjust path if different)
    if (str_starts_with($request_uri, '/graphql') || str_starts_with($request_uri, '/wp-graphql')) {
        return;
    }

    // Don't redirect admin
    if (is_admin()) {
        return;
    }

    // Optionally, allow cron requests
    if (defined('DOING_CRON') && DOING_CRON) {
        return;
    }

    // Redirect everything else
    wp_redirect('https://brittleeallen.com', 302);
    exit;
});