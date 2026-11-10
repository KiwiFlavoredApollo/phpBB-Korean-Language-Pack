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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> '설치 패널',
	'SELECT_LANG'	=> '언어 선택',

	'STAGE_INSTALL'	=> 'phpBB 설치',

	// Introduction page
	'INTRODUCTION_TITLE'	=> '소개',
	'INTRODUCTION_BODY'		=> 'phpBB3에 오신 것을 환영합니다!<br /><br />phpBB®는 전 세계에서 널리 사용되는 오픈 소스 게시판 솔루션입니다. 2000년에 시작된 phpBB 제품군의 최신 버전인 phpBB3는 다양한 기능과 편리한 사용 환경을 제공하며 phpBB 팀의 지원을 받습니다. phpBB2의 장점을 크게 개선하고 이전 버전에 없던 여러 요청 기능을 추가했습니다.<br /><br />이 설치 시스템은 phpBB3의 새 설치, 이전 릴리스에서 최신 버전으로의 업데이트, 다른 게시판 시스템(phpBB2 포함)에서 phpBB3로의 변환을 안내합니다. 자세한 내용은 <a href="%1$s">설치 안내서</a>를 참조하십시오.<br /><br />phpBB3 라이선스나 지원 정책을 확인하려면 옆 메뉴에서 해당 항목을 선택하십시오. 계속하려면 위의 알맞은 탭을 선택하십시오.',

	// Support page
	'SUPPORT_TITLE'		=> '지원',
	'SUPPORT_BODY'		=> '현재 안정 버전의 phpBB3는 무료로 완전한 지원을 받을 수 있습니다. 지원 범위는 다음과 같습니다.</p><ul><li>설치</li><li>구성</li><li>기술 질문</li><li>소프트웨어의 잠재적인 버그와 관련된 문제</li><li>릴리스 후보(RC) 버전에서 최신 안정 버전으로 업데이트</li><li>phpBB 2.0.x에서 phpBB3로 변환</li><li>다른 게시판 소프트웨어에서 phpBB3로 변환(<a href="https://www.phpbb.com/community/viewforum.php?f=486">변환기 포럼</a> 참조)</li></ul><p>아직 phpBB3 베타 버전을 사용 중이라면 최신 버전을 새로 설치하는 것이 좋습니다.</p><h2>확장 기능 / 스타일</h2><p>확장 기능 관련 문제는 해당 <a href="https://www.phpbb.com/community/viewforum.php?f=451">확장 기능 포럼</a>에 게시하십시오.<br />스타일, 템플릿, 테마 관련 문제는 해당 <a href="https://www.phpbb.com/community/viewforum.php?f=471">스타일 포럼</a>에 게시하십시오.<br /><br />특정 패키지에 관한 질문은 해당 패키지 전용 주제에 직접 게시하십시오.</p><h2>지원 받기</h2><p><a href="https://www.phpbb.com/support/">지원 섹션</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">빠른 시작 안내서</a><br /><br />최신 소식과 릴리스를 확인하려면 <a href="https://www.x.com/phpbb/">X</a>와 <a href="https://www.facebook.com/phpbb/">Facebook</a>에서 phpBB를 팔로우하십시오.<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'GNU 일반 공중 사용 허가서',

	// Install page
	'INSTALL_INTRO'			=> '설치 시작',
	'INSTALL_INTRO_BODY'	=> '이 옵션으로 서버에 phpBB3를 설치할 수 있습니다.</p><p>계속하려면 데이터베이스 설정이 필요합니다. 설정을 모르면 호스팅 업체에 문의하십시오. 다음 정보가 없으면 설치를 계속할 수 없습니다.</p><ul><li>사용할 데이터베이스 유형</li><li>데이터베이스 서버 호스트 이름 또는 DSN</li><li>데이터베이스 서버 포트(대부분의 경우 필요하지 않음)</li><li>서버의 데이터베이스 이름</li><li>데이터베이스에 접속할 사용자 이름과 비밀번호</li></ul><p><strong>참고:</strong> SQLite를 사용하는 경우 DSN 필드에 데이터베이스 파일의 전체 경로를 입력하고 사용자 이름과 비밀번호는 비워 두십시오. 보안을 위해 데이터베이스 파일을 웹에서 접근할 수 없는 위치에 저장해야 합니다.</p><p>phpBB3는 다음 데이터베이스를 지원합니다.</p><ul><li>MySQL 4.1.3 이상(MySQLi 필요)</li><li>PostgreSQL 8.3 이상</li><li>SQLite 3.6.15 이상</li><li>MS SQL Server 2000 이상(직접 또는 ODBC)</li><li>MS SQL Server 2005 이상(네이티브)</li><li>Oracle</li></ul><p>서버에서 지원되는 데이터베이스만 표시됩니다.',

	'ACP_LINK'	=> '<a href="%1$s">ACP</a>로 이동',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB가 이미 설치되어 있습니다.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB가 아직 설치되지 않았습니다.',
	'INSTALL_RESTART'				=> '설치 다시 시작',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> '파일이 없습니다',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'phpBB를 설치하려면 %1$s 파일이 있어야 합니다.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> '원활한 포럼 이용을 위해 %1$s 파일을 두는 것이 좋습니다.',
	'FILE_NOT_WRITABLE'						=> '파일에 쓸 수 없습니다',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'phpBB를 설치하려면 %1$s 파일에 쓸 수 있어야 합니다.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> '원활한 포럼 이용을 위해 %1$s 파일에 쓸 수 있도록 설정하는 것이 좋습니다.',

	'DIRECTORY_NOT_EXISTS'						=> '디렉터리가 없습니다',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'phpBB를 설치하려면 %1$s 디렉터리가 있어야 합니다.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> '원활한 포럼 이용을 위해 %1$s 디렉터리를 두는 것이 좋습니다.',
	'DIRECTORY_NOT_WRITABLE'					=> '디렉터리에 쓸 수 없습니다',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'phpBB를 설치하려면 %1$s 디렉터리에 쓸 수 있어야 합니다.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> '원활한 포럼 이용을 위해 %1$s 디렉터리에 쓸 수 있도록 설정하는 것이 좋습니다.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP 버전',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB에는 PHP 7.2.0 이상이 필요합니다.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP getimagesize() 함수 필요',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'phpBB가 올바르게 작동하려면 getimagesize 함수를 사용할 수 있어야 합니다.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 지원',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'PHP의 PCRE 확장이 UTF-8 지원을 포함해 컴파일되지 않았다면 phpBB를 실행할 수 없습니다.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON 지원',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'phpBB가 올바르게 작동하려면 PHP JSON 확장을 사용할 수 있어야 합니다.',
	'PHP_MBSTRING_SUPPORT'				=> 'PHP mbstring 지원',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'phpBB가 올바르게 작동하려면 PHP mbstring 확장을 사용할 수 있어야 합니다.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM 지원',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'phpBB가 올바르게 작동하려면 PHP XML/DOM 확장을 사용할 수 있어야 합니다.',
	'PHP_SUPPORTED_DB'					=> '지원되는 데이터베이스',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'PHP에서 호환되는 데이터베이스를 하나 이상 지원해야 합니다. 사용 가능한 데이터베이스 모듈이 표시되지 않으면 호스팅 업체에 문의하거나 관련 PHP 설치 문서를 확인하십시오.',

	'RETEST_REQUIREMENTS'	=> '요구 사항 다시 검사',

	'STAGE_REQUIREMENTS'	=> '요구 사항 검사',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> '이 구역의 모든 필드를 입력해야 합니다.',

	'TIMEOUT_DETECTED_TITLE'	=> '설치 프로그램에서 시간 초과를 감지했습니다',
	'TIMEOUT_DETECTED_MESSAGE'	=> '설치 프로그램에서 시간 초과를 감지했습니다. 페이지를 새로 고칠 수 있지만 데이터가 손상될 수 있습니다. 시간 초과 설정을 늘리거나 CLI를 사용하는 것이 좋습니다.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> '설치 정보 설정',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> '관리자 정보',

	// Form labels
	'ADMIN_CONFIG'				=> '관리자 설정',
	'ADMIN_PASSWORD'			=> '관리자 비밀번호',
	'ADMIN_PASSWORD_CONFIRM'	=> '관리자 비밀번호 확인',
	'ADMIN_PASSWORD_EXPLAIN'	=> '6~30자의 비밀번호를 입력하십시오.',
	'ADMIN_USERNAME'			=> '관리자 사용자 이름',
	'ADMIN_USERNAME_EXPLAIN'	=> '3~20자의 사용자 이름을 입력하십시오.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> '입력한 이메일 주소가 올바르지 않습니다.',
	'INST_ERR_PASSWORD_MISMATCH'	=> '입력한 비밀번호가 서로 일치하지 않습니다.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> '입력한 비밀번호가 너무 깁니다. 최대 길이는 30자입니다.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> '입력한 비밀번호가 너무 짧습니다. 최소 길이는 6자입니다.',
	'INST_ERR_USER_TOO_LONG'		=> '입력한 사용자 이름이 너무 깁니다. 최대 길이는 20자입니다.',
	'INST_ERR_USER_TOO_SHORT'		=> '입력한 사용자 이름이 너무 짧습니다. 최소 길이는 3자입니다.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> '게시판 설정',
	'DEFAULT_LANGUAGE'	=> '기본 언어',
	'BOARD_NAME'		=> '게시판 제목',
	'BOARD_DESCRIPTION'	=> '게시판의 짧은 설명',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> '데이터베이스 설정',

	// Form labels
	'DB_CONFIG'				=> '데이터베이스 구성',
	'DBMS'					=> '데이터베이스 유형',
	'DB_HOST'				=> '데이터베이스 서버 호스트 이름 또는 DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN은 Data Source Name의 약자로 ODBC 설치에만 해당합니다. PostgreSQL에서 UNIX 도메인 소켓으로 로컬 서버에 연결하려면 localhost를, TCP로 연결하려면 127.0.0.1을 사용하십시오. SQLite는 데이터베이스 파일의 전체 경로를 입력하십시오.',
	'DB_PORT'				=> '데이터베이스 서버 포트',
	'DB_PORT_EXPLAIN'		=> '서버가 표준이 아닌 포트를 사용한다는 것을 아는 경우가 아니면 비워 두십시오.',
	'DB_PASSWORD'			=> '데이터베이스 비밀번호',
	'DB_NAME'				=> '데이터베이스 이름',
	'DB_USERNAME'			=> '데이터베이스 사용자 이름',
	'DATABASE_VERSION'		=> '데이터베이스 버전',
	'TABLE_PREFIX'			=> '데이터베이스 테이블 접두사',
	'TABLE_PREFIX_EXPLAIN'	=> '접두사는 문자로 시작해야 하며 문자, 숫자, 밑줄만 포함할 수 있습니다.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'ODBC를 통한 MSSQL Server 2000 이상',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005 이상 [ 네이티브 ]',
	'DB_OPTION_MYSQLI'		=> 'MySQLi 확장을 사용하는 MySQL',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> '데이터베이스 설치 오류',
	'INST_ERR_NO_DB'				=> '선택한 데이터베이스 유형의 PHP 모듈을 불러올 수 없습니다.',
	'INST_ERR_DB_INVALID_PREFIX'	=> '입력한 접두사가 올바르지 않습니다. 문자로 시작해야 하며 문자, 숫자, 밑줄만 포함할 수 있습니다.',
	'INST_ERR_PREFIX_TOO_LONG'		=> '지정한 테이블 접두사가 너무 깁니다. 최대 길이는 %d자입니다.',
	'INST_ERR_DB_NO_NAME'			=> '데이터베이스 이름을 지정하지 않았습니다.',
	'INST_ERR_DB_FORUM_PATH'		=> '지정한 데이터베이스 파일이 게시판 디렉터리 안에 있습니다. 웹에서 접근할 수 없는 위치에 두십시오.',
	'INST_ERR_DB_CONNECT'			=> '데이터베이스에 연결할 수 없습니다. 아래 오류 메시지를 확인하십시오.',
	'INST_ERR_DB_NO_WRITABLE'		=> '데이터베이스와 이를 포함하는 디렉터리 모두에 쓸 수 있어야 합니다.',
	'INST_ERR_DB_NO_ERROR'			=> '오류 메시지가 없습니다.',
	'INST_ERR_PREFIX'				=> '지정한 접두사를 사용하는 테이블이 이미 있습니다. 다른 접두사를 선택하십시오.',
	'INST_ERR_DB_NO_MYSQLI'			=> '이 컴퓨터에 설치된 MySQL 버전은 선택한 “MySQLi 확장을 사용하는 MySQL” 옵션과 호환되지 않습니다. 대신 “MySQL” 옵션을 사용해 보십시오.',
	'INST_ERR_DB_NO_SQLITE3'		=> '설치된 SQLite 확장 버전이 너무 오래되었습니다. 최소 3.6.15로 업그레이드해야 합니다.',
	'INST_ERR_DB_NO_ORACLE'			=> '이 컴퓨터에 설치된 Oracle 버전에서는 <var>NLS_CHARACTERSET</var> 매개 변수를 <var>UTF8</var>로 설정해야 합니다. 9.2 이상으로 업그레이드하거나 매개 변수를 변경하십시오.',
	'INST_ERR_DB_NO_POSTGRES'		=> '선택한 데이터베이스가 <var>UNICODE</var> 또는 <var>UTF8</var> 인코딩으로 생성되지 않았습니다. 해당 인코딩으로 만든 데이터베이스를 사용해 설치하십시오.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> '스키마 파일에 쓸 수 없습니다',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> '이메일 설정',

	// Package info
	'PACKAGE_VERSION'					=> '설치된 패키지 버전',
	'UPDATE_INCOMPLETE'				=> 'phpBB 설치가 올바르게 업데이트되지 않았습니다.',
	'UPDATE_INCOMPLETE_MORE'		=> '이 오류를 해결하려면 아래 정보를 읽으십시오.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>완료되지 않은 업데이트</h1><p>마지막 phpBB 업데이트가 완료되지 않았습니다. <a href="%1$s" title="%1$s">데이터베이스 업데이트 도구</a>를 열고 <em>데이터베이스만 업데이트</em>를 선택한 뒤 <strong>제출</strong>을 클릭하십시오. 데이터베이스 업데이트가 끝나면 “install” 디렉터리를 삭제하는 것을 잊지 마십시오.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> '새 기능 릴리스 <strong>%1$s</strong>을 사용할 수 있습니다. 제공 기능과 업그레이드 방법은 <a href="%2$s" title="%2$s"><strong>릴리스 공지</strong></a>를 읽어 보십시오.',
	'SERVER_CONFIG'				=> '서버 설정',
	'SCRIPT_PATH'				=> '스크립트 경로',
	'SCRIPT_PATH_EXPLAIN'		=> '도메인 이름을 기준으로 phpBB가 있는 경로입니다. 예: <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> '감사합니다. 운영진 드림',
	'CONFIG_SITE_DESC'				=> '포럼을 설명하는 짧은 문구',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> '<t>phpBB3 설치의 예제 게시글입니다. 모든 기능이 정상적으로 작동하는 것 같습니다. 원한다면 이 글을 삭제하고 게시판 설정을 계속할 수 있습니다. 설치 중 첫 카테고리와 첫 포럼에는 관리자, 봇, 전역 중재자, 손님, 가입 사용자, COPPA 가입 사용자 등 미리 정의된 사용자 그룹의 적절한 권한이 할당됩니다. 첫 카테고리와 첫 포럼도 삭제한다면 새로 만드는 모든 카테고리와 포럼에 이 사용자 그룹들의 권한을 지정해야 합니다. 첫 카테고리와 첫 포럼의 이름을 바꾸고, 새 카테고리와 포럼을 만들 때 여기에서 권한을 복사하는 것이 좋습니다. 즐겁게 이용하십시오!</t>',

	'FORUMS_FIRST_CATEGORY'			=> '첫 번째 카테고리',
	'FORUMS_TEST_FORUM_DESC'		=> '첫 번째 포럼의 설명입니다.',
	'FORUMS_TEST_FORUM_TITLE'		=> '첫 번째 포럼',

	'RANKS_SITE_ADMIN_TITLE'		=> '사이트 관리자',
	'REPORT_WAREZ'					=> '게시글에 불법 또는 불법 복제 소프트웨어 링크가 있습니다.',
	'REPORT_SPAM'					=> '신고된 게시글의 목적이 웹사이트나 다른 제품의 광고뿐입니다.',
	'REPORT_OFF_TOPIC'				=> '신고된 게시글이 주제에서 벗어났습니다.',
	'REPORT_OTHER'					=> '신고된 게시글이 다른 분류에 해당하지 않습니다. 추가 정보 필드를 사용하십시오.',

	'SMILIES_ARROW'					=> '화살표',
	'SMILIES_CONFUSED'				=> '혼란스러움',
	'SMILIES_COOL'					=> '멋짐',
	'SMILIES_CRYING'				=> '울음 또는 매우 슬픔',
	'SMILIES_EMARRASSED'			=> '당황스러움',
	'SMILIES_EVIL'					=> '사악함 또는 매우 화남',
	'SMILIES_EXCLAMATION'			=> '느낌표',
	'SMILIES_GEEK'					=> '괴짜',
	'SMILIES_IDEA'					=> '아이디어',
	'SMILIES_LAUGHING'				=> '웃음',
	'SMILIES_MAD'					=> '화남',
	'SMILIES_MR_GREEN'				=> '미스터 그린',
	'SMILIES_NEUTRAL'				=> '무표정',
	'SMILIES_QUESTION'				=> '질문',
	'SMILIES_RAZZ'					=> '메롱',
	'SMILIES_ROLLING_EYES'			=> '눈 굴리기',
	'SMILIES_SAD'					=> '슬픔',
	'SMILIES_SHOCKED'				=> '충격',
	'SMILIES_SMILE'					=> '미소',
	'SMILIES_SURPRISED'				=> '놀람',
	'SMILIES_TWISTED_EVIL'			=> '비뚤어진 악마',
	'SMILIES_UBER_GEEK'				=> '엄청난 괴짜',
	'SMILIES_VERY_HAPPY'			=> '매우 행복함',
	'SMILIES_WINK'					=> '윙크',

	'TOPICS_TOPIC_TITLE'			=> 'phpBB3에 오신 것을 환영합니다',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> '개요',
	'MENU_INTRO'		=> '소개',
	'MENU_LICENSE'		=> '라이선스',
	'MENU_SUPPORT'		=> '지원',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> '설정 파일 생성',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> '구성 설정 추가',
	'TASK_ADD_DEFAULT_DATA'				=> '데이터베이스에 기본 설정 추가',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> '데이터베이스 스키마 파일 생성',
	'TASK_SETUP_DATABASE'				=> '데이터베이스 설정',
	'TASK_CREATE_TABLES'				=> '테이블 생성',

	// Install data
	'TASK_ADD_AI_CRAWLERS'		=> 'AI 크롤러 등록',
	'TASK_ADD_BOTS'				=> '봇 등록',
	'TASK_ADD_LANGUAGES'		=> '사용 가능한 언어 설치',
	'TASK_ADD_MODULES'			=> '모듈 설치',
	'TASK_CREATE_SEARCH_INDEX'	=> '검색 색인 생성',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> '포함된 확장 기능 설치',
	'TASK_NOTIFY_USER'			=> '알림 이메일 전송',
	'TASK_POPULATE_MIGRATIONS'	=> '마이그레이션 데이터 채우기',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> '설치 프로그램이 성공적으로 완료되었습니다',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> '모듈을 찾을 수 없습니다',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> '%s 서비스가 정의되지 않아 모듈을 찾을 수 없습니다.',

	'TASK_NOT_FOUND'				=> '작업을 찾을 수 없습니다',
	'TASK_NOT_FOUND_DESCRIPTION'	=> '%s 서비스가 정의되지 않아 작업을 찾을 수 없습니다.',

	'SKIP_MODULE'	=> '“%s” 모듈 건너뛰기',
	'SKIP_TASK'		=> '“%s” 작업 건너뛰기',

	'TASK_SERVICE_INSTALLER_MISSING'	=> '모든 설치 작업 서비스는 “installer”로 시작해야 합니다',
	'TASK_CLASS_NOT_FOUND'				=> '설치 작업 서비스 정의가 올바르지 않습니다. 지정한 서비스 이름은 “%1$s”이며, 이에 필요한 클래스 네임스페이스는 “%2$s”입니다. 자세한 내용은 task_interface 문서를 참조하십시오.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> '설치 프로그램 설정 파일에 쓸 수 없습니다.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'phpBB 설치',
	'CLI_UPDATE_BOARD'				=> 'phpBB 업데이트',
	'CLI_INSTALL_SHOW_CONFIG'		=> '사용할 구성 표시',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> '구성 파일 검증',
	'CLI_CONFIG_FILE'				=> '사용할 구성 파일',
	'MISSING_FILE'					=> '%1$s 파일에 접근할 수 없습니다',
	'MISSING_DATA'					=> '구성 파일에 데이터가 없거나 올바르지 않은 설정이 포함되어 있을 수 있습니다.',
	'INVALID_YAML_FILE'				=> '%1$s YAML 파일을 구문 분석할 수 없습니다',
	'CONFIGURATION_VALID'			=> '구성 파일이 올바릅니다',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'phpBB 설치 업데이트',
	'UPDATE_INSTALLATION_EXPLAIN'	=> '이 옵션으로 phpBB 설치를 최신 버전으로 업데이트할 수 있습니다.<br />진행 중 모든 파일의 무결성을 검사하며, 업데이트 전에 파일과 모든 차이를 검토할 수 있습니다.<br /><br />파일 업데이트는 두 가지 방법으로 수행할 수 있습니다.</p><h2>수동 업데이트</h2><p>직접 변경한 파일을 잃지 않도록 수정된 파일만 모은 맞춤 패키지를 다운로드합니다. 패키지를 받은 뒤 파일을 phpBB 루트 디렉터리의 올바른 위치에 직접 업로드해야 합니다. 완료 후 파일 검사를 다시 실행하여 파일이 올바른 위치에 있는지 확인할 수 있습니다.</p><h2>FTP 고급 업데이트</h2><p>첫 번째 방법과 비슷하지만 변경 파일을 직접 다운로드하고 업로드할 필요가 없습니다. 이 작업은 자동으로 수행됩니다. FTP 로그인 정보를 입력해야 하므로 미리 알고 있어야 합니다. 완료되면 파일 검사로 돌아가 모든 항목이 올바르게 업데이트되었는지 확인합니다.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '<h1>릴리스 공지</h1><p>업데이트를 계속하기 전에 최신 버전의 릴리스 공지를 읽으십시오. 유용한 정보와 전체 다운로드 링크, 변경 기록이 포함되어 있습니다.</p><br /><h1>전체 패키지로 업데이트하는 방법</h1><p>전체 패키지를 사용하는 것이 권장 업데이트 방법입니다. 설치에서 phpBB 핵심 파일을 수정했다면 변경 사항을 유지하기 위해 고급 업데이트 패키지를 사용할 수 있습니다. INSTALL.html 문서에 나온 다른 방법도 사용할 수 있습니다. 전체 패키지로 phpBB3를 업데이트하는 절차는 다음과 같습니다.</p><ol style="margin-left: 20px; font-size: 1.1em;"><li><strong class="error">게시판의 모든 파일과 데이터베이스를 백업합니다.</strong></li><li><a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com 다운로드 페이지</a>에서 최신 “Full Package” 압축 파일을 받습니다.</li><li>압축을 풉니다.</li><li>사이트가 아닌 <em>패키지에서</em> <code class="inline">config.php</code> 파일과 <code class="inline">/images</code>, <code class="inline">/store</code>, <code class="inline">/files</code> 폴더를 삭제합니다.</li><li>ACP의 게시판 설정에서 prosilver가 기본 스타일인지 확인하고, 아니라면 prosilver로 설정합니다.</li><li>호스트에 있는 게시판 루트에서 <code class="inline">/vendor</code>와 <code class="inline">/cache</code> 폴더를 삭제합니다.</li><li>FTP 또는 SSH로 나머지 파일과 폴더(phpBB3 폴더에 남은 모든 내용)를 서버의 게시판 설치 루트에 업로드하여 기존 파일을 덮어씁니다. 새 내용을 올릴 때 <code class="inline">/ext</code> 폴더의 확장 기능을 삭제하지 않도록 주의하십시오.</li><li><strong><a href="%1$s" title="%1$s">브라우저에서 install 폴더를 열어 업데이트를 시작합니다</a>.</strong></li><li>데이터베이스 업데이트 단계를 따라 완료될 때까지 기다립니다.</li><li>FTP 또는 SSH로 게시판 설치 루트의 <code class="inline">/install</code> 폴더를 삭제합니다.<br><br></li></ol><p>이제 모든 사용자와 게시글이 유지된 최신 게시판을 사용할 수 있습니다. 다음 작업을 수행하십시오.</p><ul style="margin-left: 20px; font-size: 1.1em;"><li>언어 팩 업데이트</li><li>스타일 업데이트<br><br></li></ul><h1>고급 업데이트 패키지로 업데이트하는 방법</h1><p>고급 업데이트 패키지는 phpBB 핵심 파일을 수정한 경우에만 숙련된 사용자에게 권장됩니다. INSTALL.html 문서의 다른 방법도 사용할 수 있습니다. 고급 업데이트 패키지로 phpBB3를 업데이트하는 절차는 다음과 같습니다.</p><ol style="margin-left: 20px; font-size: 1.1em;"><li><a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com 다운로드 페이지</a>에서 “Advanced Update Package” 압축 파일을 받습니다.</li><li>압축을 풉니다.</li><li>압축을 푼 “install” 및 “vendor” 폴더 전체를 phpBB 루트 디렉터리(config.php 파일이 있는 곳)에 업로드합니다.<br><br></li></ol><p>install 디렉터리가 존재하는 동안 일반 사용자는 게시판을 이용할 수 없습니다.<br /><br /><strong><a href="%1$s" title="%1$s">브라우저에서 install 폴더를 열어 업데이트를 시작합니다</a>.</strong><br /><br />이후 업데이트 절차가 안내되며, 완료되면 알림이 표시됩니다.</p>',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> '실행할 업데이트 유형',

	'UPDATE_TYPE_ALL'		=> '파일 시스템과 데이터베이스 업데이트',
	'UPDATE_TYPE_DB_ONLY'	=> '데이터베이스만 업데이트',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> '파일 업데이트 방법',

	'UPDATE_FILE_METHOD'			=> '파일 업데이트 방법',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> '수정된 파일을 압축 파일로 다운로드',
	'UPDATE_FILE_METHOD_FTP'		=> 'FTP로 파일 업데이트(자동)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> '직접 파일 접근으로 업데이트(자동)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> '다운로드 압축 형식 선택',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP 설정',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> '올바른 업데이트 디렉터리를 찾을 수 없습니다. 관련 파일을 업로드했는지 확인하십시오.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> '현재 버전이 최신이므로 업데이트 도구를 실행할 필요가 없습니다. 파일 무결성을 검사하려면 올바른 업데이트 파일을 업로드했는지 확인하십시오.',
	'OLD_UPDATE_FILES'				=> '업데이트 파일이 오래되었습니다. 찾은 파일은 phpBB %1$s에서 phpBB %2$s로 업데이트하기 위한 것이지만 최신 phpBB 버전은 %3$s입니다.',
	'INCOMPATIBLE_UPDATE_FILES'		=> '찾은 업데이트 파일이 설치된 버전과 호환되지 않습니다. 설치된 버전은 %1$s이고, 파일은 phpBB %2$s에서 %3$s로 업데이트하기 위한 것입니다.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> '파일 업데이트',

	// Check files
	'UPDATE_CHECK_FILES'	=> '업데이트할 파일 검사',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> '파일 비교 도구에서 %s을(를) 열지 못했습니다.',

	'UPDATE_FILE_DIFF'		=> '변경된 파일 비교',
	'ALL_FILES_DIFFED'		=> '수정된 모든 파일을 비교했습니다.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> '파일 업데이트',

	'DOWNLOAD'							=> '다운로드',
	'DOWNLOAD_CONFLICTS'				=> '병합 충돌 압축 파일 다운로드',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> '충돌 위치는 &lt;&lt;&lt;를 검색하여 찾으십시오',
	'DOWNLOAD_UPDATE_METHOD'			=> '수정된 파일 압축본 다운로드',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> '다운로드한 압축 파일을 푸십시오. phpBB 루트 디렉터리에 업로드해야 할 수정 파일이 들어 있습니다. 각 파일을 해당 위치에 업로드한 뒤 업데이트를 계속할 수 있습니다.',

	'FILE_ALREADY_UP_TO_DATE'		=> '파일이 이미 최신 상태입니다.',
	'FILE_DIFF_NOT_ALLOWED'			=> '이 파일은 비교할 수 없습니다.',
	'FILE_USED'						=> '정보를 가져온 파일',			// Single file
	'FILES_CONFLICT'				=> '충돌 파일',
	'FILES_CONFLICT_EXPLAIN'		=> '다음 파일은 수정되어 이전 버전의 원본과 다르며, 병합할 경우 충돌이 발생합니다. 충돌을 검토해 직접 해결하거나 원하는 병합 방법을 선택하여 업데이트를 계속하십시오. 직접 해결한 경우 수정 후 파일을 다시 검사하십시오. 파일마다 병합 방법을 선택할 수 있습니다. 첫 번째 방법은 이전 파일의 충돌 줄을 잃고, 다른 방법은 새 파일의 변경 사항을 잃게 됩니다.',
	'FILES_DELETED'					=> '삭제된 파일',
	'FILES_DELETED_EXPLAIN'			=> '다음 파일은 새 버전에 없으므로 설치에서 삭제해야 합니다.',
	'FILES_MODIFIED'				=> '수정된 파일',
	'FILES_MODIFIED_EXPLAIN'		=> '다음 파일은 수정되어 이전 버전의 원본과 다릅니다. 업데이트된 파일은 사용자의 수정 내용과 새 파일을 병합한 결과가 됩니다.',
	'FILES_NEW'						=> '새 파일',
	'FILES_NEW_EXPLAIN'				=> '다음 파일은 현재 설치에 없으며 새로 추가됩니다.',
	'FILES_NEW_CONFLICT'			=> '충돌하는 새 파일',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> '다음 파일은 최신 버전에 새로 추가되었지만 같은 위치에 같은 이름의 파일이 이미 있습니다. 기존 파일을 새 파일로 덮어씁니다.',
	'FILES_NOT_MODIFIED'			=> '수정되지 않은 파일',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> '다음 파일은 수정되지 않았으며 업데이트 대상 이전 버전의 phpBB 원본 파일과 같습니다.',
	'FILES_UP_TO_DATE'				=> '이미 업데이트된 파일',
	'FILES_UP_TO_DATE_EXPLAIN'		=> '다음 파일은 이미 최신 상태이므로 업데이트할 필요가 없습니다.',
	'FILES_VERSION'					=> '파일 버전',
	'TOGGLE_DISPLAY'				=> '파일 목록 보기/숨기기',

	// File updater
	'UPDATE_UPDATING_FILES'	=> '파일 업데이트 중',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> '파일 업데이트 도구 “%1$s”이(가) 실패했습니다. 설치 프로그램에서 “%2$s” 대체 방법을 시도합니다.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> '파일 업데이트 도구가 실패했으며 더 이상 사용할 대체 방법이 없습니다.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> '업데이트 계속',
	'UPDATE_RECHECK_UPDATE_FILES'		=> '파일 다시 검사',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> '데이터베이스 업데이트',

	'INLINE_UPDATE_SUCCESSFUL'		=> '데이터베이스를 성공적으로 업데이트했습니다.',

	'TASK_UPDATE_EXTENSIONS'	=> '확장 기능 업데이트',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> '지정한 변환기가 없습니다.',
	'DEV_NO_TEST_FILE'			=> '변환기의 test_file 변수에 값을 지정하지 않았습니다. 변환기 사용자라면 표시되지 않아야 하는 오류이므로 변환기 작성자에게 이 메시지를 알려 주십시오. 변환기 작성자라면 경로를 확인할 수 있도록 원본 게시판에 존재하는 파일 이름을 지정해야 합니다.',
	'COULD_NOT_COPY'			=> '<strong>%1$s</strong> 파일을 <strong>%2$s</strong>(으)로 복사할 수 없습니다.<br><br>대상 디렉터리가 존재하고 웹 서버에서 쓸 수 있는지 확인하십시오.',
	'COULD_NOT_FIND_PATH'		=> '이전 게시판의 경로를 찾을 수 없습니다. 설정을 확인하고 다시 시도하십시오.<br />» 원본 경로로 %s이(가) 지정되었습니다.',
	'CONFIG_PHPBB_EMPTY'		=> '“%s”의 phpBB3 config 변수가 비어 있습니다.',

	'MAKE_FOLDER_WRITABLE'		=> '다음 폴더가 존재하고 웹 서버에서 쓸 수 있는지 확인한 뒤 다시 시도하십시오.<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> '다음 폴더들이 존재하고 웹 서버에서 쓸 수 있는지 확인한 뒤 다시 시도하십시오.<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> '다시 검사',

	'NO_TABLES_FOUND'			=> '테이블을 찾을 수 없습니다.',
	'TABLES_MISSING'			=> '다음 테이블을 찾을 수 없습니다.<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> '테이블 접두사를 확인하고 다시 시도하십시오.',

	// Conversion in progress
	'CATEGORY'					=> '카테고리',
	'CONTINUE_CONVERT'			=> '변환 계속',
	'CONTINUE_CONVERT_BODY'		=> '이전에 시도한 변환이 발견되었습니다. 새 변환을 시작하거나 이전 변환을 계속할 수 있습니다.',
	'CONVERT_NEW_CONVERSION'	=> '새 변환',
	'CONTINUE_OLD_CONVERSION'	=> '이전에 시작한 변환 계속',
	'POST_ID'					=> '게시글 ID',

	// Start conversion
	'SUB_INTRO'					=> '소개',
	'CONVERT_INTRO'				=> 'phpBB 통합 변환기 프레임워크에 오신 것을 환영합니다',
	'CONVERT_INTRO_BODY'		=> '여기에서 설치된 다른 게시판 시스템의 데이터를 가져올 수 있습니다. 아래 목록에는 현재 사용할 수 있는 모든 변환 모듈이 표시됩니다. 변환하려는 게시판 소프트웨어의 변환기가 없다면 웹사이트에서 추가 변환 모듈을 다운로드할 수 있는지 확인하십시오.',
	'AVAILABLE_CONVERTORS'		=> '사용 가능한 변환기',
	'NO_CONVERTORS'				=> '사용할 수 있는 변환기가 없습니다.',
	'CONVERT_OPTIONS'			=> '옵션',
	'SOFTWARE'					=> '게시판 소프트웨어',
	'VERSION'					=> '버전',
	'CONVERT'					=> '변환',

	// Settings
	'STAGE_SETTINGS'			=> '설정',
	'TABLE_PREFIX_SAME'			=> '테이블 접두사는 변환할 원본 소프트웨어에서 사용한 것과 같아야 합니다.<br />» 지정한 테이블 접두사: %s.',
	'DEFAULT_PREFIX_IS'			=> '변환기에서 지정한 접두사의 테이블을 찾지 못했습니다. 원본 게시판의 정보를 올바르게 입력했는지 확인하십시오. %1$s의 기본 테이블 접두사는 <strong>%2$s</strong>입니다.',
	'SPECIFY_OPTIONS'			=> '변환 옵션 지정',
	'FORUM_PATH'				=> '게시판 경로',
	'FORUM_PATH_EXPLAIN'		=> '현재 <strong>phpBB3 설치 루트</strong>를 기준으로 이전 게시판이 있는 디스크의 <strong>상대</strong> 경로입니다.',
	'REFRESH_PAGE'				=> '페이지를 새로 고쳐 변환 계속',
	'REFRESH_PAGE_EXPLAIN'		=> '예로 설정하면 각 단계가 끝난 뒤 변환기가 페이지를 새로 고쳐 변환을 계속합니다. 처음 시험하는 변환이고 오류를 미리 확인하려면 아니요로 설정하는 것이 좋습니다.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> '변환 진행 중',

	'AUTHOR_NOTES'				=> '작성자 참고 사항<br />» %s',
	'STARTING_CONVERT'			=> '변환 절차 시작',
	'CONFIG_CONVERT'			=> '설정 변환 중',
	'DONE'						=> '완료',
	'PREPROCESS_STEP'			=> '전처리 함수/쿼리 실행 중',
	'FILLING_TABLE'				=> '<strong>%s</strong> 테이블 채우는 중',
	'FILLING_TABLES'			=> '테이블 채우는 중',
	'DB_ERR_INSERT'				=> '<code>INSERT</code> 쿼리 처리 중 오류가 발생했습니다.',
	'DB_ERR_LAST'				=> '<var>query_last</var> 처리 중 오류가 발생했습니다.',
	'DB_ERR_QUERY_FIRST'		=> '<var>query_first</var> 실행 중 오류가 발생했습니다.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '<var>query_first</var> 실행 중 오류가 발생했습니다: %s (“%s”).',
	'DB_ERR_SELECT'				=> '<code>SELECT</code> 쿼리 실행 중 오류가 발생했습니다.',
	'STEP_PERCENT_COMPLETED'	=> '<strong>%d</strong>/<strong>%d</strong>단계',
	'FINAL_STEP'				=> '마지막 단계 처리',
	'SYNC_FORUMS'				=> '포럼 동기화 시작',
	'SYNC_POST_COUNT'			=> 'post_counts 동기화 중',
	'SYNC_POST_COUNT_ID'		=> '<var>entry</var> %1$s부터 %2$s까지 post_counts 동기화 중.',
	'SYNC_TOPICS'				=> '주제 동기화 시작',
	'SYNC_TOPIC_ID'				=> '<var>topic_id</var> %1$s부터 %2$s까지 주제 동기화 중.',
	'PROCESS_LAST'					=> '마지막 명령 처리 중',
	'UPDATE_TOPICS_POSTED'		=> '작성한 주제 정보 생성 중',
	'UPDATE_TOPICS_POSTED_ERR'	=> '작성한 주제 정보를 생성하는 중 오류가 발생했습니다. 변환이 완료된 후 ACP에서 이 단계를 다시 시도할 수 있습니다.',
	'CONTINUE_LAST'				=> '마지막 명령 계속',
	'CLEAN_VERIFY'				=> '최종 구조 정리 및 검증 중',
	'NOT_UNDERSTAND'			=> '%s #%d, 테이블 %s(“%s”)을(를) 해석할 수 없습니다',
	'NAMING_CONFLICT'			=> '이름 충돌: %s 및 %s 모두 별칭입니다.<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> '변환 완료',
	'CONVERT_COMPLETE_EXPLAIN'	=> '게시판을 phpBB 3.3으로 성공적으로 변환했습니다. 이제 로그인하여 <a href="../">게시판에 접속</a>할 수 있습니다. install 디렉터리를 삭제하여 게시판을 활성화하기 전에 설정이 올바르게 이전되었는지 확인하십시오. phpBB 사용 도움말은 온라인 <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">문서</a>와 <a href="https://www.phpbb.com/community/viewforum.php?f=661">지원 포럼</a>에서 확인할 수 있습니다.',

	'COLLIDING_CLEAN_USERNAME'			=> '<strong>%s</strong>은(는) 다음 사용자의 정규화된 사용자 이름입니다:',
	'COLLIDING_USER'					=> '» 사용자 ID: <strong>%d</strong>, 사용자 이름: <strong>%s</strong>(게시글 %d개)',
	'COLLIDING_USERNAMES_FOUND'			=> '이전 게시판에서 서로 충돌하는 사용자 이름을 찾았습니다. 변환을 완료하려면 정규화된 사용자 이름마다 사용자 한 명만 남도록 해당 사용자를 삭제하거나 이름을 변경하십시오.',
	'CONV_ERR_FATAL'					=> '치명적인 변환 오류',
	'CONV_ERROR_ATTACH_FTP_DIR'			=> '이전 게시판에서 첨부 파일의 FTP 업로드를 사용하고 있습니다. FTP 업로드 옵션을 끄고 올바른 업로드 디렉터리를 지정한 다음 모든 첨부 파일을 웹에서 접근 가능한 새 디렉터리로 복사하십시오. 완료 후 변환기를 다시 시작하십시오.',
	'CONV_ERROR_CONFIG_EMPTY'			=> '변환에 사용할 설정 정보가 없습니다.',
	'CONV_ERROR_FORUM_ACCESS'			=> '포럼 접근 정보를 가져올 수 없습니다.',
	'CONV_ERROR_GET_CATEGORIES'			=> '카테고리를 가져올 수 없습니다.',
	'CONV_ERROR_GET_CONFIG'				=> '게시판 설정을 가져올 수 없습니다.',
	'CONV_ERROR_COULD_NOT_READ'			=> '“%s”에 접근하거나 읽을 수 없습니다.',
	'CONV_ERROR_GROUP_ACCESS'			=> '그룹 인증 정보를 가져올 수 없습니다.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'add_bots()에서 그룹 테이블의 불일치를 감지했습니다. 수동으로 작업한다면 모든 특수 그룹을 추가해야 합니다.',
	'CONV_ERROR_INSERT_BOT'				=> '봇을 users 테이블에 삽입할 수 없습니다.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> '봇을 bots 테이블에 삽입할 수 없습니다.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> '사용자를 user_group 테이블에 삽입할 수 없습니다.',
	'CONV_ERROR_MESSAGE_PARSER'			=> '메시지 구문 분석 오류',
	'CONV_ERROR_NO_AVATAR_PATH'			=> '개발자 참고: %s을(를) 사용하려면 $convertor[\'avatar_path\']를 지정해야 합니다.',
	'CONV_ERROR_NO_FORUM_PATH'			=> '원본 게시판의 상대 경로를 지정하지 않았습니다.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> '개발자 참고: %s을(를) 사용하려면 $convertor[\'avatar_gallery_path\']를 지정해야 합니다.',
	'CONV_ERROR_NO_GROUP'				=> '%2$s에서 “%1$s” 그룹을 찾을 수 없습니다.',
	'CONV_ERROR_NO_RANKS_PATH'			=> '개발자 참고: %s을(를) 사용하려면 $convertor[\'ranks_path\']를 지정해야 합니다.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> '개발자 참고: %s을(를) 사용하려면 $convertor[\'smilies_path\']를 지정해야 합니다.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> '개발자 참고: %s을(를) 사용하려면 $convertor[\'upload_path\']를 지정해야 합니다.',
	'CONV_ERROR_PERM_SETTING'			=> '권한 설정을 삽입하거나 업데이트할 수 없습니다.',
	'CONV_ERROR_PM_COUNT'				=> '폴더의 개인 메시지 수를 조회할 수 없습니다.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> '이전 카테고리를 대체할 새 포럼을 삽입할 수 없습니다.',
	'CONV_ERROR_REPLACE_FORUM'			=> '이전 포럼을 대체할 새 포럼을 삽입할 수 없습니다.',
	'CONV_ERROR_USER_ACCESS'			=> '사용자 인증 정보를 가져올 수 없습니다.',
	'CONV_ERROR_WRONG_GROUP'			=> '%2$s에 잘못된 그룹 “%1$s”이(가) 정의되어 있습니다.',
	'CONV_OPTIONS_BODY'					=> '이 페이지에서는 원본 게시판에 접근하는 데 필요한 정보를 수집합니다. 이전 게시판의 데이터베이스 정보를 입력하십시오. 변환기는 아래 데이터베이스를 변경하지 않습니다. 일관된 변환을 위해 원본 게시판을 비활성화해야 합니다.',
	'CONV_SAVED_MESSAGES'				=> '저장된 메시지',

	'PRE_CONVERT_COMPLETE'			=> '모든 변환 준비 단계를 성공적으로 완료했습니다. 이제 실제 변환을 시작할 수 있습니다. 일부 작업은 수동으로 수행하거나 조정해야 할 수 있습니다. 변환 후에는 특히 권한 할당을 확인하고, 변환되지 않는 검색 색인을 다시 만들며, 아바타와 이모티콘 같은 파일이 올바르게 복사되었는지 확인하십시오.',
));
