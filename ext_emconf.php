<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'evencooleruri',
	'version' => '1.0.0',
	'category' => 'fe',
	'shy' => 0,
	'dependencies' => '',
	'conflicts' => 'cooluri,simulatestatic',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'diego',
	'author_email' => 'diego@sirdiego.de',
	'constraints' => [
		'depends' => [
			'typo3' => '7.6.0-0.0.0',
			'realurl' => '1.12.3-0.0.0',
		],
		'conflicts' => [
			'cooluri' => '',
			'simulatestatic' => '',
		],
		'suggests' => [
		],
	],
];
