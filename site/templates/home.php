<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="portfolio-ctn">
      <?php snippet('projects') ?>
    </section>

    <section>
      <?php echo $page->text()->kirbytext() ?>
    </section>

  </main>

<?php snippet('footer') ?>