<?php snippet('header') ?>

  <main class="main" role="main">

    <section>
      <div class="left">&nbsp;</div>
      <?php if($image = $page->image('pine-home.jpg')): ?>
      <div class="right">
        <figure>
          <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>">
        </figure>
      </div>
      <?php endif ?>
    </section>

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
        <h1><?php echo $page->newsletterTitle()->html() ?></h1>
      </div>
      <div class="right">
        <?php echo $page->newsletterDescription()->kirbytext() ?>
        <?php snippet('newsletter') ?>
      </div>
    </section>

    <section class="instagram">
      <div class="left">
        <h1>Instagram</h1>    
      </div>
      <div class="right">
        <ul class="instagram-feed">
          <?php $instagram = new \Instagram();
              foreach($instagram->feed()->limit(4)->get() as $image): ?>   
                <li><a href="<?= $image->link() ?>"><img src="<?= $image->thumbnail() ?>" /></a></li>
              <?php endforeach; ?>
        </ul>
      </div>
    </section>

  </main>

<?php snippet('footer') ?>