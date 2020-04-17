<?php
    // function of add style
    function setstyle()
    {
        wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
        wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',['jquery'] );
    }
    add_action('wp_enqueue_scripts','setstyle');
    add_theme_support("post-thumbnails");
?>