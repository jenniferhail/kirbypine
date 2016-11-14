<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="project-details">
      <h1>Project</h1>
      <h2><?php echo $page->Title()->html() ?></h2>
      <p><?php echo $page->Tags() ?></p>
      <?php echo $page->Year()->kirbytext() ?>
    </section>

    <section class="project-text">
      <?php echo $page->Text()->kirbytext() ?>
    </section>    

    <?php if ($page->Credits()->isNotEmpty()): ?>
      <section class="project-credits">
        <h1>Credits</h1>
        <?php echo $page->Credits()->kirbytext() ?>
      </section> 
    <?php endif ?>

    <section class="project-images">
      <?php echo $page->Photos()->kirbytext() ?>
    </section>

  </main>

<?php snippet('footer') ?>