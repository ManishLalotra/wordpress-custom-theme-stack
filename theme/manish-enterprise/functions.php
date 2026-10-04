<?php
/**
 * Manish Enterprise WordPress Theme Functions
 * Author: Manish Lalotra (Full Stack Developer & DevOps Engineer)
 */

if (!defined('ABSPATH')) {
    exit;
}

// Security Hardening: Remove WP Generator Meta Tag and Disable XML-RPC
remove_action('wp_head', 'wp_generator');
add_filter('xmlrpc_enabled', '__return_false');

// Security Headers Hook
add_action('send_headers', function () {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
});

// Enqueue modern assets
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'manish-enterprise-styles',
        get_template_directory_uri() . '/assets/dist/theme.css',
        [],
        '1.0.0'
    );
});

// Custom REST API Endpoint for Health & Diagnostics
add_action('rest_api_init', function () {
    register_rest_route('enterprise/v1', '/health', [
        'methods' => 'GET',
        'callback' => function () {
            global $wpdb;
            $dbHealthy = $wpdb->check_connection();
            return new WP_REST_Response([
                'status' => 'healthy',
                'database' => $dbHealthy ? 'connected' : 'degraded',
                'timestamp' => current_time('mysql'),
                'author' => 'Manish Lalotra',
                'theme' => 'Manish Enterprise Stack'
            ], 200);
        },
        'permission_callback' => '__return_true'
    ]);
});
