<?php snippet('header') ?>

  <main class="main blog" role="main">

    <section class="content blogarticle text">

      <article>
        <h1><?php echo $page->title()->html() ?></h1>
        <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('F jS, Y') ?></time>
        <?php echo $page->text()->kirbytext() ?>       
      </article>   

      <article>
        <span class="back"><a href="<?php echo url('blog') ?>">Back</a></span>
      </article>

    </section>      

  </main>

<?php snippet('footer') ?>