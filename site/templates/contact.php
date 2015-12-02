<?php snippet('header') ?>

  <main class="main" role="main">

    <?php if($image = $page->image('pine-contact.jpg')): ?>
    <div class="section">
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo html($image->title()) ?>">
      </figure>
    </div>
    <?php endif ?>

    <div class="section">
      <h1><?php echo $page->firstTitle()->html() ?></h1>
      <?php echo $page->firstText()->kirbytext() ?>
    </div>

    <div class="section">
      <h1><?php echo $page->secondTitle()->html() ?></h1>
      <?php echo $page->secondText()->kirbytext() ?>
    </div>

    <div class="section">
      <h1><?php echo $page->thirdTitle()->html() ?></h1>
      <?php echo $page->thirdText()->kirbytext() ?>
    </div>

    <div class="section">
      <h1><?php echo $page->formTitle()->html() ?></h1>
      <?php echo $page->formDescription()->kirbytext() ?>
          
          <form method="post">

          <?php if($alert): ?>
          <div class="alert">
            <ul>
              <?php foreach($alert as $message): ?>
              <li><?php echo html($message) ?></li>
              <?php endforeach ?>
            </ul>
          </div>
          <?php endif ?>

          <div class="field">
            <label for="name">Name <abbr title="required">*</abbr></label>
            <input type="text" id="name" name="name">
          </div>

          <div class="field">
            <label for="email">Email <abbr title="required">*</abbr></label>
            <input type="email" id="email" name="email" required>
          </div>

          <div class="field">
            <label for="email">Budget <abbr title="required">*</abbr></label>
            <select id="budget" name="budget" required>
              <option value="" disabled selected hidden>Please choose one</option>
              <option value="1000-1500">$1000-1500</option>
              <option value="1500-3000">$1500-3000</option>
              <option value="3000-5000">$3000-5000</option>
              <option value="5000+">$5000+</option>
            </select>
          </div>          

          <div class="field">
            <label for="text">Message <abbr title="required">*</abbr></label>
            <textarea id="message" name="message" required></textarea>
          </div>

          <input type="submit" name="submit" value="Submit">

        </form> 
    </div>

    <div class="section">
      <h1><?php echo $page->newsletterTitle()->html() ?></h1>
      <?php echo $page->newsletterDescription()->kirbytext() ?>
      <?php snippet('newsletter') ?>
    </div>      

  </main>

<?php snippet('footer') ?>