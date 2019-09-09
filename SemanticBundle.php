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

	// Domain specific
	'SemanticCite',
	'SemanticGlossary',
	'SemanticMetaTags',
	'SemanticBreadcrumbLinks',
	'SemanticInterlanguageLinks',

	'PageForms',
] );

$GLOBALS['wgExtensionCredits']['semantic'][] = [
	'path' => __FILE__,
	'namemsg' => 'semantic-bundle-name',
	'name' => 'AAA-sort',
	'version' => '2.0.0',
	'author' => [
		'[https://www.entropywins.wtf/mediawiki Jeroen De Dauw]'
	],
	'url' => 'https://github.com/SemanticMediaWiki/SemanticBundle',
	'description' => 'Bundle that installs and loads Semantic MediaWiki and associated extensions.',
	'license-name'   => 'GPL-2.0+'
];

$GLOBALS['wgMessagesDirs']['SemanticBundle'] = __DIR__ . '/i18n';
