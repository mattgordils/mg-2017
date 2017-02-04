<?php
$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="project-list inline-grid break-sm">

  <?php foreach($projects as $project): ?>

    <li class="col <?= $project->thumbSize()->html() ?>">
      <div class="project-thumb <?= $project->thumbStyle()->html() ?>">
        <a href="<?= $project->url() ?>" title="<?= $project->title()->html() ?>" style="background-color: <?= $project->thumbMatteColor()->html() ?>;">
          <?php if ($project->images()->find($project->thumbnail())) : ?>
            <div class="thumb-img-wrap" style="background-image: url(<?php echo $project->images()->find($project->thumbnail())->url() ?>)">
              <img src="<?php echo $project->images()->find($project->thumbnail())->url() ?>">
            </div>
          <?php endif; ?>
        </a>
        <h3 class="project-title"><?= $project->title()->html() ?></h3>
      </div>
    </li>

  <?php endforeach ?>

</ul>