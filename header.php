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
            <div class="row">
                <div class="col-8 col-sm-4 p-20 d-flex align-items-center">
                    <?php echo the_custom_logo()?>
                </div>

                <div class="col-4 p-20 d-sm-none d-flex justify-content-end"> 
                    <button id="open-mobile-menu" aria-label="Abrir Menu" aria-expanded="false" aria-controls="mobile-menu">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40"  fill="#fff" viewBox="0 0 24 24" ><!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free--><path d="M4 6h16v2H4zM4 11h16v2H4zM4 16h16v2H4z"></path></svg>
                    </button>
                </div>

                <nav class="col-8 p-20 d-none d-sm-flex justify-content-end align-items-center">
                    <ul class="header-links">
                        <li class="header-link" ><a href="#">Criar conta</a></li>
                        <li><a class="button white" href="">Entrar</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div aria-hidden="true" id="mobile-menu" class="header-mobile-menu">
            <div class="header-mobile-menu-content">
                <div class="p-20">
                    <button id="close-mobile-menu" aria-expanded="true" aria-label="Fechar menu">
                         <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40"  fill="#fff" viewBox="0 0 24 24" ><!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free--><path d="m7.76 14.83-2.83 2.83 1.41 1.41 2.83-2.83 2.12-2.12.71-.71.71.71 1.41 1.42 3.54 3.53 1.41-1.41-3.53-3.54-1.42-1.41-.71-.71 5.66-5.66-1.41-1.41L12 10.59 6.34 4.93 4.93 6.34 10.59 12l-.71.71z"></path></svg>
                    </button>
                </div>

                <div class="px-20">
                    <hr>
                </div>

                <nav class="pr-20 pl-20 pt-40 pb-20">
                    <ul class="header-mobile-links">

                        <li>
                            <a href="">Blog</a>
                        </li>

                        <li>
                            <a href="">Criar Conta</a>
                        </li>

                        <li>
                            <a href="" class="button white">Entrar</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>

    </header>
