<?php
namespace Grav\Theme;

/*
 * My Theme works on top of either parent theme - hibbittsdesign.org
 * - Quark 2 Open Publishing (Grav 2.1 and newer), in the skeleton's Grav 2 package
 * - Quark Open Publishing (Grav 1.7 and 2), in the skeleton's Grav 1.7 package
 * It uses Quark 2 Open Publishing when that theme is installed, and Quark Open Publishing otherwise.
 * (The same order is used for templates, in the "streams" setting in mytheme.yaml.)
 * Install the Quark 2 theme only together with Quark 2 Open Publishing: with Quark 2 but not Quark 2 Open Publishing,
 * Quark 2's templates would be used in place of Quark Open Publishing's.
 */

// PHP needs to know a class's parent when the class is defined, so first we define "MyThemeParent"
// as whichever Open Publishing theme is installed (checking for Quark 2 Open Publishing's main file),
// and then My Theme extends it.
$quark2OpenPublishingFile = __DIR__ . '/../quark2-open-publishing/quark2-open-publishing.php';

if (is_file($quark2OpenPublishingFile)) {
    class MyThemeParent extends Quark2OpenPublishing
    {
    }
} else {
    class MyThemeParent extends QuarkOpenPublishing
    {
    }
}

// My Theme: add your own PHP here if you need it
class myTheme extends MyThemeParent
{
}
