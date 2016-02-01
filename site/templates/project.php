<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="project-images">
      <div class="seventyfive">
        <?php echo $page->Photos()->kirbytext() ?>
      </div>
    </section>

    <section class="project-details">
      <h1>Project</h1>
      <?php echo $page->Title()->html() ?><br>
      <?php echo $page->Tags() ?>
      <?php echo $page->Year()->kirbytext() ?>
    </section>

    <section class="project-credits">
      <h1>Credits</h1>
      <?php echo $page->Credits()->kirbytext() ?>
    </section>     

    <section>
      <h1>Details</h1>
      <?php echo $page->Text()->kirbytext() ?>
    </section>

  </main>

<?php snippet('footer') ?>