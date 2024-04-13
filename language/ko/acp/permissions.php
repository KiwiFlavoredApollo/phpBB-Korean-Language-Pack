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
		<p>권한은 매우 세분화되어 있으며 다음과 같은 네 가지 주요 섹션으로 그룹화됩니다.</p>

		<h2>글로벌 권한</h2>

		<p>글로벌 레벨의 접근을 통제하고 전체 게시판에 적용하기 위해 사용됩니다. 다시 사용자 권한, 그룹 권한, 관리자 및 글로벌 운영자로 나뉩니다.</p>

		<h2>포럼 기반 권한</h2>
		<p>포럼별로 액세스를 제어하는 데 사용됩니다. 포럼 권한, 포럼 운영자, 사용자 포럼 권한 및 그룹 포럼 권한으로 세분화됩니다.</p>

		<h2>권한 역할</h2>
		<p>이는 나중에 역할 기반으로 할당될 수 있는 다양한 권한 유형에 대해 다른 권한 집합을 만드는 데 사용됩니다. 기본 역할은 크고 작은 게시판 관리를 포함해야 하지만 4개 부서 내에서 적절하게 역할을 추가/편집/삭제할 수 있습니다.</p>

		<h2>권한 마스크</h2>
		<p>사용자, 운영자(로컬 및 글로벌), 관리자 또는 포럼에 할당된 유효 권한을 보는 데 사용됩니다.</p>
		
		<br />

		<p>phpBB3 보드의 권한 설정 및 관리에 대한 추가 정보는 <a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/permissions/">빠른 시작 가이드의 권한 설정</a> 섹션을 참조하십시오. </p>
	',

	'ACL_NEVER'				=> '금지',
	'ACL_SET'				=> '권한 설정',
	'ACL_SET_EXPLAIN'		=> '권한은 간단한 <strong>YES</strong>/<strong>NO</strong> 시스템을 기반으로 합니다. 사용자 또는 사용자 그룹에 대해 옵션을 <strong>없음</strong>로 설정하면 할당된 다른 값이 무시됩니다. 이 사용자 또는 그룹에 대한 옵션 값을 지정하지 않으려면 <strong>아니요</strong>를 선택하십시오. 다른 곳에서 이 옵션에 대한 값이 할당되면 해당 값이 우선적으로 사용되며, 그렇지 않으면 <strong>없음</strong>로 간주됩니다. 표시된 모든 개체(그 앞에 확인란이 있음)는 정의한 권한 집합을 복사합니다.',
	'ACL_SETTING'			=> '설정',

	'ACL_TYPE_A_'			=> '관리 권한',
	'ACL_TYPE_F_'			=> '포럼 권한',
	'ACL_TYPE_M_'			=> '중재 권한',
	'ACL_TYPE_U_'			=> '사용자 권한',

	'ACL_TYPE_GLOBAL_A_'	=> '관리 권한',
	'ACL_TYPE_GLOBAL_U_'	=> '사용자 권한',
	'ACL_TYPE_GLOBAL_M_'	=> '글로벌 운영자 권한',
	'ACL_TYPE_LOCAL_M_'		=> '포럼 운영자 권한',
	'ACL_TYPE_LOCAL_F_'		=> '포럼 권한',

	'ACL_NO'				=> '이니요',
	'ACL_VIEW'				=> '보기 권한',
	'ACL_VIEW_EXPLAIN'		=> '여기에서 사용자/그룹이 가지고 있는 유효 권한을 볼 수 있습니다. 빨간색 사각형은 사용자/그룹에 권한이 없음을 나타내고 녹색 사각형은 사용자/그룹에 권한이 있음을 나타냅니다.',
	'ACL_YES'				=> '예',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> '여기에서 사용자 또는 그룹에 관리자 권한을 할당할 수 있습니다. 관리자 권한이 있는 모든 사용자는 관리자 제어판을 볼 수 있습니다.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> '여기에서 사용자와 그룹을 포럼 운영자로 지정할 수 있습니다. 사용자에게 포럼에 대한 액세스 권한을 할당하려면 글로벌 운영 권한 또는 관리자를 정의하려면 해당 페이지를 사용하십시오.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> '여기에서 어떤 사용자와 그룹이 어떤 포럼에 액세스할 수 있는지 변경할 수 있습니다. 운영자를 지정하거나 관리자를 정의하려면 해당 페이지를 사용하십시오.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> '여기에서 한 포럼에서 하나 이상의 다른 포럼으로 포럼 권한을 복사할 수 있습니다.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> '여기에서 사용자 또는 그룹에 글로벌 운영자 권한을 할당할 수 있습니다. 이 운영자는 보드의 모든 포럼에 액세스할 수 있다는 점을 제외하고는 일반 운영자와 같습니다.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> '여기에서 그룹에 포럼 권한을 할당할 수 있습니다.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> '여기에서 사용자 권한, 글로벌 운영자 권한 및 관리자 권한과 같은 글로벌 권한을 그룹에 할당할 수 있습니다. 사용자 권한에는 아바타 사용, 개인 메시지 보내기 등과 같은 기능이 포함됩니다. 게시물 승인, 글관리, 차단 관리 등과 같은 글로벌 운영자 권한과 마지막으로 권한 변경, 사용자 정의 BBCode 정의, 포럼 관리 등과 같은 관리자 권한이 있습니다. 개별 사용자 권한은 드문 경우에만 변경해야 하며 선호하는 방법은 사용자를 그룹에 넣고 그룹 권한을 할당하는 것입니다.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> '여기에서 관리 권한에 대한 역할을 관리할 수 있습니다. 역할은 유효한 권한입니다. 역할을 변경하면 이 역할이 할당된 항목이 권한도 변경됩니다.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> '여기에서 포럼 권한에 대한 역할을 관리할 수 있습니다. 역할은 유효한 권한입니다. 역할을 변경하면 이 역할이 할당된 항목이 권한도 변경됩니다.',
	'ACP_MOD_ROLES_EXPLAIN'						=> '여기에서 중재 권한에 대한 역할을 관리할 수 있습니다. 역할은 유효한 권한입니다. 역할을 변경하면 이 역할이 할당된 항목이 권한도 변경됩니다.',
	'ACP_USER_ROLES_EXPLAIN'					=> '여기에서 사용자 권한에 대한 역할을 관리할 수 있습니다. 역할은 유효한 권한입니다. 역할을 변경하면 이 역할이 할당된 항목이 권한도 변경됩니다.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> '여기에서 사용자에게 포럼 권한을 할당할 수 있습니다.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> '여기에서 사용자에게  글로벌 권한(사용자 권한,  글로벌 운영자 권한 및 관리자 권한)을 할당할 수 있습니다. 사용자 권한에는 아바타 사용, 개인 메시지 보내기 등과 같은 기능이 포함됩니다. 게시물 승인, 글관리, 차단 관리 등과 같은 글로벌 운영자 권한과 마지막으로 권한 변경, 사용자 정의 BBCode 정의, 포럼 관리 등과 같은 관리자 권한이 있습니다. 많은 수의 사용자에 대해 이러한 설정을 변경하려면 그룹 권한 시스템이 선호되는 방법입니다. 사용자 권한은 드문 경우에만 변경해야 하며 선호하는 방법은 사용자를 그룹에 넣고 그룹 권한을 할당하는 것입니다.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> '여기에서 선택한 사용자/그룹에 할당된 효과적인 관리 권한을 볼 수 있습니다.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> '여기에서 선택한 사용자/그룹에 할당된  글로벌 운영 권한을 볼 수 있습니다.',
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
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> '권한을 복사하려는 소스 포럼입니다.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> '복사된 권한을 적용할 대상 포럼입니다.',
	'COPY_PERMISSIONS_FROM'					=> '다음에서 권한 복사',
	'COPY_PERMISSIONS_TO'					=> '권한 적용',

	'CREATE_ROLE'				=> '역할 생성',
	'CREATE_ROLE_FROM'			=> '다음에서 설정 사용…',
	'CUSTOM'					=> '커스텀…',

	'DEFAULT'					=> '기본',
	'DELETE_ROLE'				=> '역할 삭제',
	'DELETE_ROLE_CONFIRM'		=> '이 역할을 제거하시겠습니까? 이 역할이 할당된 항목은 권한 설정을 잃지 <strong>않습니다</strong>.',
	'DISPLAY_ROLE_ITEMS'		=> '이 역할을 사용하여 항목 보기',

	'EDIT_PERMISSIONS'			=> '권한 수정',
	'EDIT_ROLE'					=> '역할 수정',

	'GROUPS_NOT_ASSIGNED'		=> '이 역할에 할당된 그룹이 없습니다.',

	'LOOK_UP_GROUP'				=> '사용자 그룹 조회',
	'LOOK_UP_USER'				=> '사용자 조회',

	'MANAGE_GROUPS'		=> '관리 그룹',
	'MANAGE_USERS'		=> '관리 사용자',

	'NO_AUTH_SETTING_FOUND'		=> '권한 설정이 정의되지 않았습니다.',
	'NO_ROLE_ASSIGNED'			=> '할당된 역할이 없습니다...',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> '이 역할로 설정해도 오른쪽에 대한 권한은 변경되지 않습니다. 모든 권한을 설정 해제/제거하려면 "모두 <strong>NO</strong>" 링크를 사용해야 합니다.',
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
	'ROLE_DELETED'					=> '역할이  제거되었습니다.',
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
	'ROLE_FORUM_ONQUEUE'		=> '조정 대기열에서',
	'ROLE_FORUM_POLLS'			=> '일반 액세스 + 투표',
	'ROLE_FORUM_READONLY'		=> '읽기 전용 액세스',
	'ROLE_FORUM_STANDARD'		=> '표준 액세스',
	'ROLE_FORUM_NEW_MEMBER'		=> '미인증 사용자 액세스',
	'ROLE_MOD_FULL'				=> '전체 운영자',
	'ROLE_MOD_QUEUE'			=> '대기열 운영자',
	'ROLE_MOD_SIMPLE'			=> '단순 운영자',
	'ROLE_MOD_STANDARD'			=> '표준 운영자',
	'ROLE_USER_FULL'			=> '모든 기능',
	'ROLE_USER_LIMITED'			=> '제한된 기능',
	'ROLE_USER_NOAVATAR'		=> '아바타 없음',
	'ROLE_USER_NOPM'			=> '비공개 메시지 없음',
	'ROLE_USER_STANDARD'		=> '표준 기능',
	'ROLE_USER_NEW_MEMBER'		=> '미인증 사용자 기능',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> '포럼 관리 및 포럼 권한 설정에 액세스할 수 있습니다.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> '이 게시판의 모든 관리 기능에 액세스할 수 있습니다.<br />권장하지 않습니다.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> '대부분의 관리 기능에 액세스할 수 있지만 서버 또는 시스템 관련 도구를 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> '그룹 및 사용자 관리 가능: 권한, 설정 변경, 차단 관리, 순위 관리가 가능합니다.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> '이 역할은 봇 및 검색 스파이더에 권장됩니다.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> '공지사항 및 상위고정 게시를 포함한 모든 포럼 기능을 사용할 수 있습니다. 범람 제한을 무시할 수도 있습니다.<br />일반 사용자에게는 권장하지 않습니다.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> '일부 포럼 기능을 사용할 수 있지만 파일을 첨부하거나 게시물 아이콘을 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> '제한된 액세스에 따라 하지만 투표를 생성할 수도 있습니다.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> '포럼을 보거나 액세스할 수 없습니다.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> '첨부파일을 포함한 대부분의 포럼 기능을 사용할 수 있지만 게시물과 글은 운영자의 승인이 필요합니다.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> '표준 액세스 와 비슷하지만 투표를 생성할 수도 있습니다.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> '포럼을 읽을 수 있지만 새글을 만들거나 게시물에 답글을 달 수는 없습니다.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> '첨부파일 및 자체 글 삭제를 포함한 대부분의 포럼 기능을 사용할 수 있지만 자체 글을 잠글 수 없으며 설문 조사를 생성할 수 없습니다.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> '특별히 미인증 사용자 그룹의 구성원을 위한 역할. 새 사용자의 기능을 잠글 수 있는 <strong>없음</strong> 권한이 포함되어 있습니다.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> '차단을 포함한 모든 중재 기능을 사용할 수 있습니다.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> '중재 대기열을 사용하여 게시물의 유효성을 검사하고 편집할 수 있지만 그 외에는 아무 것도 할 수 없습니다.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> '기본 글 작업만 사용할 수 있습니다. 경고를 보내거나 중재 대기열을 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> '대부분의 중재 도구를 사용할 수 있지만 사용자를 차단하거나 게시물 작성자를 변경할 수 없습니다.',
	'ROLE_DESCRIPTION_USER_FULL'			=> '사용자 이름 변경 또는 플러드 제한 무시를 포함하여 사용자가 사용할 수 있는 모든 포럼 기능을 사용할 수 있습니다.<br />권장하지 않습니다.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> '일부 사용자 기능에 액세스할 수 있습니다. 첨부파일, 이메일 또는 인스턴트 메시지는 허용되지 않습니다.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> '제한된 기능 세트가 있으며 아바타 기능을 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> '제한된 기능 세트가 있으며 개인 메시지를 사용할 수 없습니다.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> '모든 사용자 기능은 아니지만 대부분의 사용자 기능에 액세스할 수 있습니다. 예를 들어 사용자 이름을 변경하거나 플러드 제한을 무시할 수 없습니다.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> '특별히 미인증 사용자 그룹의 구성원을 위한 역할. 새 사용자의 기능을 잠글 수 있는 <strong>없음</strong> 권한이 포함되어 있습니다.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> '역할이 하는 일이나 역할이 의미하는 바에 대한 간단한 설명을 입력할 수 있습니다. 여기에 입력한 텍스트는 권한 화면에도 표시됩니다.',
	'ROLE_DESCRIPTION_LONG'			=> '역할 설명이 너무 깁니다. 4000자로 제한하십시오.',
	'ROLE_DETAILS'					=> '역할 세부정보',
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

	'TRACE_DEFAULT'					=> '기본적으로 모든 권한은 <strong>NO</strong>(설정되지 않음)입니다. 따라서 다른 설정으로 권한을 덮어쓸 수 있습니다.',
	'TRACE_FOR'						=> '추적',
	'TRACE_GLOBAL_SETTING'			=> '%s(글로벌)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> '이 그룹의 권한은 전체 결과와 마찬가지로 <strong>없음(사용하지 않음)</strong>로 설정되어 이전 결과가 유지됩니다.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> '이 포럼에 대한 이 그룹의 권한은 전체 결과를 좋아하는 <strong>없음</strong>로 설정되어 있으므로 이전 결과가 유지됩니다.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> '이 그룹의 권한은 <strong>없음</strong>로 설정되어 있으며 이는 아직 설정되지 않았기 때문에 새 총 값이 됩니다(<strong>NO</strong>로 설정).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> '이 포럼에 대한 이 그룹의 권한은 <strong>없음</strong>로 설정되어 있으며 이는 아직 설정되지 않았기 때문에 새 총 값이 됩니다(<strong>NO</strong>로 설정).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> '이 그룹의 권한은 <strong>없음</strong>로 설정되어 이 사용자에 대한 전체 <strong>YES</strong>를 <strong>없음</strong>로 덮어씁니다.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> '이 포럼에 대한 이 그룹의 권한은 <strong>없음</strong>로 설정되어 이 사용자에 대한 총 <strong>YES</strong>를 <strong>없음</strong>로 덮어씁니다.',
	'TRACE_GROUP_NO'				=> '이 그룹에 대한 권한은 <strong>NO</strong>이므로 이전 총 값이 유지됩니다.',
	'TRACE_GROUP_NO_LOCAL'			=> '이 포럼 내에서 이 그룹에 대한 권한은 <strong>아니요</strong>이므로 이전 총 값이 유지됩니다.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> '이 그룹의 권한은 <strong>YES</strong>로 설정되어 있지만 총 <strong>없음</strong>를 덮어쓸 수 없습니다',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> '이 포럼에 대한 이 그룹의 권한이 <strong>예</strong>로 설정되어 있지만 총 <strong>없음</strong>를 덮어쓸 수 없습니다.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> '이 그룹의 권한은 아직 설정되지 않았기 때문에(<strong>NO</strong>로 설정) 새 총 값이 되는 <strong>YES</strong>로 설정됩니다.',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> '이 포럼에 대한 이 그룹의 권한은 <strong>YES</strong>로 설정되어 있으며 이는 아직 설정되지 않았기 때문에 새 총 값이 됩니다(<strong>NO</strong>로 설정).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> '이 그룹의 권한은 <strong>YES</strong>로 설정되어 있고 전체 권한은 이미 <strong>YES</strong>로 설정되어 있으므로 전체 결과가 유지됩니다.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> '이 포럼에 대한 이 그룹의 권한은 <strong>YES</strong>로 설정되어 있고 전체 권한은 이미 <strong>YES</strong>로 설정되어 있으므로 전체 결과가 유지됩니다.',
	'TRACE_PERMISSION'				=> '추적 권한 - %s',
	'TRACE_RESULT'					=> '추적 결과',
	'TRACE_SETTING'					=> '추적 설정',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> '포럼 독립 사용자 권한은 <strong>YES</strong>로 평가되지만 전체 권한은 이미 <strong>YES</strong>로 설정되어 있으므로 전체 결과가 유지됩니다. %s 글로벌 권한 추적%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> '포럼 독립 사용자 권한은 현재 로컬 결과를 <strong>없음</strong> 덮어쓰는 <strong>YES</strong>로 평가됩니다. %s 글로벌 권한 추적%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> '포럼 독립 사용자 권한은 로컬 권한에 영향을 주지 않는 <strong>잘데</strong>로 평가됩니다. %s 글로벌 권한 추적%s',

	'TRACE_USER_FOUNDER'					=> '사용자는 최고 관리자이므로 관리자 권한은 항상 <strong>예</strong>로 설정됩니다.',
	'TRACE_USER_KEPT'						=> '사용자의 권한은 <strong>NO</strong>이므로 이전 총 값이 유지됩니다.',
	'TRACE_USER_KEPT_LOCAL'					=> '이 포럼에 대한 사용자의 권한은 <strong>NO</strong>이므로 이전 총 값이 유지됩니다.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> '사용자의 권한은 <strong>없음</strong>로 설정되고 총 값은 <strong>없음</strong>로 설정되므로 아무 것도 변경되지 않습니다.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> '이 포럼에 대한 사용자의 권한은 <strong>없음</strong>로 설정되고 총 값은 <strong>없음</strong>로 설정되므로 아무 것도 변경되지 않습니다.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> '사용자의 권한은 NO로 설정되었기 때문에 총 값이 되는 <strong>없음</strong>로 설정됩니다.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> '이 포럼에 대한 사용자 권한은 NO로 설정되었기 때문에 총 값이 되는 <strong>없음</strong>로 설정됩니다.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> '사용자의 권한이 <strong>없음</strong>로 설정되고 이전 <strong>YES</strong>를 덮어씁니다.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> '이 포럼에 대한 사용자의 권한은 <strong>없음</strong>로 설정되고 이전 <strong>YES</strong>를 덮어씁니다.',
	'TRACE_USER_NO_TOTAL_NO'				=> '사용자의 권한은 <strong>NO</strong>이고 총 값은 NO로 설정되어 기본값은 <strong>없음</strong>입니다.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> '이 포럼에 대한 사용자의 권한은 <strong>아니요</strong>이고 총 값은 아니요로 설정되어 기본값은 <strong>없음</strong>입니다.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> '사용자의 권한이 <strong>YES</strong>로 설정되어 있지만 총 <strong>없음</strong>를 덮어쓸 수 없습니다.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> '이 포럼에 대한 사용자의 권한이 <strong>예</strong>로 설정되어 있지만 전체 <strong>없음</strong>를 덮어쓸 수 없습니다.',
	'TRACE_USER_YES_TOTAL_NO'				=> '사용자의 권한은 <strong>NO</strong>로 설정되었기 때문에 총 값이 되는 <strong>YES</strong>로 설정됩니다.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> '이 포럼에 대한 사용자의 권한은 <strong>NO</strong>로 설정되었기 때문에 총 값이 되는 <strong>YES</strong>로 설정됩니다.',
	'TRACE_USER_YES_TOTAL_YES'				=> '사용자의 권한이 <strong>YES</strong>로 설정되어 있고 전체 값이 <strong>YES</strong>로 설정되어 있으므로 아무 것도 변경되지 않습니다.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> '이 포럼에 대한 사용자의 권한은 <strong>YES</strong>로 설정되고 총 값은 <strong>YES</strong>로 설정되므로 아무 것도 변경되지 않습니다.',
	'TRACE_WHO'								=> '누구',
	'TRACE_TOTAL'							=> '총',

	'USERS_NOT_ASSIGNED'			=> '이 역할에 할당된 사용자가 없습니다.',
	'USER_IS_MEMBER_OF_DEFAULT'		=> '다음 사전 정의된 그룹의 구성원입니다.',
	'USER_IS_MEMBER_OF_CUSTOM'		=> '다음 사용자 정의 그룹의 구성원입니다.',

	'VIEW_ASSIGNED_ITEMS'	=> '할당된 항목 보기',
	'VIEW_LOCAL_PERMS'		=> '로컬 권한',
	'VIEW_GLOBAL_PERMS'		=> ' 글로벌 권한',
	'VIEW_PERMISSIONS'		=> '권한 보기',

	'WRONG_PERMISSION_TYPE'				=> '잘못된 권한 유형이 선택되었습니다.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> '권한 설정의 형식이 잘못되어 phpBB가 올바르게 처리할 수 없습니다.',
));
