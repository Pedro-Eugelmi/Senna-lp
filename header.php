<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

</head>
<body>
    <header class="bg-main">
        <div class="container">
            <div class="row py-20">
                <div class="col-4 d-flex align-items-center">
                    <?php echo the_custom_logo()?>
                </div>

                <nav class="col-8 d-flex justify-content-end align-items-center">
                    <ul class="header-links">
                        <li class="header-link" ><a href="#">Criar conta</a></li>
                        <li><a class="button white" href="">Entrar</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
