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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>권한은 매우 세밀하게 설정할 수 있으며 다음 네 가지 주요 영역으로 구분됩니다.</p>

		<h2>전역 권한</h2>
		<p>게시판 전체의 접근 권한을 제어합니다. 사용자 권한, 그룹 권한, 관리자 권한 및 전역 운영자 권한으로 나뉩니다.</p>

		<h2>포럼 기반 권한</h2>
		<p>각 포럼의 접근 권한을 제어합니다. 포럼 권한, 포럼 운영자 권한, 사용자 포럼 권한 및 그룹 포럼 권한으로 나뉩니다.</p>

		<h2>권한 역할</h2>
		<p>권한 유형별로 여러 권한 집합을 만들어 역할로 할당할 수 있습니다. 기본 역할은 규모와 관계없이 대부분의 게시판 관리에 적합하지만, 네 영역 각각에서 필요에 따라 역할을 추가하거나 수정하거나 삭제할 수 있습니다.</p>

		<h2>권한 마스크</h2>
		<p>사용자, 운영자(포럼 및 전역), 관리자 또는 포럼에 적용되는 최종 권한을 확인할 수 있습니다.</p>

		<br />

		<p>phpBB3 게시판의 권한 설정 및 관리에 관한 자세한 내용은 <a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/permissions/">빠른 시작 안내서의 권한 설정</a>을 참조하십시오.</p>
	',

	'ACL_NEVER'				=> '금지',
	'ACL_SET'				=> '권한 설정',
	'ACL_SET_EXPLAIN'		=> '권한은 단순한 <strong>예</strong>/<strong>아니요</strong> 체계를 기반으로 합니다. 사용자 또는 사용자 그룹의 옵션을 <strong>금지</strong>로 설정하면 다른 곳에서 할당된 모든 값보다 우선합니다. 이 사용자 또는 그룹에 옵션 값을 직접 할당하지 않으려면 <strong>아니요</strong>를 선택하십시오. 이 옵션에 다른 곳에서 할당된 값이 있으면 그 값이 적용되며, 없으면 <strong>금지</strong>로 간주됩니다. 표시된 모든 개체(앞에 확인란이 있는 항목)에는 여기서 정의한 권한 집합이 복사됩니다. 창립자 계정의 관리자 권한은 항상 <strong>예</strong>이므로 여기서 관리자 권한을 설정해도 영향을 주지 않습니다.',
	'ACL_SETTING'			=> '설정',

	'ACL_TYPE_A_'			=> '관리자 권한',
	'ACL_TYPE_F_'			=> '포럼 권한',
	'ACL_TYPE_M_'			=> '운영 권한',
	'ACL_TYPE_U_'			=> '사용자 권한',

	'ACL_TYPE_GLOBAL_A_'	=> '관리자 권한',
	'ACL_TYPE_GLOBAL_U_'	=> '사용자 권한',
	'ACL_TYPE_GLOBAL_M_'	=> '전역 운영자 권한',
	'ACL_TYPE_LOCAL_M_'		=> '포럼 운영자 권한',
	'ACL_TYPE_LOCAL_F_'		=> '포럼 권한',

	'ACL_NO'				=> '아니요',
	'ACL_VIEW'				=> '보기 권한',
	'ACL_VIEW_EXPLAIN'		=> '여기에서 사용자/그룹이 가지고 있는 유효 권한을 볼 수 있습니다. 빨간색 사각형은 사용자/그룹에 권한이 없음을 나타내고 녹색 사각형은 사용자/그룹에 권한이 있음을 나타냅니다.',
	'ACL_YES'				=> '예',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> '여기에서 사용자 또는 그룹에 관리자 권한을 할당할 수 있습니다. 관리자 권한이 있는 모든 사용자는 관리자 제어판을 볼 수 있습니다.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> '여기에서 사용자와 그룹을 포럼 운영자로 지정할 수 있습니다. 사용자에게 포럼 접근 권한을 할당하거나 전역 운영 권한 또는 관리자 권한을 지정하려면 해당 페이지를 사용하십시오.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> '여기에서 어떤 사용자와 그룹이 어떤 포럼에 접근할 수 있는지 변경할 수 있습니다. 운영자를 지정하거나 관리자를 정의하려면 해당 페이지를 사용하십시오.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> '여기에서 한 포럼에서 하나 이상의 다른 포럼으로 포럼 권한을 복사할 수 있습니다.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> '여기에서 사용자 또는 그룹에 전역 운영자 권한을 할당할 수 있습니다. 전역 운영자는 게시판의 모든 포럼에 접근할 수 있다는 점을 제외하면 일반 포럼 운영자와 같습니다.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> '여기에서 그룹에 포럼 권한을 할당할 수 있습니다.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> '여기에서 그룹에 사용자 권한, 전역 운영자 권한 및 관리자 권한과 같은 전역 권한을 할당할 수 있습니다. 사용자 권한에는 아바타 사용과 개인 메시지 전송 등이 포함됩니다. 전역 운영자 권한에는 게시물 승인, 주제 관리, 차단 관리 등이 포함되며, 관리자 권한에는 권한 변경, 사용자 지정 BBCode 정의, 포럼 관리 등이 포함됩니다. 개별 사용자 권한은 예외적인 경우에만 변경하고, 일반적으로는 사용자를 그룹에 넣어 그룹 권한을 할당하는 것이 좋습니다.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> '여기에서 관리자 권한 역할을 관리할 수 있습니다. 역할은 적용되는 권한 집합이므로 역할을 변경하면 이 역할이 할당된 항목의 권한도 변경됩니다.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> '여기에서 포럼 권한 역할을 관리할 수 있습니다. 역할은 적용되는 권한 집합이므로 역할을 변경하면 이 역할이 할당된 항목의 권한도 변경됩니다.',
	'ACP_MOD_ROLES_EXPLAIN'						=> '여기에서 운영 권한 역할을 관리할 수 있습니다. 역할은 적용되는 권한 집합이므로 역할을 변경하면 이 역할이 할당된 항목의 권한도 변경됩니다.',
	'ACP_USER_ROLES_EXPLAIN'					=> '여기에서 사용자 권한 역할을 관리할 수 있습니다. 역할은 적용되는 권한 집합이므로 역할을 변경하면 이 역할이 할당된 항목의 권한도 변경됩니다.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> '여기에서 사용자에게 포럼 권한을 할당할 수 있습니다.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> '여기에서 사용자에게 사용자 권한, 전역 운영자 권한 및 관리자 권한과 같은 전역 권한을 할당할 수 있습니다. 사용자 권한에는 아바타 사용과 개인 메시지 전송 등이 포함됩니다. 전역 운영자 권한에는 게시물 승인, 주제 관리, 차단 관리 등이 포함되며, 관리자 권한에는 권한 변경, 사용자 지정 BBCode 정의, 포럼 관리 등이 포함됩니다. 많은 사용자의 설정을 변경할 때는 그룹 권한을 사용하는 것이 좋습니다. 개별 사용자 권한은 예외적인 경우에만 변경하고, 일반적으로는 사용자를 그룹에 넣어 그룹 권한을 할당하는 것이 좋습니다.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> '여기에서 선택한 사용자/그룹에 실제로 적용되는 관리자 권한을 볼 수 있습니다.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> '여기에서 선택한 사용자/그룹에 할당된 전역 운영 권한을 볼 수 있습니다.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> '여기에서 선택한 사용자/그룹 및 포럼에 할당된 포럼 권한을 볼 수 있습니다.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> '여기에서 선택한 사용자/그룹 및 포럼에 할당된 포럼 운영자 권한을 볼 수 있습니다.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> '여기에서 선택한 사용자/그룹에 할당된 유효 사용자 권한을 볼 수 있습니다.',

	'ADD_GROUPS'				=> '그룹 추가',
	'ADD_PERMISSIONS'			=> '권한 추가',
	'ADD_USERS'					=> '사용자 추가',
	'ADVANCED_PERMISSIONS'		=> '고급 권한',
	'ALL_GROUPS'				=> '모든 그룹 선택',
	'ALL_NEVER'					=> '모두 <strong>금지</strong>',
	'ALL_NO'					=> '모두 <strong>아니요</strong>',
	'ALL_USERS'					=> '모든 사용자 선택',
	'ALL_YES'					=> '모두 <strong>예</strong>',
	'APPLY_ALL_PERMISSIONS'		=> '모든 권한 적용',
	'APPLY_PERMISSIONS'			=> '권한 적용',
	'APPLY_PERMISSIONS_EXPLAIN'	=> '이 항목에 대해 정의된 권한 및 역할은 이 항목과 선택된 모든 항목에만 적용됩니다.',
	'AUTH_UPDATED'				=> '권한이 업데이트되었습니다.',

	'COPY_PERMISSIONS_CONFIRM'				=> '이 작업을 수행하시겠습니까? 이렇게 하면 선택한 대상에 대한 기존 권한을 덮어씁니다.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> '권한을 복사할 원본 포럼입니다.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> '복사된 권한을 적용할 대상 포럼입니다.',
	'COPY_PERMISSIONS_FROM'					=> '권한을 복사할 원본',
	'COPY_PERMISSIONS_TO'					=> '권한을 적용할 대상',

	'CREATE_ROLE'				=> '역할 생성',
	'CREATE_ROLE_FROM'			=> '다음에서 설정 사용…',
	'CUSTOM'					=> '사용자 지정…',

	'DEFAULT'					=> '기본',
	'DELETE_ROLE'				=> '역할 삭제',
	'DELETE_ROLE_CONFIRM'		=> '이 역할을 제거하시겠습니까? 이 역할이 할당된 항목은 권한 설정을 잃지 <strong>않습니다</strong>.',
	'DISPLAY_ROLE_ITEMS'		=> '이 역할을 사용하는 항목 보기',

	'EDIT_PERMISSIONS'			=> '권한 수정',
	'EDIT_ROLE'					=> '역할 수정',

	'GROUPS_NOT_ASSIGNED'		=> '이 역할에 할당된 그룹이 없습니다.',

	'LOOK_UP_GROUP'				=> '사용자 그룹 조회',
	'LOOK_UP_USER'				=> '사용자 조회',

	'MANAGE_GROUPS'		=> '그룹 관리',
	'MANAGE_USERS'		=> '사용자 관리',

	'NO_AUTH_SETTING_FOUND'		=> '권한 설정이 정의되지 않았습니다.',
	'NO_ROLE_ASSIGNED'			=> '할당된 역할 없음…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> '이 역할을 선택해도 오른쪽의 권한은 변경되지 않습니다. 모든 권한을 해제하거나 제거하려면 “모두 <strong>아니요</strong>” 링크를 사용하십시오.',
	'NO_ROLE_AVAILABLE'			=> '사용 가능한 역할 없음',
	'NO_ROLE_NAME_SPECIFIED'	=> '역할 이름을 지정하십시오.',
	'NO_ROLE_SELECTED'			=> '역할을 찾을 수 없습니다.',
	'NO_USER_GROUP_SELECTED'	=> '사용자 또는 그룹을 선택하지 않았습니다.',

	'ONLY_FORUM_DEFINED'	=> '선택 항목에서 포럼만 정의했습니다. 또한 사용자 또는 그룹을 하나 이상 선택하십시오.',

	'PERMISSION_APPLIED_TO_ALL'		=> '권한 및 역할은 선택한 모든 개체에도 적용됩니다.',
	'PLUS_SUBFORUMS'				=> '+하위 포럼',

	'REMOVE_PERMISSIONS'			=> '권한 제거',
	'REMOVE_ROLE'					=> '역할 제거',
	'RESULTING_PERMISSION'			=> '결과 권한',
	'ROLE'							=> '역할',
	'ROLE_ADD_SUCCESS'				=> '역할이 추가되었습니다.',
	'ROLE_ASSIGNED_TO'				=> '%s에 할당된 사용자/그룹',
	'ROLE_DELETED'					=> '역할이 제거되었습니다.',
	'ROLE_DESCRIPTION'				=> '역할 설명',

	'ROLE_ADMIN_FORUM'			=> '포럼 관리자',
	'ROLE_ADMIN_FULL'			=> '전체 관리자',
	'ROLE_ADMIN_STANDARD'		=> '표준 관리자',
	'ROLE_ADMIN_USERGROUP'		=> '사용자 및 그룹 관리자',
	'ROLE_FORUM_BOT'			=> '봇 접근',
	'ROLE_FORUM_FULL'			=> '전체 접근',
	'ROLE_FORUM_LIMITED'		=> '제한된 접근',
	'ROLE_FORUM_LIMITED_POLLS'	=> '제한된 접근 + 투표',
	'ROLE_FORUM_NOACCESS'		=> '접근 금지',
	'ROLE_FORUM_ONQUEUE'		=> '운영 승인 대기',
	'ROLE_FORUM_POLLS'			=> '표준 접근 + 설문 조사',
	'ROLE_FORUM_READONLY'		=> '읽기 전용 접근',
	'ROLE_FORUM_STANDARD'		=> '표준 접근',
	'ROLE_FORUM_NEW_MEMBER'		=> '신규 등록 사용자 접근',
	'ROLE_MOD_FULL'				=> '전체 운영자',
	'ROLE_MOD_QUEUE'			=> '대기열 운영자',
	'ROLE_MOD_SIMPLE'			=> '단순 운영자',
	'ROLE_MOD_STANDARD'			=> '표준 운영자',
	'ROLE_USER_FULL'			=> '모든 기능',
	'ROLE_USER_LIMITED'			=> '제한된 기능',
	'ROLE_USER_NOAVATAR'		=> '아바타 없음',
	'ROLE_USER_NOPM'			=> '비공개 메시지 없음',
	'ROLE_USER_STANDARD'		=> '표준 기능',
	'ROLE_USER_NEW_MEMBER'		=> '신규 등록 사용자 기능',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> '포럼 관리 및 포럼 권한 설정에 접근할 수 있습니다.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> '이 게시판의 모든 관리 기능에 접근할 수 있습니다.<br />권장하지 않습니다.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> '대부분의 관리 기능에 접근할 수 있지만 서버 또는 시스템 관련 도구를 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> '그룹과 사용자를 관리할 수 있습니다. 권한과 설정을 변경하고, 차단과 등급을 관리할 수 있습니다.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> '이 역할은 봇 및 검색 스파이더에 권장됩니다.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> '공지와 고정 주제 게시를 포함한 모든 포럼 기능을 사용할 수 있으며 연속 게시 제한도 무시할 수 있습니다.<br />일반 사용자에게는 권장하지 않습니다.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> '일부 포럼 기능을 사용할 수 있지만 파일을 첨부하거나 게시물 아이콘을 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> '제한된 접근과 같지만 설문 조사도 만들 수 있습니다.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> '포럼을 보거나 접근할 수 없습니다.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> '첨부 파일을 포함한 대부분의 포럼 기능을 사용할 수 있지만 게시물과 주제는 운영자의 승인을 받아야 합니다.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> '표준 접근과 같지만 설문 조사도 만들 수 있습니다.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> '포럼을 읽을 수 있지만 새 주제를 만들거나 게시물에 답글을 달 수 없습니다.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> '첨부 파일 사용과 자신의 주제 삭제를 포함한 대부분의 포럼 기능을 사용할 수 있지만, 자신의 주제를 잠그거나 설문 조사를 만들 수는 없습니다.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> '특별한 신규 등록 사용자 그룹의 구성원을 위한 역할로, 신규 사용자의 일부 기능을 제한하는 <strong>금지</strong> 권한이 포함되어 있습니다.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> '차단을 포함한 모든 중재 기능을 사용할 수 있습니다.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> '운영 대기열에서 게시물을 승인하고 편집할 수 있지만 다른 기능은 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> '기본 주제 작업만 사용할 수 있습니다. 경고를 보내거나 운영 대기열을 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> '대부분의 중재 도구를 사용할 수 있지만 사용자를 차단하거나 게시물 작성자를 변경할 수 없습니다.',
	'ROLE_DESCRIPTION_USER_FULL'			=> '사용자 이름 변경이나 연속 게시 제한 무시를 포함해 사용자가 이용할 수 있는 모든 포럼 기능을 사용할 수 있습니다.<br />권장하지 않습니다.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> '일부 사용자 기능에 접근할 수 있습니다. 첨부 파일, 이메일 및 인스턴트 메시지는 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> '제한된 기능 세트가 있으며 아바타 기능을 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> '제한된 기능 세트가 있으며 개인 메시지를 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> '모든 사용자 기능은 아니지만 대부분의 사용자 기능에 접근할 수 있습니다. 예를 들어 사용자 이름을 변경하거나 플러드 제한을 무시할 수 없습니다.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> '특별한 신규 등록 사용자 그룹의 구성원을 위한 역할로, 신규 사용자의 일부 기능을 제한하는 <strong>금지</strong> 권한이 포함되어 있습니다.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> '역할이 하는 일이나 역할이 의미하는 바에 대한 간단한 설명을 입력할 수 있습니다. 여기에 입력한 텍스트는 권한 화면에도 표시됩니다.',
	'ROLE_DESCRIPTION_LONG'			=> '역할 설명이 너무 깁니다. 4000자로 제한하십시오.',
	'ROLE_DETAILS'					=> '역할 세부 정보',
	'ROLE_EDIT_SUCCESS'				=> '역할이 수정되었습니다.',
	'ROLE_NAME'						=> '역할 이름',
	'ROLE_NAME_ALREADY_EXIST'		=> '지정된 권한 유형에 대해 <strong>%s</strong>이라는 역할이 이미 존재합니다.',
	'ROLE_NOT_ASSIGNED'				=> '역할이 아직 할당되지 않았습니다.',

	'SELECTED_FORUM_NOT_EXIST'		=> '선택한 포럼이 존재하지 않습니다.',
	'SELECTED_GROUP_NOT_EXIST'		=> '선택한 그룹이 존재하지 않습니다.',
	'SELECTED_USER_NOT_EXIST'		=> '선택한 사용자가 존재하지 않습니다.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> '여기에서 선택한 포럼은 모든 하위 포럼을 선택 항목에 포함합니다.',
	'SELECT_ROLE'					=> '역할 선택…',
	'SELECT_TYPE'					=> '유형 선택',
	'SET_PERMISSIONS'				=> '권한 설정',
	'SET_ROLE_PERMISSIONS'			=> '역할 권한 설정',
	'SET_USERS_PERMISSIONS'			=> '사용자 권한 설정',
	'SET_USERS_FORUM_PERMISSIONS'	=> '사용자 포럼 권한 설정',

	'TRACE_DEFAULT'					=> '기본적으로 모든 권한은 <strong>아니요</strong>(미설정)입니다. 따라서 다른 설정으로 이 권한을 덮어쓸 수 있습니다.',
	'TRACE_FOR'						=> '추적 대상',
	'TRACE_GLOBAL_SETTING'			=> '%s(전역)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> '이 그룹의 권한과 전체 결과가 모두 <strong>금지</strong>이므로 이전 결과가 유지됩니다.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> '이 포럼에 대한 그룹 권한과 전체 결과가 모두 <strong>금지</strong>이므로 이전 결과가 유지됩니다.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> '이 그룹의 권한이 <strong>금지</strong>이며 전체 값이 아직 설정되지 않았으므로(<strong>아니요</strong>) 새로운 전체 값이 됩니다.',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> '이 포럼에 대한 그룹 권한이 <strong>금지</strong>이며 전체 값이 아직 설정되지 않았으므로(<strong>아니요</strong>) 새로운 전체 값이 됩니다.',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> '이 그룹의 <strong>금지</strong> 권한이 사용자의 전체 <strong>예</strong> 값을 <strong>금지</strong>로 덮어씁니다.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> '이 포럼에 대한 그룹의 <strong>금지</strong> 권한이 사용자의 전체 <strong>예</strong> 값을 <strong>금지</strong>로 덮어씁니다.',
	'TRACE_GROUP_NO'				=> '이 그룹의 권한이 <strong>아니요</strong>이므로 이전 전체 값이 유지됩니다.',
	'TRACE_GROUP_NO_LOCAL'			=> '이 포럼에서 이 그룹의 권한이 <strong>아니요</strong>이므로 이전 전체 값이 유지됩니다.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> '이 그룹의 권한은 <strong>예</strong>이지만 전체 <strong>금지</strong> 값은 덮어쓸 수 없습니다.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> '이 포럼에 대한 그룹 권한은 <strong>예</strong>이지만 전체 <strong>금지</strong> 값은 덮어쓸 수 없습니다.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> '이 그룹의 권한이 <strong>예</strong>이며 전체 값이 아직 설정되지 않았으므로(<strong>아니요</strong>) 새로운 전체 값이 됩니다.',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> '이 포럼에 대한 그룹 권한이 <strong>예</strong>이며 전체 값이 아직 설정되지 않았으므로(<strong>아니요</strong>) 새로운 전체 값이 됩니다.',
	'TRACE_GROUP_YES_TOTAL_YES'		=> '이 그룹의 권한은 <strong>예</strong>이고 전체 권한도 이미 <strong>예</strong>이므로 전체 결과가 유지됩니다.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> '이 포럼에 대한 그룹 권한은 <strong>예</strong>이고 전체 권한도 이미 <strong>예</strong>이므로 전체 결과가 유지됩니다.',
	'TRACE_PERMISSION'				=> '권한 추적 - %s',
	'TRACE_RESULT'					=> '추적 결과',
	'TRACE_SETTING'					=> '추적 설정',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> '포럼과 무관한 사용자 권한이 <strong>예</strong>로 평가되고 전체 권한도 이미 <strong>예</strong>이므로 전체 결과가 유지됩니다. %s전역 권한 추적%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> '포럼과 무관한 사용자 권한이 <strong>예</strong>로 평가되어 현재 개별 포럼 결과인 <strong>금지</strong>를 덮어씁니다. %s전역 권한 추적%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> '포럼과 무관한 사용자 권한이 <strong>금지</strong>로 평가되지만 개별 포럼 권한에는 영향을 주지 않습니다. %s전역 권한 추적%s',

	'TRACE_USER_FOUNDER'					=> '이 사용자는 창립자이므로 관리자 권한은 항상 <strong>예</strong>로 설정됩니다.',
	'TRACE_USER_KEPT'						=> '사용자 권한이 <strong>아니요</strong>이므로 이전 전체 값이 유지됩니다.',
	'TRACE_USER_KEPT_LOCAL'					=> '이 포럼에 대한 사용자 권한이 <strong>아니요</strong>이므로 이전 전체 값이 유지됩니다.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> '사용자 권한은 <strong>금지</strong>이고 전체 값도 <strong>금지</strong>이므로 변경되지 않습니다.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> '이 포럼에 대한 사용자 권한은 <strong>금지</strong>이고 전체 값도 <strong>금지</strong>이므로 변경되지 않습니다.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> '사용자 권한이 <strong>금지</strong>이며 전체 값이 아니요였으므로 새로운 전체 값이 됩니다.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> '이 포럼에 대한 사용자 권한이 <strong>금지</strong>이며 전체 값이 아니요였으므로 새로운 전체 값이 됩니다.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> '사용자 권한이 <strong>금지</strong>로 설정되어 이전 <strong>예</strong> 값을 덮어씁니다.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> '이 포럼에 대한 사용자 권한이 <strong>금지</strong>로 설정되어 이전 <strong>예</strong> 값을 덮어씁니다.',
	'TRACE_USER_NO_TOTAL_NO'				=> '사용자 권한과 전체 값이 모두 <strong>아니요</strong>이므로 기본값인 <strong>금지</strong>가 적용됩니다.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> '이 포럼에 대한 사용자 권한과 전체 값이 모두 <strong>아니요</strong>이므로 기본값인 <strong>금지</strong>가 적용됩니다.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> '사용자 권한은 <strong>예</strong>이지만 전체 <strong>금지</strong> 값은 덮어쓸 수 없습니다.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> '이 포럼에 대한 사용자 권한은 <strong>예</strong>이지만 전체 <strong>금지</strong> 값은 덮어쓸 수 없습니다.',
	'TRACE_USER_YES_TOTAL_NO'				=> '사용자 권한이 <strong>예</strong>이며 전체 값이 <strong>아니요</strong>였으므로 새로운 전체 값이 됩니다.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> '이 포럼에 대한 사용자 권한이 <strong>예</strong>이며 전체 값이 <strong>아니요</strong>였으므로 새로운 전체 값이 됩니다.',
	'TRACE_USER_YES_TOTAL_YES'				=> '사용자 권한은 <strong>예</strong>이고 전체 값도 <strong>예</strong>이므로 변경되지 않습니다.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> '이 포럼에 대한 사용자 권한은 <strong>예</strong>이고 전체 값도 <strong>예</strong>이므로 변경되지 않습니다.',
	'TRACE_WHO'								=> '대상',
	'TRACE_TOTAL'							=> '전체',

	'USERS_NOT_ASSIGNED'			=> '이 역할에 할당된 사용자가 없습니다.',
	'USER_IS_MEMBER_OF_DEFAULT'		=> '다음 사전 정의된 그룹의 구성원입니다.',
	'USER_IS_MEMBER_OF_CUSTOM'		=> '다음 사용자 정의 그룹의 구성원입니다.',

	'VIEW_ASSIGNED_ITEMS'	=> '할당된 항목 보기',
	'VIEW_LOCAL_PERMS'		=> '개별 포럼 권한',
	'VIEW_GLOBAL_PERMS'		=> '전역 권한',
	'VIEW_PERMISSIONS'		=> '권한 보기',

	'WRONG_PERMISSION_TYPE'				=> '잘못된 권한 유형이 선택되었습니다.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> '권한 설정의 형식이 잘못되어 phpBB가 올바르게 처리할 수 없습니다.',
));
