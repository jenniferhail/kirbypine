<form action="<?php echo $page->url()?>" method="post">

   <h1>Contact Details</h1>

   <div class="field one-half">
    <label<?php e($form->hasError('fname'), ' class="erroneous"')?>  for="fname">First Name </label>
    <input type="text" id="fname" name="fname" required value="<?php $form->echoValue('fname') ?>" placeholder="First Name">
   </div>

    <div class="field one-half-last">
    <label<?php e($form->hasError('lname'), ' class="erroneous"')?> for="lname">Last Name </label>
    <input type="text" id="lname" name="lname" required value="<?php $form->echoValue('lname') ?>" placeholder="Last Name">
   </div>

   <div class="field one-half">
    <label<?php e($form->hasError('businessname'), ' class="erroneous"')?> for="businessname">Business Name </label>
    <input type="text" id="businessname" name="businessname" required value="<?php $form->echoValue('businessname') ?>" placeholder="Business Name">
   </div>

   <div class="field one-half-last">
    <label<?php e($form->hasError('businessurl'), ' class="erroneous"')?> for="businessurl">Business URL </label>
    <input type="text" id="businessurl" name="businessurl" required value="<?php $form->echoValue('businessurl') ?>" placeholder="Business URL (optional)">
   </div>

   <div class="field one-half">
    <label for="telephone">Telephone Number</label>
    <input type="text" id="telephone" name="telephone" value="" placeholder="Telephone Number (optional)">
   </div>

   <div class="field one-half-last">
    <label<?php e($form->hasError('_from'), ' class="erroneous"')?> for="_email">Email Address</label>
    <input type="email" id="email" name="_from" required value="<?php $form->echoValue('_from') ?>" placeholder="E-mail Address">
   </div>

   <div class="clear"></div>

   <br><br>

   <h1>Project Details</h1>

   <div class="field one-half">
    <label<?php e($form->hasError('timeline'), ' class="erroneous"')?> for="timeline">What is your timeline? </label>
    <input type="text" id="timeline" name="timeline" required value="<?php $form->echoValue('timeline') ?>" placeholder="What is your timeline?">
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
    <textarea id="message" name="message" required value="<?php $form->echoValue('message') ?>" placeholder="Please share your project details or any questions you may have."><?php $form->echoValue('message') ?></textarea>
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
      <input type="checkbox" name="marketing" value="Marketing"> Marketing
    </div>
   </div>

   <div class="clear"></div>

   <br><br>

   <h1>Fun Questions</h1>

   <div class="field full">
    <label for="coffee">How do you order your coffee/tea? </label>
    <textarea id="coffee" name="coffee" value="" placeholder="How do you order your coffee/tea?"><?php $form->echoValue('coffee') ?></textarea>
   </div> 

   <div class="field full">
    <label for="checklists">Do you like checklists? Why or why not? </label>
    <textarea id="checklists" name="checklists" value="" placeholder="Do you like checklists? Why or why not?"><?php $form->echoValue('checklists') ?></textarea>
   </div> 

   <div class="field full">
    <label for="idealday">Describe your ideal day. </label>
    <textarea id="idealday" name="idealday" value="" placeholder="Describe your ideal day."><?php $form->echoValue('idealday') ?></textarea>
   </div>  

   <div class="field full">
      <label class="uniform__potty" for="website">Please leave this field blank</label>
      <input type="text" name="website" id="website" class="uniform__potty" />
   </div>

<?php if ($form->hasMessage()): ?>
   <div class="field full message <?php e($form->successful(), 'success' , 'error')?>">
      <?php $form->echoMessage() ?>
   </div>
<?php endif; ?>

   <div class="submit full"><button type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>>Submit</button></div>

   <div class="clear"></div>

</form>