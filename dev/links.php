<?php


// dev
// $script = "assets/js/script.js";
// $stylesheet = "assets/css/master.css";
//
// $popperJS = "../node_modules/popper.js/dist/umd/popper.min.js";
// $jQuery = "node_modules/jquery/dist/jquery.min.js";
// $bootstrapScript = "../node_modules/bootstrap/dist/js/bootstrap.min.js";
// $bootstrapStylesheet = "../node_modules/bootstrap/dist/css/bootstrap.min.css";

// dist

// dist/img/waw_logo_no-caption.png - project path
// http://localhost:8888/wild-about-weeds/wp-content/themes/wild-about-weeds - template directory

if (file_exists( get_template_directory() . 'home.php') ) {
    $home =   'home.php';
} else {
    $home =   'index.php';
}


$script =  get_template_directory_uri() . '/js/script.min.js';
$stylesheet =  get_template_directory_uri() . '/css/master.min.css';

$popperJS =  get_template_directory_uri() . '/js/popper.min.js';
$jQuery =  get_template_directory_uri() . '/js/jquery.min.js';
$bootstrapScript =  get_template_directory_uri() . '/js/bootstrap.min.js';
$bootstrapStylesheet =  get_template_directory_uri() . '/css/bootstrap.min.css';

?>
