<?php
    global $file;

    $code = file_get_contents($file);
    $baseFile = basename($file);
    $main = "<h1>$baseFile</h1><pre><code>$code</code></pre>";

    include 'templates/page.php';
?>
