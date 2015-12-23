<nav role="navigation">
  <ul id="links">
      <?php foreach($pages->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>" class="<?php echo $p->uri() ?>">
            <?php echo html($p->title()) ?>
          </a>
        </li>
      <?php endforeach ?>
  </ul>
  <ul id="description">
	<?php foreach($pages->visible() as $p): ?>
		<span class="<?php echo $p->uri() ?>-description"><?php echo $p->description()->html() ?></span>
	<?php endforeach ?>
  </ul>
</nav>