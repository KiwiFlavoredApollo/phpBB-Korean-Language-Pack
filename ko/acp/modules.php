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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> '여기에서 모든 종류의 모듈을 관리할 수 있습니다. ACP는 3단계 메뉴 구조(카테고리 -> 카테고리 -> 모듈)를 가지고 있으며 나머지는 2단계 메뉴 구조(Category -> Module)를 유지해야 합니다. 또한 모듈 관리 자체를 담당하는 모듈을 비활성화하거나 삭제하면 자신이 잠길 수 있다는 점에 유의하십시오.',
	'ADD_MODULE'					=> '모듈 추가',
	'ADD_MODULE_CONFIRM'			=> '선택한 모드로 선택한 모듈을 추가하시겠습니까?',
	'ADD_MODULE_TITLE'				=> '모률 이름 추가',

	'CANNOT_REMOVE_MODULE'	=> '모듈을 제거할 수 없습니다. 모듈에 하위가 할당되었습니다. 이 작업을 수행하기 전에 모든 어린이를 제거하거나 이동하십시오.',
	'CATEGORY'				=> '카테고리',
	'CHOOSE_MODE'			=> '모듈 모드 선택',
	'CHOOSE_MODE_EXPLAIN'	=> '사용 중인 모듈 모드를 선택합니다.',
	'CHOOSE_MODULE'			=> '모듈 선택',
	'CHOOSE_MODULE_EXPLAIN'	=> '이 모듈에서 호출되는 파일을 선택하십시오.',
	'CREATE_MODULE'			=> '새 모듈 만들기',

	'DEACTIVATED_MODULE'	=> '비활성화된 모듈',
	'DELETE_MODULE'			=> '모듈 삭제',
	'DELETE_MODULE_CONFIRM'	=> '이 모듈을 제거하시겠습니까?',

	'EDIT_MODULE'			=> '모듈 수정',
	'EDIT_MODULE_EXPLAIN'	=> '여기에서 모듈별 설정을 입력할 수 있습니다.',

	'HIDDEN_MODULE'			=> '숨겨진 모듈',

	'MODULE'					=> '모듈',
	'MODULE_ADDED'				=> '모듈을 추가했습니다.',
	'MODULE_DELETED'			=> '모듈을 제거했습니다.',
	'MODULE_DISPLAYED'			=> '표시되는 모듈',
	'MODULE_DISPLAYED_EXPLAIN'	=> '이 모듈을 표시하지 않고 사용하려면 이것을 no로 설정하십시오.',
	'MODULE_EDITED'				=> '모듈이 성공적으로 편집되었습니다.',
	'MODULE_ENABLED'			=> '모듈 활성화됨',
	'MODULE_LANGNAME'			=> '모듈 언어 이름',
	'MODULE_LANGNAME_EXPLAIN'	=> '표시된 모듈 이름을 입력합니다. 이름이 언어 파일에서 제공되는 경우 언어 상수를 사용하십시오',
	'MODULE_TYPE'				=> '모듈 타입',

	'NO_CATEGORY_TO_MODULE'	=> '카테고리를 모듈로 전환할 수 없습니다. 이 작업을 수행하기 전에 모든 어린이를 제거/이동하십시오.',
	'NO_MODULE'				=> '모듈을 찾을 수 없습니다.',
	'NO_MODULE_ID'			=> '지정된 모듈 ID가 없습니다.',
	'NO_MODULE_LANGNAME'	=> '지정된 모듈 언어 이름이 없습니다.',
	'NO_PARENT'				=> '상위 없음',

	'PARENT'				=> '상위',
	'PARENT_NO_EXIST'		=> '상위 항목이 없습니다.',

	'SELECT_MODULE'			=> '모듈 선택',
));
