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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> '관리자',
	'ACP_ADMIN_LOGS'			=> '관리자 로그',
	'ACP_ADMIN_ROLES'			=> '관리자 역할',
	'ACP_ATTACHMENTS'			=> '첨부파일',
	'ACP_ATTACHMENT_SETTINGS'	=> '첨부파일 설정',
	'ACP_AUTH_SETTINGS'			=> '인증',
	'ACP_AUTOMATION'			=> '자동화',
	'ACP_AVATAR_SETTINGS'		=> '아바타 설정',

	'ACP_BACKUP'				=> '백업',
	'ACP_BAN'					=> '밴(차단중)',
	'ACP_BAN_EMAILS'			=> '이메일 차단',
	'ACP_BAN_IPS'				=> 'IP 차단',
	'ACP_BAN_USERNAMES'			=> '차단 사용자',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> '보드 구성',
	'ACP_BOARD_FEATURES'		=> '보드 기능',
	'ACP_BOARD_MANAGEMENT'		=> '보드 운영',
	'ACP_BOARD_SETTINGS'		=> '보드 설정',
	'ACP_BOTS'					=> '스파이더/로봇',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> '커스터마이즈',
	'ACP_CAT_DATABASE'			=> '데이터배이스',
	'ACP_CAT_DOT_MODS'			=> '확장기능',
	'ACP_CAT_FORUMS'			=> '포럼',
	'ACP_CAT_GENERAL'			=> '일반',
	'ACP_CAT_MAINTENANCE'		=> '유지보수',
	'ACP_CAT_PERMISSIONS'		=> '권한',
	'ACP_CAT_POSTING'			=> '포스팅',
	'ACP_CAT_STYLES'			=> '스타일',
	'ACP_CAT_SYSTEM'			=> '시스템',
	'ACP_CAT_USERGROUP'			=> '사용자 및 그룹',
	'ACP_CAT_USERS'				=> '사용자',
	'ACP_CLIENT_COMMUNICATION'	=> '클라이언트 통신',
	'ACP_COOKIE_SETTINGS'		=> '쿠키 설정',
	'ACP_CONTACT'				=> '연락처 페이지',
	'ACP_CONTACT_SETTINGS'		=> '연락처 페이지 설정',
	'ACP_CRITICAL_LOGS'			=> '에러 로그',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> '사용자 정의 프로필 필드',

	'ACP_DATABASE'				=> '데이터베이스 관리',
	'ACP_DISALLOW'				=> '허용하지 않음',
	'ACP_DISALLOW_USERNAMES'	=> '사용자 이름 허용 안 함',

	'ACP_EMAIL_SETTINGS'		=> '이메일 설정',
	'ACP_EXTENSION_GROUPS'		=> '첨부파일 확장 그룹 관리',
	'ACP_EXTENSION_MANAGEMENT'	=> '확장기능 관리',
	'ACP_EXTENSIONS'			=> '확장기능 관리하기',

	'ACP_FORUM_BASED_PERMISSIONS'	=> '포럼 기반 권한',
	'ACP_FORUM_LOGS'				=> '포럼 로그',
	'ACP_FORUM_MANAGEMENT'			=> '포럼 관리',
	'ACP_FORUM_MODERATORS'			=> '포럼 운영자',
	'ACP_FORUM_PERMISSIONS'			=> '포럼 권한',
	'ACP_FORUM_PERMISSIONS_COPY'	=> '포럼 권한 복사',
	'ACP_FORUM_ROLES'				=> '포럼 역할',

	'ACP_GENERAL_CONFIGURATION'		=> '일반 구성',
	'ACP_GENERAL_TASKS'				=> '일반 작업',
	'ACP_GLOBAL_MODERATORS'			=> '글로벌 운영자',
	'ACP_GLOBAL_PERMISSIONS'		=> '글로벌 권한',
	'ACP_GROUPS'					=> '그룹',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> '그룹 포럼 권한',
	'ACP_GROUPS_MANAGE'				=> '그룹 관리자',
	'ACP_GROUPS_MANAGEMENT'			=> '그룹 관리',
	'ACP_GROUPS_PERMISSIONS'		=> '그룹 권한',
	'ACP_GROUPS_POSITION'			=> '그룹 위치 관리',

	'ACP_HELP_PHPBB'			=> 'phpBB 도움말 지원',

	'ACP_ICONS'					=> '글 아이콘',
	'ACP_ICONS_SMILIES'			=> '글 아이콘/스마일',
	'ACP_INACTIVE_USERS'		=> '비활성 사용자',
	'ACP_INDEX'					=> 'ACP 인덱스',

	'ACP_JABBER_SETTINGS'		=> 'Jabber 설정',

	'ACP_LANGUAGE'				=> '언어 관리',
	'ACP_LANGUAGE_PACKS'		=> '언어 팩',
	'ACP_LOAD_SETTINGS'			=> '로드 설정',
	'ACP_LOGGING'				=> '로깅',

	'ACP_MAIN'					=> 'ACP 인덱스',

	'ACP_MANAGE_ATTACHMENTS'			=> '첨부파일 관리',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> '여기에서 게시물 및 비공개 메시지에 첨부된 파일을 나열하고 삭제할 수 있습니다',

	'ACP_MANAGE_EXTENSIONS'		=> '첨부파일 확장자 관리',
	'ACP_MANAGE_FORUMS'			=> '포럼 관리',
	'ACP_MANAGE_RANKS'			=> '등급 관리',
	'ACP_MANAGE_REASONS'		=> '신고/거부 사유 관리',
	'ACP_MANAGE_USERS'			=> '사용자 관리',
	'ACP_MASS_EMAIL'			=> '대량 이메일',
	'ACP_MESSAGES'				=> '메시지',
	'ACP_MESSAGE_SETTINGS'		=> '비공개 메시지 설정',
	'ACP_MODULE_MANAGEMENT'		=> '모듈 관리',
	'ACP_MOD_LOGS'				=> '운영자 로그',
	'ACP_MOD_ROLES'				=> '운영자 역할',

	'ACP_NO_ITEMS'				=> '아직 대이터가 없습니다.',

	'ACP_ORPHAN_ATTACHMENTS'	=> '분리된 첨부파일',

	'ACP_PERMISSIONS'			=> '권한',
	'ACP_PERMISSION_MASKS'		=> '권한 마스크',
	'ACP_PERMISSION_ROLES'		=> '권한 역할',
	'ACP_PERMISSION_TRACE'		=> '권한 추적',
	'ACP_PHP_INFO'				=> 'PHP 정보',
	'ACP_POST_SETTINGS'			=> '게시물 설정',
	'ACP_PRUNE_FORUMS'			=> '포럼 정리',
	'ACP_PRUNE_USERS'			=> '사용자 정리',
	'ACP_PRUNING'				=> '정리중',

	'ACP_QUICK_ACCESS'			=> '빠른 액세스',

	'ACP_RANKS'					=> '순위',
	'ACP_REASONS'				=> '신고/거부 사유',
	'ACP_REGISTER_SETTINGS'		=> '사용자 등록 설정',

	'ACP_RESTORE'				=> '복원',

	'ACP_FEED'					=> '피드 관리',
	'ACP_FEED_SETTINGS'			=> '피드 설정',

	'ACP_SEARCH'				=> '검색 구성',
	'ACP_SEARCH_INDEX'			=> '색인 검색',
	'ACP_SEARCH_SETTINGS'		=> '검색 설정',

	'ACP_SECURITY_SETTINGS'		=> '보안 설정',
	'ACP_SERVER_CONFIGURATION'	=> '서버 구성',
	'ACP_SERVER_SETTINGS'		=> '서버 설정',
	'ACP_SIGNATURE_SETTINGS'	=> '서명 설정',
	'ACP_SMILIES'				=> '스마일',
	'ACP_STYLE_MANAGEMENT'		=> '스타일 관리',
	'ACP_STYLES'				=> '스타일',
	'ACP_STYLES_CACHE'			=> '캐시 제거',
	'ACP_STYLES_INSTALL'		=> '스타일 설치하기',

	'ACP_SUBMIT_CHANGES'		=> '변경사항 제출',

	'ACP_TEMPLATES'				=> '템플릿',
	'ACP_THEMES'				=> '태마',

	'ACP_UPDATE'					=> '업데이트 중',
	'ACP_USERS_FORUM_PERMISSIONS'	=> '사용자 포럼 권한',
	'ACP_USERS_LOGS'				=> '사용자 로그',
	'ACP_USERS_PERMISSIONS'			=> '사용자 권한',
	'ACP_USER_ATTACH'				=> '첨부파일',
	'ACP_USER_AVATAR'				=> '아바타',
	'ACP_USER_FEEDBACK'				=> '피드백',
	'ACP_USER_GROUPS'				=> '그룹',
	'ACP_USER_MANAGEMENT'			=> '사용자 관리',
	'ACP_USER_OVERVIEW'				=> '개요',
	'ACP_USER_PERM'					=> '권한',
	'ACP_USER_PREFS'				=> '기본 설정',
	'ACP_USER_PROFILE'				=> '프로필',
	'ACP_USER_RANK'					=> '순위',
	'ACP_USER_ROLES'				=> '사용자 역할',
	'ACP_USER_SECURITY'				=> '사용자 보안',
	'ACP_USER_SIG'					=> '서명',
	'ACP_USER_WARNINGS'				=> '경고',

	'ACP_VC_SETTINGS'					=> '스팸봇 대책',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA 이미지 미리보기',
	'ACP_VERSION_CHECK'					=> '업데이트 확인',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> '관리자 권한 보기',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> '포럼 조정 권한 보기',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> '포럼 기본 권한 보기',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> '글로벌 운영 권한 보기',
	'ACP_VIEW_USER_PERMISSIONS'			=> '사용자 기반 권한 보기',

	'ACP_WORDS'					=> '단어 검열',

	'ACTION'				=> '동작',
	'ACTIONS'				=> '동작',
	'ACTIVATE'				=> '활성화',
	'ADD'					=> '추가',
	'ADMIN'					=> '관리자',
	'ADMIN_INDEX'			=> '관리자 정보 패널',
	'ADMIN_PANEL'			=> '관리자 제어판',

	'ADM_LOGOUT'			=> 'ACP&nbsp;로그아웃',
	'ADM_LOGGED_OUT'		=> '관리자 제어판에서 로그아웃되었습니다.',

	'BACK'					=> '뒤로',

	'CONTAINER_EXCEPTION' => '설치된 확장 프로그램으로 인해 phpBB에서 컨테이너를 빌드하는 동안 오류가 발생했습니다. 이러한 사유로 모든 확장 프로그램이 일시적으로 비활성화되었습니다. 포럼 캐시를 제거해 보십시오. 컨테이너 오류가 해결되면 모든 확장이 자동으로 다시 활성화됩니다. 이 오류가 계속되면 <a href="https://www.phpbb.com/support">phpBB.com</a>을 방문하여 지원을 받으세요.',
	'EXCEPTION' => '예외',

	'COLOUR_SWATCH'			=> '웹에 적합한 색상 견본',
	'CONFIG_UPDATED'		=> '구성이 업데이트되었습니다.',
	'CRON_LOCK_ERROR'		=> '크론 잠금을 가져올 수 없습니다.',
	'CRON_NO_SUCH_TASK'		=> '크론 작업 "%s"를 찾을 수 없습니다.',
	'CRON_NO_TASK'			=> '지금 당장 실행할 크론 작업이 없습니다.',
	'CRON_NO_TASKS'			=> '크론 작업이 없습니다',
	'CSV_INVALID'			=> '제공된 쉼표로 구분된 설정 "%1$s"이(가) 잘못되었습니다. 값은 쉼표로만 구분해야 하며 선행 또는 후행 구분 기호를 포함해서는 안 됩니다.',
	'CURRENT_VERSION'		=> '현재 버전',

	'DEACTIVATE'				=> '비활성화',
	'DIRECTORY_DOES_NOT_EXIST'	=> '입력한 경로 "%s"이(가) 존재하지 않습니다.',
	'DIRECTORY_NOT_DIR'			=> '입력한 경로 "%s"은(는) 디렉토리가 아닙니다.',
	'DIRECTORY_NOT_WRITABLE'	=> '입력한 경로 "%s"에 쓸 수 없습니다.',
	'DISABLE'					=> '비활성화',
	'DOWNLOAD'					=> '다운로드',
	'DOWNLOAD_AS'				=> '다음 다운로드',
	'DOWNLOAD_STORE'			=> '파일 다운로드 또는 저장',
	'DOWNLOAD_STORE_EXPLAIN'	=> '파일을 직접 다운로드하거나 <samp>store/</samp> 폴더에 저장할 수 있습니다',
	'DOWNLOADS'					=> '다운로드',

	'EDIT'					=> '수정',
	'ENABLE'				=> '활성화',
	'EXPORT_DOWNLOAD'		=> '다운로드',
	'EXPORT_STORE'			=> '스토어',

	'GENERAL_OPTIONS'		=> '일반 옵션',
	'GENERAL_SETTINGS'		=> '일반 설정',
	'GLOBAL_MASK'			=> ' 글로벌 권한 마스크',

	'INSTALL'				=> '설치',
	'IP'					=> '사용 IP',
	'IP_HOSTNAME'			=> 'IP 주소 또는 호스트 이름',

	'LATEST_VERSION'		=> '라스트 버전',
	'LOAD_NOTIFICATIONS'			=> '알림 표시',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> '모든 페이지에 알림 목록 표시(일반적으로 헤더에 있음).',
	'LOGGED_IN_AS'			=> '현재 로그인:',
	'LOGIN_ADMIN'			=> '보드를 관리하려면 인증된 사용자여야 합니다.',
	'LOGIN_ADMIN_CONFIRM'	=> '보드를 관리하려면 자신을 다시 인증해야 합니다.',
	'LOGIN_ADMIN_SUCCESS'	=> '인증되었으며 이제 관리자 제어판으로 리디렉션됩니다.',
	'LOOK_UP_FORUM'			=> '포럼 선택',
	'LOOK_UP_FORUMS_EXPLAIN'=> '포럼을 두 개 이상 선택할 수 있습니다.',

	'MANAGE'				=> '관리',
	'MENU_TOGGLE'			=> '사이드 메뉴 숨기기 또는 표시',
	'MORE'					=> 'More',			// 현재 사용되지 않음
	'MORE_INFORMATION'		=> '추가 정보 »',
	'MOVE_DOWN'				=> '아래로 이동',
	'MOVE_UP'				=> '위로 이동',

	'NOTIFY'				=> '알림',
	'NO_ADMIN'				=> '이 보드를 관리할 권한이 없습니다.',
	'NO_EMAILS_DEFINED'		=> '유효한 이메일 주소가 없습니다.',
	'NO_FILES_TO_DELETE'	=> '삭제를 위해 선택한 첨부파일이 존재하지 않습니다.',
	'NO_PASSWORD_SUPPLIED'	=> '관리자 제어판에 액세스하려면 암호를 입력해야 합니다.',

	'OFF'					=> 'Off',
	'ON'					=> 'On',

	'PARSE_BBCODE'						=> 'BB코드 파싱',
	'PARSE_SMILIES'						=> '스마일 파싱',
	'PARSE_URLS'						=> '링크 파싱',
	'PERMISSIONS_TRANSFERRED'			=> '이전된 권한',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> '현재 %1$s의 권한이 있습니다. 이 사용자의 권한으로 게시판을 열람할 수 있지만 관리자 권한이 이전되지 않았기 때문에 관리자 제어판에 접근할 수 없습니다. 언제든지 <a href="%2$s"><strong>권한 집합으로 되돌릴 수 있습니다</strong></a>.',
	'PROCEED_TO_ACP'					=> '%sACP로 이동%s',

	'RELEASE_ANNOUNCEMENT'		=> '공고',
	'REMIND'							=> '이메일재확인',
	'REPARSE_LOCK_ERROR'				=> '다른 프로세스에서 이미 재분석이 진행 중입니다.',
	'RESYNC'							=> '재동기화',

	'RUNNING_TASK'			=> '실행 중인 작업: %s.',
	'SELECT_ANONYMOUS'		=> '익명 사용자 선택',
	'SELECT_OPTION'			=> '옵션 선택',

	'SETTING_TOO_LOW'		=> '"%1$s" 설정에 대해 제공된 값이 너무 낮습니다. 허용되는 최소 값은 %2$d입니다.',
	'SETTING_TOO_BIG'		=> '"%1$s" 설정에 대해 제공된 값이 너무 높습니다. 허용되는 최대 값은 %2$d입니다.',
	'SETTING_TOO_LONG'		=> '"%1$s" 설정에 제공된 값이 너무 깁니다. 허용되는 최대 길이는 %2$d입니다.',
	'SETTING_TOO_SHORT'		=> '"%1$s" 설정에 대해 제공된 값이 너무 짧습니다. 허용되는 최소 길이는 %2$d입니다.',

	'SHOW_ALL_OPERATIONS'	=> '모든 작업 표시',

	'TASKS_NOT_READY'			=> '준비되지 않은 작업:',
	'TASKS_READY'			=> '준비 작업:',
	'TOTAL_SIZE'			=> '토탈 사이즈',

	'UCP'					=> '사용자 제어판',
	'URL_INVALID'			=> '"%1$s" 설정에 대해 제공된 URL이 잘못되었습니다.',
	'URL_SCHEME_INVALID'	=> '쉼표로 구분된 설정 "%1$s"에 제공된 구성표 "%2$s"이(가) 잘못되었습니다. 구성표는 라틴 문자로 시작하고 그 뒤에 영숫자, 하이픈 또는 점이 와야 합니다.',
	'USERNAMES_EXPLAIN'		=> '각 사용자 이름을 별도의 줄에 배치합니다.',
	'USER_CONTROL_PANEL'	=> '사용자 제어판',

	'UPDATE_NEEDED'			=> '보드가 최신 상태가 아닙니다.',
	'UPDATE_NOT_NEEDED'		=> '보드가 최신 상태입니다.',
	'UPDATES_AVAILABLE'		=> '사용 가능한 업데이트:',

	'WARNING'				=> '경고',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> '이 페이지는 이 서버에 설치된 PHP 버전에 대한 정보를 나열합니다. 여기에는 로드된 모듈, 사용 가능한 변수 및 기본 설정에 대한 세부 정보가 포함됩니다. 이 정보는 문제를 진단할 때 유용할 수 있습니다. 일부 호스팅 회사는 보안상의 사유로 여기에 표시되는 정보를 제한할 수 있습니다. 지원 포럼에서 <a href="https://www.phpbb.com/about/team/">공식 운영진 구성원</a>이 요청하는 경우를 제외하고 이 페이지에 세부정보를 제공하지 않는 것이 좋습니다.',

	'NO_PHPINFO_AVAILABLE'	=> 'PHP 구성에 대한 정보를 확인할 수 없습니다. Phpinfo()는 보안상의 사유로 비활성화되었습니다.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> '여기에는 보드 관리자가 수행한 모든 작업이 나열됩니다. 사용자 이름, 날짜, IP 또는 작업별로 정렬할 수 있습니다. 적절한 권한이 있는 경우 개별 작업이나 전체 로그를 지울 수도 있습니다.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> '여기에는 보드 자체에서 수행한 작업이 나열됩니다. 이 로그는 특정 문제(예: 이메일 배달 불가)를 해결하는 데 사용할 수 있는 정보를 제공합니다. 사용자 이름, 날짜, IP 또는 작업별로 정렬할 수 있습니다. 적절한 권한이 있는 경우 개별 작업이나 전체 로그를 지울 수도 있습니다.',
	'ACP_MOD_LOGS_EXPLAIN'		=> '여기에는 포럼, 글 및 게시물에 대해 수행된 모든 작업과 차단을 포함하여 운영자가 사용자에게 수행한 작업이 나열됩니다. 사용자 이름, 날짜, IP 또는 작업별로 정렬할 수 있습니다. 적절한 권한이 있는 경우 개별 작업이나 전체 로그를 지울 수도 있습니다',
	'ACP_USERS_LOGS_EXPLAIN'	=> '여기에는 사용자 또는 사용자에 대해 수행한 모든 작업(보고서, 경고 및 사용자 메모)이 나열됩니다.',
	'ALL_ENTRIES'				=> '모든 항목',

	'DISPLAY_LOG'	=> '이전 항목 표시',

	'NO_ENTRIES'	=> '이 기간 동안의 로그 항목이 없습니다.',

	'SORT_IP'		=> 'IP 주소',
	'SORT_DATE'		=> '날짜',
	'SORT_ACTION'	=> '로그 작업',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> '게시판 솔루션으로 phpBB를 선택해 주셔서 감사합니다. 이 화면에서 게시판에 대한 다양한 통계를 한 눈에 볼 수 있습니다. 왼쪽에 있는 링크를 통해서 게시판 세부설정을 할 수 있습니다. 각 페이지에서 게시판 세부설정을 어떻게 할 수 있는지에 대한 안내를 받을 수 있습니다.',
	'ADMIN_LOG'					=> '기록된 관리자 작업',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> '이것은 보드 관리자가 수행한 마지막 5가지 작업에 대한 개요를 제공합니다. 로그의 전체 사본은 해당 메뉴 항목에서 또는 아래 링크를 따라 볼 수 있습니다.',
	'AVATAR_DIR_SIZE'			=> '아바타 디렉토리 크기',

	'BOARD_STARTED'		=> '보드 시작됨',
	'BOARD_VERSION'		=> '보드 버전',

	'DATABASE_SERVER_INFO'	=> '데이터베이스 서버',
	'DATABASE_SIZE'			=> '데이터베이스 사이즈',

	// Environment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> '함수 오버로딩이 잘못 구성되었습니다.',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var>는 0 또는 4로 설정해야 합니다. 현재 값은 <samp>PHP 정보</samp> 페이지에서 확인할 수 있습니다.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> '투명 문자 인코딩이 잘못 구성되었습니다.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var>은 0으로 설정해야 합니다. 현재 값은 <samp>PHP 정보</samp> 페이지에서 확인할 수 있습니다.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP 입력 문자 변환이 잘못 구성되었습니다.',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var>은 비어 있어야 합니다. <samp>PHP 정보</samp> 페이지에서 현재 값을 확인할 수 있습니다.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP 출력 문자 변환이 잘못 구성되었습니다.',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var>은 비어 있어야 합니다. <samp>PHP 정보</samp> 페이지에서 현재 값을 확인할 수 있습니다.',
	'ERROR_DEFAULT_CHARSET'							=> '기본 문자 집합이 잘못 구성되었습니다.',
	'ERROR_DEFAULT_CHARSET_EXPLAIN'					=> '<var>default_charset</var>을 <samp>UTF-8</samp>로 설정해야 합니다. <samp>PHP 정보</samp> 페이지에서 현재 값을 확인할 수 있습니다.',

	'FILES_PER_DAY'		=> '일일 첨부파일',
	'FORUM_STATS'		=> '보드 통계',

	'GZIP_COMPRESSION'	=> 'GZip 압축',

	'NO_SEARCH_INDEX'	=> '선택한 검색 백엔드에 검색 색인이 없습니다.<br />%2$s검색 색인%3$s 섹션에서 "%1$s"에 대한 색인을 만드십시오',
	'NOT_AVAILABLE'		=> '사용할 수 없음',
	'NUMBER_FILES'		=> '첨부파일 수',
	'NUMBER_POSTS'		=> '게시물 수',
	'NUMBER_TOPICS'		=> '토픽 수',
	'NUMBER_USERS'		=> '사용자 수',
	'NUMBER_ORPHAN'		=> '분리된 첨부파일',

	'PHP_VERSION'		=> 'PHP 버전',
	'PHP_VERSION_OLD'	=> '이 서버의 PHP 버전(%1$s)은 이후 버전의 phpBB에서 더 이상 지원되지 않습니다. 최소 필수 버전은 PHP %2$s입니다. %3$s세부정보%4$s',

	'POSTS_PER_DAY'		=> '일별 게시물 수',

	'PURGE_CACHE'			=> '캐시 제거',
	'PURGE_CACHE_CONFIRM'	=> '캐시를 지우시겠습니까?',
	'PURGE_CACHE_EXPLAIN'	=> '모든 캐시 관련 항목을 제거합니다. 여기에는 캐시된 템플릿 파일 또는 쿼리가 포함됩니다.',
	'PURGE_CACHE_SUCCESS'	=> '캐시가  제거되었습니다..',

	'PURGE_SESSIONS'			=> '모든 세션 제거',
	'PURGE_SESSIONS_CONFIRM'	=> '모든 세션을 지우시겠습니까? 그러면 모든 사용자가 로그아웃됩니다.',
	'PURGE_SESSIONS_EXPLAIN'	=> '모든 세션을 제거합니다. 이렇게 하면 세션 테이블이 잘려서 모든 사용자가 로그아웃됩니다.',
	'PURGE_SESSIONS_SUCCESS'	=> '세션이  제거되었습니다.',

	'RESET_DATE'					=> '보드 시작 날짜 재설정',
	'RESET_DATE_CONFIRM'			=> '보드 시작 날짜를 재설정하시겠습니까?',
	'RESET_DATE_SUCCESS'				=> '보드 시작 날짜 재설정',
	'RESET_ONLINE'					=> '최대 온라인 사용자 재설정',
	'RESET_ONLINE_CONFIRM'			=> '가장 많은 온라인 사용자 카운터를 재설정하시겠습니까?',
	'RESET_ONLINE_SUCCESS'				=> '대부분의 사용자는 온라인 재설정',
	'RESYNC_POSTCOUNTS'				=> '게시물수 재 동기화',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> '기존 게시물만 고려됩니다. 정리된 게시물은 집계되지 않습니다',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> '게시물 수를 다시 동기화하시겠습니까?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> '재동기화된 게시물 수',
	'RESYNC_POST_MARKING'			=> '점으로 구분된 글 재동기화',
	'RESYNC_POST_MARKING_CONFIRM'	=> '점으로 구분된 글을 재동기화하시겠습니까',
	'RESYNC_POST_MARKING_EXPLAIN'	=> '먼저 모든 글을 표시를 해제한 다음 지난 6개월 동안 활동이 있었던 글을 올바르게 표시합니다.',
	'RESYNC_POST_MARKING_SUCCESS'	=> '재동기화 된 점 글',
	'RESYNC_STATS'					=> '통계 재동기화',
	'RESYNC_STATS_CONFIRM'			=> '통계를 다시 동기화하시겠습니까?',
	'RESYNC_STATS_EXPLAIN'			=> '게시물, 글, 사용자 및 파일의 총 수를 다시 계산합니다.',
	'RESYNC_STATS_SUCCESS'			=> '재동기화된 통계',
	'RUN'							=> '지금실행',

	'STATISTIC'					=> '통계',
	'STATISTIC_RESYNC_OPTIONS'	=> '통계 재동기화 또는 재설정',

	'TIMEZONE_INVALID'	=> '선택한 시간대가 잘못되었습니다.',
	'TIMEZONE_SELECTED'	=> '(현재 선택된)',
	'TOPICS_PER_DAY'	=> '일일 글',

	'UPLOAD_DIR_SIZE'	=> '게시된 첨부파일의 크기',
	'USERS_PER_DAY'		=> '일일 사용자',

	'VALUE'							=> '값',
	'VERSIONCHECK_FAIL'				=> '최신 버전 정보를 가져오지 못했습니다.',
	'VERSIONCHECK_FORCE_UPDATE'		=> '버전 다시 확인',
	'VERSION_CHECK'					=> '버전 확인',
	'VERSION_CHECK_EXPLAIN'			=> 'phpBB 설치 버전이 최신인지 확인합니다.',
	'VERSIONCHECK_INVALID_ENTRY'	=> '최신 버전 정보에 지원되지 않는 항목이 있습니다.',
	'VERSIONCHECK_INVALID_URL'		=> '최신 버전 정보에 잘못된 URL이 포함되어 있습니다.',
	'VERSIONCHECK_INVALID_VERSION'	=> '최신 버전 정보에 잘못된 버전이 있습니다.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'phpBB 설치가 최신 상태가 아닙니다.<br />아래는 업데이트에 대한 지침과 추가 정보가 포함된 릴리스 발표 링크입니다.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'phpBB 설치가 최신 상태가 아닙니다.',
	'VERSION_UP_TO_DATE_ACP'		=> 'phpBB 설치가 최신 상태입니다. 현재 사용 가능한 업데이트가 없습니다.',
	'VIEW_ADMIN_LOG'				=> '관리자 로그 보기',
	'VIEW_INACTIVE_USERS'			=> '비활성 사용자 보기',

	'WELCOME_PHPBB'			=> 'phpBB에 오신 것을 환영합니다',
	'WRITABLE_CONFIG'		=> '구성 파일(config.php)은 현재 세계에서 쓰기 가능합니다. 권한을 640 또는 최소한 644로 변경하는 것이 좋습니다(예 : <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> '비활성 날짜',
	'INACTIVE_REASON'				=> '사유',
	'INACTIVE_REASON_MANUAL'		=> '관리자가 비활성화한 계정',
	'INACTIVE_REASON_PROFILE'		=> '프로필 세부정보가 변경됨',
	'INACTIVE_REASON_REGISTER'		=> '미인증 계정',
	'INACTIVE_REASON_REMIND'		=> '강제 사용자 계정 재활성화',
	'INACTIVE_REASON_UNKNOWN'		=> '알수없는',
	'INACTIVE_USERS'				=> '비활성 사용자',
	'INACTIVE_USERS_EXPLAIN'		=> '등록했지만 계정이 비활성화된 사용자 목록입니다. 원하는 경우 이러한 사용자를 활성화, 삭제 또는 알림(이메일 전송)할 수 있습니다.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> '이것은 비활성 계정이 있는 마지막 10명의 정식 사용자의 목록입니다. 사용자 등록 설정에서 계정 활성화가 활성화되었고 이 사용자의 계정이 아직 활성화되지 않았거나 이러한 계정이 비활성화되었기 때문에 계정이 비활성화됩니다. 원하는 경우 이러한 사용자를 활성화, 삭제 또는 상기(이메일 전송)할 수 있는 아래 링크를 따라가면 전체 목록을 사용할 수 있습니다.',

	'NO_INACTIVE_USERS'	=> '비활성 사용자 없음',

	'SORT_INACTIVE'		=> '비활성 날짜',
	'SORT_LAST_VISIT'	=> '마지막 방문',
	'SORT_REASON'		=> '사유',
	'SORT_REG_DATE'		=> '등록 날짜',
	'SORT_LAST_REMINDER'=> '마지막 알림',
	'SORT_REMINDER'		=> '알림이 전송됨',

	'USER_IS_INACTIVE'		=> '사용자가 비활성화됨',
));

