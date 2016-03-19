<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/icomoon/style.css">
    <link href='https://fonts.googleapis.com/css?family=Muli|Playfair+Display+SC:700|Volkhov' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
    <link rel="shorcut icon" href="<?= base_url() ?>assets/img/logotipos/favicon.PNG">
    <script src="<?= base_url() ?>assets/js/jquery-2.1.3.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>assets/js/additional-methods.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url() ?>assets/js/app.js"></script>
</head>
<body>
    <section class="container-fluid" id="header">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="logo">
                    <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logotipos/logotipo.PNG" alt="Miriam Mendoza Decoraciones y Eventos"></a>
                    </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <nav class="navbar navbar-default">
                    <div class="menu-responsive">
                        <a href="#"><span class="icon-menu"></span></a>
                    </div>
                    <ul class="nav navbar-nav" id="menu">
                        <li><a href="<?= base_url() ?>"<?php if($menu == "home"){ ?> class="active" <?php } ?>><span class="icon-home"></span></a></li>
                        <li><a href="<?= base_url() ?>eventos" <?php if($menu == "eventos"){ ?> class="active" <?php } ?>>Eventos</a></li>
                        <li><a href="<?= base_url() ?>servicios" <?php if($menu == "servicios"){ ?> class="active" <?php } ?>>Servicios</a></li>
                        <li><a href="<?= base_url() ?>galeria" <?php if($menu == "galeria"){ ?> class="active" <?php } ?>>Galería</a></li>
                        <li><a href="<?= base_url() ?>contacto" <?php if($menu == "contacto"){ ?> class="active" <?php } ?>>Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>