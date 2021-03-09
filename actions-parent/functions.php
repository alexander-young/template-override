<?php

add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css', [], '1.0');
});

add_action('wpc/nav-menu', 'render_menu');
function render_menu(){
    ?>

<a href="#" class="btn">Home</a>
<a href="#" class="btn">About</a>
<a href="#" class="btn">Services</a>
<a href="#" class="btn">Contact</a>

    <?php
}
