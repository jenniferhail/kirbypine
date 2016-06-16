<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="content blogarticle">

      <article>
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>       
      </article>   

      <article>
        <span class="back"><a href="<?php echo url('blog') ?>">Back</a></span>
      </article>

    </section>      

  </main>

<?php snippet('footer') ?>