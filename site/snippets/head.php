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

        <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
        <?php echo css('assets/css/styles.min.css') ?>

        <!-- custom css -->
        <?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
            <?php echo css($css->url()) ?>
        <?php endforeach ?>

        <!-- custom javascript -->
        <?php foreach($page->files()->filterBy('extension', 'js') as $js): ?>
            <?php echo js($js->url()) ?>
        <?php endforeach ?>

    </head>

    <body class="<?php echo $page->uid() ?><?php if($page->isParent()): ?> <?php echo $page->parent()->uid() ?><?php endif ?><?php if($page->parent()->uid() == 'journal'): ?> journal-entry<?php endif ?>">
