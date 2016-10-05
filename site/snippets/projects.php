<ul class="thumbnails">
  <?php foreach(page('projects')->children()->visible()->limit(10) as $project): ?>
  <li>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
      <h3><?php echo $project->title()->html() ?></h3>
      <h3><?php echo $project->tags()->html() ?></h3>
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
