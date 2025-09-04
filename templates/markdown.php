<?php
    global $file;

    require_once 'plugins/Michelf/Markdown.inc.php';
    require_once 'plugins/Michelf/MarkdownExtra.inc.php';

    use Michelf\Markdown;
    use Michelf\MarkdownExtra;

    $markdown = file_get_contents($file . ".md");
    $main = MarkdownExtra::defaultTransform($markdown);

    include 'templates/page.php';
?>