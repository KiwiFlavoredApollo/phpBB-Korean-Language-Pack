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
	'ATTACHMENT'						=> '첨부파일',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> '첨부파일 기능이 비활성화되었습니다.',

	'BOOKMARK_ADDED'		=> '글을 북마크에 추가했습니다.',
	'BOOKMARK_ERR'			=> '글을 북마크에 추가하지 못했습니다. 다시 시도해 주세요.',
	'BOOKMARK_REMOVED'		=> '글을 북마크에서 제거했습니다.',
	'BOOKMARK_TOPIC'		=> '북마크에 추가하기',
	'BOOKMARK_TOPIC_REMOVE'	=> '북마크에서 제거하기',
	'BUMPED_BY'				=> '%2$s에 %1$s이(가) 마지막으로 끌어올렸습니다.',
	'BUMP_TOPIC'			=> '끌어올리기',

	'DELETE_TOPIC'			=> '글 삭제하기',
	'DELETED_INFORMATION'	=> '%2$s에 %1$s에 의해 삭제됨',
	'DISAPPROVE'					=> '비승인',
	'DOWNLOAD_NOTICE'		=> '이 게시물에 첨부된 파일을 보는 데 필요한 권한이 없습니다.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> '%2$s님이 %3$s에 마지막으로 수정했으며 총 %1$d번 수정했습니다.',
		2	=> '%2$s님이 %3$s에 마지막으로 수정했으며 총 %1$d번 수정했습니다.',
	),
	'EMAIL_TOPIC'			=> '이메일로 보내기',
	'ERROR_NO_ATTACHMENT'	=> '선택한 첨부파일이 더 이상 존재하지 않습니다.',

	'FILE_NOT_FOUND_404'	=> '<strong>%s</strong> 파일이 존재하지 않습니다.',
	'FORK_TOPIC'			=> '글 복사하기',
	'FULL_EDITOR'			=> '전체 편집기 &amp; 미리보기',

	'LINKAGE_FORBIDDEN'		=> '귀하는 이 사이트를 보거나 다운로드하거나 링크할 권한이 없습니다.',
	'LOGIN_NOTIFY_TOPIC'	=> '이 글에 대한 알림을 받았습니다. 이 글을 보려면 로그인하십시오.',
	'LOGIN_VIEWTOPIC'		=> '이 글을 보려면 게시판에 등록하고 로그인해야 합니다.',

	'MAKE_ANNOUNCE'				=> '"포럼공지글"로 변경하기',
	'MAKE_GLOBAL'				=> '"전체공지글"로 변경하기',
	'MAKE_NORMAL'				=> '"일반글"로 변경하기',
	'MAKE_STICKY'				=> '"고정글"로 변경하기',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> '<strong>%d</strong> 옵션을 선택할 수 있습니다.',
		2	=> '최대 <strong>%d</strong>개의 옵션을 선택할 수 있습니다.',
	),
	'MISSING_INLINE_ATTACHMENT'	=> '첨부파일 <strong>%s</strong>을(를) 더 이상 사용할 수 없습니다.',
	'MOVE_TOPIC'				=> '글 옮기기',

	'NO_ATTACHMENT_SELECTED'=> '다운로드하거나 볼 첨부파일을 선택하지 않았습니다.',
	'NO_NEWER_TOPICS'		=> '이 포럼에는 새글이 없습니다.',
	'NO_OLDER_TOPICS'		=> '이 포럼에는 이전 글이 없습니다.',
	'NO_UNREAD_POSTS'		=> '이 글에 대해 읽지 않은 새 게시물이 없습니다',
	'NO_VOTE_OPTION'		=> '투표할 때 옵션을 지정해야 합니다.',
	'NO_VOTES'				=> '투표가 없습니다',
	'NO_AUTH_PRINT_TOPIC'	=> '글을 인쇄할 권한이 없습니다.',

	'POLL_ENDED_AT'			=> '설문조사가 %s에 종료되었습니다.',
	'POLL_RUN_TILL'			=> '설문조사가 %s 에 실행됩니다.',
	'POLL_VOTED_OPTION'		=> '이 옵션에 투표했습니다.',
	'POST_DELETED_RESTORE'	=> '이 게시물은 삭제되었습니다. 복구할 수 있습니다.',
	'PRINT_TOPIC'			=> '인쇄하기',

	'QUICK_MOD'				=> '간편 운영자 도구',
	'QUICKREPLY'			=> '간편 답글',

	'REPLY_TO_TOPIC'		=> '글에 답장',
	'RESTORE'				=> '복원',
	'RESTORE_TOPIC'			=> '글 복원',
	'RETURN_POST'			=> '%s게시물로 돌아가기%s',

	'SUBMIT_VOTE'			=> '투표 제출',

	'TOPIC_TOOLS'			=> '글 도구',
	'TOTAL_VOTES'			=> '총 투표수',

	'UNLOCK_TOPIC'			=> '글 잠금 해제',

	'VIEW_INFO'				=> '게시물 세부정보',
	'VIEW_NEXT_TOPIC'		=> '다음 글',
	'VIEW_PREVIOUS_TOPIC'	=> '이전 글',
	'VIEW_RESULTS'			=> '결과 보기',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '게시물 %d개',
		2	=> '%d개의 게시물',
	),
	'VIEW_UNREAD_POST'		=> '읽지 않은 첫 번째 게시물',
	'VOTE_SUBMITTED'		=> '투표가 완료되었습니다.',
	'VOTE_CONVERTED'		=> '변환된 투표에는 투표 변경이 지원되지 않습니다.',

));
