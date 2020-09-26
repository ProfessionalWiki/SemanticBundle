# Semantic Bundle

[![Build Status](https://travis-ci.org/ProfessionalWiki/SemanticBundle.svg?branch=master)](https://travis-ci.org/ProfessionalWiki/SemanticBundle)
[![Latest Stable Version](https://poser.pugx.org/mediawiki/semantic-bundle/version.png)](https://packagist.org/packages/mediawiki/semantic-bundle)
[![Download count](https://poser.pugx.org/mediawiki/semantic-bundle/d/total.png)](https://packagist.org/packages/mediawiki/semantic-bundle)

Bundle extension that installs and loads Semantic MediaWiki and associated extensions.

This bundle is for everyone that wants to get the full Semantic MediaWiki experience without
individually installing all extensions or figuring out what those extensions are in the first place.

This version of Semantic Bundle requires PHP 7.1+ and MediaWiki 1.31+.

Semantic Bundle is maintained by [Professional.Wiki]. Contact us for [MediaWiki development], [managed wiki hosting] or [MediaWiki support].

## Bundled extensions

* **[Semantic MediaWiki](https://www.mediawiki.org/wiki/Extension:Semantic_MediaWiki)** – Allows to store and query data annotated to pages 
* **[Semantic Breadcrumb Links](https://www.mediawiki.org/wiki/Extension:Semantic_Breadcrumb_Links)** – Allows to build breadcrumb links using semantic annotations
* **[Semantic Cite](https://www.mediawiki.org/wiki/Extension:Semantic_Cite)** – Allows to manage citation resources using semantic annotations
* **[Semantic Compound Queries](https://www.mediawiki.org/wiki/Extension:Semantic_Compound_Queries)** – Provides a parser function that displays multiple semantic queries at the same time
* **[Semantic Extra Special Properties](https://www.mediawiki.org/wiki/Extension:Semantic_Extra_Special_Properties)** – Adds extra special properties to all pages
* **[Semantic Glossary](https://www.mediawiki.org/wiki/Extension:Semantic_Glossary)** – Allows to define terms as well as abbreviations and manage them with semantic annotations
* **[Semantic Interlanguage Links](https://www.mediawiki.org/wiki/Extension:Semantic_Interlanguage_Links)** – Allows to create and manage interlanguage links with semantic annotations
* **[Semantic Meta Tags](https://www.mediawiki.org/wiki/Extension:Semantic_Meta_Tags)** – Allows to extend the meta elements in the HTML header of a page with content generated from semantic annotations
* **[Semantic Result Formats](https://www.mediawiki.org/wiki/Extension:Semantic_Result_Formats)** – Provides additional formats for semantic queries
* **[Maps](https://www.mediawiki.org/wiki/Extension:Maps)** – Allows embedding of dynamic maps, geocoding and geospatial operations
* **[Mermaid](https://www.mediawiki.org/wiki/Extension:Mermaid)** – Provides a parser function to generate diagrams and flowcharts with the help of the mermaid script language
* **[Modern Timeline](https://www.mediawiki.org/wiki/Extension:Modern_Timeline)** – Provides a modern timeline visualization for Semantic MediaWiki as a result format
* **[Page Forms](https://www.mediawiki.org/wiki/Extension:Page_Forms)** – Allows to create and use forms for adding and editing pages with and without semantic data

## Installation

Semantic Bundle is installed using [Composer](https://getcomposer.org) with
[MediaWiki's built-in support for Composer](https://www.mediawiki.org/wiki/Composer).

### Step 1/3: composer update

Change to the base directory of your MediaWiki installation and execute these two commands:

    COMPOSER=composer.local.json composer require --no-update mediawiki/semantic-bundle:~3.0

    composer update mediawiki/semantic-bundle --no-dev -o
  
### Step 2/3: modify LocalSettings.php

Add the following two lines to the end of your
["LocalSettings.php" file](https://www.mediawiki.org/wiki/Manual:LocalSettings.php):

    enableSemantics( 'example.org' );
    require_once __DIR__ . '/extensions/SemanticBundle/SemanticBundle.php';

Update the `enableSemantics` line with your domain name.
For more information see the
[enableSemantics documentation](https://www.semantic-mediawiki.org/wiki/Help:EnableSemantics).

### Step 3/3: run update.php

Run the [update.php script](https://www.mediawiki.org/wiki/Manual:Update.php)
from the base directory of your MediaWiki installation: 

    php maintenance/update.php

### Verify everything went alright

Check the "Special:Version" page on your wiki. If it lists Semantic MediaWiki, installation was successful. 

Finally, please consider [sponsoring the project].

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

## Version history

### Semantic Bundle 3.2.0 (2020-09-13)

* Upgraded Semantic MediaWiki from ~3.1.0 to ~3.2.0

### Semantic Bundle 3.1.2 (2020-03-17)

* Fixed defect in 3.1.1 that made Composer ignore that release

### Semantic Bundle 3.1.1 (2020-03-15)

* Fixed compatibility with MediaWiki 1.31 (by preventing installation of Mermaid newer than 2.0.x)

### Semantic Bundle 3.1.0 (2020-01-26)

* Upgraded Maps from ~7.4.0 to ~7.15

### Semantic Bundle 3.0.1 (2019-10-29)

* Fixed double loading of Semantic MediaWiki that happened in some cases

### Semantic Bundle 3.0.0 (2019-09-24)

* Upgraded Semantic MediaWiki from ~3.0.0 to ~3.1.0

### Semantic Bundle 2.0.0 (2019-09-09)

* Upgraded Semantic Interlanguage Links from ~1.5 to ~2.0

### Semantic Bundle 1.0.0 (2019-09-05)

* Initial release for MediaWiki 1.31.x and Semantic MediaWiki 3.0.x

[Professional.Wiki]: https://professional.wiki
[sponsoring the project]: https://github.com/sponsors/JeroenDeDauw
[MediaWiki development]: https://professional.wiki/en/mediawiki-development
[managed wiki hosting]: https://professional.wiki/en/hosting
[MediaWiki support]: https://professional.wiki/en/support
