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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> '확장',
	'EXTENSIONS'				=> '확장',
	'EXTENSIONS_ADMIN'			=> '확장 관리자',
	'EXTENSIONS_EXPLAIN'		=> '확장 관리자는 phpBB 보드에 있는 도구로 모든 확장 상태를 관리하고 관련 정보를 볼 수 있습니다.',
	'EXTENSION_INVALID_LIST'	=> '"%s" 확장자가 잘못되었습니다.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> '선택한 확장은 이 보드에서 사용할 수 없습니다. phpBB 및 PHP 버전이 허용되는지 확인하십시오(세부 정보 페이지 참조).',
	'EXTENSION_DIR_INVALID'		=> '선택한 확장 프로그램의 디렉토리 구조가 잘못되어 활성화할 수 없습니다.',
	'EXTENSION_NOT_ENABLEABLE'	=> '선택한 확장은 활성화할 수 없습니다. 확장의 요구 사항을 확인하십시오.',
	'EXTENSION_NOT_INSTALLED'	=> '확장 %s을(를) 사용할 수 없습니다. 올바르게 설치되었는지 확인하십시오.',

	'DETAILS'				=> '상세한 설명',

	'EXTENSIONS_DISABLED'	=> '비활성화된 확장',
	'EXTENSIONS_ENABLED'	=> '활성화된 확장',

	'EXTENSION_DELETE_DATA'	=> '데이터 삭제',
	'EXTENSION_DISABLE'		=> '비활성화',
	'EXTENSION_ENABLE'		=> '활성화',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> '확장 프로그램의 데이터를 삭제하면 확장 프로그램의 모든 데이터와 설정이 제거됩니다. 확장 파일은 다시 활성화할 수 있도록 유지됩니다.',
	'EXTENSION_DISABLE_EXPLAIN'		=> '확장을 비활성화하면 파일, 데이터 및 설정이 유지되지만 확장에서 추가한 기능은 제거됩니다.',
	'EXTENSION_ENABLE_EXPLAIN'		=> '확장을 활성화하면 보드에서 사용할 수 있습니다.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> '확장 프로그램의 데이터는 현재 삭제 중입니다. 완료될 때까지 이 페이지를 종료하거나 새로 고치지 마십시오.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> '확장 프로그램은 현재 비활성화되어 있습니다. 완료될 때까지 이 페이지를 종료하거나 새로 고치지 마십시오.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> '확장 프로그램이 현재 활성화되어 있습니다. 완료될 때까지 이 페이지를 종료하거나 새로 고치지 마십시오.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> '확장 프로그램의 데이터가 삭제되었습니다.',
	'EXTENSION_DISABLE_SUCCESS'		=> '확장 프로그램이 비활성화되었습니다.',
	'EXTENSION_ENABLE_SUCCESS'		=> '확장 프로그램이 활성화되었습니다.',

	'EXTENSION_NAME'			=> '확장 이름',
	'EXTENSION_ACTIONS'			=> '엑션',
	'EXTENSION_OPTIONS'			=> '옵션',
	'EXTENSION_INSTALL_HEADLINE'=> '확장 설치',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>phpBB의 확장 데이터베이스에서 확장 다운로드</li>
			<li>확장 프로그램의 압축을 풀고 phpBB 보드의 <samp>ext/</samp> 디렉토리에 업로드합니다</li>
			<li>확장 관리자에서 확장을 활성화하십시오.</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> '확장 업데이트',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>확장 프로그램 비활성화</li>
			<li>파일 시스템에서 확장 프로그램의 파일 삭제</li>
			<li>새 파일 업로드</li>
			<li>확장 사용</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> '보드에서 확장 기능을 완전히 제거하기',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>확장 프로그램 비활성화</li>
			<li>확장 프로그램의 데이터 삭제</li>
			<li>파일 시스템에서 확장 프로그램의 파일 삭제</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> '"%s"와(과) 연결된 데이터를 삭제하시겠습니까?<br /><br />이렇게 하면 모든 데이터와 설정이 제거되며 취소할 수 없습니다!',
	'EXTENSION_DISABLE_CONFIRM'		=> '"%s" 확장을 비활성화하시겠습니까?',
	'EXTENSION_ENABLE_CONFIRM'		=> '"%s" 확장을 활성화하시겠습니까?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> '불안정한 버전을 강제로 사용하시겠습니까?',

	'RETURN_TO_EXTENSION_LIST'	=> '확장 목록으로 돌아가기',

	'EXT_DETAILS'			=> '확장 세부 정보',
	'DISPLAY_NAME'			=> '이름 표시하기',
	'CLEAN_NAME'			=> '클린네임',
	'TYPE'					=> '유형',
	'DESCRIPTION'			=> '설명',
	'VERSION'				=> '버전',
	'HOMEPAGE'				=> '홈페이지',
	'PATH'					=> '파일 경로',
	'TIME'					=> '릴리즈 타임',
	'LICENSE'				=> '라이센스',

	'REQUIREMENTS'			=> '요구 사항',
	'PHPBB_VERSION'			=> 'phpBB 버전',
	'PHP_VERSION'			=> 'PHP 버전',
	'AUTHOR_INFORMATION'	=> '작가 정보',
	'AUTHOR_NAME'			=> '이름',
	'AUTHOR_EMAIL'			=> '이메일',
	'AUTHOR_HOMEPAGE'		=> '홈페이지',
	'AUTHOR_ROLE'			=> '역할',

	'NOT_UP_TO_DATE'		=> '%s이(가) 최신 상태가 아닙니다.',
	'UP_TO_DATE'			=> '%s은(는) 최신 상태입니다.',
	'ANNOUNCEMENT_TOPIC'	=> '출시 발표',
	'DOWNLOAD_LATEST'		=> '버전 다운로드',
	'NO_VERSIONCHECK'		=> '버전 확인 정보가 제공되지 않았습니다.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> '모든 버전 다시 확인',
	'FORCE_UNSTABLE'					=> '항상 불안정한 버전 확인',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> '버전 확인 설정',

	'BROWSE_EXTENSIONS_DATABASE'		=> '확장 데이터베이스 찾아보기',

	'META_FIELD_NOT_SET'	=> '필수 메타 필드 %s이(가) 설정되지 않았습니다.',
	'META_FIELD_INVALID'	=> '메타 필드 %s이(가) 잘못되었습니다.',
));
