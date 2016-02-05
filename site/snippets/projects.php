<?php
$project = $pages->find('portfolio')->children()->visible()->flip()->paginate(12);
$last = $project->last();
$first = $project->first();
?>
	<div class="project-list">
		<?php foreach ($project as $item): ?>
			<div class="project<?php if ($item == $first) echo ' first' ?><?php if ($item == $last) echo ' last' ?>">
				<time class="date" datetime="<?php echo $item->date('c') ?>"><?php echo $item->project_date() ?></time>
				<div class="motif"></div>
				<div class="information">
					<h3 class="title"><a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></h3>

					<div class="project-details"><?php echo $item->details() ?></div>
				</div>
			</div>
		<?php endforeach ?>
	</div>

<?php if ($project->pagination()->hasPages()): // pagination ?>
	<nav class="pagination">
		<?php if ($project->pagination()->hasNextPage()): ?>
			<a class="" href="<?php echo $project->pagination()->nextPageURL() ?>"><i class="icon icon-arrow-back"></i>Older</a>
		<?php endif ?>
		<?php if ($project->pagination()->hasPrevPage()): ?>
			<a class="" href="<?php echo $project->pagination()->prevPageURL() ?>">Recent<i
					class="icon icon-arrow-forward"></i></a>
		<?php endif ?>
	</nav>
<?php endif ?>