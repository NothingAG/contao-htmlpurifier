<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Comments
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * HTML Purifier Contao Extension
 *
 * @copyright  Nothing interactive 2013  <https://www.nothing.ch/>
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @author     Stefan Pfister <red@nothing.ch>
 * @author     Patrick Fiaux <nodz@nothing.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'Contao\HTMLPurifierHelper'   => 'system/modules/htmlpurifier/classes/HTMLPurifierHelper.php',

    // Models
    'Contao\HTMLPurifierModel'    => 'system/modules/htmlpurifier/models/HTMLPurifierModel.php',

));