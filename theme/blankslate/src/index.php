<?php
/**
 * setup
 */
function view($name = 'index') {
    return get_template_directory() . '/src/views/' . $name . '.php';
}

function controller($name = 'index') {
    return get_template_directory() . '/src/controllers/' . $name . '.php';
}

function route($name = 'index') {
    return get_template_directory() . '/src/routes/' . $name . '.php';
}

function service($name = 'index') {
    return get_template_directory() . '/src/services/' . $name . '.php';
}

/** asset == public */
function asset($name = 'index') {
    return get_template_directory() . '/src/public/' . $name . '.php';
}


include_once get_template_directory() . '/src/Request.php';
include_once route();
