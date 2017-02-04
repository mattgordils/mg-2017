<section class="<?= $data->width()->html() ?>">
	<div class="image-block <?= $data->style()->html() ?>"
		<?php if ($data->style()->html() == 'web-layout'): ?>
		  style="background-color: <?= $page->matteColor()->html() ?>"
		<?php endif ?>
		<?php if ($data->style()->html() == 'mobile'): ?>
		  style="background-color: <?= $page->matteColor()->html() ?>"
		<?php endif ?>
		>

		<?php if ($data->picture()->isNotEmpty()): ?>
		  <img src="<?= $page->image($data->picture())->url() ?>">
		<?php endif ?>
		<?php if ($data->video()->isNotEmpty()): ?>
		  <video preload="auto" autoplay="autoplay" loop="" muted="" poster="#">
		  	<source src="<?= $page->file($data->video())->url() ?>" type="video/mp4">
		  </video>
		<?php endif ?>
	</div>
</section>