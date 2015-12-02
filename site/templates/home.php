<?php snippet('header') ?>

  <main class="main" role="main">

    <?php if($image = $page->image('pine-home.jpg')): ?>
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
      <h1><?php echo $page->newsletterTitle()->html() ?></h1>
      <?php echo $page->newsletterDescription()->kirbytext() ?>
      <?php snippet('newsletter') ?>
    </div> 

    <div class="section">
      <h1>Instagram</h1>
      <ul>
      	<?php $instagram = new \Instagram();
        	  foreach($instagram->feed()->limit(4)->get() as $image): ?>   
	      <li><a href="<?= $image->link() ?>"><img src="<?= $image->thumbnail() ?>" /></a></li>
	    <?php endforeach; ?>
	  </ul>
    </div>

  </main>

<?php snippet('footer') ?>