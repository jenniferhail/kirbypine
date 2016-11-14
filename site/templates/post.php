<?php snippet( 'header') ?>


  <main class="main blog" role="main">

    <section class="content blogarticle text">

      <article>
        <h1><?= $post->title()->html() ?></h1>
        <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('F jS, Y') ?></time>
        <?= $post->text()->kirbytext() ?>       
      </article>   

      <article>
        <span class="back"><a href="<?php echo url('archive') ?>">Back</a></span>
      </article>

    </section>      

  </main>

<?php snippet('footer') ?>
