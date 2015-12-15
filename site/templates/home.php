<?php snippet('header') ?>

  <main class="main" role="main">

    <section>
      <?php snippet('projects') ?>
    </section>

    <section>
      <?php echo $page->text()->kirbytext() ?>
    </section>

  </main>

<?php snippet('footer') ?>