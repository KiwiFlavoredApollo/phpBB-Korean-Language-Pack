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
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_STYLES_EXPLAIN'						=> '여기에서 보드에서 사용 가능한 스타일을 관리할 수 있습니다.<br>"<strong>prosilver</strong>" 스타일은 phpBB의 기본 및 기본 상위 스타일이므로 제거할 수 없습니다.',

	'CANNOT_BE_INSTALLED'						=> '설치할 수 없습니다',
	'CONFIRM_UNINSTALL_STYLES'					=> '선택한 스타일을 제거하시겠습니까?',
	'COPYRIGHT'									=> '저작권',

	'DEACTIVATE_DEFAULT'						=> '기본 스타일은 비활성화할 수 없습니다.',
	'DELETE_FROM_FS'							=> '파일 시스템에서 삭제',
	'DELETE_STYLE_FILES_FAILED'					=> '스타일 "%s"에 대한 파일을 삭제하는 동안 오류가 발생했습니다.".',
	'DELETE_STYLE_FILES_SUCCESS'				=> '스타일 "%s"에 대한 파일이 삭제되었습니다.',
	'DETAILS'									=> '세부사항',

	'INHERITING_FROM'							=> '다음에서 상속',
	'INSTALL_STYLE'								=> '스타일 설치',
	'INSTALL_STYLES'							=> '스타일 설치',
	'INSTALL_STYLES_EXPLAIN'					=> '여기에서 새로운 스타일을 설치할 수 있습니다.<br>아래 목록에서 특정 스타일을 찾을 수 없으면 스타일이 이미 설치되어 있는지 확인하십시오. 설치되어 있지 않다면 제대로 업로드 되었는지 확인하세요.',
	'INVALID_STYLE_ID'							=> '잘못된 스타일 ID입니다.',

	'NO_MATCHING_STYLES_FOUND'					=> '검색어와 일치하는 스타일이 없습니다.',
	'NO_UNINSTALLED_STYLE'						=> '제거된 스타일이 감지되지 않았습니다.',

	'PURGED_CACHE'								=> '캐시가 제거되었습니다.',

	'REQUIRES_STYLE'							=> '이 스타일을 사용하려면 "%s" 스타일을 설치해야 합니다.',

	'STYLE_ACTIVATE'							=> '활성화',
	'STYLE_ACTIVE'								=> '활성',
	'STYLE_DEACTIVATE'							=> '비활성화',
	'STYLE_DEFAULT'								=> '기본 스타일 만들기',
	'STYLE_DEFAULT_CHANGE_INACTIVE'				=> '기본 스타일로 만들기 전에 스타일을 활성화해야 합니다.',
	'STYLE_ERR_INVALID_PARENT'					=> '잘못된 상위 스타일입니다',
	'STYLE_ERR_NAME_EXIST'						=> '같은 이름의 스타일이 이미 존재합니다.',
	'STYLE_ERR_STYLE_NAME'						=> '이 스타일의 이름을 제공해야 합니다.',
	'STYLE_INSTALLED'							=> '스타일 "%s"이(가) 설치되었습니다.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> '설치된 스타일 목록으로 돌아가기',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> '더 많은 스타일 설치',
	'STYLE_NAME'								=> '스타일 이름',
	'STYLE_NAME_RESERVED'						=> '이름이 예약되어 있으므로 "%s" 스타일을 설치할 수 없습니다.',
	'STYLE_NOT_INSTALLED'						=> '스타일 "%s"이(가) 설치되지 않았습니다.',
	'STYLE_PATH'								=> '스타일 경로',
	'STYLE_UNINSTALL'							=> '제거',
	'STYLE_UNINSTALL_DEPENDENT'					=> '스타일 "%s"은(는) 하나 이상의 하위 스타일이 있으므로 제거할 수 없습니다.',
	'STYLE_UNINSTALLED'							=> '스타일 "%s"이(가) 성공적으로 제거되었습니다.',
	'STYLE_PHPBB_VERSION'						=> 'phpBB 버전',
	'STYLE_USED_BY'								=> '사용(로봇 포함)',
	'STYLE_VERSION'								=> '스타일 버전',

	'UNINSTALL_PROSILVER'						=> '"prosilver" 스타일은 제거할 수 없습니다.',
	'UNINSTALL_DEFAULT'							=> '기본 스타일은 제거할 수 없습니다.',

	'BROWSE_STYLES_DATABASE'					=> '스타일 데이터베이스 찾아보기',
]);
