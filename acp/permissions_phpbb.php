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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> '작업',
	'ACL_CAT_CONTENT'		=> '콘텐츠',
	'ACL_CAT_FORUMS'		=> '포럼',
	'ACL_CAT_MISC'			=> '기타',
	'ACL_CAT_PERMISSIONS'	=> '권한',
	'ACL_CAT_PM'			=> '개인 메시지',
	'ACL_CAT_POLLS'			=> '설문조사',
	'ACL_CAT_POST'			=> '게시물',
	'ACL_CAT_POST_ACTIONS'	=> '게시물 작업',
	'ACL_CAT_POSTING'		=> '포스팅',
	'ACL_CAT_PROFILE'		=> '프로필',
	'ACL_CAT_SETTINGS'		=> '설정',
	'ACL_CAT_TOPIC_ACTIONS'	=> '글 작업',
	'ACL_CAT_USER_GROUP'	=> '사용자 &amp; 그룹',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> '프로필, 회원 목록 및 온라인 목록을 볼 수 있음.',
	'ACL_U_CHGNAME'		=> '사용자 이름 변경 가능',
	'ACL_U_CHGPASSWD'	=> '비밀번호 변경 가능',
	'ACL_U_CHGEMAIL'	=> '이메일 주소를 변경가능',
	'ACL_U_CHGAVATAR'	=> '아바타를 변경가능',
	'ACL_U_CHGGRP'		=> '기본 사용자 그룹을 변경가능',
	'ACL_U_CHGPROFILEINFO'	=> '프로필 필드 정보를 변경가능.',

	'ACL_U_ATTACH'		=> '파일 첨부 가능',
	'ACL_U_DOWNLOAD'	=> '파일 다운로드 가능',
	'ACL_U_SAVEDRAFTS'	=> '임시 저장 가능',
	'ACL_U_CHGCENSORS'	=> '단어 검열 기능을 비활성화가능.',
	'ACL_U_SIG'			=> '서명을 사용가능',
	'ACL_U_EMOJI'		=> '글 제목에 이모티콘 및 서식 있는 텍스트 문자를 사용가능.',

	'ACL_U_SENDPM'		=> '비공개 메시지를 보낼 수 있음',
	'ACL_U_MASSPM'		=> '여러 사용자에게 비공개 메시지를 보낼 수 있음.',
	'ACL_U_MASSPM_GROUP'=> '그룹에 비공개 메시지를 보낼 수 있음.',
	'ACL_U_READPM'		=> '비공개 메시지를 읽을 수 있음',
	'ACL_U_PM_EDIT'		=> '자신의 비공개 메시지를 편집가능.',
	'ACL_U_PM_DELETE'	=> '자신의 폴더에서 개인 메시지를 제거가능',
	'ACL_U_PM_FORWARD'	=> '개인 메시지를 전달가능',
	'ACL_U_PM_EMAILPM'	=> '개인 메시지를 이메일로 보낼 수 있음',
	'ACL_U_PM_PRINTPM'	=> '개인 메시지를 인쇄가능',
	'ACL_U_PM_ATTACH'	=> '비공개 메시지에 파일을 첨부가능.',
	'ACL_U_PM_DOWNLOAD'	=> '비공개 메시지에서 파일 다운로드 가능',
	'ACL_U_PM_BBCODE'	=> '개인 메시지에서 BBCode를 사용가능.',
	'ACL_U_PM_SMILIES'	=> '개인 메시지에 스마일을 사용가능.',
	'ACL_U_PM_IMG'		=> '비공개 메시지에 [img] BBCode 태그를 사용가능.',
	'ACL_U_PM_FLASH'	=> '비공개 메시지에 [flash] BBCode 태그를 사용가능.',

	'ACL_U_SENDEMAIL'	=> '이메일을 보낼 수 있음',
	'ACL_U_SENDIM'		=> '인스턴트 메시지를 보낼 수 있음',
	'ACL_U_IGNOREFLOOD'	=> '과도한 제한 무시 가능',
	'ACL_U_HIDEONLINE'	=> '온라인 상태를 숨길 수 있음',
	'ACL_U_VIEWONLINE'	=> '숨겨진 온라인 사용자를 볼 수 있음',
	'ACL_U_SEARCH'		=> '게시판 검색 가능',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> '포럼을 볼 수 있음',
	'ACL_F_LIST_TOPICS' => '글을 볼 수 있음',
	'ACL_F_READ'		=> '포럼을 읽을 수 있음',
	'ACL_F_SEARCH'		=> '포럼 검색 가능',
	'ACL_F_SUBSCRIBE'	=> '포럼 구독 가능',
	'ACL_F_PRINT'		=> '글 인쇄 가능',
	'ACL_F_EMAIL'		=> '글 메일 가능',
	'ACL_F_BUMP'		=> '글 충돌 가능',
	'ACL_F_USER_LOCK'	=> '내 글을 잠글 수 있음',
	'ACL_F_DOWNLOAD'	=> '파일 다운로드 가능',
	'ACL_F_REPORT'		=> '게시물 신고 가능',

	'ACL_F_POST'		=> '새로운글 쓰기 가능',
	'ACL_F_STICKY'		=> '상위고정 사용 가능',
	'ACL_F_ANNOUNCE'	=> '공지사항 쓰기 가능',
	'ACL_F_ANNOUNCE_GLOBAL'	=> '글로벌 공지사항 쓰기 가능',
	'ACL_F_REPLY'		=> '글에 응답가능',
	'ACL_F_EDIT'		=> '자신의 게시물 편집 가능',
	'ACL_F_DELETE'		=> '자신의 게시물을 영구적으로 삭제가능',
	'ACL_F_SOFTDELETE'	=> '자신의 게시물을 일시 삭제가능<br /><em>게시물 승인 권한이 있는 운영자는 일시 삭제된 게시물을 복원 가능 합니다.</em>',
	'ACL_F_IGNOREFLOOD' => '과도한 자료 제한 무시 가능',
	'ACL_F_POSTCOUNT'	=> '게시물 카운터 증가<br /><em>이 설정은 새 게시물에만 영향을 미칩니다.</em>',
	'ACL_F_NOAPPROVE'	=> '승인 없이 게시 가능',

	'ACL_F_ATTACH'		=> '파일 첨부 가능',
	'ACL_F_ICONS'		=> '글/게시물 아이콘 사용할 가능',
	'ACL_F_BBCODE'		=> 'BBCode 사용 가능',
	'ACL_F_FLASH'		=> '[플래시] BBCode 태그 사용 가능',
	'ACL_F_IMG'			=> '[img] BBCode 태그 사용 가능',
	'ACL_F_SIGS'		=> '서명 사용 가능',
	'ACL_F_SMILIES'		=> '스마일 사용 가능',

	'ACL_F_POLL'		=> '설문조사 생성 가능',
	'ACL_F_VOTE'		=> '설문조사에 참여가능',
	'ACL_F_VOTECHG'		=> '기존 투표 변경 가능',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> '게시물 수정 가능',
	'ACL_M_DELETE'		=> '게시물을 완전히 삭제가능',
	'ACL_M_SOFTDELETE'	=> '게시물을 일시 삭제가능<br /><em>게시물 승인 권한이 있는 운영자는 일시 삭제된 게시물을 복원 가능 합니다.</em>',
	'ACL_M_APPROVE'		=> '게시물 승인 및 복원 가능',
	'ACL_M_REPORT'		=> '보고서를 닫고 삭제가능',
	'ACL_M_CHGPOSTER'	=> '글 작성자 변경 가능',

	'ACL_M_MOVE'	=> '글 이동 가능',
	'ACL_M_LOCK'	=> '글을 잠글 수 있음',
	'ACL_M_SPLIT'	=> '글을 나눌 수 있음',
	'ACL_M_MERGE'	=> '글 병합 가능',

	'ACL_M_INFO'		=> '게시물 세부정보를 볼 수 있음',
	'ACL_M_WARN'		=> '경고를 발행가능<br /><em>이 설정은  글로벌적으로만 할당됩니다. 포럼 기반이 아닙니다.</em>', // This moderator setting is only global (and not local)
	'ACL_M_PM_REPORT'	=> '비공개 메시지 보고서를 닫고 삭제가능<br /><em>이 설정은  글로벌적으로만 할당됩니다. 포럼 기반이 아닙니다.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'			=> '차단을 관리가능<br /><em>이 설정은  글로벌적으로만 할당됩니다. 포럼 기반이 아닙니다.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> '보드 설정 변경/업데이트 확인 가능',
	'ACL_A_SERVER'		=> '서버/통신 설정 변경 가능',
	'ACL_A_JABBER'		=> 'Jabber 설정을 변경가능',
	'ACL_A_PHPINFO'		=> 'PHP 설정을 볼 수 있음',

	'ACL_A_FORUM'		=> '포럼 관리 가능',
	'ACL_A_FORUMADD'	=> '새 포럼 추가 가능',
	'ACL_A_FORUMDEL'	=> '포럼 삭제 가능',
	'ACL_A_PRUNE'		=> '포럼 정리 가능',

	'ACL_A_ICONS'		=> '글/게시물 아이콘과 스마일을 변경가능',
	'ACL_A_WORDS'		=> '단어 검열을 변경가능',
	'ACL_A_BBCODE'		=> 'BBCode 태그를 정의가능',
	'ACL_A_ATTACH'		=> '첨부파일 관련 설정 변경 가능',

	'ACL_A_USER'		=> '사용자를 관리가능<br /><em>여기에는 온라인 보기 목록 내에서 사용자 브라우저 에이전트를 보는 것도 포함됩니다.</em>',
	'ACL_A_USERDEL'		=> '사용자 삭제/정리 가능',
	'ACL_A_GROUP'		=> '그룹 관리 가능',
	'ACL_A_GROUPADD'	=> '새 그룹 추가 가능',
	'ACL_A_GROUPDEL'	=> '그룹 삭제 가능',
	'ACL_A_RANKS'		=> '순위 관리 가능',
	'ACL_A_PROFILE'		=> '사용자 정의 프로필 필드를 관리 가능',
	'ACL_A_NAMES'		=> '허용되지 않는 이름 관리 가능',
	'ACL_A_BAN'			=> '차단 관리',

	'ACL_A_VIEWAUTH'	=> '권한 마스크를 볼 수 있음',
	'ACL_A_AUTHGROUPS'	=> '개별 그룹에 대한 권한을 변경가능.',
	'ACL_A_AUTHUSERS'	=> '개별 사용자에 대한 권한을 변경가능',
	'ACL_A_FAUTH'		=> '포럼 권한 클래스를 변경 가능',
	'ACL_A_MAUTH'		=> '운영자 권한 등급을 변경가능.',
	'ACL_A_AAUTH'		=> '관리자 권한 등급을 변경가능.',
	'ACL_A_UAUTH'		=> '사용자 권한 등급을 변경가능',
	'ACL_A_ROLES'		=> '역할 관리 가능',
	'ACL_A_SWITCHPERM'	=> '다른 사람의 권한 사용 가능',

	'ACL_A_STYLES'		=> '스타일 관리 가능',
	'ACL_A_EXTENSIONS'	=> '확장 프로그램 관리 가능',
	'ACL_A_VIEWLOGS'	=> '로그 보기 가능',
	'ACL_A_CLEARLOGS'	=> '로그를 지울 수 있음',
	'ACL_A_MODULES'		=> '모듈 관리 가능',
	'ACL_A_LANGUAGE'	=> '언어팩 관리 가능',
	'ACL_A_EMAIL'		=> '대량의 메일을 보낼 수 있음',
	'ACL_A_BOTS'		=> '봇 관리 가능',
	'ACL_A_REASONS'		=> '신고/거부 사유 관리 가능',
	'ACL_A_BACKUP'		=> '데이터베이스 백업/복원 가능',
	'ACL_A_SEARCH'		=> '검색 백엔드 및 설정 관리 가능',
));
