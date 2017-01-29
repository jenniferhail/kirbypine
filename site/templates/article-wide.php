<?php snippet( 'header') ?>


  <main class="main blog" role="main">

    <section class="content blogarticle">

      <article>

        <?php $category = $page->category()->html(); ?>

        <!-- <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('F jS, Y') ?></time> -->
        <h1 class="title"><?= $page->title()->html() ?></h1>
        <span class="category"><a href="<?php echo url('blog/' . 'category:' . urlencode($category)) ?>"><?php echo $category ?></a></span>

        <?= $page->text()->kirbytext() ?>

      </article>   

    </section>

    <section class="text">

      <article>
        <span>View Archive</span>
        <span class="back"><a href="<?php echo url('blog') ?>">Back</a></span>
      </article>

      <article>
        <?php snippet('disqus', array('disqus_shortname' => 'pine')) ?>
      </article>

    </section>      

  </main>

<?php snippet('footer') ?>
