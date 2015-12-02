<!-- <h2>Latest projects</h2> -->

<ul class="teaser cf">
  <?php foreach(page('portfolio')->children()->visible() as $project): ?>
  <li>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
  </li>
  <?php endforeach ?>
</ul>
