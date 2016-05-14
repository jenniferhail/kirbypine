<form method="post" class="contactform">

  <?php if($alert): ?>
  <div class="alert">
    <ul>
      <?php foreach($alert as $message): ?>
      <li><?php echo html($message) ?></li>
      <?php endforeach ?>
    </ul>
  </div>
  <?php endif ?>

  <h1>Contact Details</h1>

  <div class="field one-third">
    <label for="fname">First Name </label>
    <input type="text" id="fname" name="name" value="" placeholder="First Name">
  </div>

    <div class="field one-third">
    <label for="lname">Last Name </label>
    <input type="text" id="lname" name="name" value="" placeholder="Last Name">
  </div>


  <div class="field one-third-last">
    <label for="email">Email </label>
    <input type="email" id="email" name="email" required value="" placeholder="E-mail">
  </div>

  <br>

  <div class="field one-third">
    <label for="website">Website </label>
    <input type="text" id="website" name="website" required value="" placeholder="Website">
  </div>

  <div class="field one-third">
    <label for="instagram">Instagram Username </label>
    <input type="text" id="instagram" name="instagram" required value="" placeholder="Instagram Username">
  </div>

  <div class="field one-third-last">
    <label for="email">Budget </label>
    <input type="text" id="budget" name="budget" value="" placeholder="Budget">
  </div>  

  <br>        

  <div class="field two-thirds">
    <label for="text">Message </label>
    <textarea id="message" name="message" required value="" placeholder="Anything else you want to share?"></textarea>
  </div>

  <div class="submit one-third-last"><input type="submit" name="submit" value="Submit"></div>

  <div class="clear"></div>

</form> 