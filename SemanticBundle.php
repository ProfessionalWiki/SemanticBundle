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

$GLOBALS['wgHooks']['SoftwareInfo'][] = function( array &$software ) {
	$software['[https://github.com/SemanticMediaWiki/SemanticBundle Semantic Bundle]'] = '1.1.0-alpha';
};
