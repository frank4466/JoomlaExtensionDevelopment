<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_categories
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Category table
 *
 * @package     Joomla.Administrator
 * @subpackage  com_categories
 * @since       1.6
 */
class RootflickTableSubmit extends JTable
{	
	/**
	 * Constructor
	 *
	 * @since	1.5
	 */
	public function __construct(&$db)
	{	
		parent::__construct('#__rootflick_submissions', 'id', $db);
	}
}