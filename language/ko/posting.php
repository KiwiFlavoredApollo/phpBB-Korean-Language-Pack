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
	'ADD_ATTACHMENT'			=> '첨부 파일 업로드',
	'ADD_ATTACHMENT_EXPLAIN'	=> '하나 이상의 파일을 첨부하려면 아래 세부 정보를 입력하십시오.',
	'ADD_FILE'					=> '파일 추가',
	'ADD_POLL'					=> '설문 조사 생성',
	'ADD_POLL_EXPLAIN'			=> '주제에 설문 조사를 추가하지 않으려면 필드를 비워 두십시오.',
	'ALREADY_DELETED'			=> '죄송합니다. 이 메시지는 이미 삭제되었습니다.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> '첨부 파일 설명에 허용되지 않는 문자(이모지)가 포함되어 있습니다.',
	'ATTACH_DISK_FULL'			=> '이 첨부 파일을 게시할 디스크 여유 공간이 충분하지 않습니다.',
	'ATTACH_QUOTA_REACHED'		=> '죄송합니다. 게시판 첨부 파일 할당량에 도달했습니다.',
	'ATTACH_SIG'				=> '서명 첨부(UCP에서 서명을 변경할 수 있음)',

	'BBCODE_A_HELP'				=> '업로드한 첨부 파일을 본문에 삽입: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> '굵은 텍스트: [b]텍스트[/b]',
	'BBCODE_C_HELP'				=> '코드 표시: [code]코드[/code]',
	'BBCODE_D_HELP'				=> '플래시: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> '글꼴 크기: [size=85]작은 텍스트[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s가 <em>꺼져 있음</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s가 <em>켜져 있음</em>',
	'BBCODE_I_HELP'				=> '기울임꼴 텍스트: [i]텍스트[/i]',
	'BBCODE_L_HELP'				=> '목록: [list][*]텍스트[/list]',
	'BBCODE_LISTITEM_HELP'		=> '목록 항목: [*]텍스트',
	'BBCODE_O_HELP'				=> '순서 있는 목록: 예: [list=1][*]첫 번째 항목[/list] 또는 [list=a][*]항목 a[/list]',
	'BBCODE_P_HELP'				=> '이미지 삽입: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> '인용문: [quote]텍스트[/quote]',
	'BBCODE_S_HELP'				=> '글꼴 색상: [color=red]텍스트[/color] 또는 [color=#FF0000]텍스트[/color]',
	'BBCODE_U_HELP'				=> '밑줄 텍스트: [u]텍스트[/u]',
	'BBCODE_W_HELP'				=> 'URL 삽입: [url]http://url[/url] 또는 [url=http://url]URL 텍스트[/url]',
	'BBCODE_Y_HELP'				=> '목록: 목록 요소 추가',
	'BUMP_ERROR'				=> '마지막 게시물 이후 너무 이른 시점에는 이 주제를 끌어올릴 수 없습니다.',

	'CANNOT_DELETE_REPLIED'		=> '죄송합니다. 답변이 없는 게시물만 삭제할 수 있습니다.',
	'CANNOT_EDIT_POST_LOCKED'	=> '이 게시물은 잠겨 있습니다. 더 이상 해당 게시물을 수정할 수 없습니다.',
	'CANNOT_EDIT_TIME'			=> '더 이상 해당 게시물을 수정하거나 삭제할 수 없습니다.',
	'CANNOT_POST_ANNOUNCE'		=> '죄송하지만 공지를 게시할 수 없습니다.',
	'CANNOT_POST_STICKY'		=> '죄송하지만 고정 주제를 게시할 수 없습니다.',
	'CHANGE_TOPIC_TO'			=> '주제 유형 변경',
	'CHARS_POST_CONTAINS'		=> array(
		1 => '메시지에 문자 %1$d개가 포함되어 있습니다.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1 => '서명에 문자 %1$d개가 포함되어 있습니다.',
	),
	'CLOSE_TAGS'				=> '태그 닫기',
	'CURRENT_TOPIC'				=> '현재 주제',

	'DELETE_FILE'				=> '파일 삭제',
	'DELETE_MESSAGE'			=> '메시지 삭제',
	'DELETE_MESSAGE_CONFIRM'	=> '이 메시지를 삭제하시겠습니까?',
	'DELETE_OWN_POSTS'			=> '죄송합니다. 자신의 게시물만 삭제할 수 있습니다.',
	'DELETE_PERMANENTLY'		=> '영구 삭제',
	'DELETE_POST_CONFIRM'		=> '이 게시물을 삭제하시겠습니까?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> '이 게시물을 <strong>영구적으로</strong> 삭제하시겠습니까?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1 => '복구할 수 없도록 게시물 %1$d개를 영구적으로 삭제',
	),
	'DELETE_POSTS_CONFIRM'		=> '이 게시물들을 삭제하시겠습니까?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> '이 게시물들을 <strong>영구적으로</strong> 삭제하시겠습니까?',
	'DELETE_REASON'				=> '삭제 사유',
	'DELETE_REASON_EXPLAIN'		=> '지정된 삭제 사유는 운영자가 볼 수 있습니다.',
	'DELETE_POST_WARN'			=> '이 게시물 삭제',
	'DELETE_TOPIC_CONFIRM'		=> '이 주제를 삭제하시겠습니까?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1 => '복구할 수 없도록 주제 %1$d개를 영구적으로 삭제',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> '이 주제를 <strong>영구적으로</strong> 삭제하시겠습니까?',
	'DELETE_TOPICS_CONFIRM'		=> '이 주제들을 삭제하시겠습니까?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> '이 주제들을 <strong>영구적으로</strong> 삭제하시겠습니까?',
	'DISABLE_BBCODE'			=> 'BBCode 비활성화',
	'DISABLE_MAGIC_URL'			=> 'URL 자동 분석 사용 안 함',
	'DISABLE_SMILIES'			=> '이모티콘 사용 안 함',
	'DISALLOWED_CONTENT'		=> '업로드한 파일이 공격에 이용될 가능성이 있는 것으로 감지되어 업로드가 거부되었습니다.',
	'DISALLOWED_EXTENSION'		=> '확장자 %s은(는) 허용되지 않습니다.',
	'DRAFT_LOADED'				=> '초안을 게시 영역으로 불러왔습니다. 이제 게시물을 완성할 수 있습니다.<br />이 게시물을 제출하면 초안이 삭제됩니다.',
	'DRAFT_LOADED_PM'			=> '초안을 메시지 영역으로 불러왔습니다. 이제 개인 메시지를 완성할 수 있습니다.<br />이 개인 메시지를 제출하면 초안이 삭제됩니다.',
	'DRAFT_SAVED'				=> '초안이 저장되었습니다.',
	'DRAFT_TITLE'				=> '초안 제목',

	'EDIT_REASON'				=> '이 게시물을 수정한 사유',
	'EMPTY_FILEUPLOAD'			=> '업로드된 파일이 비어 있습니다.',
	'EMPTY_MESSAGE'				=> '게시할 때 메시지를 입력해야 합니다.',
	'EMPTY_REMOTE_DATA'			=> '파일을 업로드할 수 없습니다. 파일을 수동으로 업로드해 보십시오.',

	'FLASH_IS_OFF'				=> '[flash]가 <em>꺼져 있음</em>',
	'FLASH_IS_ON'				=> '[flash]가 <em>켜져 있음</em>',
	'FLOOD_ERROR'				=> '마지막 게시물 이후 게시 간격이 너무 짧아 새 게시물을 작성할 수 없습니다.',
	'FONT_COLOR'				=> '글꼴 색상',
	'FONT_COLOR_HIDE'			=> '글꼴 색상 숨기기',
	'FONT_HUGE'					=> '매우 큼',
	'FONT_LARGE'				=> '큼',
	'FONT_NORMAL'				=> '보통',
	'FONT_SIZE'					=> '글꼴 크기',
	'FONT_SMALL'				=> '작음',
	'FONT_TINY'					=> '매우 작음',

	'GENERAL_UPLOAD_ERROR'		=> '%s에 첨부 파일을 업로드할 수 없습니다.',

	'IMAGES_ARE_OFF'			=> '[img]가 <em>꺼져 있음</em>',
	'IMAGES_ARE_ON'				=> '[img]가 <em>켜져 있음</em>',
	'INVALID_FILENAME'			=> '%s은(는) 올바르지 않은 파일 이름입니다.',

	'LOAD'						=> '불러오기',
	'LOAD_DRAFT'				=> '초안 불러오기',
	'LOAD_DRAFT_EXPLAIN'		=> '계속 작성할 초안을 선택할 수 있습니다. 현재 게시물은 취소되고 작성 중인 내용은 모두 삭제됩니다. 초안은 사용자 제어판에서 보거나 수정하거나 삭제할 수 있습니다.',
	'LOGIN_EXPLAIN_BUMP'		=> '이 포럼에서 주제를 끌어올리려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_DELETE'		=> '이 포럼에서 게시물을 삭제하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> '이 포럼 내에서 게시물을 일시 삭제하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_POST'		=> '이 포럼에 게시물을 작성하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_QUOTE'		=> '이 포럼 내에서 게시물을 인용하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_REPLY'		=> '이 포럼의 주제에 답글을 달려면 로그인해야 합니다.',

	'MAX_ATTACHMENT_FILESIZE'	=> '첨부 파일당 최대 파일 크기: %s.',
	'MAX_FONT_SIZE_EXCEEDED'	=> '글꼴 크기는 최대 %d까지만 사용할 수 있습니다.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1 => '플래시 파일의 최대 높이는 %d픽셀입니다.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1 => '플래시 파일의 최대 너비는 %d픽셀입니다.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1 => '이미지의 최대 높이는 %1$d픽셀입니다.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1 => '이미지의 최대 너비는 %d픽셀입니다.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0 => '', // 0은 제한이 없음을 뜻하므로 메시지를 표시하지 않습니다.
		1 => '여기에 메시지를 입력하십시오. 최대 <strong>%d</strong>자까지 입력할 수 있습니다.',
	),
	'MESSAGE_DELETED'			=> '이 메시지는 삭제되었습니다.',
	'MORE_SMILIES'				=> '이모티콘 더 보기',

	'NOTIFY_REPLY'				=> '답글이 게시되면 알림 받기',
	'NOT_UPLOADED'				=> '파일을 업로드할 수 없습니다.',
	'NO_DELETE_POLL_OPTIONS'	=> '기존 설문 선택 항목은 삭제할 수 없습니다.',
	'NO_PM_ICON'				=> 'PM 아이콘 없음',
	'NO_POLL_TITLE'				=> '설문 제목을 입력해야 합니다.',
	'NO_POST'					=> '요청한 게시물이 존재하지 않습니다.',
	'NO_POST_MODE'				=> '지정된 게시 모드가 없습니다.',
	'NO_TEMP_DIR'				=> '임시 폴더를 찾을 수 없거나 쓸 수 없습니다.',

	'PARTIAL_UPLOAD'			=> '업로드된 파일이 부분적으로만 업로드되었습니다.',
	'PHP_UPLOAD_STOPPED'		=> 'PHP 확장 기능이 파일 업로드를 중지했습니다.',
	'PHP_SIZE_NA'				=> '첨부 파일의 파일 크기가 너무 큽니다.<br />php.ini에서 PHP가 정의한 최대 크기를 결정할 수 없습니다.',
	'PHP_SIZE_OVERRUN'			=> '첨부 파일의 크기가 너무 큽니다. 최대 업로드 크기는 %1$d %2$s입니다.<br />이 값은 php.ini에 설정되어 있으며 여기에서 변경할 수 없습니다.',
	'PLACE_INLINE'				=> '인라인 배치',
	'POLL_DELETE'				=> '설문 삭제',
	'POLL_FOR'					=> '설문 조사 기간',
	'POLL_FOR_EXPLAIN'			=> '종료되지 않는 설문 조사로 설정하려면 0을 입력하십시오.',
	'POLL_MAX_OPTIONS'			=> '사용자당 선택 수',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> '각 사용자가 투표할 때 선택할 수 있는 항목 수입니다.',
	'POLL_OPTIONS'				=> '설문 선택 항목',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1 => '각 선택 항목을 새 줄에 입력하십시오. 최대 <strong>%d</strong>개까지 입력할 수 있습니다.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1 => '각 선택 항목을 새 줄에 입력하십시오. 최대 <strong>%d</strong>개까지 입력할 수 있습니다. 항목을 제거하거나 추가하면 이전의 모든 투표가 초기화됩니다.',
	),
	'POLL_QUESTION'				=> '설문 조사 질문',
	'POLL_TITLE_TOO_LONG'		=> '설문 제목은 100자 미만이어야 합니다.',
	'POLL_TITLE_COMP_TOO_LONG'	=> '처리된 설문 제목의 크기가 너무 큽니다. BBCode나 이모티콘을 제거해 보십시오.',
	'POLL_VOTE_CHANGE'			=> '재투표 허용',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> '사용하면 사용자가 자신의 투표를 변경할 수 있습니다.',
	'POSTED_ATTACHMENTS'		=> '게시된 첨부 파일',
	'POST_APPROVAL_NOTIFY'		=> '게시물이 승인되면 알려드립니다.',
	'POST_CONFIRMATION'			=> '게시물 확인',
	'POST_CONFIRM_EXPLAIN'		=> '자동 게시를 방지하기 위해 게시판에서 확인 코드를 입력하도록 요구합니다. 아래 이미지에 표시된 코드를 입력하십시오. 시각 장애가 있거나 코드를 읽을 수 없다면 %s게시판 관리자%s에게 문의하십시오.',
	'POST_DELETED'				=> '이 게시물은 삭제되었습니다.',
	'POST_EDITED'				=> '이 게시물은 수정되었습니다.',
	'POST_EDITED_MOD'			=> '이 게시물은 편집되었지만 공개적으로 보기 전에 운영자의 승인을 받아야 합니다.',
	'POST_GLOBAL'				=> '전역 공지',
	'POST_ICON'					=> '게시물 아이콘',
	'POST_NORMAL'				=> '일반 주제',
	'POST_REVIEW'				=> '게시물 검토',
	'POST_REVIEW_EDIT'			=> '게시물 검토',
	'POST_REVIEW_EDIT_EXPLAIN'	=> '이 게시물은 편집하는 동안 다른 사용자에 의해 변경되었습니다. 이 게시물의 현재 버전을 검토하고 수정 사항을 조정할 수 있습니다.',
	'POST_REVIEW_EXPLAIN'		=> '이 주제에 새 게시물이 하나 이상 작성되었습니다. 이를 참고하여 게시물을 검토하십시오.',
	'POST_STORED'				=> '메시지를 게시했습니다.',
	'POST_STORED_MOD'			=> '메시지가 제출되었지만 공개되기 전에 운영자의 승인을 받아야 합니다.',
	'POST_TOPIC_AS'				=> '주제 유형',
	'PROGRESS_BAR'				=> '진행률 표시줄',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1 => '인용문은 최대 %d단계까지 중첩할 수 있습니다.',
	),
	'QUOTE_NO_NESTING'			=> '인용문 안에 다른 인용문을 넣을 수 없습니다.',

	'REMOTE_UPLOAD_TIMEOUT'		=> '요청 시간이 초과되어 지정된 파일을 업로드할 수 없습니다.',
	'SAVE'						=> '저장',
	'SAVE_DATE'					=> '저장 시각',
	'SAVE_DRAFT'				=> '초안 저장',
	'SAVE_DRAFT_CONFIRM'		=> '저장된 초안에는 제목과 메시지만 포함되며 다른 요소는 제거됩니다. 지금 초안을 저장하시겠습니까?',
	'SMILIES'					=> '이모티콘',
	'SMILIES_ARE_OFF'			=> '이모티콘이 <em>꺼져 있음</em>',
	'SMILIES_ARE_ON'			=> '이모티콘이 <em>켜져 있음</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> '고정 주제/공지/전역 공지 기간',
	'STICK_TOPIC_FOR'			=> '주제 고정 기간',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '고정 주제, 공지 또는 전역 공지가 만료되지 않게 하려면 0을 입력하십시오. 이 기간은 게시 날짜를 기준으로 계산됩니다.',
	'STYLES_TIP'				=> '팁: 선택한 텍스트에 스타일을 빠르게 적용할 수 있습니다.',

	'TOO_FEW_CHARS'				=> '메시지에 포함된 문자가 너무 적습니다.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1 => '문자를 최소 %1$d개 입력해야 합니다.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> '설문 선택 항목을 두 개 이상 입력해야 합니다.',
	'TOO_MANY_ATTACHMENTS'		=> '첨부 파일을 더 추가할 수 없습니다. 최대 %d개까지 허용됩니다.',
	'TOO_MANY_CHARS'			=> '메시지에 너무 많은 문자가 포함되어 있습니다.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		1 => '허용되는 최대 문자 수는 %1$d입니다.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> '입력한 설문 선택 항목이 너무 많습니다.',
	'TOO_MANY_SMILIES'			=> '메시지에 이모티콘이 너무 많습니다. 허용되는 최대 이모티콘 수는 %d개입니다.',
	'TOO_MANY_URLS'				=> '메시지에 너무 많은 URL이 포함되어 있습니다. 허용되는 최대 URL 수는 %d개입니다.',
	'TOO_MANY_USER_OPTIONS'		=> '사용자당 선택 수는 설문 선택 항목 수보다 많을 수 없습니다.',
	'TOPIC_BUMPED'				=> '주제를 성공적으로 끌어올렸습니다.',

	'UNAUTHORISED_BBCODE'		=> '특정 BBCode: %s을(를) 사용할 수 없습니다.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> '메시지에 지원되지 않는 다음 문자가 포함되어 있습니다.<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> '제목에 지원되지 않는 다음 문자가 포함되어 있습니다.<br />%s',
	'UPDATE_COMMENT'			=> '첨부 파일 설명 수정',
	'URL_INVALID'				=> '지정한 URL이 잘못되었습니다.',
	'URL_NOT_FOUND'				=> '지정한 파일을 찾을 수 없습니다.',
	'URL_IS_OFF'				=> '[url]이 <em>꺼져 있음</em>',
	'URL_IS_ON'					=> '[url]이 <em>켜져 있음</em>',
	'USER_CANNOT_BUMP'			=> '이 포럼에서는 주제를 끌어올릴 수 없습니다.',
	'USER_CANNOT_DELETE'		=> '이 포럼에서 게시물을 삭제할 수 없습니다.',
	'USER_CANNOT_EDIT'			=> '이 포럼에서는 게시물을 수정할 수 없습니다.',
	'USER_CANNOT_REPLY'			=> '이 포럼에서는 답글을 달 수 없습니다.',
	'USER_CANNOT_FORUM_POST'	=> '이 포럼 유형은 게시 기능을 지원하지 않으므로 게시 작업을 수행할 수 없습니다.',

	'VIEW_MESSAGE'				=> '%s제출된 메시지 보기%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%s제출한 비공개 메시지 보기%s',

	'WRONG_FILESIZE'			=> '파일이 너무 큽니다. 허용되는 최대 크기는 %1$d %2$s입니다.',
	'WRONG_SIZE'				=> '이미지는 너비가 최소 %1$s, 높이가 %2$s, 너비가 최대 %3$s, 높이가 %4$s여야 합니다. 제출된 이미지는 너비가 %5$s이고 높이가 %6$s입니다.',
));
