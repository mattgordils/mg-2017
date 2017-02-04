<?php snippet('head') ?>

  <div class="intro">
    <div class="container">
      <h1>Matthew Gordils</h1>
      <h2>Design and front end dev.</h2>
    </div>
  </div>

  <main class="main home" role="main">
  
    <section class="projects">
      
      <div class="container">
        <?php snippet('project-list', ['limit' => 100]) ?>
      </div>
      
    </section>

    <section class="about dark">
      
      <div class="container">
        <p>Matthew Gordils is a Queens, New York-based designer, and front end developer. Previously of NoFavorite, and <a class="callout-link">CompStak</a> where he was a product designer. He currently works on projects as a partner at <a class="callout-link">Gordils & Willis</a> and is co-founder of <a class="callout-link">DropSplash</a>.</p>
        <!-- <div class="section">
          <div class="row">
            <div class="col-4">
              <h4 class="section-title">Clients</h4>
            </div>
            <div class="col-6 right">
              <div class="wrap">
                <p>Clients include fashion brands such as Lulu Frost, Honor, Franziska Fox, and artists like Manolo Valdés and the Bruce High Quality Foundation.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="row">
            <div class="col-4">
              <h4 class="section-title">Recognition</h4>
            </div>
            <div class="col-6 right">
              <div class="wrap">
                <p>Matthew has been featured on blogs such as thedieline, siteinspire, and thebestdesigns.</p>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>