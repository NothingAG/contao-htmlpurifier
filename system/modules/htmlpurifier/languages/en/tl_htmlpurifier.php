<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2010
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id: tl_htmlpurifier.php 95 2012-02-15 15:45:28Z Red $
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_htmlpurifier']['name']									= array('Name', 'Please enter a name for this configuration.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['fallback']								= array('Default configuration', 'Make this the default configuration for HTMLPurifier.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['rte']									= array('TinyMCE configuration', 'You can select a tinyMCE configuration to override the default one.');

$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_AllowedClasses']					= array('Allowed classes', 'Comma-separated list of allowed class values in the class attribute. By default, this is empty, which means all classes are allowed.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_DefaultImageAlt']					= array('Default image alternative text', 'This is the content of the alt tag of an image if the user had not previously specified an alt attribute. This applies to all images without a valid alt attribute. Default behavior is to use the basename of the src tag for the alt.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_DefaultTextDir']					= array('Text direction', 'Defines the default text direction of the document being parsed.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_EnableID']							= array('Enable ID', 'Allows the ID attribute in HTML. This is disabled by default due to the fact that without proper configuration user input can easily break the validation of a webpage by specifying an ID that is already on the surrounding HTML. If you don\'t mind throwing caution to the wind, enable this directive, but I strongly recommend you also consider blacklisting IDs.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_ForbiddenClasses']					= array('Forbidden classes', 'Comma-separeted list of forbidden class values in the class attribute. By default, this is empty, which means that no classes are forbidden.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_IDBlacklist']						= array('Blacklisted IDs', 'Comma-separeted list of IDs not allowed in the document.');
  
$GLOBALS['TL_LANG']['tl_htmlpurifier']['AutoFormat_Linkify']					= array('Enable auto-linking', 'This directive turns on linkification, auto-linking http, ftp and https URLs. a tags with the href attribute must be allowed.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['AutoFormat_RemoveEmpty']				= array('Remove empty', 'When enabled, HTML Purifier will attempt to remove empty elements that contribute no semantic information to the document.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['AutoFormat_RemoveEmpty_RemoveNbsp']		= array('Remove empty with spaces', 'When enabled, HTML Purifier will treat any elements that contain only non-breaking spaces as well as regular whitespace as empty, and remove them when "Remove empty" is enabled.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['AutoFormat_RemoveEmpty_RemoveNbsp_Exceptions']	= array('Remove empty exceptions', 'When "Remove empty" and "Remove empty with spaces" are enabled, this comma-separated list defines what HTML elements should not be removede if they have only a non-breaking space in them.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['AutoFormat_RemoveSpansWithoutAttributes']	= array('Remove &lt;span&gt; without attributes', 'This directive causes span tags without any attributes to be removed. It will also remove spans that had all attributes removed during processing.');

$GLOBALS['TL_LANG']['tl_htmlpurifier']['CSS_AllowedProperties']					= array('Allowed properties', 'If HTML Purifier\'s style attributes set is unsatisfactory for your needs, you can overload it with your own list of tags to allow. Note that this method is subtractive: it does its job by taking away from HTML Purifier usual feature set, so you cannot add an attribute that HTML Purifier never supported in the first place.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['CSS_ForbiddenProperties']				= array('Forbidden properties', 'This is the logical inverse of CSS.AllowedProperties, and it will override that directive or any other directive. If possible, CSS.AllowedProperties is recommended over this directive, because it can sometimes be difficult to tell whether or not you\'ve forbidden all of the CSS properties you truly would like to disallow.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['CSS_AllowImportant']					= array('Allow !important', 'This parameter determines whether or not !important cascade modifiers should be allowed in user CSS. If false, !important is stripped.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['CSS_AllowTricky']						= array('Allow tricky CSS', 'This parameter determines whether or not to allow "tricky" CSS properties and values. Tricky CSS properties/values can drastically modify page layout or be used for deceptive practices but do not directly constitute a security risk. For example, display:none; is considered a tricky property that will only be allowed if this directive is set to true.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['CSS_Proprietary']						= array('Allow proprietary', 'Whether or not to allow safe, proprietary CSS values.');
  
$GLOBALS['TL_LANG']['tl_htmlpurifier']['HTML_Doctype']							= array('Document type', 'Doctype to use during filtering. Technically speaking this is not actually a doctype (as it does not identify a corresponding DTD), but we are using this name for sake of simplicity.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['HTML_ForbiddenAttributes']				= array('Forbidden attributes', 'To disallow href attributes in a tags, set this directive to a@href. You can also disallow an attribute globally with attr or *@attr.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['HTML_ForbiddenElements']				= array('Forbidden elements', 'Disallow certain HTML elements. Be aware that only the tags in Contao system settings are allowed at all. You can further limit tags for this configuration.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['HTML_TidyLevel']						= array('HTML cleanliness', 'General level of cleanliness the Tidy module should enforce.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['HTML_Trusted']							= array('Trusted user', 'Indicates whether or not the user input is trusted or not. If the input is trusted, a more expansive set of allowed tags and attributes will be used.');
  
$GLOBALS['TL_LANG']['tl_htmlpurifier']['URI_DisableExternal']					= array('Disable external URLs', 'Disables links to external websites. This is a highly effective anti-spam and anti-pagerank-leech measure, but comes at a hefty price: nolinks or images outside of your domain will be allowed. Non-linkified URIs will still be preserved.');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['URI_DisableExternalResources']			= array('Disable external resources', 'Disables the embedding of external resources, preventing users from embedding things like images from other hosts. This prevents access tracking (good for email viewers), bandwidth leeching, cross-site request forging, goatse.cx posting, and other nasties, but also results in a loss of end-user functionality (they can\'t directly post a pic they posted from Flickr anymore). Use it if you don\'t have a robust user-content moderation team.');



/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_htmlpurifier']['new']				= array('New configuration', 'Create a new configuration for HTMLPurifier');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['edit']				= array('Edit configuration', 'Edit configuration ID %s');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['copy']				= array('Duplicate configuration', 'Duplicate configuration ID %s');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['delete']			= array('Delete configuration', 'Delete configuration ID %s');
$GLOBALS['TL_LANG']['tl_htmlpurifier']['show']				= array('Configuration details', 'Show details of configuration ID %s');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_htmlpurifier']['name_legend']		= 'Name';
$GLOBALS['TL_LANG']['tl_htmlpurifier']['attr_legend']		= 'Attributes';
$GLOBALS['TL_LANG']['tl_htmlpurifier']['autoformat_legend']	= 'Auto format';
$GLOBALS['TL_LANG']['tl_htmlpurifier']['css_legend']		= 'CSS';
$GLOBALS['TL_LANG']['tl_htmlpurifier']['html_legend']		= 'HTML';
$GLOBALS['TL_LANG']['tl_htmlpurifier']['uri_legend']		= 'URI';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_htmlpurifier']['ltr']				= 'Left to right';
$GLOBALS['TL_LANG']['tl_htmlpurifier']['rtl']				= 'Right to left';
$GLOBALS['TL_LANG']['tl_htmlpurifier']['none']				= 'No extra tidying should be done';
$GLOBALS['TL_LANG']['tl_htmlpurifier']['light']				= 'Only fix elements that would be discarded otherwise due to lack of support in doctype';
$GLOBALS['TL_LANG']['tl_htmlpurifier']['medium']			= 'Enforce best practices';
$GLOBALS['TL_LANG']['tl_htmlpurifier']['heavy']				= 'Transform all deprecated elements and attributes to standards compliant equivalents';

