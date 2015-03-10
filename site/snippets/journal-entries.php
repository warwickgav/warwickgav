<?php $journal = $pages->find('journal')->children()->visible()->flip()->paginate(2) ?>

<?php foreach($journal as $entry): ?>
	<article class="entry entry-teaser">
		<time class="date" datetime="<?php echo $entry->date('c') ?>"><?php echo $entry->short_date() ?></time>
		<h3 class="entry-title"><a href="<?php echo $entry->url() ?>"><?php echo $entry->title()->html() ?></a></h3>
		<p class="entry-excerpt"><?php echo $entry->excerpt() ?></p>
		<hr>
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

