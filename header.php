<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Un sitio web para practicar wordpress, con un modelo de catalogo de productos de platzi" />
        <meta name="robots" content="index, follow" />
        <title>Platzigifts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head() ?>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-4">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" alt="logo"/>
                    </div>
                    <div class="col-8">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'top_menu',
                                'menu_class' => 'menu_principal',
                                'container_class' => 'container-menu'
                            )
                        ); 
                        ?>
                    </div>
                </div>
            </div>
        </header>
