<?php snippet('header') ?>

  <main class="main" role="main">

    <section>
      <?php echo $page->text()->kirbytext() ?>
    </section>

    <section>
        <?php snippet('form-questionnaire') ?>
    </section>        

  </main>

<?php snippet('footer') ?>