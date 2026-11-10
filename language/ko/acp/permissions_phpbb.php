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
	'ACL_CAT_POLLS'			=> '설문',
	'ACL_CAT_POST'			=> '게시물',
	'ACL_CAT_POST_ACTIONS'	=> '게시물 작업',
	'ACL_CAT_POSTING'		=> '게시',
	'ACL_CAT_PROFILE'		=> '프로필',
	'ACL_CAT_SETTINGS'		=> '설정',
	'ACL_CAT_TOPIC_ACTIONS'	=> '주제 작업',
	'ACL_CAT_USER_GROUP'	=> '사용자 &amp; 그룹',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> '프로필, 회원 목록 및 온라인 사용자 목록 보기 가능',
	'ACL_U_CHGNAME'		=> '사용자 이름 변경 가능',
	'ACL_U_CHGPASSWD'	=> '비밀번호 변경 가능',
	'ACL_U_CHGEMAIL'	=> '이메일 주소 변경 가능',
	'ACL_U_CHGAVATAR'	=> '아바타 변경 가능',
	'ACL_U_CHGGRP'		=> '기본 사용자 그룹 변경 가능',
	'ACL_U_CHGPROFILEINFO'	=> '프로필 필드 정보 변경 가능',

	'ACL_U_ATTACH'		=> '파일 첨부 가능',
	'ACL_U_DOWNLOAD'	=> '파일 다운로드 가능',
	'ACL_U_SAVEDRAFTS'	=> '초안 저장 가능',
	'ACL_U_CHGCENSORS'	=> '단어 검열 비활성화 가능',
	'ACL_U_SIG'			=> '서명 사용 가능',
	'ACL_U_EMOJI'		=> '주제 제목에 이모지와 서식 있는 문자 사용 가능',

	'ACL_U_SENDPM'		=> '개인 메시지 보내기 가능',
	'ACL_U_MASSPM'		=> '여러 사용자에게 개인 메시지 보내기 가능',
	'ACL_U_MASSPM_GROUP'=> '그룹에 개인 메시지 보내기 가능',
	'ACL_U_READPM'		=> '개인 메시지 읽기 가능',
	'ACL_U_PM_EDIT'		=> '자신의 개인 메시지 편집 가능',
	'ACL_U_PM_DELETE'	=> '자신의 폴더에서 개인 메시지 삭제 가능',
	'ACL_U_PM_FORWARD'	=> '개인 메시지 전달 가능',
	'ACL_U_PM_EMAILPM'	=> '개인 메시지를 이메일로 보내기 가능',
	'ACL_U_PM_PRINTPM'	=> '개인 메시지 인쇄 가능',
	'ACL_U_PM_ATTACH'	=> '개인 메시지에 파일 첨부 가능',
	'ACL_U_PM_DOWNLOAD'	=> '개인 메시지의 파일 다운로드 가능',
	'ACL_U_PM_BBCODE'	=> '개인 메시지에 BBCode 사용 가능',
	'ACL_U_PM_SMILIES'	=> '개인 메시지에 이모티콘 사용 가능',
	'ACL_U_PM_IMG'		=> '개인 메시지에 [img] BBCode 태그 사용 가능',
	'ACL_U_PM_FLASH'	=> '개인 메시지에 [flash] BBCode 태그 사용 가능',

	'ACL_U_SENDEMAIL'	=> '이메일 보내기 가능',
	'ACL_U_SENDIM'		=> '인스턴트 메시지 보내기 가능',
	'ACL_U_IGNOREFLOOD'	=> '연속 게시 시간 제한 무시 가능',
	'ACL_U_HIDEONLINE'	=> '온라인 상태 숨기기 가능',
	'ACL_U_VIEWONLINE'	=> '숨은 온라인 사용자 보기 가능',
	'ACL_U_SEARCH'		=> '게시판 검색 가능',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> '포럼 보기 가능',
	'ACL_F_LIST_TOPICS' => '주제 보기 가능',
	'ACL_F_READ'		=> '포럼 읽기 가능',
	'ACL_F_SEARCH'		=> '포럼 검색 가능',
	'ACL_F_SUBSCRIBE'	=> '포럼 구독 가능',
	'ACL_F_PRINT'		=> '주제 인쇄 가능',
	'ACL_F_EMAIL'		=> '주제를 이메일로 보내기 가능',
	'ACL_F_BUMP'		=> '주제 끌어올리기 가능',
	'ACL_F_USER_LOCK'	=> '자신의 주제 잠그기 가능',
	'ACL_F_DOWNLOAD'	=> '파일 다운로드 가능',
	'ACL_F_REPORT'		=> '게시물 신고 가능',

	'ACL_F_POST'		=> '새 주제 작성 가능',
	'ACL_F_STICKY'		=> '고정 주제 작성 가능',
	'ACL_F_ANNOUNCE'	=> '공지 작성 가능',
	'ACL_F_ANNOUNCE_GLOBAL'	=> '전체 공지 작성 가능',
	'ACL_F_REPLY'		=> '주제에 답글 작성 가능',
	'ACL_F_EDIT'		=> '자신의 게시물 편집 가능',
	'ACL_F_DELETE'		=> '자신의 게시물 영구 삭제 가능',
	'ACL_F_SOFTDELETE'	=> '자신의 게시물 임시 삭제 가능<br /><em>게시물 승인 권한이 있는 운영자는 임시 삭제된 게시물을 복원할 수 있습니다.</em>',
	'ACL_F_IGNOREFLOOD' => '연속 게시 시간 제한 무시 가능',
	'ACL_F_POSTCOUNT'	=> '게시물 카운터 증가<br /><em>이 설정은 새 게시물에만 영향을 미칩니다.</em>',
	'ACL_F_NOAPPROVE'	=> '승인 없이 게시 가능',

	'ACL_F_ATTACH'		=> '파일 첨부 가능',
	'ACL_F_ICONS'		=> '주제/게시물 아이콘 사용 가능',
	'ACL_F_BBCODE'		=> 'BBCode 사용 가능',
	'ACL_F_FLASH'		=> '[flash] BBCode 태그 사용 가능',
	'ACL_F_IMG'			=> '[img] BBCode 태그 사용 가능',
	'ACL_F_SIGS'		=> '서명 사용 가능',
	'ACL_F_SMILIES'		=> '이모티콘 사용 가능',

	'ACL_F_POLL'		=> '설문 만들기 가능',
	'ACL_F_VOTE'		=> '설문에 투표 가능',
	'ACL_F_VOTECHG'		=> '기존 투표 변경 가능',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> '게시물 수정 가능',
	'ACL_M_DELETE'		=> '게시물 영구 삭제 가능',
	'ACL_M_SOFTDELETE'	=> '게시물 임시 삭제 가능<br /><em>게시물 승인 권한이 있는 운영자는 임시 삭제된 게시물을 복원할 수 있습니다.</em>',
	'ACL_M_APPROVE'		=> '게시물 승인 및 복원 가능',
	'ACL_M_REPORT'		=> '신고 닫기 및 삭제 가능',
	'ACL_M_CHGPOSTER'	=> '게시물 작성자 변경 가능',

	'ACL_M_MOVE'	=> '주제 이동 가능',
	'ACL_M_LOCK'	=> '주제 잠그기 가능',
	'ACL_M_SPLIT'	=> '주제 분할 가능',
	'ACL_M_MERGE'	=> '주제 병합 가능',

	'ACL_M_INFO'		=> '게시물 세부 정보 보기 가능',
	'ACL_M_WARN'		=> '경고 부여 가능', // This moderator setting is only global (and not local)
	'ACL_M_PM_REPORT'	=> '개인 메시지 신고 닫기 및 삭제 가능', // This moderator setting is only global (and not local)
	'ACL_M_BAN'			=> '차단 관리 가능', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> '게시판 설정 변경 및 업데이트 확인 가능',
	'ACL_A_SERVER'		=> '서버/통신 설정 변경 가능',
	'ACL_A_JABBER'		=> 'Jabber 설정 변경 가능',
	'ACL_A_PHPINFO'		=> 'PHP 설정을 볼 수 있음',

	'ACL_A_FORUM'		=> '포럼 관리 가능',
	'ACL_A_FORUMADD'	=> '새 포럼 추가 가능',
	'ACL_A_FORUMDEL'	=> '포럼 삭제 가능',
	'ACL_A_PRUNE'		=> '포럼 정리 가능',

	'ACL_A_ICONS'		=> '주제/게시물 아이콘과 이모티콘 변경 가능',
	'ACL_A_WORDS'		=> '단어 검열 설정 변경 가능',
	'ACL_A_BBCODE'		=> 'BBCode 태그 정의 가능',
	'ACL_A_ATTACH'		=> '첨부 파일 관련 설정 변경 가능',

	'ACL_A_USER'		=> '사용자 관리 가능<br /><em>온라인 사용자 목록에서 사용자의 브라우저 에이전트를 보는 권한도 포함됩니다.</em>',
	'ACL_A_USERDEL'		=> '사용자 삭제/정리 가능',
	'ACL_A_GROUP'		=> '그룹 관리 가능',
	'ACL_A_GROUPADD'	=> '새 그룹 추가 가능',
	'ACL_A_GROUPDEL'	=> '그룹 삭제 가능',
	'ACL_A_RANKS'		=> '등급 관리 가능',
	'ACL_A_PROFILE'		=> '사용자 정의 프로필 필드 관리 가능',
	'ACL_A_NAMES'		=> '금지된 사용자 이름 관리 가능',
	'ACL_A_BAN'			=> '차단 관리 가능',

	'ACL_A_VIEWAUTH'	=> '권한 마스크 보기 가능',
	'ACL_A_AUTHGROUPS'	=> '개별 그룹의 권한 변경 가능',
	'ACL_A_AUTHUSERS'	=> '개별 사용자의 권한 변경 가능',
	'ACL_A_FAUTH'		=> '포럼 권한 유형 변경 가능',
	'ACL_A_MAUTH'		=> '운영자 권한 유형 변경 가능',
	'ACL_A_AAUTH'		=> '관리자 권한 유형 변경 가능',
	'ACL_A_UAUTH'		=> '사용자 권한 유형 변경 가능',
	'ACL_A_ROLES'		=> '역할 관리 가능',
	'ACL_A_SWITCHPERM'	=> '다른 사용자의 권한으로 전환 가능',

	'ACL_A_STYLES'		=> '스타일 관리 가능',
	'ACL_A_EXTENSIONS'	=> '확장 기능 관리 가능',
	'ACL_A_VIEWLOGS'	=> '로그 보기 가능',
	'ACL_A_CLEARLOGS'	=> '로그 지우기 가능',
	'ACL_A_MODULES'		=> '모듈 관리 가능',
	'ACL_A_LANGUAGE'	=> '언어 팩 관리 가능',
	'ACL_A_EMAIL'		=> '대량 이메일 보내기 가능',
	'ACL_A_BOTS'		=> '봇 관리 가능',
	'ACL_A_REASONS'		=> '신고/거부 사유 관리 가능',
	'ACL_A_BACKUP'		=> '데이터베이스 백업/복원 가능',
	'ACL_A_SEARCH'		=> '검색 백엔드 및 설정 관리 가능',
));
