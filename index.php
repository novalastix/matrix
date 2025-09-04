<?php
    $library = "library";

    $request = strtok($_SERVER["REQUEST_URI"], '?');

    if ($_SERVER["REQUEST_METHOD"] === "GET")
    {   
        $file = str_replace("%20", " ", $library . $request);
        
        // FILE PRIORITY (/example)
        // 1. Markdown (/example.md)
        // 2. Other Extensions (/example.txt)
        // 3. Static Files (/example)
        // 4. Directory Index (/example/index.md)

        // Check for Markdown file
        if (file_exists("$file.md"))
        {
            include 'templates/markdown.php';
            exit();
        }

        //TODO: Support other file extensions (e.g. .txt, .png, .jpg, etc.)

        // Serve static files directly
        $staticBlacklist = ['php', 'htaccess', 'md']; // Never serve these file types directly
        if (file_exists($file) && !in_array(pathinfo($file, PATHINFO_EXTENSION), $staticBlacklist) && !is_dir($file))
        {
            $mimeType = mime_content_type($file);
            header("Content-Type: $mimeType");
            readfile($file);
            exit();
        }

        // Check if it's a directory with index.md
        if (is_dir($file))
        {
            if (file_exists("$file/index.md"))
            {
                $file = "$file/index";
                include 'templates/markdown.php';
                exit();
            }
        }

        //If nothing matched, show 404
        $file =  "error/404";
        include 'templates/markdown.php';
        exit();
    }
    
?>

