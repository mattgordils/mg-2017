<?php snippet('head') ?>

  <main class="main" role="main">
      
    <section class="projects">
      
      <div class="container">
        <?php snippet('project-list', ['limit' => 100]) ?>
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>