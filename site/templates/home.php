<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="intro">
      <?php echo $page->text()->kirbytext() ?>
    </section>

    <section class="portfolio-ctn">
<!--       <?php echo $page->portfolio()->kirbytext() ?> -->
      <?php snippet('projects') ?>
    </section>

    <section class="text">
      <?php echo $page->newsletterDescription()->kirbytext() ?>
      <?php snippet('newsletter') ?>
    </section>

  </main>

<?php snippet('footer') ?>