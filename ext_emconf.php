<?php

$EM_CONF['emailobfuscator'] = array(
	'title' => 'Email Obfuscator',
	'description' => 'Replaces the default email address spam protection with a better one. The email obfuscation is more randomized, safer and more user friendly for the website visitor.',
	'category' => 'fe',
	'author' => 'Thomas Pronold',
	'author_email' => 'tp@zotorn.de',
	'author_company' => 'Zotorn IT | zotorn.de',
	'version' => '5.0.2',
	'state' => 'stable',
	'clearcacheonload' => 1,
	'constraints' => array(
		'depends' => array(
			'typo3' => '8.7.0-10.5.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'autoload' => [
		'psr-4' => [
			'EMAILOBFUSCATOR\\Emailobfuscator\\' => 'Classes'
		]
	],
);

?>
