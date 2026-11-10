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
	'ABOUT_USER'			=> '프로필',
	'ACTIVE_IN_FORUM'		=> '가장 활발한 포럼',
	'ACTIVE_IN_TOPIC'		=> '가장 활발한 글',
	'ADD_FOE'				=> '차단 목록에 추가',
	'ADD_FRIEND'			=> '친구 추가',
	'AFTER'					=> '이후',

	'ALL'					=> '모두',

	'BEFORE'				=> '이전',

	'CC_SENDER'				=> '이 이메일의 사본을 나에게도 보내기',
	'CONTACT_ADMIN'			=> '게시판 관리자에게 문의',

	'DEST_LANG'				=> '언어',
	'DEST_LANG_EXPLAIN'		=> '사용 가능한 경우 이 메시지의 수신자에게 적절한 언어를 선택하십시오.',

	'EDIT_PROFILE'			=> '프로필 편집',

	'EMAIL_BODY_EXPLAIN'	=> '이 메시지는 일반 텍스트로 전송되므로 HTML이나 BBCode를 포함하지 마십시오. 회신 주소는 본인의 이메일 주소로 설정됩니다.',
	'EMAIL_DISABLED'		=> '죄송합니다. 모든 이메일 관련 기능이 비활성화되었습니다.',
	'EMAIL_SENT'			=> '이메일이 전송되었습니다.',
	'EMAIL_TOPIC_EXPLAIN'	=> '이 메시지는 일반 텍스트로 전송되므로 HTML이나 BBCode를 포함하지 마십시오. 글 정보는 이미 메시지에 포함되어 있습니다. 회신 주소는 본인의 이메일 주소로 설정됩니다.',
	'EMPTY_ADDRESS_EMAIL'	=> '받는 사람의 유효한 이메일 주소를 제공해야 합니다.',
	'EMPTY_MESSAGE_EMAIL'	=> '이메일로 보낼 메시지를 입력해야 합니다.',
	'EMPTY_MESSAGE_IM'		=> '보낼 메시지를 입력해야 합니다.',
	'EMPTY_NAME_EMAIL'		=> '받는 사람의 실명을 입력해야 합니다.',
	'EMPTY_SENDER_EMAIL'	=> '유효한 이메일 주소를 입력해야 합니다.',
	'EMPTY_SENDER_NAME'		=> '이름을 입력해야 합니다.',
	'EMPTY_SUBJECT_EMAIL'	=> '이메일의 제목을 지정해야 합니다.',
	'EQUAL_TO'				=> '동일',

	'FIND_USERNAME_EXPLAIN'	=> '이 양식에서 특정 회원을 검색할 수 있습니다. 모든 필드를 입력할 필요는 없습니다. 일부만 일치하는 데이터를 찾으려면 *를 와일드카드로 사용하십시오. 날짜는 <kbd>YYYY-MM-DD</kbd> 형식으로 입력하십시오. 예: <samp>2004-02-29</samp>. 확인란을 사용해 하나 이상의 사용자 이름을 표시한 다음(양식에 따라 여러 사용자 이름을 선택할 수 있습니다) “표시한 항목 선택” 버튼을 눌러 이전 양식으로 돌아가십시오.',
	'FLOOD_EMAIL_LIMIT'		=> '지금은 다른 이메일을 보낼 수 없습니다. 나중에 다시 시도해 주십시오.',

	'GROUP_LEADER'			=> '그룹 리더',

	'HIDE_MEMBER_SEARCH'	=> '회원 검색 숨기기',

	'IM_ADD_CONTACT'		=> '연락처에 추가',
	'IM_DOWNLOAD_APP'		=> '애플리케이션 다운로드',
	'IM_JABBER'				=> '사용자가 원치 않는 인스턴트 메시지를 받지 않도록 선택했을 수 있습니다.',
	'IM_JABBER_SUBJECT'		=> '자동으로 보낸 메시지입니다. 회신하지 마십시오! %2$s의 사용자 %1$s님이 보낸 메시지입니다.',
	'IM_MESSAGE'			=> '보낼 메시지',
	'IM_NAME'				=> '이름',
	'IM_NO_DATA'			=> '이 사용자에게 적합한 연락처 정보가 없습니다.',
	'IM_NO_JABBER'			=> '죄송합니다. 이 게시판에서는 Jabber 사용자에게 직접 메시지를 보내는 기능을 지원하지 않습니다. 위 수신자에게 연락하려면 시스템에 Jabber 클라이언트를 설치해야 합니다.',
	'IM_RECIPIENT'			=> '받는 사람',
	'IM_SEND'				=> '메시지 보내기',
	'IM_SEND_MESSAGE'		=> '메시지 보내기',
	'IM_SENT_JABBER'		=> '%1$s님에게 메시지를 전송했습니다.',
	'IM_USER'				=> '인스턴트 메시지 보내기',

	'LAST_ACTIVE'				=> '마지막 활동',
	'LESS_THAN'					=> '미만',
	'LIST_USERS'				=> array(
		1 => '사용자 %d명',
	),
	'LOGIN_EXPLAIN_TEAM'		=> '운영진 목록을 보려면 게시판에 가입하고 로그인해야 합니다.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> '회원 목록에 접근하려면 게시판에 가입하고 로그인해야 합니다.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> '사용자를 검색하려면 게시판에 가입하고 로그인해야 합니다.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> '프로필을 보려면 게시판에 가입하고 로그인해야 합니다.',

	'MANAGE_GROUP'			=> '그룹 관리',
	'MORE_THAN'				=> '초과',

	'NO_CONTACT_FORM'		=> '게시판 관리자 문의 양식이 비활성화되었습니다.',
	'NO_CONTACT_PAGE'		=> '게시판 관리자 연락처 페이지가 비활성화되었습니다.',
	'NO_EMAIL'				=> '이 사용자에게 이메일을 보낼 권한이 없습니다.',
	'NO_VIEW_USERS'			=> '회원 목록 또는 프로필을 볼 수 있는 권한이 없습니다.',

	'ORDER'					=> '정렬 순서',
	'OTHER'					=> '기타',

	'POST_IP'				=> '게시한 IP/도메인',

	'REAL_NAME'				=> '받는 사람 이름',
	'RECIPIENT'				=> '받는 사람',
	'REMOVE_FOE'			=> '차단 목록에서 제거',
	'REMOVE_FRIEND'			=> '친구 제거',

	'SELECT_MARKED'			=> '표시한 항목 선택',
	'SELECT_SORT_METHOD'	=> '정렬 방법 선택',
	'SENDER_EMAIL_ADDRESS'	=> '본인의 이메일 주소',
	'SENDER_NAME'			=> '본인의 이름',
	'SEND_ICQ_MESSAGE'		=> 'ICQ 메시지 보내기',
	'SEND_IM'				=> '인스턴트 메시지',
	'SEND_JABBER_MESSAGE'	=> 'Jabber 메시지 보내기',
	'SEND_MESSAGE'			=> '메시지',
	'SEND_YIM_MESSAGE'		=> 'YIM 메시지 보내기',
	'SORT_EMAIL'			=> '이메일',
	'SORT_LAST_ACTIVE'		=> '마지막 활동',
	'SORT_POST_COUNT'		=> '게시물 수',

	'USERNAME_BEGINS_WITH'	=> '사용자 이름 시작 문자',
	'USER_ADMIN'			=> '사용자 관리',
	'USER_BAN'				=> '차단',
	'USER_FORUM'			=> '사용자 통계',
	'USER_LAST_REMINDED'	=> array(
		0 => '현재 전송된 알림이 없습니다.',
		1 => '알림 %1$d회 전송<br />» %2$s',
	),
	'USER_ONLINE'			=> '온라인',
	'USER_PRESENCE'			=> '게시판 활동',
	'USERS_PER_PAGE'		=> '페이지당 사용자',

	'VIEWING_PROFILE'		=> '프로필 보기 - %s',
	'VIEW_FACEBOOK_PROFILE'	=> '페이스북 프로필 보기',
	'VIEW_SKYPE_PROFILE'	=> '스카이프 프로필 보기',
	'VIEW_TWITTER_PROFILE'	=> 'X 프로필 보기',
	'VIEW_YOUTUBE_PROFILE'	=> '유튜브 프로필 보기',
));
