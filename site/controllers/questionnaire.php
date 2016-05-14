<?php

return function($site, $pages, $page) {

	$form = uniform('contact-form', array(
		'required' => array('_from' => 'email'),
			'actions'  => array(
				array(
					'_action' => 'email',
					'to'      => 'hello@bypine.co',
					'subject' =>  'New Inquiry!',
					'sender'  => 'admin@bypine.co',
				)
			)
		)
	);

	if ($form->successful()) go('questionnaire/thank-you');

   return compact('form');
};