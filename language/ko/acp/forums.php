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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> '게시물 작성일 기준 자동 정리',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> '마지막 게시물 작성 후 주제를 자동으로 제거할 때까지의 일수입니다.',
	'AUTO_PRUNE_FREQ'			=> '자동 정리 빈도',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> '자동 정리 작업 사이의 기간(일)입니다.',
	'AUTO_PRUNE_VIEWED'			=> '마지막 조회일 기준 자동 정리',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> '주제를 마지막으로 본 후 자동으로 제거할 때까지의 일수입니다.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> '바로가기 주제 자동 정리 빈도',
	'AUTO_PRUNE_SHADOW_DAYS'	=> '바로가기 주제 자동 정리 기준 일수',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> '바로가기 주제를 자동으로 제거할 때까지의 일수입니다.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> '자동 정리 작업 사이의 기간(일)입니다.',

	'CONTINUE'						=> '계속',
	'COPY_PERMISSIONS'				=> '다음에서 권한 복사',
	'COPY_PERMISSIONS_EXPLAIN'		=> '새 포럼에 대한 권한 설정을 쉽게 하기 위해 기존 포럼의 권한을 복사할 수 있습니다.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> '포럼이 생성되면 여기에서 선택한 것과 동일한 권한을 갖게 됩니다. 포럼을 선택하지 않으면 권한이 설정될 때까지 새로 생성된 포럼이 표시되지 않습니다.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> '권한 복사를 선택하면 포럼은 여기에서 선택한 것과 동일한 권한을 갖게 됩니다. 이렇게 하면 이 포럼에 대해 이전에 설정한 모든 권한을 여기에서 선택한 포럼의 권한으로 덮어씁니다. 포럼을 선택하지 않으면 현재 권한이 유지됩니다.',
	'COPY_TO_ACL'					=> '또는 이 포럼에 대한 %s새 권한을%s 설정할 수도 있습니다.',
	'CREATE_FORUM'					=> '새 포럼 만들기',

	'DECIDE_MOVE_DELETE_CONTENT'		=> '콘텐츠 삭제 또는 포럼으로 이동',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> '하위 포럼 삭제 또는 포럼으로 이동',
	'DEFAULT_STYLE'						=> '기본 스타일',
	'DELETE_ALL_POSTS'					=> '게시물 삭제',
	'DELETE_SUBFORUMS'					=> '하위 포럼 및 게시물 삭제',
	'DISPLAY_ACTIVE_TOPICS'				=> '활성 주제 표시',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> '예로 설정하면 선택된 하위 포럼의 활성 주제가 이 카테고리 아래에 표시됩니다.',

	'EDIT_FORUM'					=> '포럼 편집',
	'ENABLE_INDEXING'				=> '검색 색인 활성화',
	'ENABLE_INDEXING_EXPLAIN'		=> '"예"로 설정하면 이 포럼에 작성된 게시물이 검색을 위해 색인화됩니다.',
	'ENABLE_POST_REVIEW'			=> '게시물 검토 활성화',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> '"예"로 설정하면 사용자가 답글을 작성하는 동안 새 게시물이 등록된 경우 작성 전에 이를 검토할 수 있습니다. 채팅용 포럼에서는 비활성화하는 것이 좋습니다.',
	'ENABLE_QUICK_REPLY'			=> '빠른 답글 사용',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> '이 포럼에서 빠른 답글을 활성화합니다. 게시판 전체에서 빠른 답글이 비활성화되어 있으면 이 설정은 적용되지 않습니다. 빠른 답글은 이 포럼에 게시할 권한이 있는 사용자에게만 표시됩니다.',
	'ENABLE_RECENT'					=> '활성 주제 표시',
	'ENABLE_RECENT_EXPLAIN'			=> '"예"로 설정하면 이 포럼에 작성된 주제가 활성 주제 목록에 표시됩니다.',
	'ENABLE_TOPIC_ICONS'			=> '주제 아이콘 사용',

	'FORUM_ADMIN'						=> '포럼 관리',
	'FORUM_ADMIN_EXPLAIN'				=> 'phpBB3에서는 모든 것이 포럼 기반입니다. 카테고리는 포럼의 특별한 유형일 뿐입니다. 각 포럼에는 무제한의 하위 포럼이 있을 수 있으며 각각을 게시할 수 있는지 여부(예: 이전 카테고리처럼 작동하는지 여부)를 결정할 수 있습니다. 여기에서 개별 포럼을 추가, 편집, 삭제, 잠금, 잠금 해제하고 특정 추가 제어를 설정할 수 있습니다. 게시물과 주제가 동기화되지 않은 경우 포럼을 다시 동기화할 수도 있습니다. <strong>새로 생성된 포럼을 표시하려면 적절한 권한을 복사하거나 설정해야 합니다.</strong>',
	'FORUM_AUTO_PRUNE'					=> '자동 정리 활성화',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> '포럼의 오래된 주제를 정리합니다. 아래에서 실행 빈도와 기준 일수를 설정하십시오.',
	'FORUM_CREATED'						=> '포럼이 생성되었습니다.',
	'FORUM_DATA_NEGATIVE'				=> '정리 매개변수는 음수일 수 없습니다.',
	'FORUM_DESC_TOO_LONG'				=> '포럼 설명이 너무 깁니다. 4000자 미만이어야 합니다.',
	'FORUM_DELETE'						=> '포럼 삭제',
	'FORUM_DELETE_EXPLAIN'				=> '아래 양식에서 포럼을 삭제할 수 있습니다. 게시 가능한 포럼인 경우 포함된 모든 주제와 하위 포럼을 어디로 이동할지 선택할 수 있습니다.',
	'FORUM_DELETED'						=> '포럼이 삭제되었습니다.',
	'FORUM_DESC'						=> '설명',
	'FORUM_DESC_EXPLAIN'				=> '여기에 입력된 모든 HTML 마크업은 있는 그대로 표시됩니다. 선택한 포럼 유형이 카테고리인 경우 설명이 사용되지 않습니다.',
	'FORUM_EDIT_EXPLAIN'				=> '아래 양식에서 이 포럼을 설정할 수 있습니다. 운영 권한과 게시물 수 집계 여부는 각 사용자 또는 사용자 그룹의 포럼 권한에서 설정합니다.',
	'FORUM_IMAGE'						=> '포럼 이미지',
	'FORUM_IMAGE_EXPLAIN'				=> '이 포럼에 연결할 추가 이미지의 위치를 phpBB 루트 디렉터리 기준으로 입력합니다.',
	'FORUM_IMAGE_NO_EXIST'				=> '지정된 포럼 이미지가 존재하지 않습니다.',
	'FORUM_LINK_EXPLAIN'				=> '이 포럼을 클릭했을 때 이동할 전체 URL을 프로토콜까지 포함하여 입력합니다(예: <samp>http://</samp>). 예: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> '링크 리디렉션 추적',
	'FORUM_LINK_TRACK_EXPLAIN'			=> '포럼 링크를 클릭한 횟수를 기록합니다.',
	'FORUM_NAME'						=> '포럼 이름',
	'FORUM_NAME_EMPTY'					=> '이 포럼의 이름을 입력해야 합니다.',
	'FORUM_NAME_EMOJI'					=> '입력한 포럼 이름이 잘못되었습니다.<br>다음과 같은 지원되지 않는 문자가 포함되어 있습니다.<br>%s',
	'FORUM_PARENT'						=> '상위 포럼',
	'FORUM_PASSWORD'					=> '포럼 비밀번호',
	'FORUM_PASSWORD_CONFIRM'			=> '포럼 비밀번호 확인',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> '포럼 비밀번호를 입력한 경우에만 설정하면 됩니다.',
	'FORUM_PASSWORD_EXPLAIN'			=> '이 포럼의 비밀번호를 설정합니다. 가능하면 권한 시스템을 우선 사용하십시오.',
	'FORUM_PASSWORD_UNSET'				=> '포럼 비밀번호 제거',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> '포럼 비밀번호를 제거하려면 이 항목을 선택하십시오.',
	'FORUM_PASSWORD_OLD'				=> '포럼 비밀번호는 이전 해싱 방법을 사용하고 있으므로 변경해야 합니다.',
	'FORUM_PASSWORD_MISMATCH'			=> '입력한 비밀번호가 일치하지 않습니다.',
	'FORUM_PRUNE_SETTINGS'				=> '포럼 정리 설정',
	'FORUM_PRUNE_SHADOW'				=> '바로가기 주제 자동 정리 활성화',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> '포럼의 바로가기 주제를 정리합니다. 아래에서 실행 빈도와 기준 일수를 설정하십시오.',
	'FORUM_RESYNCED'					=> '포럼 “%s”이(가) 다시 동기화되었습니다.',
	'FORUM_RULES_EXPLAIN'				=> '포럼 규칙은 지정된 포럼 내의 모든 페이지에 표시됩니다.',
	'FORUM_RULES_LINK'					=> '포럼 규칙 링크',
	'FORUM_RULES_LINK_EXPLAIN'			=> '포럼 규칙이 포함된 페이지나 게시물의 URL을 입력할 수 있습니다. 이 설정은 입력한 포럼 규칙 텍스트보다 우선합니다.',
	'FORUM_RULES_PREVIEW'				=> '포럼 규칙 미리보기',
	'FORUM_RULES_TOO_LONG'				=> '포럼 규칙은 4000자 미만이어야 합니다.',
	'FORUM_SETTINGS'					=> '포럼 설정',
	'FORUM_STATUS'						=> '포럼 상태',
	'FORUM_STYLE'						=> '포럼 스타일',
	'FORUM_TOPICS_PAGE'					=> '페이지당 주제',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> '0이 아닌 경우 이 값이 기본 페이지당 주제 수 설정보다 우선합니다.',
	'FORUM_TYPE'						=> '포럼 유형',
	'FORUM_UPDATED'						=> '포럼 정보가 업데이트되었습니다.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> '하위 포럼이 있는 게시 가능한 포럼을 링크로 변경하려고 합니다. 링크로 변경한 후에는 현재 이 포럼에 연결된 하위 포럼을 더 이상 볼 수 없으므로 계속하기 전에 이 포럼에서 모든 하위 포럼을 이동하십시오.',

	'GENERAL_FORUM_SETTINGS'	=> '일반 포럼 설정',

	'LINK'						=> '링크',
	'LIMIT_SUBFORUMS'			=> '범례를 직계 하위 포럼으로 제한',
	'LIMIT_SUBFORUMS_EXPLAIN'	=> '표시되는 하위 포럼을 현재 포럼의 직계 하위 포럼으로 제한합니다. 비활성화하면 깊이에 관계없이 “범례에 하위 포럼 표시” 옵션이 활성화된 모든 하위 포럼이 표시됩니다.',
	'LIST_INDEX'				=> '상위 포럼의 범례에 하위 포럼 나열',
	'LIST_INDEX_EXPLAIN'		=> '상위 포럼에서 “범례에 하위 포럼 표시” 옵션을 활성화한 경우 이 포럼을 게시판 목차 등의 상위 포럼 범례에 링크로 표시합니다.',
	'LIST_SUBFORUMS'			=> '범례에 하위 포럼 표시',
	'LIST_SUBFORUMS_EXPLAIN'	=> '하위 포럼에서 “상위 포럼 범례에 하위 포럼 표시” 옵션을 활성화한 경우 이 포럼의 하위 포럼을 게시판 목차 등의 범례에 링크로 표시합니다.',
	'LOCKED'					=> '잠김',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> '게시물 이동 대상으로 선택한 포럼에는 게시할 수 없습니다. 게시 가능한 포럼을 선택하십시오.',
	'MOVE_POSTS_TO'					=> '게시물을 다음으로 이동',
	'MOVE_SUBFORUMS_TO'				=> '하위 포럼을 다음으로 이동',

	'NO_DESTINATION_FORUM'			=> '콘텐츠를 이동할 포럼을 지정하지 않았습니다.',
	'NO_FORUM_ACTION'				=> '포럼 콘텐츠를 처리할 방법이 지정되지 않았습니다.',
	'NO_PARENT'						=> '상위 없음',
	'NO_PERMISSIONS'				=> '권한 복사 안 함',
	'NO_PERMISSION_FORUM_ADD'		=> '포럼을 추가하는 데 필요한 권한이 없습니다.',
	'NO_PERMISSION_FORUM_DELETE'	=> '포럼을 삭제하는 데 필요한 권한이 없습니다.',

	'PARENT_IS_LINK_FORUM'		=> '지정한 상위 항목은 포럼 링크입니다. 링크 포럼에는 하위 포럼을 둘 수 없습니다. 카테고리나 일반 포럼을 상위 포럼으로 지정하십시오.',
	'PARENT_NOT_EXIST'			=> '지정한 상위 포럼이 존재하지 않습니다.',
	'PRUNE_ANNOUNCEMENTS'		=> '공지사항 정리',
	'PRUNE_STICKY'				=> '고정 주제 정리',
	'PRUNE_OLD_POLLS'			=> '오래된 투표 정리',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> '게시물 정리 기준 일수 동안 투표가 없는 설문 주제를 제거합니다.',

	'REDIRECT_ACL'	=> '이제 이 포럼에 대한 %s권한을%s 설정할 수 있습니다.',

	'SYNC_IN_PROGRESS'			=> '포럼 동기화 중',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> '현재 주제 범위 %1$d/%2$d를 다시 동기화하고 있습니다.',

	'TYPE_CAT'			=> '카테고리',
	'TYPE_FORUM'		=> '포럼',
	'TYPE_LINK'			=> '링크',

	'UNLOCKED'			=> '잠금 해제',
));
