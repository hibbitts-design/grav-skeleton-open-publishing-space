<?php
namespace Grav\Theme;

/*
 * My Theme works on top of either parent theme - hibbittsdesign.org
 * - Quark 2 Open Publishing (Grav 2.1 and newer), in the skeleton's Grav 2 package
 * - Quark Open Publishing (Grav 1.7 and 2), in the skeleton's Grav 1.7 package
 * It uses Quark 2 Open Publishing when both it and Quark 2 are installed, and Quark Open Publishing otherwise.
 * (The same order is used for templates, in the "streams" setting in mytheme.yaml.)
 * Install the Quark 2 theme only together with Quark 2 Open Publishing: with Quark 2 but not Quark 2 Open Publishing,
 * Quark 2's templates would be used in place of Quark Open Publishing's.
 */

// PHP needs to know a class's parent when the class is defined, so first we define "MyThemeParent"
// as whichever Open Publishing theme is installed, and then My Theme extends it.
// Quark 2 Open Publishing is built on Quark 2, so both need to be there (a leftover Quark 2 Open Publishing
// folder on its own would otherwise stop the whole site with "Class Quark2 not found").
$quark2OpenPublishingFile = __DIR__ . '/../quark2-open-publishing/quark2-open-publishing.php';
$quark2File = __DIR__ . '/../quark2/quark2.php';

if (is_file($quark2OpenPublishingFile) && is_file($quark2File)) {
    class MyThemeParent extends Quark2OpenPublishing
    {
    }
} else {
    class MyThemeParent extends QuarkOpenPublishing
    {
    }

    // With a leftover Quark 2 Open Publishing folder, its templates (which need Quark 2) come first in the template
    // folders ("streams" in mytheme.yaml), so put Quark Open Publishing's back in front of them
    if (is_file($quark2OpenPublishingFile)) {
        $locator = \Grav\Common\Grav::instance()['locator'];
        $locator->addPath('theme', '', ['user/themes/mytheme', 'user/themes/quark-open-publishing', 'user/themes/quark']);
    }
}

// My Theme: add your own PHP here if you need it
class myTheme extends MyThemeParent
{
}
