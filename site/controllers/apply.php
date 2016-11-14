<?php

return function($site, $pages, $page) {

	$form = uniform('forest-form', array(
		'required' => array('_from' => 'email'),
			'actions'  => array(
				array(
					'_action' => 'email',
					'to'      => 'hello@bypine.co',
					'subject' =>  'New Forest Member Application!',
					'sender'  => 'admin@bypine.co',
				)
			)
		)
	);

	if ($form->successful()) go('the-forest/thank-you');

   return compact('form');
};