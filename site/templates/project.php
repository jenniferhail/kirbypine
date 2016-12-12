<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="project-details">
      <h1><?php echo $page->Title()->html() ?></h1>
      <p><?php echo $page->Tags() ?>
      <?php echo $page->Year()->kirbytext() ?></p>
    </section>

    <section class="project-text">
      <?php echo $page->Text()->kirbytext() ?>
    </section>    

    <section class="project-images">
      <?php echo $page->Photos()->kirbytext() ?>
    </section>

    <?php if ($page->Credits()->isNotEmpty()): ?>
      <section class="project-credits">
        <h1>Credits</h1>
        <?php echo $page->Credits()->kirbytext() ?>
      </section> 
    <?php endif ?>

  </main>

<?php snippet('footer') ?>