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
	'ADD_ATTACHMENT'			=> '첨부파일 업로드',
	'ADD_ATTACHMENT_EXPLAIN'	=> '하나 이상의 파일을 첨부하려면 아래 세부 정보를 입력하십시오.',
	'ADD_FILE'					=> '파일 추가',
	'ADD_POLL'					=> '설문조사 생성',
	'ADD_POLL_EXPLAIN'			=> '글에 설문 조사를 추가하지 않으려면 필드를 비워 두십시오.',
	'ALREADY_DELETED'			=> '죄송합니다. 이 메시지는 이미 삭제되었습니다.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> '첨부 댓글에 금지된 문자가 포함되어 있습니다.',
	'ATTACH_DISK_FULL'			=> '이 첨부파일을 게시할 디스크 여유 공간이 충분하지 않습니다.',
	'ATTACH_QUOTA_REACHED'		=> '죄송합니다. 게시판 첨부파일 할당량에 도달했습니다.',
	'ATTACH_SIG'				=> '서명 첨부(UCP를 통해 서명을 변경할 수 있음',

	'BBCODE_A_HELP'				=> '인라인 업로드 첨부파일: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> '굵은 텍스트: [b]텍스트[/b]',
	'BBCODE_C_HELP'				=> '코드 표시: [code]코드[/code]',
	'BBCODE_D_HELP'				=> '플레쉬: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> '글꼴 크기: [size=85]작은 텍스트[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s 가 <em>꺼짐</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s 가 <em>켜짐</em>',
	'BBCODE_I_HELP'				=> '기울임꼴 텍스트: [i]텍스트[/i]',
	'BBCODE_L_HELP'				=> '목록: [list][*]텍스트[/list]',
	'BBCODE_LISTITEM_HELP'		=> '목록 항목: [*]텍스트',
	'BBCODE_O_HELP'				=> '주문 목록: 예. [list=1][*]첫 번째 포인트[/list] 또는 [list=a][*]포인트 a[/list]',
	'BBCODE_P_HELP'				=> '이미지 삽입: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> '인용문: [quote]텍스트[/quote]',
	'BBCODE_S_HELP'				=> '글꼴색: [color=red]텍스트[/color] 또는 [color=#FF0000]텍스트[/color]',
	'BBCODE_U_HELP'				=> '밑줄 텍스트: [u]텍스트[/u]',
	'BBCODE_W_HELP'				=> 'URL 삽입: [url]http://url[/url] 또는 [url=http://url]URL text[/url]',
	'BBCODE_Y_HELP'				=> '목록: 목록 요소 추가',
	'BUMP_ERROR'				=> '마지막 게시물 이후에 이 글을 너무 빨리 범할 수 없습니다.',

	'CANNOT_DELETE_REPLIED'		=> '죄송합니다. 답변이 없는 게시물만 삭제할 수 있습니다.',
	'CANNOT_EDIT_POST_LOCKED'	=> '이 게시물은 잠겨 있습니다. 더 이상 해당 게시물을 수정할 수 없습니다.',
	'CANNOT_EDIT_TIME'			=> '더 이상 해당 게시물을 수정하거나 삭제할 수 없습니다.',
	'CANNOT_POST_ANNOUNCE'		=> '죄송하지만 공지글을 게시할 수 없습니다.',
	'CANNOT_POST_STICKY'		=> '죄송하지만 고정글을 게시할 수 없습니다.',
	'CHANGE_TOPIC_TO'			=> '글 유형을 다음으로 변경',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> '메시지에 %1$d 문자가 포함되어 있습니다.',
		2	=> '메시지에 %1$d 문자가 포함되어 있습니다.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> '서명에 %1$d자가 포함되어 있습니다.',
		2	=> '서명에 %1$d자가 포함되어 있습니다.',
	),
	'CLOSE_TAGS'				=> '태그 닫기',
	'CURRENT_TOPIC'				=> '현재 글',

	'DELETE_FILE'				=> '파일 삭제',
	'DELETE_MESSAGE'			=> '메시지 삭제',
	'DELETE_MESSAGE_CONFIRM'	=> '이 메시지를 삭제하시겠습니까?',
	'DELETE_OWN_POSTS'			=> '죄송합니다. 자신의 게시물만 삭제할 수 있습니다.',
	'DELETE_PERMANENTLY'		=> '완전히 삭제',
	'DELETE_POST_CONFIRM'		=> '이 게시물을 삭제하시겠습니까?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> '이 게시물을 <strong>완전히</strong> 삭제하시겠습니까?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> '복구할 수 없도록 이 게시물을 영구 삭제합니다.',
		2	=> '복구할 수 없도록 %1$d개의 게시물을 영구적으로 삭제',
	),
	'DELETE_POSTS_CONFIRM'		=> '이 게시물을 삭제하시겠습니까?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> '이 게시물을 <strong>완전히</strong> 삭제하시겠습니까?',
	'DELETE_REASON'				=> '삭제 사유',
	'DELETE_REASON_EXPLAIN'		=> '지정된 삭제 사유는 운영자가 볼 수 있습니다.',
	'DELETE_POST_WARN'			=> '이 게시물 삭제',
	'DELETE_TOPIC_CONFIRM'		=> '이 글을 삭제하시겠습니까?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> '이 글을 영구적으로 삭제하여 복구할 수 없습니다.',
		2	=> '복구할 수 없도록 %1$d 글을 완전히 삭제',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> '이 글을 <strong>완전히</strong> 삭제하시겠습니까?',
	'DELETE_TOPICS_CONFIRM'		=> '이 글을 삭제하시겠습니까?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> '이 글을 <strong>완전히</strong> 삭제하시겠습니까?',
	'DISABLE_BBCODE'			=> 'BBCode 비활성화',
	'DISABLE_MAGIC_URL'			=> 'URL을 자동으로 구문 분석하지 않음',
	'DISABLE_SMILIES'			=> '스마일 비활성화',
	'DISALLOWED_CONTENT'		=> '업로드된 파일이 가능한 공격 벡터로 식별되었기 때문에 업로드가 거부되었습니다.',
	'DISALLOWED_EXTENSION'		=> '확장자 %s은(는) 허용되지 않습니다.',
	'DRAFT_LOADED'				=> '초안이 게시 영역에 로드되었습니다. 지금 게시물을 완료하는 것이 좋습니다.<br />이 게시물을 제출하면 초안이 삭제됩니다.',
	'DRAFT_LOADED_PM'			=> '초안이 메시지 영역에 로드되었습니다. 지금 비공개 메시지를 완료할 수 있습니다.<br />이 비공개 메시지를 제출하면 초안이 삭제됩니다.',
	'DRAFT_SAVED'				=> '초안이  저장되었습니다.',
	'DRAFT_TITLE'				=> '초안 제목',

	'EDIT_REASON'				=> '이 글을 수정한 사유',
	'EMPTY_FILEUPLOAD'			=> '업로드된 파일이 비어 있습니다.',
	'EMPTY_MESSAGE'				=> '게시할 때 메시지를 입력해야 합니다.',
	'EMPTY_REMOTE_DATA'			=> '파일을 업로드할 수 없습니다. 파일을 수동으로 업로드해 보십시오.',

	'FLASH_IS_OFF'				=> '[플래시] 가 <em>꺼짐</em>',
	'FLASH_IS_ON'				=> '[플래시] 가 <em>켜짐</em>',
	'FLOOD_ERROR'				=> '마지막 게시물 이후 게시간격이 짧아 다른 게시물을 작성할 수 없습니다.',
	'FONT_COLOR'				=> '글꼴 색상',
	'FONT_COLOR_HIDE'			=> '글꼴 색상 숨기기',
	'FONT_HUGE'					=> '매우큼',
	'FONT_LARGE'				=> '큼',
	'FONT_NORMAL'				=> '보통',
	'FONT_SIZE'					=> '글꼴 크기',
	'FONT_SMALL'				=> '작음',
	'FONT_TINY'					=> '매우작음',

	'GENERAL_UPLOAD_ERROR'		=> '%s에 첨부파일을 업로드할 수 없습니다.',

	'IMAGES_ARE_OFF'			=> '[img] 는 <em>꺼짐</em>',
	'IMAGES_ARE_ON'				=> '[img] 는 <em>켜짐</em>',
	'INVALID_FILENAME'			=> '%s은(는) 잘못된 파일 이름입니다',

	'LOAD'						=> '로드',
	'LOAD_DRAFT'				=> '초안 로드',
	'LOAD_DRAFT_EXPLAIN'		=> '여기에서 계속 쓰고 싶은 초안을 선택할 수 있습니다. 현재 게시물이 취소되고 현재 게시물 내용이 모두 삭제됩니다. 사용자 제어판에서 초안을 보고 편집하고 삭제합니다.',
	'LOGIN_EXPLAIN_BUMP'		=> '이 포럼 내에서 글을 범프하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_DELETE'		=> '이 포럼에서 게시물을 삭제하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> '이 포럼 내에서 게시물을 일시 삭제하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_POST'		=> '이 포럼에 글을 올리려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_QUOTE'		=> '이 포럼 내에서 게시물을 인용하려면 로그인해야 합니다.',
	'LOGIN_EXPLAIN_REPLY'		=> '이 포럼의 글에 응답하려면 로그인해야 합니다.',

	'MAX_ATTACHMENT_FILESIZE'	=> '첨부파일당 최대 파일크기: %s.',
	'MAX_FONT_SIZE_EXCEEDED'	=> '글꼴은 최대 %d개까지만 사용할 수 있습니다.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> '플래시 파일의 높이는 최대 %d픽셀입니다.',
		2	=> '플래시 파일의 높이는 최대 %d픽셀입니다.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> '플래시 파일의 너비는 최대 %d픽셀입니다.',
		2	=> '플래시 파일의 너비는 최대 %d픽셀입니다.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> '이미지의 높이는 최대 %1$d픽셀입니다.',
		2	=> '이미지의 높이는 최대 %1$d픽셀입니다.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> '이미지의 너비는 최대 %d픽셀입니다.',
		2	=> '이미지의 너비는 최대 %d픽셀입니다.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> '여기에 메시지를 입력하십시오. <strong>%d</strong>자를 초과할 수 없습니다.',
		2	=> '여기에 메시지를 입력하세요. <strong>%d</strong>자 이하여야 합니다.',
	),
	'MESSAGE_DELETED'			=> '이 메시지는  삭제되었습니다.',
	'MORE_SMILIES'				=> '더 많은 스마일 보기',

	'NOTIFY_REPLY'				=> '답글이 게시되면 알림',
	'NOT_UPLOADED'				=> '파일을 업로드할 수 없습니다.',
	'NO_DELETE_POLL_OPTIONS'	=> '기존 투표 옵션은 삭제할 수 없습니다.',
	'NO_PM_ICON'				=> 'PM 아이콘 없음',
	'NO_POLL_TITLE'				=> '설문 제목을 입력해야 합니다.',
	'NO_POST'					=> '요청한 게시물이 존재하지 않습니다.',
	'NO_POST_MODE'				=> '지정된 게시 모드가 없습니다.',
	'NO_TEMP_DIR'				=> '임시 폴더를 찾을 수 없거나 쓸 수 없습니다.',

	'PARTIAL_UPLOAD'			=> '업로드된 파일이 부분적으로만 업로드되었습니다.',
	'PHP_UPLOAD_STOPPED'		=> 'PHP 확장 프로그램이 파일 업로드를 중지했습니다.',
	'PHP_SIZE_NA'				=> '첨부파일의 파일 크기가 너무 큽니다.<br />php.ini에서 PHP가 정의한 최대 크기를 결정할 수 없습니다.',
	'PHP_SIZE_OVERRUN'			=> '첨부파일의 파일 크기가 너무 커서 최대 업로드 크기는 %1$d %2$s입니다.<br />이것은 php.ini에 설정되어 있으며 무시할 수 없습니다.',
	'PLACE_INLINE'				=> '인라인 배치',
	'POLL_DELETE'				=> '설문 삭제',
	'POLL_FOR'					=> '설문조사 실행',
	'POLL_FOR_EXPLAIN'			=> '종료 기간이 없이 투표를 하려면 0을 입력하십시오.',
	'POLL_MAX_OPTIONS'			=> '사용자별 옵션',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> '이것은 각 사용자가 투표할 때 선택할 수 있는 옵션의 수입니다.',
	'POLL_OPTIONS'				=> '투표 옵션',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> '각 옵션을 새 줄에 배치합니다. <strong>%d</strong> 옵션을 입력할 수 있습니다.',
		2	=> '각 옵션을 새 줄에 배치합니다. 최대 <strong>%d</strong>개의 옵션을 입력할 수 있습니다.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> '각 옵션을 새 줄에 배치합니다. <strong>%d</strong> 옵션을 입력할 수 있습니다. 옵션을 제거하거나 추가하면 이전의 모든 투표가 재설정됩니다.',
		2	=> '각 옵션을 새 줄에 배치합니다. 최대 <strong>%d</strong>개의 옵션을 입력할 수 있습니다. 옵션을 제거하거나 추가하면 이전의 모든 투표가 재설정됩니다.',
	),
	'POLL_QUESTION'				=> '설문조사 질문',
	'POLL_TITLE_TOO_LONG'		=> '설문 제목은 100자 미만이어야 합니다.',
	'POLL_TITLE_COMP_TOO_LONG'	=> '설문 제목의 구문 분석 크기가 너무 큽니다. BBCode 또는 스마일을 제거하는 것이 좋습니다.',
	'POLL_VOTE_CHANGE'			=> '재투표 허용',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> '활성화된 경우 에도 사용자는 투표를 변경할 수 있습니다',
	'POSTED_ATTACHMENTS'		=> '게시된 첨부파일',
	'POST_APPROVAL_NOTIFY'		=> '게시물이 승인되면 알려드립니다.',
	'POST_CONFIRMATION'			=> '게시물 확인',
	'POST_CONFIRM_EXPLAIN'		=> '자동 게시를 방지하려면 게시판에서 확인 코드를 입력해야 합니다. 코드는 아래에 표시되어야 하는 이미지에 표시됩니다. 시각 장애가 있거나 이 코드를 읽을 수 없는 경우 %s보드 관리자%s에게 문의하십시오',
	'POST_DELETED'				=> '이 게시물은  삭제되었습니다.',
	'POST_EDITED'				=> '이 게시물은  수정되었습니다.',
	'POST_EDITED_MOD'			=> '이 게시물은  편집되었지만 공개적으로 보기 전에 운영자의 승인을 받아야 합니다.',
	'POST_GLOBAL'				=> '전체공지글',
	'POST_ICON'					=> '게시물 아이콘',
	'POST_NORMAL'				=> '일반글',
	'POST_REVIEW'				=> '리뷰 게시',
	'POST_REVIEW_EDIT'			=> '리뷰 게시 편집',
	'POST_REVIEW_EDIT_EXPLAIN'	=> '이 게시물은 편집하는 동안 다른 사용자에 의해 변경되었습니다. 이 게시물의 현재 버전을 검토하고 수정 사항을 조정할 수 있습니다.',
	'POST_REVIEW_EXPLAIN'		=> '이 글에 대해 하나 이상의 새 게시물이 작성되었습니다. 이에 비추어 게시물을 검토할 수 있습니다.',
	'POST_STORED'				=> '이 메시지는  게시되었습니다.',
	'POST_STORED_MOD'			=> '이 메시지는  제출되었지만 공개적으로 보려면 운영자의 승인을 받아야 합니다.',
	'POST_TOPIC_AS'				=> '게시 방식',
	'PROGRESS_BAR'				=> '진행 표시 줄',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> '서로 %d개의 인용문만 포함할 수 있습니다.',
		2	=> '서로 %d개의 인용문만 포함할 수 있습니다.',
	),
	'QUOTE_NO_NESTING'			=> '서로 따옴표를 포함할 수 없습니다.',

	'REMOTE_UPLOAD_TIMEOUT'		=> '요청 시간이 초과되어 지정된 파일을 업로드할 수 없습니다.',
	'SAVE'						=> '저장',
	'SAVE_DATE'					=> '저장 위치',
	'SAVE_DRAFT'				=> '임시 보관함에 저장',
	'SAVE_DRAFT_CONFIRM'		=> '저장된 초안에는 제목과 메시지만 포함되며 다른 요소는 제거됩니다. 지금 초안을 저장하시겠습니까?',
	'SMILIES'					=> '스마일',
	'SMILIES_ARE_OFF'			=> '스마일 <em>꺼짐</em>',
	'SMILIES_ARE_ON'			=> '스마일 <em>켜짐</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> '고정/포럼공지/전체공지 시간제한',
	'STICK_TOPIC_FOR'			=> '고정 기간',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '시간제한 없는 고정/포럼공지/전체공지의 경우 0을 입력합니다. 이 숫자는 게시날짜를 기준으로 합니다.',
	'STYLES_TIP'				=> '팁: 선택한 텍스트에 스타일을 빠르게 적용할 수 있습니다.',

	'TOO_FEW_CHARS'				=> '메시지에 포함된 문자가 너무 적습니다.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> '최소 %1$d자를 입력해야 합니다.',
		2	=> '최소 %1$d자를 입력해야 합니다.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> '투표 옵션을 두 개 이상 입력해야 합니다.',
	'TOO_MANY_ATTACHMENTS'		=> '다른 첨부파일을 추가할 수 없습니다. 최대 %d개입니다.',
	'TOO_MANY_CHARS'			=> '메시지에 너무 많은 문자가 포함되어 있습니다.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		1	=> '허용되는 최대 문자 수는 %1$d입니다.',
		2	=> '허용되는 최대 문자 수는 %1$d입니다.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> '너무 많은 투표 옵션을 입력하려고 했습니다.',
	'TOO_MANY_SMILIES'			=> '귀하의 메시지에는 너무 많은 스마일이 포함되어 있습니다. 허용되는 최대 스마일 수는 %d개입니다.',
	'TOO_MANY_URLS'				=> '메시지에 너무 많은 URL이 포함되어 있습니다. 허용되는 최대 URL 수는 %d개입니다.',
	'TOO_MANY_USER_OPTIONS'		=> '기존 폴링 옵션보다 사용자당 더 많은 옵션을 지정할 수 없습니다.',
	'TOPIC_BUMPED'				=> '글이  충돌했습니다.',

	'UNAUTHORISED_BBCODE'		=> '특정 BBCode: %s을(를) 사용할 수 없습니다.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> '메시지에 지원되지 않는 다음 문자가 포함되어 있습니다.<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> '제목에 지원되지 않는 다음 문자가 포함되어 있습니다.<br />%s',
	'UPDATE_COMMENT'			=> '댓글 업데이트',
	'URL_INVALID'				=> '지정한 URL이 잘못되었습니다.',
	'URL_NOT_FOUND'				=> '지정한 파일을 찾을 수 없습니다.',
	'URL_IS_OFF'				=> '[url] 이 <em>꺼짐</em>',
	'URL_IS_ON'					=> '[url] 이 <em>켜짐</em>',
	'USER_CANNOT_BUMP'			=> '이 포럼에서는 글을 범프할 수 없습니다.',
	'USER_CANNOT_DELETE'		=> '이 포럼에서 게시물을 삭제할 수 없습니다.',
	'USER_CANNOT_EDIT'			=> '이 포럼에서는 게시물을 수정할 수 없습니다',
	'USER_CANNOT_REPLY'			=> '이 포럼에서는 답글을 달 수 없습니다.',
	'USER_CANNOT_FORUM_POST'	=> '지원하지 않는 포럼 유형으로 인해 이 포럼에서 게시 작업을 수행할 수 없습니다.',

	'VIEW_MESSAGE'				=> '%s제출된 메시지 보기%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%s제출한 비공개 메시지 보기%s',

	'WRONG_FILESIZE'			=> '파일이 너무 큼니다 허용되는 최대 크기는 %1$d %2$s입니다.',
	'WRONG_SIZE'				=> '이미지는 너비가 최소 %1$s, 높이가 %2$s, 너비가 최대 %3$s, 높이가 %4$s여야 합니다. 제출된 이미지는 너비가 %5$s이고 높이가 %6$s입니다.',
));
