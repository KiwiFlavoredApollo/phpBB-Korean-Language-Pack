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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> '봇 관리',
	'BOTS_EXPLAIN'		=> '“봇”, “스파이더” 또는 “크롤러”는 주로 검색 엔진이 데이터베이스를 갱신하는 데 사용하는 자동화된 에이전트입니다. 세션을 제대로 사용하는 경우가 드물어 방문자 수를 왜곡하고 서버 부하를 늘리며 사이트를 올바르게 색인하지 못할 수 있습니다. 여기에서 이러한 문제를 방지하기 위한 특수 사용자 유형을 정의할 수 있습니다.',
	'BOT_ACTIVATE'		=> '활성화',
	'BOT_ACTIVE'		=> '봇 활성화',
	'BOT_ADD'			=> '봇 추가',
	'BOT_ADDED'			=> '새 봇이 추가되었습니다.',
	'BOT_AGENT'			=> '에이전트 일치',
	'BOT_AGENT_EXPLAIN'	=> '봇의 브라우저 에이전트와 일치시킬 문자열입니다. 부분 일치도 허용됩니다.',
	'BOT_DEACTIVATE'	=> '비활성화',
	'BOT_DELETED'		=> '봇을 성공적으로 삭제했습니다.',
	'BOT_EDIT'			=> '봇 수정',
	'BOT_EDIT_EXPLAIN'	=> '여기에서 봇 항목을 추가하거나 수정할 수 있습니다. 일치시킬 에이전트 문자열 및/또는 하나 이상의 IP 주소(또는 주소 범위)를 정의할 수 있습니다. 에이전트 문자열이나 주소를 지정할 때는 주의하십시오. 봇이 게시판을 탐색할 때 사용할 스타일과 언어도 지정할 수 있습니다. 봇에 단순한 스타일을 사용하면 대역폭을 줄일 수 있습니다. 특수 봇 사용자 그룹에 적절한 권한을 설정해야 합니다.',
	'BOT_GROUP'			=> '봇 그룹',
	'BOT_GROUP_EXPLAIN'	=> '이 봇이 속할 그룹을 선택하십시오.',
	'BOT_LANG'			=> '봇 언어',
	'BOT_LANG_EXPLAIN'	=> '탐색할 때 봇에 표시되는 언어입니다.',
	'BOT_LAST_VISIT'	=> '마지막 방문',
	'BOT_IP'			=> '봇 IP 주소',
	'BOT_IP_EXPLAIN'	=> '부분 일치가 허용되며 주소는 쉼표로 구분됩니다.',
	'BOT_NAME'			=> '봇 이름',
	'BOT_NAME_EXPLAIN'	=> '관리자가 봇을 구분하기 위한 용도로만 사용됩니다.',
	'BOT_NAME_TAKEN'	=> '이 이름은 게시판에서 이미 사용 중이므로 봇에 사용할 수 없습니다.',
	'BOT_NEVER'			=> '방문한 적 없음',
	'BOT_STYLE'			=> '봇 스타일',
	'BOT_STYLE_EXPLAIN'	=> '봇이 게시판을 탐색할 때 사용할 스타일입니다.',
	'BOT_UPDATED'		=> '기존 봇이 업데이트되었습니다.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> '제공한 봇 에이전트는 현재 사용 중인 에이전트와 유사합니다. 이 봇의 에이전트를 조정하십시오.',
	'ERR_BOT_NO_IP'				=> '제공한 IP 주소가 잘못되었거나 호스트 이름을 확인할 수 없습니다.',
	'ERR_BOT_NO_MATCHES'		=> '이 봇을 식별하려면 에이전트 또는 IP를 하나 이상 입력해야 합니다.',

	'ERR_BOT_NO_NAME'			=> '봇 이름을 입력해야 합니다.',
	'NO_BOT'		=> '지정된 ID를 가진 봇을 찾을 수 없습니다.',
	'NO_BOT_GROUP'	=> '특수 봇 그룹을 찾을 수 없습니다.',
));
