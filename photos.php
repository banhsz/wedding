<?php
    $category = $_GET['category'] ?: 'all';
    $targetFolder = "";
    switch ($category) {
        case 'all':
        default:
            $targetFolder = "./img/all";
            break;
        case 'ceremony':
            $targetFolder = "./img/ceremony";
            break;
        case 'dinner':
            $targetFolder = "./img/dinner";
            break;
        case 'dance':
            $targetFolder = "./img/dance";
            break;
    }

    // this dies if folders above do not exist
    $files = array_diff(scandir($targetFolder), ['.', '..']);
?>

<!doctype html>
<html lang="hu">
    <head>
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/fontawesome.js" crossorigin="anonymous"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/site.js"></script>
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/photoswipe.css">
        <script type="module" src="js/photoswipe-init.js"></script>
        <script src="js/lazysizes.min.js" async></script>

        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Szandi & Szabi Esküvő</title>
        <link rel="icon" type="image/x-icon" href="/img/favicon.png">
        <!-- https://www.freepik.com/ -->
    </head>
    <body>
        <div class="pt-2 pb-2">
            <div class="pswp-gallery pswp-gallery--single-column" id="gallery">
                <?php foreach ($files as $file) { ?>
                    <?php
                        if ($file == ".gitkeep") continue;

                        $filePath = $targetFolder . DIRECTORY_SEPARATOR . $file;
                        $size = getimagesize($filePath);
                    ?>
                    <?=
                        "<a href='$filePath' target='_blank' data-pswp-width='$size[0]' data-pswp-height='$size[1]'>
                            <img data-src='$filePath' alt='' height='300px' width='auto' loading='lazy' class='lazyload'/>
                        </a>"
                    ?>
                <?php } ?>
            </div>
        </div>
    </body>
</html>
