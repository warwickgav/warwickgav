<div class="content-header">
	<h3 class="sub-title">Selected Projects & Activities</h3>
</div>
<?php foreach(page('portfolio')->children()->visible()->limit(3) as $project): ?>
	<div class="project-teaser <?php echo $project->uid() ?>">
		<div class="project-details">
			<date class="project-date"><?php echo $project->date() ?></date>
			<h2 class="project-title"><?php echo $project->title()->html() ?></h2>
			<p class="project-excerpt"><?php echo $project->text()->project_excerpt() ?></p>
			<p><a href="<?php echo $project->url() ?>">Read More</a></p>
			<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
				<a href="<?php echo $project->url() ?>">
		            <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
				</a>
			<?php endif ?>
		</div>
	</div>
<?php endforeach ?>
