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
	'ADMIN_SIG_PREVIEW'		=> '서명 미리보기',
	'AT_LEAST_ONE_FOUNDER'	=> '이 창립자를 일반 사용자로 변경할 수 없습니다. 게시판에는 활성화된 창립자가 최소 한 명 있어야 합니다. 이 사용자의 창립자 상태를 변경하려면 먼저 다른 사용자를 창립자로 승격하십시오.',

	'BAN_ALREADY_ENTERED'	=> '이미 차단되어 있습니다. 차단 목록은 변경되지 않았습니다.',
	'BAN_SUCCESSFUL'		=> '차단이 적용되었습니다.',

	'CANNOT_BAN_ANONYMOUS'			=> '익명 계정을 차단할 수 없습니다. 익명 사용자에 대한 권한은 권한 탭에서 설정할 수 있습니다.',
	'CANNOT_BAN_FOUNDER'			=> '창립자 계정은 차단할 수 없습니다.',
	'CANNOT_BAN_YOURSELF'			=> '자신을 차단할 수 없습니다.',
	'CANNOT_DEACTIVATE_BOT'			=> '봇 계정을 비활성화할 수 없습니다. 대신 봇 페이지에서 봇을 비활성화하십시오.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> '창립자 계정은 비활성화할 수 없습니다.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> '자신의 계정은 비활성화할 수 없습니다.',
	'CANNOT_FORCE_REACT_BOT'		=> '봇 계정을 강제로 재활성화할 수 없습니다. 대신 봇 페이지에서 봇을 다시 활성화하십시오.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> '창립자 계정은 강제로 재활성화할 수 없습니다.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> '자신의 계정을 강제로 재활성화할 수 없습니다.',
	'CANNOT_REMOVE_ANONYMOUS'		=> '게스트 사용자 계정은 제거할 수 없습니다.',
	'CANNOT_REMOVE_FOUNDER'			=> '창립자 계정은 제거할 수 없습니다.',
	'CANNOT_REMOVE_YOURSELF'		=> '자신의 사용자 계정을 제거할 수 없습니다.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> '무시 목록에 있는 사용자는 창립자로 승격할 수 없습니다.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> '사용자를 창립자로 승격하기 전에 계정을 활성화해야 합니다. 활성화된 사용자만 승격할 수 있습니다.',
	'CONFIRM_EMAIL_EXPLAIN'			=> '사용자 이메일 주소를 변경하는 경우에만 지정하면 됩니다.',

	'DELETE_POSTS'			=> '게시물 삭제',
	'DELETE_USER'			=> '사용자 삭제',
	'DELETE_USER_EXPLAIN'	=> '사용자 삭제는 최종적이며 복구할 수 없습니다. 이 사용자가 보낸 읽지 않은 비공개 메시지는 삭제되며 수신자가 볼 수 없습니다.',

	'FORCE_REACTIVATION_SUCCESS'	=> '강제 재활성화를 완료했습니다.',
	'FOUNDER'						=> '창립자',
	'FOUNDER_EXPLAIN'				=> '창립자는 모든 관리자 권한을 가지며 창립자가 아닌 사용자는 창립자를 차단하거나 삭제하거나 변경할 수 없습니다.',

	'GROUP_APPROVE'					=> '구성원 승인',
	'GROUP_DEFAULT'					=> '구성원의 기본 그룹으로 설정',
	'GROUP_DELETE'					=> '그룹에서 구성원 제거',
	'GROUP_DEMOTE'					=> '그룹 리더 강등',
	'GROUP_PROMOTE'					=> '그룹 리더로 승격',

	'IP_WHOIS_FOR'			=> '%s의 IP WHOIS',

	'LAST_ACTIVE'			=> '마지막 활동',

	'MOVE_POSTS_EXPLAIN'	=> '이 사용자가 작성한 모든 게시물을 이동할 포럼을 선택하십시오.',

	'NO_SPECIAL_RANK'		=> '특별 등급이 지정되지 않음',
	'NO_WARNINGS'			=> '경고가 없습니다.',
	'NOT_MANAGE_FOUNDER'	=> '창립자 상태인 사용자를 관리하려고 했습니다. 다른 창립자는 창립자만 관리할 수 있습니다.',

	'QUICK_TOOLS'			=> '빠른 도구',

	'REGISTERED'			=> '등록됨',
	'REGISTERED_IP'			=> '등록 IP',
	'RETAIN_POSTS'			=> '게시물 유지',

	'SELECT_FORM'			=> '양식 선택',
	'SELECT_USER'			=> '사용자 선택',

	'USER_ADMIN'					=> '사용자 관리',
	'USER_ADMIN_ACTIVATE'			=> '계정 활성화',
	'USER_ADMIN_ACTIVATED'			=> '사용자가 활성화되었습니다.',
	'USER_ADMIN_AVATAR_REMOVED'		=> '사용자 계정에서 아바타를 제거했습니다.',
	'USER_ADMIN_BAN_EMAIL'			=> '이메일로 차단',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> '사용자 관리에서 이메일 주소를 차단함',
	'USER_ADMIN_BAN_IP'				=> 'IP로 차단',
	'USER_ADMIN_BAN_IP_REASON'		=> '사용자 관리에서 IP를 차단함',
	'USER_ADMIN_BAN_NAME_REASON'	=> '사용자 관리에서 사용자 이름을 차단함',
	'USER_ADMIN_BAN_USER'			=> '사용자 이름으로 차단',
	'USER_ADMIN_DEACTIVATE'			=> '계정 비활성화',
	'USER_ADMIN_DEACTIVED'			=> '사용자가 비활성화되었습니다.',
	'USER_ADMIN_DEL_ATTACH'			=> '모든 첨부 파일 삭제',
	'USER_ADMIN_DEL_AVATAR'			=> '아바타 삭제',
	'USER_ADMIN_DEL_OUTBOX'			=> '개인 메시지 보낼 편지함 비우기',
	'USER_ADMIN_DEL_POSTS'			=> '모든 게시물 삭제',
	'USER_ADMIN_DEL_SIG'			=> '서명 삭제',
	'USER_ADMIN_EXPLAIN'			=> '여기에서 사용자 정보와 일부 특정 옵션을 변경할 수 있습니다.',
	'USER_ADMIN_FORCE'				=> '강제 재활성화',
	'USER_ADMIN_LEAVE_NR'			=> '신규 등록 사용자 그룹에서 제거',
	'USER_ADMIN_MOVE_POSTS'			=> '모든 게시물 이동',
	'USER_ADMIN_SIG_REMOVED'		=> '사용자 계정에서 서명을 제거했습니다.',
	'USER_ATTACHMENTS_REMOVED'		=> '이 사용자가 만든 모든 첨부 파일을 제거했습니다.',
	'USER_AVATAR_NOT_ALLOWED'		=> '아바타 사용이 허용되지 않아 아바타를 표시할 수 없습니다.',
	'USER_AVATAR_UPDATED'			=> '사용자 아바타 정보를 업데이트했습니다.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> '현재 아바타는 유형이 허용되지 않아 표시할 수 없습니다.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> '사용자 정의 프로필 필드',
	'USER_DELETED'					=> '사용자가 삭제되었습니다.',
	'USER_GROUP_ADD'				=> '그룹에 사용자 추가',
	'USER_GROUP_NORMAL'				=> '사용자가 속한 사용자 정의 그룹',
	'USER_GROUP_PENDING'			=> '사용자가 가입 승인 대기 중인 그룹',
	'USER_GROUP_SPECIAL'			=> '사용자가 속한 사전 정의된 그룹',
	'USER_LIFTED_NR'				=> '사용자의 신규 등록 사용자 상태를 제거했습니다.',
	'USER_NO_ATTACHMENTS'			=> '표시할 첨부 파일이 없습니다.',
	'USER_NO_POSTS_TO_DELETE'			=> '사용자는 유지하거나 삭제할 게시물이 없습니다.',
	'USER_OUTBOX_EMPTIED'			=> '사용자의 개인 메시지 보낼 편지함을 비웠습니다.',
	'USER_OUTBOX_EMPTY'				=> '사용자의 개인 메시지 보낼 편지함이 이미 비어 있습니다.',
	'USER_OVERVIEW_UPDATED'			=> '사용자 세부 정보가 업데이트되었습니다.',
	'USER_POSTS_DELETED'			=> '이 사용자가 작성한 모든 게시물을 제거했습니다.',
	'USER_POSTS_MOVED'				=> '사용자의 게시물을 대상 포럼으로 이동했습니다.',
	'USER_PREFS_UPDATED'			=> '사용자 기본 설정이 업데이트되었습니다.',
	'USER_PROFILE'					=> '사용자 프로필',
	'USER_PROFILE_UPDATED'			=> '사용자 프로필이 업데이트되었습니다.',
	'USER_RANK'						=> '사용자 등급',
	'USER_RANK_UPDATED'				=> '사용자 등급을 업데이트했습니다.',
	'USER_SIG_UPDATED'				=> '사용자 서명이 업데이트되었습니다.',
	'USER_WARNING_LOG_DELETED'		=> '정보가 없습니다. 로그 항목이 삭제되었을 수 있습니다.',
	'USER_TOOLS'					=> '기본 도구',
));
