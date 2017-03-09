<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="text">
      <?php echo $page->text()->kirbytext() ?>
    </section>

    <section class="text">
      <?php echo $page->formDescription()->kirbytext() ?>
    </section>   

    <section id="workwithme" class="text">
    	<?php snippet('form-dubsado'); ?>
    </section> 

  </main>

<?php snippet('footer') ?>