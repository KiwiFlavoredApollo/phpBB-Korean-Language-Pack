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
	'APPROVE'								=> '승인',
	'ATTACHMENT'						=> '첨부 파일',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> '첨부 파일 기능이 비활성화되었습니다.',

	'BOOKMARK_ADDED'		=> '주제를 북마크에 추가했습니다.',
	'BOOKMARK_ERR'			=> '주제를 북마크에 추가하지 못했습니다. 다시 시도해 주십시오.',
	'BOOKMARK_REMOVED'		=> '주제를 북마크에서 제거했습니다.',
	'BOOKMARK_TOPIC'		=> '주제 북마크',
	'BOOKMARK_TOPIC_REMOVE'	=> '북마크에서 제거',
	'BUMPED_BY'				=> '%1$s님이 %2$s에 마지막으로 끌어올렸습니다.',
	'BUMP_TOPIC'			=> '주제 끌어올리기',

	'DELETE_TOPIC'			=> '주제 삭제',
	'DELETED_INFORMATION'	=> '%1$s님이 %2$s에 삭제했습니다.',
	'DISAPPROVE'					=> '승인 거부',
	'DOWNLOAD_NOTICE'		=> '이 게시물에 첨부된 파일을 볼 권한이 없습니다.',

	'EDITED_TIMES_TOTAL'	=> array(
		1 => '%2$s님이 %3$s에 마지막으로 수정했으며 총 %1$d회 수정했습니다.',
	),
	'EMAIL_TOPIC'			=> '주제를 이메일로 보내기',
	'ERROR_NO_ATTACHMENT'	=> '선택한 첨부 파일이 더 이상 존재하지 않습니다.',

	'FILE_NOT_FOUND_404'	=> '<strong>%s</strong> 파일이 존재하지 않습니다.',
	'FORK_TOPIC'			=> '주제 복사',
	'FULL_EDITOR'			=> '전체 편집기 &amp; 미리보기',

	'LINKAGE_FORBIDDEN'		=> '이 사이트를 보거나, 여기에서 다운로드하거나, 이 사이트로 또는 이 사이트에서 링크할 권한이 없습니다.',
	'LOGIN_NOTIFY_TOPIC'	=> '이 주제에 대한 알림을 받았습니다. 내용을 보려면 로그인하십시오.',
	'LOGIN_VIEWTOPIC'		=> '이 주제를 보려면 게시판에 가입하고 로그인해야 합니다.',

	'MAKE_ANNOUNCE'				=> '“공지”로 변경',
	'MAKE_GLOBAL'				=> '“전체 공지”로 변경',
	'MAKE_NORMAL'				=> '“일반 주제”로 변경',
	'MAKE_STICKY'				=> '“고정”으로 변경',
	'MAX_OPTIONS_SELECT'		=> array(
		1 => '최대 <strong>%d</strong>개의 옵션을 선택할 수 있습니다.',
	),
	'MISSING_INLINE_ATTACHMENT'	=> '첨부 파일 <strong>%s</strong>을(를) 더 이상 사용할 수 없습니다.',
	'MOVE_TOPIC'				=> '주제 이동',

	'NO_ATTACHMENT_SELECTED'=> '다운로드하거나 볼 첨부 파일을 선택하지 않았습니다.',
	'NO_NEWER_TOPICS'		=> '이 포럼에 더 새로운 주제가 없습니다.',
	'NO_OLDER_TOPICS'		=> '이 포럼에 더 오래된 주제가 없습니다.',
	'NO_UNREAD_POSTS'		=> '이 주제에 읽지 않은 새 게시물이 없습니다.',
	'NO_VOTE_OPTION'		=> '투표할 항목을 지정해야 합니다.',
	'NO_VOTES'				=> '투표 없음',
	'NO_AUTH_PRINT_TOPIC'	=> '주제를 인쇄할 권한이 없습니다.',

	'POLL_ENDED_AT'			=> '설문 조사가 %s에 종료되었습니다.',
	'POLL_RUN_TILL'			=> '설문 조사는 %s까지 진행됩니다.',
	'POLL_VOTED_OPTION'		=> '이 항목에 투표했습니다.',
	'POST_DELETED_RESTORE'	=> '이 게시물은 삭제되었습니다. 복구할 수 있습니다.',
	'PRINT_TOPIC'			=> '인쇄용 보기',

	'QUICK_MOD'				=> '빠른 운영자 도구',
	'QUICKREPLY'			=> '빠른 답글',

	'REPLY_TO_TOPIC'		=> '주제에 답글 쓰기',
	'RESTORE'				=> '복원',
	'RESTORE_TOPIC'			=> '주제 복원',
	'RETURN_POST'			=> '%s게시물로 돌아가기%s',

	'SUBMIT_VOTE'			=> '투표하기',

	'TOPIC_TOOLS'			=> '주제 도구',
	'TOTAL_VOTES'			=> '총 투표 수',

	'UNLOCK_TOPIC'			=> '주제 잠금 해제',

	'VIEW_INFO'				=> '게시물 세부 정보',
	'VIEW_NEXT_TOPIC'		=> '다음 주제',
	'VIEW_PREVIOUS_TOPIC'	=> '이전 주제',
	'VIEW_QUOTED_POST'		=> '인용된 게시물 보기',
	'VIEW_RESULTS'			=> '결과 보기',
	'VIEW_TOPIC_POSTS'		=> array(
		1 => '%d개의 게시물',
	),
	'VIEW_UNREAD_POST'		=> '읽지 않은 첫 번째 게시물',
	'VOTE_SUBMITTED'		=> '투표가 등록되었습니다.',
	'VOTE_CONVERTED'		=> '변환된 설문 조사에서는 투표 변경을 지원하지 않습니다.',

));
