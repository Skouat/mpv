<?php
/**
*
* @package testing
* @copyright (c) 2008 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

class mpv
{
	/**
	 * Constant for "fail" error
	 */
	const ERROR_FAIL = 1;

	/**
	 * Constant for notices
	 */
	const ERROR_NOTICE = 2;

	/**
	 * Constant for warnings
	 */
	const ERROR_WARNING = 3;

	/**
	 * Constant for information notices
	 */
	const ERROR_INFO = 4;
	
	public function push_error($type, $message)
	{
		trigger_error($message, E_USER_ERROR);
	}
}
?>
