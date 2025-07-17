<?php
/*
Plugin Name: Simple Notice Banner
Description: A simple plugin to display a notice banner at the top of the site.
Version: 1.0
Author: Vedant Thakare
*/

function show_notice_banner() {
    echo '<div style="background-color: yellow; color: black; padding: 10px; text-align: center;">
        ⚠️ Welcome to my website – built by Vedant!
    </div>';
}
add_action('wp_body_open', 'show_notice_banner');
