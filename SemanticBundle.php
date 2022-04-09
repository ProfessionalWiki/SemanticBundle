<?php

wfLoadExtensions( [
	'SemanticMediaWiki',

	// Result formats
	'SemanticResultFormats',
	'Maps',
	'ModernTimeline',
	'Mermaid',

	// General purpose
	'SemanticExtraSpecialProperties',
	'SemanticCompoundQueries',

	// UI / UX
	'PageForms',
] );

$GLOBALS['wgExtensionCredits']['semantic'][] = [
	'path' => __FILE__,
	'namemsg' => 'semantic-bundle-name',
	'name' => 'AA Semantic Bundle',
	'version' => '6.0.1',
	'author' => [
		'[https://www.EntropyWins.wtf/mediawiki Jeroen De Dauw]',
		'[https://Professional.Wiki/ Professional.Wiki]'
	],
	'url' => 'https://github.com/ProfessionalWiki/SemanticBundle',
	'description' => 'Bundle that installs and loads Semantic MediaWiki and associated extensions',
	'license-name'   => 'GPL-2.0-or-later'
];

$GLOBALS['wgMessagesDirs']['SemanticBundle'] = __DIR__ . '/i18n';
