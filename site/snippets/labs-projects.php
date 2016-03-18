<?php
$experiments = $pages->find('labs')->children()->visible()->flip()->paginate(12);
// fetch all tags
$tags = $experiments->pluck('tags', ',', false);
$last = $experiments->last();
$first = $experiments->first();
?>

<?php foreach ($experiments as $entry): ?>
	<article
		class="entry entry-teaser h-entry hentry<?php if ($entry == $first) echo ' first' ?><?php if ($entry == $last) echo ' last' ?>">
		<time class="date" datetime="<?php echo $entry->date('c') ?>"
			  pubdate="pubdate"><?php echo $entry->date('M Y') ?></time>
		<h2 class="entry-title"><a href="<?php echo $entry->url() ?>"><?php echo $entry->title()->html() ?></a></h2>
		<div class="tags"><?php echo $entry->tags() ?></div>
	</article>
<?php endforeach ?>

<?php if ($experiments->pagination()->hasPages()): // pagination ?>
	<nav class="pagination">
		<?php if ($experiments->pagination()->hasNextPage()): ?>
			<a class="" href="<?php echo $experiments->pagination()->nextPageURL() ?>"><i class="icon icon-arrow-back"></i>Older</a>
		<?php endif ?>
		<?php if ($experiments->pagination()->hasPrevPage()): ?>
			<a class="" href="<?php echo $experiments->pagination()->prevPageURL() ?>">Recent<i
					class="icon icon-arrow-forward"></i></a>
		<?php endif ?>
	</nav>
<?php endif ?>

