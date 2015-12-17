<?php snippet('header') ?>

  <main class="main" role="main">

    <?php if($image = $page->image('pine-contact.jpg')): ?>
    <section>
      <figure class="landscape">
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
        <?php echo $page->formDescription()->kirbytext() ?>
        <?php snippet('form') ?>
    </section>

    <section>
      <?php echo $page->thirdText()->kirbytext() ?>
    </section>

    <section>
      <?php echo $page->newsletterDescription()->kirbytext() ?>
      <?php snippet('newsletter') ?>
    </section>     

  </main>

<?php snippet('footer') ?>