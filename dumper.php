<?php

/**
 * Pretty print a variable to the screen
 *
 * This does stop the PHP engine using exit
 * @param $data
 */
function dump($data) {
    ob_start();
        require "dumper-contents.php";
        $output = ob_get_contents();
    ob_end_clean();
    echo $output;
    exit;
}