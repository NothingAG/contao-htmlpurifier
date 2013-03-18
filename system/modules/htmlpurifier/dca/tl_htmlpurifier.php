<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package News
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
 * Table tl_htmlpurifier
 */
$GLOBALS['TL_DCA']['tl_htmlpurifier'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'					=> 'Table',
		'enableVersioning'				=> true,
        // SQL Primary key
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary',
            )
        )
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'						=> 1,
			'fields'					=> array('name'),
			'flag'						=> 1,
			'panelLayout'				=> 'filter;search,limit',
		),
		'label' => array
		(
			'fields'					=> array('name', 'fallback'),
			'format'					=> '%s <span style="color:#b3b3b3; padding-left:3px;">[%s]</span>',
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'					=> &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'					=> 'act=select',
				'class'					=> 'header_edit_all',
				'attributes'			=> 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'					=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['edit'],
				'href'					=> 'act=edit',
				'icon'					=> 'edit.gif'
			),
			'copy' => array
			(
				'label'					=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['copy'],
				'href'					=> 'act=copy',
				'icon'					=> 'copy.gif'
			),
			'cut' => array
			(
				'label'					=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['cut'],
				'href'					=> 'act=paste&amp;mode=cut',
				'icon'					=> 'cut.gif',
				'attributes'			=> 'onclick="Backend.getScrollOffset();"'
			),
			'delete' => array
			(
				'label'					=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['delete'],
				'href'					=> 'act=delete',
				'icon'					=> 'delete.gif',
				'attributes'			=> 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'					=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['show'],
				'href'					=> 'act=show',
				'icon'					=> 'show.gif'
			),
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'						=> '{name_legend},name,fallback,rte;{attr_legend},Attr_DefaultTextDir,Attr_DefaultImageAlt,Attr_AllowedClasses,Attr_ForbiddenClasses,Attr_EnableID,Attr_IDBlacklist;{autoformat_legend},AutoFormat_Linkify,AutoFormat_RemoveEmpty,AutoFormat_RemoveEmpty_RemoveNbsp,AutoFormat_RemoveEmpty_RemoveNbsp_Exceptions,AutoFormat_RemoveSpansWithoutAttributes;{html_legend},HTML_Doctype,HTML_TidyLevel,HTML_ForbiddenElements,HTML_ForbiddenAttributes,HTML_Trusted;{css_legend},CSS_AllowedProperties,CSS_ForbiddenProperties,CSS_AllowImportant,CSS_AllowTricky,CSS_Proprietary;{uri_legend},URI_DisableExternal,URI_DisableExternalResources,',
	),

	// Fields
	'fields' => array
	(
        'id' => array
        (
            'sql'                       => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array
        (
            'sql'                       => "int(10) unsigned NOT NULL default '0'"
        ),
		'name' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['name'],
			'inputType'					=> 'text',
			'eval'						=> array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                       => "varchar(255) NOT NULL default ''"
		),
		'fallback' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['fallback'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('fallback'=>true, 'tl_class'=>'w50 m12'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),
		'rte' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['rte'],
			'inputType'					=> 'select',
			'options_callback'			=> array('tl_htmlpurifier', 'getRteConfigs'),
			'eval'						=> array('includeBlankOption'=>true, 'tl_class'=>'clr'),
            'sql'                       => "varchar(255) NOT NULL default ''"
        ),

		'Attr_AllowedClasses' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_AllowedClasses'],
			'inputType'					=> 'text',
			'eval'						=> array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                       => "varchar(255) NOT NULL default ''"
        ),
		'Attr_DefaultImageAlt' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_DefaultImageAlt'],
			'inputType'					=> 'text',
			'eval'						=> array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                       => "varchar(255) NOT NULL default ''"
        ),
		'Attr_DefaultTextDir' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_DefaultTextDir'],
			'inputType'					=> 'select',
			'default'					=> 'ltr',
			'options'					=> array('ltr', 'rtl'),
			'reference'					=> &$GLOBALS['TL_LANG']['tl_htmlpurifier'],
			'eval'						=> array('tl_class'=>'w50'),
            'sql'                       => "varchar(3) NOT NULL default ''"
        ),
		'Attr_EnableID' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_EnableID'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50 m12'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),
		'Attr_ForbiddenClasses' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_ForbiddenClasses'],
			'inputType'					=> 'text',
			'eval'						=> array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                       => "varchar(255) NOT NULL default ''"
        ),
		'Attr_IDBlacklist' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['Attr_IDBlacklist'],
			'inputType'					=> 'text',
			'eval'						=> array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                       => "varchar(255) NOT NULL default ''"
        ),

		'AutoFormat_Linkify' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['AutoFormat_Linkify'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'clr'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),
		'AutoFormat_RemoveEmpty' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['AutoFormat_RemoveEmpty'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),
		'AutoFormat_RemoveEmpty_RemoveNbsp' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['AutoFormat_RemoveEmpty_RemoveNbsp'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),
		'AutoFormat_RemoveEmpty_RemoveNbsp_Exceptions' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['AutoFormat_RemoveEmpty_RemoveNbsp_Exceptions'],
			'inputType'					=> 'text',
			'default'					=> 'td,th',
			'eval'						=> array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                       => "varchar(255) NOT NULL default ''"
        ),
		'AutoFormat_RemoveSpansWithoutAttributes' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['AutoFormat_RemoveSpansWithoutAttributes'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50 m12'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),

		'CSS_AllowedProperties' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['CSS_AllowedProperties'],
			'inputType'					=> 'text',
			'eval'						=> array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                       => "varchar(255) NOT NULL default ''"
        ),
		'CSS_ForbiddenProperties' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['CSS_ForbiddenProperties'],
			'inputType'					=> 'text',
			'eval'						=> array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                       => "varchar(255) NOT NULL default ''"
        ),
		'CSS_AllowImportant' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['CSS_AllowImportant'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),
		'CSS_AllowTricky' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['CSS_AllowTricky'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),
		'CSS_Proprietary' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['CSS_Proprietary'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),

		'HTML_Doctype' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['HTML_Doctype'],
			'inputType'					=> 'select',
			'options'					=> array('XHTML 1.0 Strict', 'XHTML 1.0 Transitional', 'XHTML 1.1', 'HTML 4.01 Strict', 'HTML 4.01 Transitional'),
			'eval'						=> array('tl_class'=>'w50'),
            'sql'                       => "varchar(32) NOT NULL default ''"
        ),
		'HTML_ForbiddenAttributes' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['HTML_ForbiddenAttributes'],
			'inputType'					=> 'text',
			'eval'						=> array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                       => "varchar(255) NOT NULL default ''"
        ),
		'HTML_ForbiddenElements' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['HTML_ForbiddenElements'],
			'inputType'					=> 'text',
			'eval'						=> array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                       => "varchar(255) NOT NULL default ''"
        ),
		'HTML_TidyLevel' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['HTML_TidyLevel'],
			'inputType'					=> 'select',
			'default'					=> 'medium',
			'options'					=> array('none', 'light', 'medium', 'heavy'),
			'reference'					=> &$GLOBALS['TL_LANG']['tl_htmlpurifier'],
			'eval'						=> array('tl_class'=>'w50'),
            'sql'                       => "varchar(10) NOT NULL default ''"
        ),
		'HTML_Trusted' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['HTML_Trusted'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),

		'URI_DisableExternal' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['URI_DisableExternal'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),
		'URI_DisableExternalResources' => array
		(
			'label'						=> &$GLOBALS['TL_LANG']['tl_htmlpurifier']['URI_DisableExternalResources'],
			'inputType'					=> 'checkbox',
			'eval'						=> array('tl_class'=>'w50'),
            'sql'                       => "char(1) NOT NULL default ''"
        ),
    )
);


/**
 * Class tl_htmlpurifier
 * Provides some utility functions
 */
class tl_htmlpurifier extends Backend
{
	
	/**
	 * Return all available TinyMCE configurations
	 */
	public function getRteConfigs($dc)
	{
		$arrConfigs = array();
		$arrFiles = scan(TL_ROOT . '/system/config/');
		
		foreach( $arrFiles as $file )
		{
			if (strpos($file, 'tinyMCE') === 0)
			{
				$arrConfigs[] = basename($file, '.php');
			}
		}
		
		return $arrConfigs;
	}
}

