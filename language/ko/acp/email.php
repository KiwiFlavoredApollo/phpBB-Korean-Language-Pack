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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> '여기에서 모든 사용자 또는 <strong>대량 이메일 수신 옵션이 활성화된</strong> 특정 그룹의 모든 사용자에게 메시지를 이메일로 보낼 수 있습니다. 이를 위해 이메일은 제공된 관리 이메일 주소로 발송되며 모든 수신자에게 숨은 참조 사본이 발송됩니다. 기본 설정은 이러한 이메일에 20명의 수신자만 포함하는 것입니다. 수신자가 많을수록 더 많은 이메일이 전송됩니다. 많은 사람들에게 이메일을 보내는 경우 제출 후 인내심을 갖고 페이지를 중간에 멈추지 마십시오. 대량 이메일은 시간이 오래 걸리는 것이 정상이며 스크립트가 완료되면 알려드립니다.',
	'ALL_USERS'						=> '모든 사용자들',

	'COMPOSE'				=> '구성하다',

	'EMAIL_SEND_ERROR'		=> '이메일을 보내는 동안 하나 이상의 오류가 발생했습니다. 자세한 오류 메시지는 %s오류 로그%s을(를) 확인하십시오.',
	'EMAIL_SENT'			=> '이 메시지가 전송되었습니다.',
	'EMAIL_SENT_QUEUE'		=> '이 메시지는 보내기 위해 대기 중입니다.',

	'LOG_SESSION'			=> '중요 로그에 메일 세션 기록',

	'SEND_IMMEDIATELY'		=> '즉시 보내기',
	'SEND_TO_GROUP'			=> '그룹으로 보내기',
	'SEND_TO_USERS'			=> '사용자에게 보내기',
	'SEND_TO_USERS_EXPLAIN'	=> '여기에 이름을 입력하면 위에서 선택한 그룹보다 우선 적용됩니다. 새 줄에 각 사용자 이름을 입력합니다.',

	'MAIL_BANNED'			=> '차단된 사용자 메일',
	'MAIL_BANNED_EXPLAIN'	=> '그룹에 대량 이메일을 보낼 때 차단된 사용자도 이메일을 받을지 여부를 여기에서 선택할 수 있습니다.',
	'MAIL_HIGH_PRIORITY'	=> '높은',
	'MAIL_LOW_PRIORITY'		=> '낮은',
	'MAIL_NORMAL_PRIORITY'	=> '보통',
	'MAIL_PRIORITY'			=> '메일 우선순위',
	'MASS_MESSAGE'			=> '당신의 메시지',
	'MASS_MESSAGE_EXPLAIN'	=> '일반 텍스트만 입력할 수 있습니다. 보내기 전에 모든 마크업이 제거됩니다.',

	'NO_EMAIL_MESSAGE'		=> '메시지를 입력해야 합니다.',
	'NO_EMAIL_SUBJECT'		=> '메시지 제목을 지정해야 합니다.',
));
