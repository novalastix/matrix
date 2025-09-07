<?php
    global $title;
    global $cdn;
    global $main;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/<?php echo $static; ?>/main.css">
        <base href="/" target="">
    </head>
    <body>
        <main>
            <?php echo $main; ?>
        </main> 
    </body>
</html>