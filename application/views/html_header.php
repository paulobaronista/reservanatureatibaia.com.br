<!DOCTYPE html>
<html lang="pt-BR" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Reserva Nature Atibaia" />
    <meta name="og:title" content="Reserva Nature Atibaia" />
    <meta name="og:description" content="Loteamento fechado com terrenos a partir de 360M²" />
    <meta name="og:image" content="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <link rel="icon" href="<?= base_url(); ?>assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>assets/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>assets/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>assets/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url(); ?>assets/images/apple-touch-icon-57-precomposed.png">
    <link rel="image_src" href="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <meta name="theme-color" content="#dbe296" />
    <!-- property (faz funcionar no linkedin) -->
    <meta property="og:title" content="Reserva Nature Atibaia" />
    <meta property="og:image" content="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <meta property="Loteamento fechado com terrenos a partir de 360M²" />
    <meta property="og:url" content="https://www.reservaelementum.com.br" />
    <!-- property (faz funcionar no linkedin) -->
    <?php
    $meta = array(
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'description', 'content' => $description),
        array('name' => 'keywords', 'content' => $keywords),
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'Content-type', 'content' => 'text/html;charset=utf-8', 'type' => 'equiv')
    );
    echo meta($meta);
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/style.css?v=0.1.3');
    echo link_tag('assets/css/slick.css?v=0.0.3');
    echo link_tag('assets/css/slick-theme.css?v=0.0.7');
    ?>

</head>

<body>