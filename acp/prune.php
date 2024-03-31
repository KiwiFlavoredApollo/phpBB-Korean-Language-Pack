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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> '이 섹션에서는 보드의 사용자를 삭제하거나 비활성화할 수 있습니다. 계정은 다양한 방법으로 필터링할 수 있습니다. 게시물 수, 가장 최근 활동 등 기준. 영향을 받는 계정을 좁히기 위해 기준을 결합할 수 있습니다. 예를 들어 게시물이 10개 미만이고 2002-01-01 이후에도 비활성화된 사용자를 정리할 수 있습니다. 텍스트 필드의 와일드카드로 *를 사용합니다. 또는 텍스트 필드에 사용자 목록(각각 별도의 줄에 있음)을 입력하여 기준 선택을 완전히 건너뛸 수 있습니다. 이 시설을 조심하십시오! 사용자가 삭제되면 작업을 되돌릴 방법이 없습니다.',

	'CRITERIA'				=> '기준',

	'DEACTIVATE_DELETE'			=> '비활성화 또는 삭제',
	'DEACTIVATE_DELETE_EXPLAIN'	=> '사용자를 비활성화할지 아니면 완전히 삭제할지 선택합니다. 삭제된 사용자는 복원할 수 없습니다!',
	'DELETE_USERS'				=> '삭제',
	'DELETE_USER_POSTS'			=> '정리된 사용자 게시물 삭제',
	'DELETE_USER_POSTS_EXPLAIN' => '삭제된 사용자가 작성한 게시물을 제거하며 사용자가 비활성화된 경우에는 효과가 없습니다.',

	'JOINED_EXPLAIN'			=> '<kbd>YYYY-MM-DD</kbd> 형식으로 날짜를 입력하세요. 두 필드를 모두 사용하여 간격을 지정하거나 열린 날짜 범위에 대해 하나를 공백으로 둘 수 있습니다.',

	'LAST_ACTIVE_EXPLAIN'		=> '<kbd>YYYY-MM-DD</kbd> 형식으로 날짜를 입력하세요. 로그인한 적이 없는 사용자를 정리하려면 <kbd>0000-00-00</kbd>를 입력하세요. <em>이전</em> 및 <em>이후</em> 조건은 무시됩니다.',

	'POSTS_ON_QUEUE'			=> '승인 대기 중인 게시물',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> '선택한 그룹 내 사용자로 제한합니다.',
	'PRUNE_USERS_GROUP_NONE'	=> '모든 그룹',
	'PRUNE_USERS_LIST'				=> '정리할 사용자',
	'PRUNE_USERS_LIST_DELETE'		=> '선택한 사용자 정리 기준으로 다음 계정이 제거됩니다. 사용자 이름 옆의 확인란을 선택 취소하여 삭제 목록에서 개별 사용자를 제거할 수 있습니다.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> '선택한 사용자 정리 기준으로 다음 계정이 비활성화됩니다. 사용자 이름 옆의 확인란을 선택 취소하여 비활성화 목록에서 개별 사용자를 제거할 수 있습니다.',

	'SELECT_USERS_EXPLAIN'		=> '여기에 특정 사용자 이름을 입력하십시오. 위의 기준보다 우선적으로 사용됩니다. 최고 관리자는 정리할 수 없습니다.',

	'USER_DEACTIVATE_SUCCESS'	=> '선택한 사용자가  비활성화되었습니다.',
	'USER_DELETE_SUCCESS'		=> '선택한 사용자가  삭제되었습니다.',
	'USER_PRUNE_FAILURE'		=> '선택한 기준에 맞는 사용자가 없습니다.',

	'WRONG_ACTIVE_JOINED_DATE'	=> '입력한 날짜가 잘못되었습니다. <kbd>YYYY-MM-DD</kbd> 형식이어야 합니다.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> '이렇게 하면 선택한 일 수 내에 게시되지 않았거나 조회되지 않은 모든 글이 삭제됩니다. 번호를 입력하지 않으면 모든 글이 삭제됩니다. 기본적으로 투표가 아직 실행 중인 글을 제거하지 않으며 스티커 및 공지 사항을 제거하지도 않습니다.',

	'FORUM_PRUNE'		=> '포럼 정리',

	'NO_PRUNE'			=> '정리된 포럼이 없습니다.',

	'SELECTED_FORUM'	=> '선택한 포럼',
	'SELECTED_FORUMS'	=> '선택한 포럼',

	'POSTS_PRUNED'					=> '게시물 정리',
	'PRUNE_ANNOUNCEMENTS'			=> '공지사항 정리',
	'PRUNE_FINISHED_POLLS'			=> '닫힌 투표 정리',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> '투표가 종료된 글을 제거합니다.',
	'PRUNE_FORUM_CONFIRM'			=> '지정한 설정으로 선택한 포럼을 정리하시겠습니까? 삭제되면 정리된 게시물과 글을 복구할 수 없습니다.',
	'PRUNE_NOT_POSTED'				=> '마지막 게시 이후 일수',
	'PRUNE_NOT_VIEWED'				=> '마지막으로 본 이후 일수',
	'PRUNE_OLD_POLLS'				=> '오래된 투표 정리',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> '투표일에 투표하지 않은 투표가 있는 글을 제거했습니다.',
	'PRUNE_STICKY'					=> '스티키 정리하기',
	'PRUNE_SUCCESS'					=> '포럼 정리에 성공했습니다.',

	'TOPICS_PRUNED'		=> '글 정리',
));
