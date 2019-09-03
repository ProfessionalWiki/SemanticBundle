<?php

wfLoadExtensions( [
	'SemanticMediaWiki',

	'SemanticResultFormats',
	'Maps',
	'ModernTimeline',

	'SemanticExtraSpecialProperties',

	'PageForms',
] );

$GLOBALS['wgHooks']['SoftwareInfo'][] = function( array &$software ) {
	$software['[https://github.com/SemanticMediaWiki/SemanticBundle Semantic Bundle]'] = '1.0.0';
};
