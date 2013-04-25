<?php

namespace Contao;

/**
 * Class HTMLPurifier_URIScheme_tel
 *
 * allows tel:8883334455 type links
 *
 * @copyright  Nothing interactive 2013  <https://www.nothing.ch/>
 * @author     Patrick Fiaux <nodz@nothing.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */
class HTMLPurifier_URIScheme_tel extends \HTMLPurifier_URIScheme {

    public $default_port = null;
    public $browsable = true;
    public $hierarchical = true;
    public $may_omit_host = true;

    public function doValidate(&$uri, $config, $context) {
        //Optionally we could validate phone numbers here
        return true;
    }

}