<nav role="navigation">
  <ul>
    <?php if($page->isOpen()): ?>
      <li>
        <a href="<?php echo $page->url() ?>">
          <?php echo html($page->title()) ?>
        </a>
      </li>
    <?php endif ?>
    <ul id="hidden-menu">
      <?php foreach($pages->visible() as $p): ?>
        <li <?php e($p->isOpen(), ' class="hide"') ?>>
          <a href="<?php echo $p->url() ?>">
            <?php echo html($p->title()) ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </ul>
</nav>