# CONTAO EXTENSION: HTML PURIFIER
This extension implements the [HTMLPurifier](http://htmlpurifier.org/) PHP library, which filters user-submitted HTML framework into contao's backend. Rich text editors content can then be purified on save.

## SETUP AND USAGE
### Prerequisites
 * Contao 3.0.x
 * HTMLPurifier 4.5.x Standalone

### Installation
1. Extract HTMLPurifier Standalone to /vendor/htmlpurifier in the root folder from Contao
1. Copy the _system_ folder into the root folder from Contao
2. Update the database (e.g. with the _Extension manager_)
3. Create a configuration for the HTML Purifier in the backend from Contao (backend module below _System_)
4. Apply the HTML Purifier configuration to your user groups (Users|User groups >Edit >Allowed fields >HTMLPurifier configuration)

### Known Issues
1. HTML Purifier Removes target="_blank" attributes despite the configuration telling it not to.

## VERSION HISTORY
### 2.0.0 (2013-03-14)
#### Updated for contao 3 compatibility
#### Upgraded HTMLPurifier requirement to 4.5.x

### 1.0.0 (2012-07-12)
#### Initial release

## LICENSE
* Author:		Nothing Interactive, Switzerland
* Website: 		[https://www.nothing.ch/](https://www.nothing.ch/)
* Version: 		2.0.0
* Date: 		2013-03-14
* License: 		[GNU Lesser General Public License (LGPL)](http://www.gnu.org/licenses/lgpl.html)