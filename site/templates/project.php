<?php snippet('header') ?>

  <main class="main" role="main">

    <section>
      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endforeach ?>
    </section>

    <section class="project-details">
      <h1>Project</h1>
      <?php echo $page->Title()->html() ?><br>
      <?php echo $page->Tags() ?>
      <?php echo $page->Year()->kirbytext() ?>
    </section>

    <section class="project-credits">
      <h1>Credits</h1>
      <?php echo $page->Credits()->kirbytext() ?>
    </section>     

    <section>
      <h1>Details</h1>
      <?php echo $page->Text()->kirbytext() ?>
    </section>

  </main>

<?php snippet('footer') ?>