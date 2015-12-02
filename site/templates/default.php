<?php snippet('header') ?>

  <main class="main" role="main">

    <?php if($image = $page->image()): ?>
    <div class="section">
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>">
      </figure>
    </div>
    <?php endif ?>

    <div class="section">
      <h1><?php echo $page->firstTitle()->html() ?></h1>
      <?php echo $page->firstText()->kirbytext() ?>
    </div>

    <div class="section">
      <h1><?php echo $page->secondTitle()->html() ?></h1>
      <?php echo $page->secondText()->kirbytext() ?>
    </div>

    <div class="section">
      <h1><?php echo $page->thirdTitle()->html() ?></h1>
      <?php echo $page->thirdText()->kirbytext() ?>
    </div>

    <div class="section">
      <h1><?php echo $page->fourthTitle()->html() ?></h1>
      <?php echo $page->fourthText()->kirbytext() ?>
    </div>        

  </main>

<?php snippet('footer') ?>