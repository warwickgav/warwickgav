<nav class="site-nav" role="navigation">
	<a class="menu-trigger">
		<span>Menu</span><i class="icon icon-menu"></i>
	</a>
    <ol class="nav main-menu">
        <?php foreach ($pages->visible() as $p): ?>
            <li<?php e($p->isOpen(), ' class="active"') ?>>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
            </li>
        <?php endforeach ?>
    </ol>
</nav>
