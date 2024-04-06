<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> '활성 글',
	'ANNOUNCEMENTS'			=> '공지사항',

	'FORUM_PERMISSIONS'		=> '포럼 권한',

	'ICON_ANNOUNCEMENT'		=> '공지사항',
	'ICON_STICKY'			=> '상위고정',

	'LOGIN_NOTIFY_FORUM'	=> '이 포럼에 대한 알림을 받았습니다. 이 포럼을 보려면 로그인하십시오.',

	'MARK_TOPICS_READ'		=> '글을 읽음으로 표시',

	'NEW_POSTS_HOT'			=> '새 게시물 [인기]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> '새 게시물 [잠김]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> '새 게시물이 없습니다 [인기]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> '새 게시물이 없습니다. [잠김]',	// Not used anymore
	'NO_READ_ACCESS'		=> '이 포럼에서 글을 보거나 읽는 데 필요한 권한이 없습니다.',
	'NO_FORUMS_IN_CATEGORY'	=> '이 카테고리에는 포럼이 없습니다.',
	'NO_UNREAD_POSTS_HOT'		=> '읽지 않은 게시물이 없습니다 [인기]',
	'NO_UNREAD_POSTS_LOCKED'	=> '읽지 않은 게시물이 없습니다 [잠김]',

	'POST_FORUM_LOCKED'		=> '포럼이 잠겼습니다',

	'TOPICS_MARKED'			=> '이 포럼의 글은 이제 읽음으로 표시되었습니다.',

	'UNREAD_POSTS_HOT'		=> '읽지 않은 게시물 [인기]',
	'UNREAD_POSTS_LOCKED'	=> '읽지 않은 게시물 [잠김]',

	'VIEW_FORUM'			=> '포럼 보기',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d 글',
		2	=> '%d 글',
	),
));
