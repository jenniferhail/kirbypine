<?php snippet('header') ?>

  <main class="main" role="main">

    <?php if($image = $page->image()): ?>
    <section>
      <div class="left">&nbsp;</div>
      <div class="right">
        <figure>
          <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>">
        </figure>
      </div>
    </section>
    <?php endif ?>

    <section>
      <div class="left">
        <h1><?php echo $page->title()->html() ?></h1>
      </div>
      <div class="right">
        <?php echo $page->content()->kirbytext() ?>
      </div>
    </section>      

  </main>

<?php snippet('footer') ?>