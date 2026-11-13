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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> '사용자 정의 프로필 필드를 추가했습니다.',
	'ALPHA_DOTS'			=> '영숫자 및 점(마침표)',
	'ALPHA_ONLY'			=> '영숫자만',
	'ALPHA_SPACERS'			=> '영숫자 및 공백',
	'ALPHA_UNDERSCORE'		=> '영숫자 및 밑줄',
	'ALPHA_PUNCTUATION'		=> '문자로 시작하며 영숫자, 쉼표, 마침표, 밑줄 및 대시 사용',
	'ALWAYS_TODAY'			=> '항상 현재 날짜',

	'BOOL_ENTRIES_EXPLAIN'	=> '옵션을 입력하십시오',
	'BOOL_TYPE_EXPLAIN'		=> '체크박스 또는 라디오 버튼 중 하나로 유형을 지정합니다. 체크박스는 해당 사용자가 선택한 경우에만 표시되며, 이때 <strong>두 번째</strong> 언어 옵션을 사용합니다. 라디오 버튼은 값과 관계없이 항상 표시됩니다.',

	'CHANGED_PROFILE_FIELD'		=> '프로필 필드를 변경했습니다.',
	'CHARS_ANY'					=> '모든 문자',
	'CHECKBOX'					=> '체크박스',
	'COLUMNS'					=> '열',
	'CP_LANG_DEFAULT_VALUE'		=> '기본값',
	'CP_LANG_EXPLAIN'			=> '필드 설명',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> '사용자에게 표시할 이 필드의 설명입니다.',
	'CP_LANG_NAME'				=> '사용자에게 표시되는 필드 이름/제목',
	'CP_LANG_OPTIONS'			=> '옵션',
	'CREATE_NEW_FIELD'			=> '새 필드 만들기',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> '하나 이상의 사용자 정의 프로필 필드가 아직 번역되지 않았습니다. "번역" 링크를 클릭하여 필요한 정보를 입력하십시오.',

	'DEFAULT_ISO_LANGUAGE'			=> '기본 언어 [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> '이 프로필 필드의 기본 언어 항목이 입력되지 않았습니다.',
	'DEFAULT_VALUE'					=> '기본값',
	'DELETE_PROFILE_FIELD'			=> '프로필 필드 제거',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> '이 프로필 필드를 삭제하시겠습니까?',
	'DISPLAY_AT_PROFILE'			=> '사용자 제어판에 표시',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> '사용자는 사용자 제어판 내에서 이 프로필 필드를 변경할 수 있습니다.',
	'DISPLAY_AT_REGISTER'			=> '등록 화면에 표시',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> '이 옵션이 활성화되면 등록 시 필드가 표시됩니다.',
	'DISPLAY_ON_MEMBERLIST'			=> '회원 목록에 표시',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> '활성화하면 회원 목록의 각 사용자 행에 이 필드가 표시됩니다.',
	'DISPLAY_ON_PM'					=> '개인 메시지 보기 화면에 표시',
	'DISPLAY_ON_PM_EXPLAIN'			=> '활성화하면 개인 메시지 화면의 미니 프로필에 이 필드가 표시됩니다.',
	'DISPLAY_ON_VT'					=> '주제 보기 화면에 표시',
	'DISPLAY_ON_VT_EXPLAIN'			=> '활성화하면 주제 화면의 미니 프로필에 이 필드가 표시됩니다.',
	'DISPLAY_PROFILE_FIELD'			=> '프로필 필드를 공개적으로 표시',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> '부하 설정에서 허용한 모든 위치에 프로필 필드를 표시합니다. ‘아니요’로 설정하면 주제 페이지, 프로필 및 회원 목록에서 이 필드가 숨겨집니다.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> '옵션을 한 줄에 하나씩 입력하십시오.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> '옵션 문구를 변경하거나 목록 끝에 새 옵션을 추가할 수 있습니다. 기존 옵션 사이에 새 옵션을 추가하면 사용자에게 잘못된 옵션이 지정될 수 있으므로 권장하지 않습니다. 중간에 있는 옵션을 삭제해도 같은 문제가 발생할 수 있습니다. 목록 끝에서 옵션을 삭제하면 해당 옵션이 지정되어 있던 사용자는 기본 옵션으로 되돌아갑니다.',
	'EMPTY_FIELD_IDENT'				=> '필드 식별자가 비어 있음',
	'EMPTY_USER_FIELD_NAME'			=> '필드 이름 또는 제목을 입력하십시오.',
	'ENTRIES'						=> '항목',
	'EVERYTHING_OK'					=> '문제 없음',

	'FIELD_BOOL'				=> '부울(예/아니오)',
	'FIELD_CONTACT_DESC'		=> '연락처 설명',
	'FIELD_CONTACT_URL'			=> '연락처 링크',
	'FIELD_DATE'				=> '날짜',
	'FIELD_DESCRIPTION'			=> '필드 설명',
	'FIELD_DESCRIPTION_EXPLAIN'	=> '사용자에게 표시할 이 필드의 설명입니다.',
	'FIELD_DROPDOWN'			=> '드롭다운 목록',
	'FIELD_IDENT'				=> '필드 식별자',
	'FIELD_IDENT_ALREADY_EXIST'	=> '선택한 필드 식별자가 이미 존재합니다. 다른 이름을 선택하십시오.',
	'FIELD_IDENT_EXPLAIN'		=> '데이터베이스와 템플릿에서 프로필 필드를 구분하는 데 사용할 이름입니다.',
	'FIELD_INT'					=> '숫자',
	'FIELD_IS_CONTACT'			=> '연락처 필드로 표시',
	'FIELD_IS_CONTACT_EXPLAIN'	=> '연락처 필드는 사용자 프로필의 연락처 영역에 표시되며, 게시물과 개인 메시지 옆의 미니 프로필에서는 다른 방식으로 표시됩니다. <samp>%s</samp>를 사용자가 입력한 값으로 대체되는 자리 표시자로 사용할 수 있습니다.',
	'FIELD_LENGTH'				=> '입력란 길이',
	'FIELD_NOT_FOUND'			=> '프로필 필드를 찾을 수 없습니다.',
	'FIELD_STRING'				=> '단일 텍스트 필드',
	'FIELD_TEXT'				=> '텍스트 영역',
	'FIELD_TYPE'				=> '필드 유형',
	'FIELD_TYPE_EXPLAIN'		=> '필드 유형은 나중에 변경할 수 없습니다.',
	'FIELD_URL'					=> 'URL (링크)',
	'FIELD_VALIDATION'			=> '필드 검증',
	'FIRST_OPTION'				=> '첫 번째 옵션',

	'HIDE_PROFILE_FIELD'			=> '프로필 필드 숨기기',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> '이 필드를 볼 수 있는 관리자와 운영자를 제외한 모든 사용자로부터 프로필 필드를 숨깁니다. 사용자 제어판에 표시 옵션이 비활성화된 경우 사용자는 이 필드를 보거나 변경할 수 없으며 필드는 관리자만 변경할 수 있습니다.',

	'INVALID_CHARS_FIELD_IDENT'	=> '필드 식별자에는 소문자 a-z와 _만 사용할 수 있습니다.',
	'INVALID_FIELD_IDENT_LEN'	=> '필드 식별자는 최대 17자까지 입력할 수 있습니다.',
	'ISO_LANGUAGE'				=> '언어 [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> '언어별 옵션 [<strong>%s</strong>]',

	'LETTER_NUM_DOTS'			=> '모든 문자, 숫자 및 점(마침표)',
	'LETTER_NUM_ONLY'			=> '모든 문자 및 숫자',
	'LETTER_NUM_PUNCTUATION'	=> '문자로 시작하며 모든 문자, 숫자, 쉼표, 마침표, 밑줄 및 대시 사용',
	'LETTER_NUM_SPACERS'		=> '모든 문자, 숫자 및 공백',
	'LETTER_NUM_UNDERSCORE'		=> '모든 문자, 숫자 및 밑줄',

	'MAX_FIELD_CHARS'		=> '최대 문자 수',
	'MAX_FIELD_NUMBER'		=> '허용되는 최댓값',
	'MIN_FIELD_CHARS'		=> '최소 문자 수',
	'MIN_FIELD_NUMBER'		=> '허용되는 최솟값',

	'NO_FIELD_ENTRIES'			=> '정의된 항목 없음',
	'NO_FIELD_ID'				=> '필드 식별자를 지정하지 않았습니다.',
	'NO_FIELD_TYPE'				=> '필드 유형을 지정하지 않았습니다.',
	'NO_VALUE_OPTION'			=> '입력하지 않은 값으로 취급할 옵션',
	'NO_VALUE_OPTION_EXPLAIN'	=> '값을 입력하지 않은 것으로 취급할 옵션입니다. 필수 필드에서 사용자가 여기에서 선택한 옵션을 고르면 오류가 표시됩니다.',
	'NUMBERS_ONLY'				=> '숫자만(0-9)',

	'PROFILE_BASIC_OPTIONS'		=> '기본 옵션',
	'PROFILE_FIELD_ACTIVATED'	=> '프로필 필드가 활성화되었습니다.',
	'PROFILE_FIELD_DEACTIVATED'	=> '프로필 필드가 비활성화되었습니다.',
	'PROFILE_LANG_OPTIONS'		=> '언어별 옵션',
	'PROFILE_TYPE_OPTIONS'		=> '프로필 유형별 옵션',

	'RADIO_BUTTONS'				=> '라디오 버튼',
	'REMOVED_PROFILE_FIELD'		=> '프로필 필드를 제거했습니다.',
	'REQUIRED_FIELD'			=> '필수 필드',
	'REQUIRED_FIELD_EXPLAIN'	=> '사용자 또는 관리자가 프로필 필드를 반드시 입력하거나 지정하도록 합니다. 가입 화면에 표시 옵션이 비활성화되어 있으면 사용자가 프로필을 편집할 때만 이 필드가 필수입니다.',
	'ROWS'						=> '행',

	'SAVE'							=> '저장',
	'SECOND_OPTION'					=> '두 번째 옵션',
	'SHOW_NOVALUE_FIELD'			=> '값이 선택되지 않은 경우 필드 표시',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> '선택 필드에 값이 지정되지 않았거나 필수 필드에 아직 값이 지정되지 않았을 때 프로필 필드를 표시할지 결정합니다.',
	'STEP_1_EXPLAIN_CREATE'			=> '여기에서 새 프로필 필드의 첫 번째 기본 매개변수를 입력할 수 있습니다. 이 정보는 나머지 옵션을 설정하고 프로필 필드를 추가로 조정할 수 있는 두 번째 단계에 필요합니다.',
	'STEP_1_EXPLAIN_EDIT'			=> '여기에서 프로필 필드의 기본 매개변수를 변경할 수 있습니다. 관련 옵션은 두 번째 단계에서 다시 계산됩니다.',
	'STEP_1_TITLE_CREATE'			=> '프로필 필드 추가',
	'STEP_1_TITLE_EDIT'				=> '프로필 필드 수정',
	'STEP_2_EXPLAIN_CREATE'			=> '조정할 수 있는 몇 가지 공통 옵션을 지정합니다.',
	'STEP_2_EXPLAIN_EDIT'			=> '몇 가지 공통 옵션을 변경할 수 있습니다.<br /><strong>프로필 필드의 설정을 변경해도 사용자가 이미 입력한 프로필 값에는 영향을 주지 않습니다.</strong>',
	'STEP_2_TITLE_CREATE'			=> '프로필 유형별 옵션',
	'STEP_2_TITLE_EDIT'				=> '프로필 유형별 옵션',
	'STEP_3_EXPLAIN_CREATE'			=> '둘 이상의 게시판 언어가 설치되어 있으므로 나머지 언어 항목도 입력해야 합니다. 입력하지 않으면 이 사용자 정의 프로필 필드의 기본 언어 설정을 사용합니다. 나머지 언어 항목은 나중에 입력할 수도 있습니다.',
	'STEP_3_EXPLAIN_EDIT'			=> '둘 이상의 게시판 언어가 설치되어 있으므로 나머지 언어 항목을 변경하거나 추가할 수 있습니다. 입력하지 않으면 이 사용자 정의 프로필 필드의 기본 언어 설정을 사용합니다.',
	'STEP_3_TITLE_CREATE'			=> '나머지 언어 정의',
	'STEP_3_TITLE_EDIT'				=> '언어 정의',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> '표시할 기본 문구를 입력합니다. 처음에 빈 값으로 표시하려면 비워 두십시오.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> '표시할 기본 텍스트를 입력합니다. 처음에 빈 값으로 표시하려면 비워 두십시오.',
	'TRANSLATE'						=> '번역',

	'USER_FIELD_NAME'	=> '사용자에게 표시할 필드 이름/제목',

	'VISIBILITY_OPTION'				=> '표시 옵션',
));
