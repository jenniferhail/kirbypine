<?php snippet('header') ?>

  <main class="main" role="main">

    <section>
      <div class="left">&nbsp;</div>
      <div class="right">
        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
        </figure>
        <?php endforeach ?>
      </div>
    </section>

    <section>
      <div class="left">
        <h1>Project</h1>
      </div>
      <div class="right">
        <?php echo $page->Title()->html() ?><br>
        <?php echo $page->Tags() ?>
        <?php echo $page->Year()->kirbytext() ?>
      </div>
    </section>   

    <section>
      <div class="left">
        <h1>Details</h1>
      </div>
      <div class="right">
        <?php echo $page->Text()->kirbytext() ?>
      </div>
    </section>

    <section>
      <div class="left">
        <h1>Credits</h1>
      </div>
      <div class="right">
        <?php echo $page->Credits()->kirbytext() ?>
      </div>
    </section>

    <section>
      <div class="left">
        &nbsp;
      </div>
      <div class="right">
        <nav class="nextprev cf" role="navigation">
          <?php if($prev = $page->prevVisible()): ?>
          <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
          <?php endif ?>
          <?php if($next = $page->nextVisible()): ?>
          <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
          <?php endif ?>
        </nav>
      </div>
    </section>

  </main>

<?php snippet('footer') ?>