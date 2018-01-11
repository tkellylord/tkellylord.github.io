<?php

function custom_add_google_fonts() {
 wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Nunito:400,400i,700', false );
 }
 add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );