<?php
/**
 * $Id$
 *
 * Application index.
 *
 * @author     Radu Maier <rudisoft@rudisoft.net>
 * @copyright  Copyright (c) 2008 - 2010, RudiSoft.Net
 * @license    http://www.opensource.org/licenses/bsd-license.php
 * @package    RadioApp
 * @subpackage Index
 * @version    $Revision$
 * @since      Version 5
 * @access     public
 * @filesource
 */

/**
 * Security token.
 */
define( '_RUDWEB', TRUE );

/**
 * Load configuration.
 */
require_once './cfg.inc.php';

/**
 * Load application.
 */
require_once $cfg->path->app . 'app.inc.php';

/**
 * Load controller.
 */
require_once $cfg->path->app . 'ctrl.inc.php';

exit;
?>