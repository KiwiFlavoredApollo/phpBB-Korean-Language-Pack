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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> '이 패널에서 모든 사용자 그룹을 관리할 수 있습니다. 기존 그룹을 삭제, 생성 및 편집할 수 있습니다. 또한 그룹 리더를 선택하고 그룹의 열기/숨김/닫힘 상태를 전환하고 그룹 이름과 설명을 설정할 수 있습니다.',
	'ADD_GROUP_CATEGORY'			=> '카테고리 추가',
	'ADD_USERS'						=> '사용자 추가',
	'ADD_USERS_EXPLAIN'				=> '여기에서 그룹에 새 사용자를 추가할 수 있습니다. 이 그룹이 선택한 사용자의 새 기본값이 될 것인지 여부를 선택할 수 있습니다. 또한 그들을 그룹 리더로 정의할 수 있습니다. 각 사용자 이름을 별도의 줄에 입력하십시오.',

	'COPY_PERMISSIONS'				=> '권한 복사',
	'COPY_PERMISSIONS_EXPLAIN'		=> '그룹이 생성되면 여기에서 선택한 것과 동일한 권한을 갖게 됩니다.',
	'CREATE_GROUP'					=> '새 그룹 만들기',

	'GROUPS_NO_MEMBERS'				=> '이 그룹에는 회원이 없습니다',
	'GROUPS_NO_MODS'				=> '그룹 리더가 정의되지 않았습니다.',

	'GROUP_APPROVE'					=> '회원 승인',
	'GROUP_APPROVED'				=> '승인된 회원',
	'GROUP_AVATAR'					=> '그룹 아바타',
	'GROUP_AVATAR_EXPLAIN'			=> '이 이미지는 그룹 제어판에 표시됩니다.',
	'GROUP_CATEGORY_NAME'			=> '카테고리 이름',
	'GROUP_CLOSED'					=> '닫힌',
	'GROUP_COLOR'					=> '그룹 색상',
	'GROUP_COLOR_EXPLAIN'			=> '멤버의 사용자 이름이 표시될 색상을 정의합니다. 사용자 기본값은 공백으로 둡니다.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> '%2$s 사용자를 그룹에 추가하시겠습니까?',
		2	=> '%2$s 사용자를 그룹에 추가하시겠습니까?',
	),
	'GROUP_CREATED'					=> '그룹이  생성되었습니다.',
	'GROUP_DEFAULT'					=> '구성원의 그룹을 기본값으로 설정',
	'GROUP_DEFS_UPDATED'			=> '그룹에서 구성원 제거 선택한 모든 구성원에 대해 설정된 기본 그룹.',
	'GROUP_DELETE'					=> '그룹에서 구성원 제거',
	'GROUP_DELETED'					=> '그룹이 삭제되고 사용자 기본 그룹이  설정되었습니다.',
	'GROUP_DEMOTE'					=> '그룹 리더 강등',
	'GROUP_DESC'					=> '그룹 설명',
	'GROUP_DETAILS'					=> '그룹 세부정보',
	'GROUP_EDIT_EXPLAIN'			=> '여기에서 기존 그룹을 편집할 수 있습니다. 이름, 설명 및 유형(개방형, 폐쇄형 등)을 변경할 수 있습니다. 색상, 순위 등과 같은 특정 그룹 전체 옵션을 설정할 수도 있습니다. 여기에서 변경한 사항은 사용자의 현재 설정보다 우선합니다. 적절한 사용자 권한을 설정하지 않는 한 그룹 구성원은 그룹 아바타 설정을 무시할 수 있습니다.',
	'GROUP_ERR_USERS_EXIST'			=> '지정한 사용자가 이미 이 그룹의 구성원입니다.',
	'GROUP_FOUNDER_MANAGE'			=> '매니저만 관리',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> '이 그룹의 관리를 매니저로만 제한하십시오. 그룹 권한을 가진 사용자는 이 그룹뿐만 아니라 이 그룹의 구성원도 볼 수 있습니다.',
	'GROUP_HIDDEN'					=> '숨겨진',
	'GROUP_LANG'					=> '그룹 언어',
	'GROUP_LEAD'					=> '그룹 리더',
	'GROUP_LEADERS_ADDED'			=> '새로운 리더가 그룹에 추가되었습니다.',
	'GROUP_LEGEND'					=> '명예그룹 표시',
	'GROUP_LIST'					=> '현재 구성원',
	'GROUP_LIST_EXPLAIN'			=> '이 그룹의 구성원 자격을 가진 모든 현재 사용자의 전체 목록입니다. 구성원을 삭제하거나(특정 그룹 제외) 적합하다고 판단되는 대로 새 구성원을 추가할 수 있습니다.',
	'GROUP_MEMBERS'					=> '그룹 구성원',
	'GROUP_MEMBERS_EXPLAIN'			=> '이 사용자 그룹의 모든 구성원 목록입니다. 리더, 계류 중인 멤버, 기존 멤버를 위한 별도의 섹션이 포함되어 있습니다. 여기서 이 그룹의 구성원 자격과 역할의 모든 측면을 관리할 수 있습니다. 지시선을 삭제하지만 그룹에 유지하려면 삭제 대신 강등 명령을 사용합니다. 마찬가지로 기존 구성원을 리더로 만들기 위해 프로모션을 사용합니다.',
	'GROUP_MESSAGE_LIMIT'			=> '폴더당 그룹 개인 메시지 제한',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> '이 설정은 사용자별 폴더 메시지 제한을 무시합니다. 사용자의 모든 그룹에 대한 최대값은 실제 값을 결정하는 데 사용됩니다.<br />이 그룹의 모든 사용자에 대한 설정을 보드 전체 설정으로 덮어쓰려면 이 값을 0으로 설정하십시오.',
	'GROUP_MODS_ADDED'				=> '새 그룹 리더가 추가되었습니다.',
	'GROUP_MODS_DEMOTED'			=> '그룹 리더가  강등되었습니다.',
	'GROUP_MODS_PROMOTED'			=> '그룹 구성원이 승격되었습니다.',
	'GROUP_NAME'					=> '그룹 이름',
	'GROUP_NAME_TAKEN'				=> '입력한 그룹 이름은 이미 사용 중입니다. 다른 이름을 선택하세요.',
	'GROUP_OPEN'					=> '오픈',
	'GROUP_PENDING'					=> '대기 회원',
	'GROUP_MAX_RECIPIENTS'			=> '비공개 메시지당 허용되는 최대 수신자 수',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> '개인 메시지에 허용되는 최대 수신자 수입니다. 사용자의 모든 그룹에 대한 최대값은 실제 값을 결정하는 데 사용됩니다.<br />이 그룹의 모든 사용자에 대한 설정을 보드 전체 설정으로 덮어쓰려면 이 값을 0으로 설정하십시오.',
	'GROUP_OPTIONS_SAVE'			=> '그룹 전체 옵션',
	'GROUP_PROMOTE'					=> '그룹 리더로 승격',
	'GROUP_RANK'					=> '그룹 순위',
	'GROUP_RECEIVE_PM'				=> '비공개 메시지를 받을 수 있는 그룹',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> '이 설정에 관계없이 숨겨진 그룹은 메시지를 보낼 수 없습니다.',
	'GROUP_REQUEST'					=> '가입승인',
	'GROUP_SETTINGS_SAVE'			=> '그룹 전체 설정',
	'GROUP_SKIP_AUTH'				=> '권한에서 그룹 리더 제외',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> '활성화된 경우 그룹 리더는 더 이상 그룹에서 권한을 상속하지 않습니다.',
	'GROUP_SPECIAL'					=> '미리 정의된',
	'GROUP_TEAMPAGE'				=> '운영진 페이지에 그룹 표시',
	'GROUP_TYPE'					=> '그룹 유형',
	'GROUP_TYPE_EXPLAIN'			=> '이는 이 그룹에 가입하거나 볼 수 있는 사용자를 결정합니다.',
	'GROUP_UPDATED'					=> '그룹 기본 설정이 업데이트되었습니다.',

	'GROUP_USERS_ADDED'				=> '새 사용자가 그룹에 추가되었습니다.',
	'GROUP_USERS_EXIST'				=> '선택한 사용자는 이미 회원입니다.',
	'GROUP_USERS_REMOVE'			=> '사용자가 그룹에서 제거되었고 새 기본값이  설정되었습니다.',
	'GROUP_USERS_INVALID'			=> '다음 사용자 이름이 존재하지 않으므로 그룹에 추가된 사용자가 없습니다: %s',

	'LEGEND_EXPLAIN'				=> '명예그룹에 표시되는 그룹',
	'LEGEND_SETTINGS'				=> '범례 설정',
	'LEGEND_SORT_GROUPNAME'			=> '그룹 이름별로 정렬',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> '이 옵션을 사용할 경우 아래 순서는 무시됩니다.',

	'MANAGE_LEGEND'			=> '관리 그룹 범례',
	'MANAGE_TEAMPAGE'		=> '운영진 페이지 관리',
	'MAKE_DEFAULT_FOR_ALL'	=> '모든 구성원의 기본 그룹 만들기',
	'MEMBERS'				=> '회원',

	'NO_GROUP'					=> '지정된 그룹이 없습니다.',
	'NO_GROUPS_ADDED'			=> '아직 추가된 그룹이 없습니다.',
	'NO_GROUPS_CREATED'			=> '아직 생성된 그룹이 없습니다.',
	'NO_PERMISSIONS'			=> '권한을 복사하지 마십시오',
	'NO_USERS'					=> '사용자를 입력하지 않았습니다.',
	'NO_USERS_ADDED'			=> '그룹에 추가된 사용자가 없습니다.',
	'NO_VALID_USERS'			=> '해당 작업에 적합한 사용자를 입력하지 않았습니다.',

	'PENDING_MEMBERS'			=> '보류중',

	'SELECT_GROUP'				=> '그룹 선택',
	'SPECIAL_GROUPS'			=> '미리 정의된 그룹',
	'SPECIAL_GROUPS_EXPLAIN'	=> '미리 정의된 그룹은 특수 그룹이며 삭제하거나 직접 수정할 수 없습니다. 그러나 여전히 사용자를 추가하고 기본 설정을 변경할 수 있습니다',

	'TEAMPAGE'					=> '운영진 페이지',
	'TEAMPAGE_DISP_ALL'			=> '모든 멤버십',
	'TEAMPAGE_DISP_DEFAULT'		=> '기본 그룹만',
	'TEAMPAGE_DISP_FIRST'		=> '첫 번째 회원만',
	'TEAMPAGE_EXPLAIN'			=> '운영진 페이지에 표시되는 그룹:',
	'TEAMPAGE_FORUMS'			=> '검토된 포럼 표시',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> '예 로 설정하면 운영자의 행에 운영자 권한이 있는 모든 포럼이 포함된 목록이 표시됩니다. 이것은 큰 보드의 경우 매우 데이터베이스 집약적일 수 있습니다.',
	'TEAMPAGE_MEMBERSHIPS'		=> '사용자 멤버십 표시',
	'TEAMPAGE_SETTINGS'			=> '운영진 페이지 설정',
	'TOTAL_MEMBERS'				=> '회원',

	'USERS_APPROVED'				=> '사용자가  승인되었습니다.',
	'USER_DEFAULT'					=> '사용자 기본값',
	'USER_DEF_GROUPS'				=> '사용자 정의 그룹',
	'USER_DEF_GROUPS_EXPLAIN'		=> '당신 또는 이 보드의 다른 관리자가 만든 그룹입니다. 멤버십을 관리하고 그룹 속성을 편집하거나 그룹을 삭제할 수도 있습니다',
	'USER_GROUP_DEFAULT'			=> '기본 그룹으로 설정',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> '여기에서 예라고 말하면 이 그룹이 추가된 사용자의 기본 그룹으로 설정됩니다',
	'USER_GROUP_LEADER'				=> '그룹 리더로 설정',
));
