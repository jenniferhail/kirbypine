<?php snippet('header') ?>

  <main class="main" role="main">

    <?php if($image = $page->image()): ?>
    <section>
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>">
      </figure>
    </section>
    <?php endif ?>

    <section>
      <?php echo $page->firstText()->kirbytext() ?>
    </section>

    <section>
      <?php echo $page->secondText()->kirbytext() ?>
    </section> 

    <section>
      <?php echo $page->thirdText()->kirbytext() ?>
    </section>

    <section>
      <?php echo $page->fourthText()->kirbytext() ?>
    </section>        

  </main>

<?php snippet('footer') ?>