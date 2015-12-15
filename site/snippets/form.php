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

  <div class="field one-third">
    <label for="name">Name </label>
    <input type="text" id="name" name="name" value="" placeholder="Name">
  </div>

  <div class="field one-third">
    <label for="email">Email </label>
    <input type="email" id="email" name="email" required value="" placeholder="E-mail">
  </div>

  <div class="field one-third-last">
    <label for="email">Budget </label>
    <select id="budget" name="budget" required>
      <option value="" disabled selected hidden>Budget</option>
      <option value="1000-1500">$1000-1500</option>
      <option value="1500-3000">$1500-3000</option>
      <option value="3000-5000">$3000-5000</option>
      <option value="5000+">$5000+</option>
    </select>
  </div>          

  <div class="field two-thirds">
    <label for="text">Message </label>
    <textarea id="message" name="message" required value="" placeholder="Message"></textarea>
  </div>

  <div class="one-third-last"><input type="submit" name="submit" value="Submit"></div>

  <div class="clear"></div>

</form> 