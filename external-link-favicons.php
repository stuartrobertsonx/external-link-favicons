<?php
/*
Plugin Name: External Link Favicons
Version:     1.0
Description: Adds favicons to external links
Author:      Stuart Robertson
Requires at least: 5.8
Requires PHP: 7.4
License:     GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: external-link-favicons
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    http_response_code(403);
    exit;
}

function elf_enqueue_scripts() {
    wp_enqueue_script(
        'external-link-favicons-js',
        plugin_dir_url(__FILE__) . 'js/external-link-favicons.js',
        array(),
        '1.0',
        true
    );

    wp_enqueue_style(
        'external-link-favicons-css',
        plugin_dir_url(__FILE__) . 'css/external-link-favicons.css',
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'elf_enqueue_scripts');
