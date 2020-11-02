<?php

wfLoadExtensions( [

	// Result formats
	'SemanticResultFormats',
	'Maps',
	'ModernTimeline',
	'Mermaid',

	// General purpose
	'SemanticExtraSpecialProperties',
	'SemanticCompoundQueries',

	// Domain specific
	'SemanticCite',
	'SemanticMetaTags',
	'SemanticBreadcrumbLinks',
	'SemanticInterlanguageLinks',

	// UI / UX
	'PageForms',
] );

$GLOBALS['wgExtensionCredits']['semantic'][] = [
	'path' => __FILE__,
	'namemsg' => 'semantic-bundle-name',
	'name' => 'AA Semantic Bundle',
	'version' => '4.0.0',
	'author' => [
		'[https://www.EntropyWins.wtf/mediawiki Jeroen De Dauw]',
		'[https://Professional.Wiki/ Professional.Wiki]'
	],
	'url' => 'https://github.com/ProfessionalWiki/SemanticBundle',
	'description' => 'Bundle that installs and loads Semantic MediaWiki and associated extensions',
	'license-name'   => 'GPL-2.0-or-later'
];

$GLOBALS['wgMessagesDirs']['SemanticBundle'] = __DIR__ . '/i18n';
