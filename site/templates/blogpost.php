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

      <div id="comments">
        <?php snippet('disqus', array('disqus_shortname' => 'pine', 'disqus_developer' => true)) ?>
      </div>

    </section>      

  </main>

<?php snippet('footer') ?>