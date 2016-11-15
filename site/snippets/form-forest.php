<form action="<?php echo $page->url()?>" method="post">

<h1>Join The Forest</h1>

<p>After completing this form, you will receive an invitation to join our private Facebook group. We're excited to have you!</p>

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
    <label<?php e($form->hasError('mentor'), ' class="erroneous"')?> for="mentor">Are you looking for a mentor? If so, why?</label>
    <textarea type="text" id="mentor" name="mentor" required value="<?php $form->echoValue('mentor') ?>" placeholder="Are you looking for a mentor? If so, why?"></textarea>
   </div> 

   <div class="field full">
    <label<?php e($form->hasError('help'), ' class="erroneous"')?> for="help">Where do you need help in your business?</label>
    <textarea type="text" id="help" name="help" required value="<?php $form->echoValue('help') ?>" placeholder="Where do you need help in your business?"></textarea>
   </div>    

   <div class="field full">
    <label<?php e($form->hasError('contribute'), ' class="erroneous"')?> for="contribute">In what areas of business can you help other members?</label>
    <textarea type="text" id="contribute" name="contribute" required value="<?php $form->echoValue('contribute') ?>" placeholder="In what areas of business can you help other members?"></textarea>
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