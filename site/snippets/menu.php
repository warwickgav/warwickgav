<nav class="site-nav" role="navigation">

    <ol class="nav nav-inline">
        <?php foreach ($pages->visible() as $p): ?>
            <li<?php e($p->isOpen(), ' class="active"') ?>>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
            </li>
        <?php endforeach ?>
    </ol>

</nav>
