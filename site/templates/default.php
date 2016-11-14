<?php snippet('header') ?>

  <main class="main" role="main">

<!--     <?php if($image = $page->image()): ?>
    <section>
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>">
      </figure>
    </section>
    <?php endif ?> -->

    <section class="text">
      <?php echo $page->text()->kirbytext() ?>
    </section>

  </main>

<?php snippet('footer') ?>