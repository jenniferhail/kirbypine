<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="text">
      <?php echo $page->text()->kirbytext() ?>
    </section>

    <section class="text">
      <?php echo $page->formDescription()->kirbytext() ?>
    </section>

    <section id="workwithme" class="text">
      <?php echo $page->ContactFormDescription()->kirbytext() ?>
    	<?php snippet('form-inquiry') ?>
    </section>

  </main>

<?php snippet('footer') ?>