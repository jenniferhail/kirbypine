<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="portraits">
      <?php echo $page->portraits()->kirbytext() ?>
    </section>

    <section class="text">
      <?php echo $page->text()->kirbytext() ?>
    </section>

    <section class="text">
      <?php echo $page->aboutme()->kirbytext() ?>
    </section>

  </main>

<?php snippet('footer') ?>