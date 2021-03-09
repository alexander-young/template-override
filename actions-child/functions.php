<?php

add_action('init', function(){

    remove_action('wpc/nav-menu', 'render_menu');
    add_action('wpc/nav-menu', function(){

        ?>

            <a href="#" class="btn">About</a>
            <a href="#" class="btn">Services</a>
            <a href="#" class="btn">Contact</a>

        <?php


    });

});