<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="banner-home">
      <div class="v-center">
        <a class="logo" href="<?php echo url() ?>">
          <img src="<?php echo url('assets/images/logo-white.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
        </a>
        <div class="tagline">
          <?php echo $page->tagline()->kirbytext()?>
        </div>
      </div>
    </section>

    <section>
      <div class="heading">
        <h1><?php echo $page->introTitle()->html() ?></h1>
      </div>
      <div class="paragraph">
        <?php echo $page->intro()->kirbytext() ?>
      </div>
    </section>

  </main>

<?php snippet('footer') ?>