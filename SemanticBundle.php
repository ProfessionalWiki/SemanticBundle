<?php

wfLoadExtensions( [
	'SemanticMediaWiki',

	// Result formats
	'SemanticResultFormats',
	'Maps',
	'ModernTimeline',

	// General purpose
	'SemanticExtraSpecialProperties',
	'SemanticCompoundQueries',

	// Domain specific
	'SemanticInterlanguageLinks',
	'SemanticCite',
	'SemanticGlossary',
	'SemanticMetaTags',
	'SemanticBreadcrumbLinks',

	'PageForms',
] );

$GLOBALS['wgHooks']['SoftwareInfo'][] = function( array &$software ) {
	$software['[https://github.com/SemanticMediaWiki/SemanticBundle Semantic Bundle]'] = '1.0.0';
};
