<form action="<?php echo $page->url()?>" method="post">

   <h1>I look forward to chatting with you about your business!</h1>

   <div class="field one-half">
    <label<?php e($form->hasError('fname'), ' class="erroneous"')?>  for="fname">First Name</label>
    <input type="text" id="fname" name="fname" required value="<?php $form->echoValue('fname') ?>" placeholder="First Name">
   </div>

    <div class="field one-half-last">
    <label<?php e($form->hasError('lname'), ' class="erroneous"')?> for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" required value="<?php $form->echoValue('lname') ?>" placeholder="Last Name">
   </div>

   <div class="field full">
    <label<?php e($form->hasError('_from'), ' class="erroneous"')?> for="_email">Email Address</label>
    <input type="email" id="email" name="_from" required value="<?php $form->echoValue('_from') ?>" placeholder="E-mail Address">
   </div>

   <div class="field full">
    <label<?php e($form->hasError('businessname'), ' class="erroneous"')?> for="businessname">Business Name</label>
    <input type="text" id="businessname" name="businessname" required value="<?php $form->echoValue('businessname') ?>" placeholder="Business Name">
   </div>

   <div class="field full">
    <label<?php e($form->hasError('businessurl'), ' class="erroneous"')?> for="businessurl">Business Website</label>
    <input type="text" id="businessurl" name="businessurl" required value="<?php $form->echoValue('businessurl') ?>" placeholder="Business Website">
   </div>

   <div class="field full">
    <label<?php e($form->hasError('businessage'), ' class="erroneous"')?> for="businessage">How long have you been in business?</label>
    <input type="text" id="businessage" name="businessage" required value="<?php $form->echoValue('businessage') ?>" placeholder="How long have you been in business?">
   </div>

   <div class="field full">
    <label<?php e($form->hasError('referral'), ' class="erroneous"')?> for="referral">How did you hear about Pine?</label>
    <input type="text" id="referral" name="referral" required value="<?php $form->echoValue('referral') ?>" placeholder="How did you hear about Pine?">
   </div> 

   <div class="services field full">
    <p>Which services are you interested in?</p>
    <div class="checkbox-columns">
      <input type="checkbox" name="branding" value="Branding"> Branding<br>
    </div>
    <div class="checkbox-columns">
      <input type="checkbox" name="webdesign" value="Website Design"> Website Design
    </div>
    <div class="checkbox-columns">
      <input type="checkbox" name="other" value="Other"> Other
    </div>
   </div>

   <div class="field full">
    <label<?php e($form->hasError('timeline'), ' class="erroneous"')?> for="timeline">When do you want to work together?</label>
    <input type="text" id="timeline" name="timeline" required value="<?php $form->echoValue('timeline') ?>" placeholder="When do you want to work together? I have three spots left for January 2017! Next opening in April.">
   </div> 

   <div class="clear"></div>

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