// Help support phpBB page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> '통계 분석을 위해 서버 및 보드 구성에 대한 정보를 phpBB로 보내주십시오. 귀하 또는 귀하의 웹사이트를 식별할 수 있는 모든 정보가 제거되었습니다. 데이터는 완전히 <strong>익명</strong>입니다. 우리는 이 정보를 바탕으로 향후 phpBB 버전에 대한 결정을 내립니다. 통계는 공개적으로 제공됩니다. 우리는 또한 이 데이터를 PHP 프로젝트와 공유하는데, 프로그래밍 언어인 phpBB를 사용합니다.',
	'EXPLAIN_SHOW_STATISTICS'	=> '아래 버튼을 사용하여 전송될 모든 변수를 미리 볼 수 있습니다.',
	'DONT_SEND_STATISTICS'		=> 'phpBB에 통계 정보를 보내지 않으려면 ACP로 돌아가십시오.',
	'GO_ACP_MAIN'				=> 'ACP 시작 페이지로 이동',
	'HIDE_STATISTICS'			=> '세부정보 숨기기',
	'SEND_STATISTICS'			=> '통계 보내기',
	'SEND_STATISTICS_LONG'		=> '통계 정보 보내기',
	'SHOW_STATISTICS'			=> '세부정보 표시',
	'THANKS_SEND_STATISTICS'	=> '정보를 제출해 주셔서 감사합니다.',
	'FAIL_SEND_STATISTICS'		=> 'phpBB가 통계를 보낼 수 없습니다',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>사용자의 사용자 권한 추가 또는 수정</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>그룹의 사용자 권한 추가 또는 수정</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>사용자의  글로벌 운영자 권한 추가 또는 수정</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>그룹의 글로벌 운영자 권한 추가 또는 수정</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>사용자의 관리자 권한 추가 또는 수정</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>그룹의 관리자 권한 추가 또는 수정</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>관리자 추가 또는 수정</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>글로벌 운영자 추가 또는 수정</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '%1$s<br />» %2$s에 <strong>사용자의 포럼 접근을 추가하거나 수정했습니다</strong>.',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '%1$s<br />» %2$s에 <strong>사용자의 포럼 운영자 접근을 추가하거나 수정했습니다</strong>.',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '%1$s<br />» %2$s에 <strong>그룹의 포럼 액세스 권한을 추가하거나 수정했습니다</strong>.',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '%1$s<br />» %2$s에 <strong>그룹의 포럼 운영자 액세스 권한을 추가하거나 수정했습니다</strong>.',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '%1$s<br />» %2$s에 대한 <strong>운영자를 추가 또는 수정했습니다</strong>.',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '%1$s에 대한 <strong>포럼 권한 추가 또는 수정</strong><br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>제거된 관리자</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>제거된 글로벌 운영자</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '%1$s에서 <strong>제거된 운영자</strong><br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '%1$s에서 <strong>제거된 사용자/그룹 포럼 권한</strong><br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>권한 이전</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>권한을 사용한 후 복원된 고유 권한</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>관리자 로그인 시도 실패</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>성공적인 관리 로그인</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>제거된 사용자 첨부파일</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>첨부파일 확장자 추가 또는 수정</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>제거된 첨부파일 확장자</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>업데이트된 첨부파일 확장자</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>확장 그룹 추가</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>수정된 확장 그룹</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>제거된 확장 그룹</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>게시물에 업로드되지 않은 파일</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>게시물에 업로드되지 않은 파일 삭제됨</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '"<em>%1$s</em>"<br />» %2$s<strong>사용자 차단</strong>을 제외했습니다.',
	'LOG_BAN_EXCLUDE_IP'	=> '"<em>%1$s</em>"<br />» %2$s<strong>금지에서 제외된 IP</strong>',
	'LOG_BAN_EXCLUDE_EMAIL' => '"<em>%1$s</em>"<strong>금지 대상에서 제외된 이메일</strong><br />» %2$s',
	'LOG_BAN_USER'			=> '"<em>%1$s</em>"<strong>사용자가 차단됨</strong><br />» %2$s',
	'LOG_BAN_IP'			=> '"<em>%1$s</em>"<br />» %2$s <strong>금지된 IP</strong>',
	'LOG_BAN_EMAIL'			=> '"<em>%1$s</em>"<br />» %2$s <strong>이메일 차단</strong>',
	'LOG_UNBAN_USER'		=> '<strong>차단 해제된 사용자</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>금지 해제된 IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>금지 해제된 이메일</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>새 BBCode 추가</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode 편집</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode 삭재</strong><br />» %s',
	'LOG_BBCODE_CONFIGURATION_ERROR'	=> '<strong>BBCode 구성 중 오류</strong>: %1$s<br />» %2$s',

	'LOG_BOT_ADDED'		=> '<strong>새 봇 추가</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>삭제된 봇</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>기존 봇 업데이트됨</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>삭제된 관리자 로그</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>삭제된 오류 로그</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>삭제된 운영자 로그</strong>',
	'LOG_CLEAR_USER'		=> '<strong>삭제된 사용자 로그</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>삭제된 사용자 로그</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>변경된 첨부파일 설정</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>변경된 인증 설정</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>변경된 아바타 설정</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>변경된 쿠키 설정</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>변경된 이메일 설정</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>변경된 보드 기능</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>변경된 로드 설정</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>변경된 비공개 메시지 설정</strong>',
	'LOG_CONFIG_POST'			=> '<strong>게시물 설정 변경</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>변경된 사용자 등록 설정</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>신디케이션 피드 설정 변경</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>변경된 검색 설정</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>변경된 보안 설정</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>변경된 서버 설정</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>변경된 보드 설정</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>변경된 서명 설정</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>스팸봇 방지 설정 변경</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>승인된 글</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>사용자 충돌 글</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>다음과 같은 이유로 "%2$s"이(가) 작성한 "%1$s" 게시물을 삭제했습니다.</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>삭제된 섀도우 글</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>다음과 같은 이유로 "%2$s"이(가) 작성한 "%1$s" 글을 삭제했습니다.</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>복사된 글</strong><br />» %s',
	'LOG_LOCK'					=> '<strong>잠긴 글</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>잠긴 게시물</strong><br />» %s',
	'LOG_MERGE'					=> '글로 <strong>병합된 게시물</strong><br />» %s',
	'LOG_MOVE'					=> '<strong>글 이동</strong><br />» %1$s에서 %2$s로',
	'LOG_MOVED_TOPIC'			=> '<strong>이동된 글</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>닫힌 PM 보고서</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>삭제된 PM 보고서</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>승인된 게시물</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>다음과 같은 이유로 "%3$s"이(가) 작성한 "%1$s" 게시물이 승인되지 않았습니다.</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>다음과 같은 이유로 "%2$s"이(가) 작성한 "%1$s" 게시물 수정</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>복원된 게시물</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>종료된 보고서</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>삭제된 보고서</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>복원된 글 "%1$s" 작성자</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>다음과 같은 이유로 "%2$s"이(가) 작성한 "%1$s" 게시물을 일시 삭제했습니다.</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>다음과 같은 이유로 "%2$s"이(가) 작성한 "%1$s" 글을 일시 삭제했습니다.</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>분할 게시물을 이동</strong><br />» %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>게시물 분할</strong><br />» %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>승인된 글</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>복원된 글</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>다음과 같은 이유로 "%3$s"이(가) 작성한 "%1$s" 글이 승인되지 않았습니다.</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>다시 동기화된 글 카운터</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>변경된 글 유형</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>잠금 해제된 글</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>잠금 해제된 게시물</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>허용되지 않는 사용자 이름 추가</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>허용되지 않는 사용자 이름 삭제</strong>',

	'LOG_DB_BACKUP'			=> '<strong>데이터베이스 백업</strong>',
	'LOG_DB_DELETE'			=> '<strong>삭제된 데이터베이스 백업</strong>',
	'LOG_DB_RESTORE'		=> '<strong>복원된 데이터베이스 백업</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>다운로드 목록에서 제외된 IP/호스트 이름</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>다운로드 목록에 IP/호스트 이름 추가</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>다운로드 목록에서 제거된 IP/호스트 이름</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber 에러</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Email 에러</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>CAPTCHA 에러</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>새 포럼 생성</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '%1$s의 <strong>포럼 권한 복사</strong><br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>삭제된 포럼</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>삭제된 포럼 및 해당 하위 포럼</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>포럼을 삭제하고 하위 포럼을 이동</strong>하여 %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>포럼을 삭제하고 게시물을 %1$s(으)로 </strong> 이동했습니다.<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>포럼 및 해당 하위 포럼을 삭제하고 게시물을 %1$s(으)로 이동</strong><br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>포럼을 삭제하고 게시물을</strong> %1$s <strong>하위 포럼</strong>을 %2$s로 이동<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>삭제된 포럼 및 해당 게시물</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>삭제된 포럼, 해당 게시물 및 하위 포럼</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>포럼 및 해당 게시물 삭제, 하위 포럼 이동</strong> %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>수정된 포럼 세부정보</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>포럼 이동</strong> %1$s <strong>아래</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>포럼 이동</strong> %1$s <strong>위</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>포럼 재동기화</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>일반 오류 발생</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>새 사용자 그룹 생성됨</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>"%1$s" 그룹이 회원의 기본값이 됨</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>삭제된 사용자 그룹</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>사용자 그룹에서 강등된 리더</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>사용자 그룹의 리더로 승격된 회원</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>사용자 그룹에서 제거된 구성원</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>사용자 그룹 세부정보 업데이트됨</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>사용자 그룹에 새 리더 추가</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>사용자 그룹에 새 회원 추가</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>사용자 그룹에서 승인된 사용자</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>사용자가 "%1$s" 그룹에 가입하도록 요청했으며 승인이 필요합니다.</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>이미지 생성 중 오류</strong><br />» %2$s 라인의 %1$s 오류: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>활성화된 비활성 사용자</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>삭제된 비활성 사용자</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>비활성 사용자에게 알림 이메일 전송</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>%1$s에서 phpBB %2$s(으)로 변환됨</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>설치 phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>세션 IP/브라우저/X_FORWARDED_FOR 확인 실패</strong><br />»사용자 IP "<em>%1$s</em>"이 세션 IP "<em>%2$s에 대해 확인됨</em>", 세션 브라우저 문자열 "<em>%3$s</em>" 에 대해 확인된 사용자 브라우저 문자열 "<em>%4$s</em>" 및 사용자 X_FORWARDED_FOR 문자열 "<em>%5$s</em>"이 세션 X_FORWARDED_FOR 문자열 "<em>%6$s</em>"에 대해 확인되었습니다.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber 계정 변경됨</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber 비밀번호 변경됨</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber 계정 등록됨</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber 설정 변경됨</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>삭제된 언어 팩</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>설치된 언어 팩</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>업데이트된 언어 팩 세부 정보</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>대체된 언어 파일</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>제출된 언어 파일 및 저장소 폴더에 배치</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>대량 이메일 전송</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>글 "%1$s"의 게시물 변경</strong><br />» %2$s에서 %3$s로',

	'LOG_MODULE_DISABLE'	=> '<strong>모듈 비활성화</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>모듈 사용</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>아래로 이동된 모듈</strong><br />» %2$s 아래 %1$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>모듈이 위로 이동됨</strong><br />» %2$s 위의 %1$s',
	'LOG_MODULE_REMOVED'	=> '<strong>제거된 모듈</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>모듈 추가</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>모듈 수정됨</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>관리자 역할 추가됨</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>관리자 역할 수정됨</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>관리자 역할 제거됨</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>포럼 역할 추가</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>포럼 역할 수정됨</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>포럼 역할 제거됨</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>운영자 역할 추가</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>운영자 역할 수정됨</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>운영자 역할이 제거됨</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>사용자 역할 추가됨</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>사용자 역할 수정됨</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>사용자 역할 제거됨</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>정리를 위해 %1$s을(를) 열 수 없습니다. 권한을 확인하십시오.</strong><br />예외: %2$s<br />추적: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>프로필 필드 활성화됨</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>프로필 필드 추가됨</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>프로필 필드 비활성화됨</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>프로필 입력란이 변경됨</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>프로필 필드가 제거됨</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>정리된 포럼</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>자동 정리된 포럼</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>자동 정리된 그림자 글</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>사용자 비활성화</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>사용자 정리 및 게시물 삭제</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>사용자 정리 및 게시물 유지</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>삭제된 캐시</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>삭제된 세션</strong>',

	'LOG_RANK_ADDED'		=> '<strong>새 순위 추가</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>제거된 순위</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>업데이트된 순위</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>신고/거부 사유 추가</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>제거된 신고/거부 사유</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>업데이트된 신고/거부 사유</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>리퍼러 확인 실패</strong><br />»리퍼러는 "<em>%1$s</em>"입니다. 요청이 거부되고 세션이 종료되었습니다.',
	'LOG_RESET_DATE'			=> '<strong>보드 시작 날짜 재설정</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>대부분의 사용자 온라인 재설정</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>파일 통계가 재동기화됨</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>사용자 게시물 수가 다시 동기화됨</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>점으로 된 글 재동기화됨</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>게시물, 글 및 사용자 통계 재동기화</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>생성된 검색 색인</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>제거된 검색 색인</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx 오류</strong><br />» %s',

	'LOG_SPAMHAUS_OPEN_RESOLVER'		=> 'Spamhaus does not allow queries using an open resolver. Blacklist checking has been disabled. For more information, see https://www.spamhaus.com/product/help-for-spamhaus-public-mirror-users/.',
	'LOG_SPAMHAUS_VOLUME_LIMIT'			=> 'Spamhaus query volume limit has been exceeded. Blacklist checking has been disabled. For more information, see https://www.spamhaus.com/product/help-for-spamhaus-public-mirror-users/.',

	'LOG_STYLE_ADD'				=> '<strong>새 스타일 추가</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>삭제된 스타일</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>스타일 수정</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>익스포트 스타일</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>데이터베이스에 새 템플릿 세트 추가</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>파일 시스템에 새 템플릿 세트 추가</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>템플릿 세트 <em>%1$s</em></strong>에서 템플릿 파일의 캐시된 버전을 삭제했습니다.<br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>삭제된 템플릿 세트</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>편집된 템플릿 세트 <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>템플릿 세부정보 수정</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>내보낸 템플릿 세트</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>새로고침된 템플릿 세트</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>데이터베이스에 새 테마 추가</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>파일 시스템에 새 테마 추가</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>테마 삭제됨</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>수정된 테마 세부정보</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>수정된 테마 <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>수정된 테마 <em>%1$s</em></strong><br />» 수정된 파일 <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>내보낸 테마</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>새로고침된 테마</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>버전 %1$s에서 버전 %2$s로 데이터베이스 업데이트</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB를 버전 %1$s에서 버전 %2$s로 업데이트</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>사용자 활성화됨</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>사용자 관리를 통해 차단된 사용자</strong> "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>사용자 관리를 통한 IP 차단</strong> "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>사용자 관리를 통한 이메일 차단</strong> "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>삭제된 사용자</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>사용자가 만든 모든 첨부파일을 제거했습니다.</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>삭제된 사용자 아바타</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>비워진 사용자 보낼 편지함</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>사용자가 작성한 모든 게시물을 제거했습니다.</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>제거된 사용자 서명</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>사용자 비활성화됨</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>이동한 사용자 게시물</strong><br />» "%1$s"의 게시물을 "%2$s" 포럼으로 이동했습니다.',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>변경된 사용자 비밀번호</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>강제 사용자 계정 재활성화</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>사용자에게서 미인증 플래그를 제거했습니다.</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>"%1$s" 사용자가 이메일을 변경했습니다.</strong><br />»를 "%2$s"에서 "%3$s"(으)로 변경했습니다.',
	'LOG_USER_UPDATE_NAME'	=> '<strong>사용자 이름 변경</strong><br />» "%1$s"에서 "%2$s"(으)로',
	'LOG_USER_USER_UPDATE'	=> '<strong>업데이트된 사용자 세부정보</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>사용자 계정 활성화됨</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>사용자 아바타가 삭제됨</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>사용자 서명이 제거됨</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>사용자 피드백 추가</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>추가된 항목:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>사용자 계정 비활성화됨</strong>',
	'LOG_USER_LOCK'				=> '<strong>사용자가 자신의 글을 잠갔습니다.</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>포럼으로 모든 게시물 이동</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>강제 사용자 계정 재활성화</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>사용자가 자신의 글을 잠금 해제했습니다.</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>사용자 경고 추가</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>이 사용자에게 다음 경고가 발생했습니다.</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>사용자가 기본 그룹을 변경함</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>사용자가 사용자 그룹에서 리더로 강등됨</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>사용자 가입 그룹</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>사용자가 그룹에 가입했으며 승인이 필요합니다.</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>사용자가 그룹에서 멤버십을 탈퇴했습니다.</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>삭제된 사용자 경고</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>삭제된 사용자 경고</strong><br />» %1$s',
		2 => '<strong>삭제된 사용자 경고 %2$d개</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>모든 사용자 경고 삭제</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>단어 검열 추가</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>삭제된 단어 검열</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>수정된 단어 검열</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>확장 프로그램 사용</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>확장 프로그램 비활성화됨</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>확장 프로그램 데이터 삭제됨</strong><br />» %s',
	'LOG_EXT_UPDATE'	=> '<strong>확장 프로그램 업데이트됨</strong><br />» %s',
));
