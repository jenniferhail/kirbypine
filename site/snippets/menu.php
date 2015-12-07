<nav role="navigation" class="right">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>

    <?php if($user = $site->user()): ?>
    <li>
      <a href="<?php echo url('logout') ?>">Logout</a>
    </li>
    <?php endif ?>
    
  </ul>

</nav>
