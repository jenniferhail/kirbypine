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
        <h1><?php echo $page->firstTitle()->html() ?></h1>
      </div>
      <div class="right">
        <?php echo $page->firstText()->kirbytext() ?>
      </div>
    </section>

    <section>
      <div class="left">
        <h1><?php echo $page->secondTitle()->html() ?></h1>
      </div>
      <div class="right">
        <?php echo $page->secondText()->kirbytext() ?>
      </div> 
    </section> 

    <section>
      <div class="left">
        <h1><?php echo $page->thirdTitle()->html() ?></h1>
      </div>
      <div class="right">
        <?php echo $page->thirdText()->kirbytext() ?>
      </div>
    </section>

    <section>
      <div class="left">
        <h1><?php echo $page->fourthTitle()->html() ?></h1>
      </div>
      <div class="right">
        <?php echo $page->fourthText()->kirbytext() ?>
      </div> 
    </section>        

  </main>

<?php snippet('footer') ?>