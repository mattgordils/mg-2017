<?php snippet('head') ?>

<div class="intro">
  <div class="container">
    <h1><?= $page->title()->html() ?></h1>
    <h2><?= $page->tags()->html() ?></h2>
  </div>
</div>

<main class="project main" role="main">
  
  <section class="project-images">
    <div class="container">
      <div class="inline-grid middle center">
        <?php foreach($page->builder()->toStructure() as $section): ?>
          <?php if ($section->width()->html() == 'full') : ?>
            </div><!--close grid-->
            </div><!--close container-->
          <?php endif; ?>

          <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>

          <?php if ($section->width()->html() == 'full') : ?>
            <div class="container"><!--reopen grid-->
            <div class="inline-grid"><!--reopen grid-->
          <?php endif; ?>
        <?php endforeach ?>
      </div>
    </div>
  </section>


  <section class="projects">
    <div class="container">
      <?php snippet('project-list', ['limit' => 100]) ?>
    </div>  
  </section>

  <section class="about dark">
    <div class="container">
      <p>Matthew Gordils is a Queens, New York-based designer, and front end developer. Previously of NoFavorite, and <a class="callout-link">CompStak</a> where he was a product designer. He currently works on projects as a partner at <a class="callout-link">Gordils & Willis</a> and is co-founder of <a class="callout-link">DropSplash</a>.</p>
    </div>
  </section>

  <!-- <div class="project-footer dark">
    <?php //snippet('prevnext') ?>
  </div> -->

</main>

<?php snippet('footer') ?>