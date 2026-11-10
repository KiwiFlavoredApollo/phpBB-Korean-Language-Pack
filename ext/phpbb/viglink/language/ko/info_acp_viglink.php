<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'		=> 'VigLink 설정',
	'LOG_VIGLINK_CHECK_FAIL'	=> '<strong>phpBB.com을 통해 VigLink 설정을 확인하지 못했습니다</strong><br />» %s',
));
