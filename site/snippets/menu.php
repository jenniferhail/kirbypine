<nav id="menuopen" role="navigation" style="display: none;">
  <ul>
      <?php foreach($pages->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>">
            <?php echo html($p->title()) ?>
          </a>
        </li>
      <?php endforeach ?>
  </ul>
</nav>