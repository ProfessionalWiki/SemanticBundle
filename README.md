# Semantic Bundle

[![Latest Stable Version](https://poser.pugx.org/mediawiki/semantic-bundle/version.png)](https://packagist.org/packages/mediawiki/semantic-bundle)
[![Download count](https://poser.pugx.org/mediawiki/semantic-bundle/d/total.png)](https://packagist.org/packages/mediawiki/semantic-bundle)

Bundle extension that installs and loads Semantic MediaWiki and associated extensions.

This bundle is for everyone that wants to get the full Semantic MediaWiki experience without
individually installing all extensions or figuring out what those extensions are in the first place.

This version of Semantic Bundle requires PHP 7.1 or above.

## Installation

Semantic Bundle is installed using [Composer](https://getcomposer.org) with
[MediaWiki's built-in support for Composer](https://www.mediawiki.org/wiki/Composer).

### Step 1

Change to the base directory of your MediaWiki installation. If you do not have a "composer.local.json" file yet,
create one and add the following content to it:

```
{
	"require": {
		"mediawiki/semantic-bundle": "~1.0"
	}
}
```

If you already have a "composer.local.json" file add the following line to the end of the "require"
section in your file:

    "mediawiki/semantic-bundle": "~1.0"

Remember to add a comma to the end of the preceding line in this section.

### Step 2

Run the following command in your shell:

    composer update --no-dev

### Step 3

Add the following lines to the end of your "LocalSettings.php" file:

    require_once __DIR__ . '/extensions/SemanticBundle/SemanticBundle.php';
    enableSemantics( 'example.org' );

Update the `enableSemantics` line with your domain name.
For more information see the
[enableSemantics documentation](https://www.semantic-mediawiki.org/wiki/Help:EnableSemantics).

## How this works

This section is to provide extra background to people familiar with the MediaWiki
extension registration mechanism. Understanding it is not required for using Semantic Bundle.

Semantic Bundle pulls in all relevant Semantic MediaWiki extensions via Composer by defining
them as dependency in its `require` section. By including `SemanticBundle.php` you enable these
extensions, since `SemanticBundle.php` calls `wfLoadExtensions` just like you would do if you
had installed them individually.

If you want to only load some of the extensions, you can call `wfLoadExtensions` yourself instead
of including `SemanticBundle.php`.

## Update/version policy

Like this included extensions, Semantic Bundle itself follows [semantic versioning](https://semver.org/).
This means that we avoid breaking changes in all but our major versions.

In other words, if you install version `~42.0` of Semantic Bundle, you can run `composer update` at any
later time without worrying a breaking change will be included. No extensions will be removed, no extensions
will be added and no extensions will be upgraded to a new version that itself has breaking changes.

To get the latest set of extensions included by Semantic Bundle, make sure your "composer.local.json"
file contains the latest version of Semantic Bundle.
