<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?
    // Get the current file's path
    $filePath = $_SERVER['PHP_SELF'];

    // Check if the path contains "src" - development mode
    if (strpos($filePath, "src") !== false) {
        // If "src" is found in the path, use a different CSS file
        $cssPath = "css/_reserved/styles.css";
    } else {
        // Otherwise, use the default CSS file - production mode
        $cssPath = "css/styles.css";
    }

    ?>
    <link href="<?php echo $cssPath; ?>" rel="stylesheet" />

    <title>
        Sass, Tailwind CSS, PostCSS, Webpack, Tailwind shared config support - Template
    </title>
    <meta name="author" content="PhDr. Matej Lednár, PhD." />
    <meta name="description" content="Tailwind CSS, PostCSS, Webpack, Tailwind shared config support - Template" />
    <meta name="keywords" content="html, html5, css, javascript, js, template, css, tailwind, tailwindcss, preset, presets, template, biolerplate, build, build tool, webpack, postcss" />
    <!-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico" /> -->
    <!-- jpg <link rel="icon" type="image/jpeg" href="images/favicon.jpg" /> -->
    <!-- png <link rel="icon" type="image/png" href="/images/favicon.png" /> -->
    <script defer src="js/script.js"></script>
    <style></style>
</head>

<body>
    <div class="flex items-center justify-center h-screen bg-demo text-center">
        Sass, Tailwind CSS, PostCSS, Webpack, Tailwind shared config support, smooth
        scrolling support
    </div>
    <script></script>
</body>

</html>