<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
        <meta name="description" content="<?php echo $site->description()->html() ?>">
        <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

        <script src="//use.typekit.net/srl5qlk.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>

        <?php echo css('assets/css/styles.min.css') ?>


    </head>

    <body class="<?php echo $page->uid() ?>">

