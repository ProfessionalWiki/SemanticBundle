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
	'SemanticGlossary',
	'SemanticMetaTags',
	'SemanticBreadcrumbLinks',
	'SemanticInterlanguageLinks',

	// Other
	'PageForms',
] );

$GLOBALS['wgExtensionCredits']['semantic'][] = [
	'path' => __FILE__,
	'namemsg' => 'semantic-bundle-name',
	'name' => 'AA Semantic Bundle',
	'version' => '3.1.0',
	'author' => [
		'[https://www.entropywins.wtf/mediawiki Jeroen De Dauw]',
		'[https://professional.wiki/ Professional.Wiki]'
	],
	'url' => 'https://github.com/SemanticMediaWiki/SemanticBundle',
	'description' => 'Bundle that installs and loads Semantic MediaWiki and associated extensions.',
	'license-name'   => 'GPL-2.0-or-later'
];

$GLOBALS['wgMessagesDirs']['SemanticBundle'] = __DIR__ . '/i18n';
