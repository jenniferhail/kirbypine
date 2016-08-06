<?php snippet('header') ?>

  <main class="main" role="main">



    <section>
      <?php echo $page->text()->kirbytext() ?>
    </section>

    <section>
      <?php echo $page->formDescription()->kirbytext() ?>
    </section>    

  </main>

<?php snippet('footer') ?>