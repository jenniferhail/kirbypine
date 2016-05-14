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

  <div class="field one-half">
    <label for="fname">First Name </label>
    <input type="text" id="fname" name="name" required value="" placeholder="First Name">
  </div>

    <div class="field one-half-last">
    <label for="lname">Last Name </label>
    <input type="text" id="lname" name="name" required value="" placeholder="Last Name">
  </div>

  <div class="field one-half">
    <label for="businessname">Business Name </label>
    <input type="text" id="businessname" name="businessname" required value="" placeholder="Business Name">
  </div>

  <div class="field one-half-last">
    <label for="businessurl">Business URL </label>
    <input type="text" id="businessurl" name="businessurl" required value="" placeholder="Business URL (optional)">
  </div>
  
  <div class="field one-half">
    <label for="telephone">Telephone Number</label>
    <input type="text" id="telephone" name="telephone" value="" placeholder="Telephone Number (optional)">
  </div>

  <div class="field one-half-last">
    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required value="" placeholder="E-mail Address">
  </div>

  <div class="clear"></div>

  <br><br>

  <h1>Project Details</h1>

  <div class="field one-half">
    <label for="timeline">What is your timeline? </label>
    <input type="text" id="timeline" name="timeline" required value="" placeholder="What is your timeline?">
  </div>  

  <div class="field one-half-last">
    <select name="referral" id="referral" required>
      <option value="How did you hear about Pine?">How did you hear about Pine?</option>
      <option value="A Friend">A Friend</option>
      <option value="Instagram">Instagram</option>
      <option value="Pinterest">Pinterest</option>
      <option value="Facebook">Facebook</option>
      <option value="Website">Website</option>
      <option value="Search Enginge">Search Enginge</option>
      <option value="Other">Other</option>
    </select>    
  </div> 

  <br>        

  <div class="field full">
    <label for="message">Additional details and questions </label>
    <textarea id="message" name="message" required value="" placeholder="Please share your project details or any questions you may have."></textarea>
  </div>

  <div class="services field full">
    <p>Which services do you need?</p>
    <div class="checkbox-columns">
      <input type="checkbox" name="logo" value="Branding"> Branding<br>
      <input type="checkbox" name="collateral" value="Print Collateral"> Print Collateral
    </div>
    <div class="checkbox-columns">
      <input type="checkbox" name="webdesign" value="Website Design"> Website Design<br>
      <input type="checkbox" name="webdev" value="Website Development"> Website Development
    </div>
    <div class="checkbox-columns">
      <input type="checkbox" name="artdirection" value="Art Direction"> Art Direction<br>
      <input type="checkbox" name="photography" value="Photography"> Photography
    </div>
  </div>

  <div class="clear"></div>

  <br><br>

  <h1>Fun Questions</h1>

  <div class="field full">
    <label for="coffee">How do you order your coffee/tea? </label>
    <textarea id="coffee" name="coffee" value="" placeholder="How do you order your coffee/tea?"></textarea>
  </div> 

  <div class="field full">
    <label for="checklists">Do you like checklists? Why or why not? </label>
    <textarea id="checklists" name="checklists" value="" placeholder="Do you like checklists? Why or why not?"></textarea>
  </div> 

  <div class="field full">
    <label for="idealday">Describe your ideal day. </label>
    <textarea id="idealday" name="idealday" value="" placeholder="Describe your ideal day."></textarea>
  </div>  

  <div class="submit full"><input type="submit" name="submit" value="Submit"></div>

  <div class="clear"></div>

</form> 