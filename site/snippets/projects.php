<!-- <h2>Latest projects</h2> -->

<ul class="portfolio">
  <?php foreach(page('home')->children()->visible() as $project): ?>
  <li class="one-half">
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
