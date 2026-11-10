<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2026 phpBB Limited <https://www.phpbb.com>
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
	'VIGLINK' => 'VigLink(Sovrn)',
	'VIGLINK_DESCRIPTION' => '제휴 수수료 귀속을 위해 타사 스크립트와 쿠키를 사용하여 외부 판매자 사이트 방문을 추적합니다.',
));
