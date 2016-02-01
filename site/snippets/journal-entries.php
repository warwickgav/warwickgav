<?php
	$journal = $pages->find('journal')->children()->visible()->flip()->paginate(12);
	// fetch all tags
	$tags = $journal->pluck('tags', ',', false);
	$last = $journal->last();
	$first = $journal->first();
?>

<?php foreach($journal as $entry): ?>
	<article class="entry entry-teaser h-entry hentry<?php if($entry == $first) echo ' first' ?><?php if($entry == $last) echo ' last' ?>">
		<time class="date" datetime="<?php echo $entry->date('c') ?>" pubdate="pubdate"><?php echo $entry->date('M Y') ?></time>
		<h2 class="entry-title"><a href="<?php echo $entry->url() ?>"><?php echo $entry->title()->html() ?></a></h2>
	</article>
<?php endforeach ?>

<?php if($journal->pagination()->hasPages()): // pagination ?>
	<nav class="pagination">
		<?php if($journal->pagination()->hasNextPage()): ?>
			<a class="" href="<?php echo $journal->pagination()->nextPageURL() ?>"><i class="icon icon-arrow-back"></i>Older</a>
		<?php endif ?>
		<?php if($journal->pagination()->hasPrevPage()): ?>
			<a class="" href="<?php echo $journal->pagination()->prevPageURL() ?>">Recent<i class="icon icon-arrow-forward"></i></a>
		<?php endif ?>
	</nav>
<?php endif ?>

