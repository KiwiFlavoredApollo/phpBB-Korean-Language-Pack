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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode는 HTML을 특별히 구현한 것으로, 콘텐츠가 무엇을 어떻게 표시할지 더 세밀하게 제어할 수 있습니다. 이 페이지에서 사용자 지정 BBCode를 추가, 삭제하거나 편집할 수 있습니다.',
	'ADD_BBCODE'				=> '새 BBCode 추가',

	'BBCODE_DANGER'				=> '추가하려는 BBCode가 안전하지 않은 것으로 보입니다. 민감한 위치에서 {TEXT} 토큰을 사용한다면 더 제한적인 형식으로 바꾸십시오. 관련 위험을 이해하는 경우에만 계속하십시오.',
	'BBCODE_DANGER_PROCEED'		=> '계속', //'위험을 이해합니다',

	'BBCODE_ADDED'				=> 'BBCode가 추가되었습니다.',
	'BBCODE_EDITED'				=> 'BBCode가 편집되었습니다.',
	'BBCODE_DELETED'			=> 'BBCode가 제거되었습니다.',
	'BBCODE_NOT_EXIST'			=> '선택한 BBCode가 존재하지 않습니다.',
	'BBCODE_HELPLINE'			=> '도움말 문구',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'BBCode 위에 마우스 포인터를 놓았을 때 표시할 문구입니다.',
	'BBCODE_HELPLINE_TEXT'		=> '도움말 문구',
	'BBCODE_HELPLINE_TOO_LONG'	=> '입력한 도움말 문구가 너무 깁니다.',

	'BBCODE_INVALID_TAG_NAME'	=> '선택한 BBCode 태그 이름이 이미 존재합니다.',
	'BBCODE_INVALID'			=> 'BBCode가 잘못된 형식으로 구성되었습니다.',
	'BBCODE_INVALID_TEMPLATE'	=> 'BBCode의 템플릿이 잘못되었습니다.',
	'BBCODE_TAG'				=> '태그',
	'BBCODE_TAG_TOO_LONG'		=> '선택한 태그 이름이 너무 깁니다.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> '입력한 태그 정의가 너무 깁니다. 태그 정의를 줄이십시오.',
	'BBCODE_USAGE'				=> 'BBCode 사용법',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'BBCode 사용법을 정의합니다. 사용자가 입력할 각 변수 부분을 해당 토큰으로 바꾸십시오(%s아래 참조%s).',

	'EXAMPLE'						=> '예:',
	'EXAMPLES'						=> '예:',

	'HTML_REPLACEMENT'				=> 'HTML 대체 코드',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> '기본 HTML 대체 코드를 정의합니다. 위에서 사용한 토큰을 빠뜨리지 말고 다시 넣으십시오.',

	'TOKEN'					=> '토큰',
	'TOKENS'				=> '토큰',
	'TOKENS_EXPLAIN'		=> '토큰은 사용자 입력을 대신하는 자리 표시자입니다. 입력값은 해당 정의와 일치할 때만 유효합니다. 필요하면 중괄호 안의 마지막 문자에 숫자를 붙여 {TEXT1}, {TEXT2}처럼 번호를 매길 수 있습니다.<br /><br />HTML 대체 코드에서는 language/ 디렉터리의 언어 문자열을 {L_<em>&lt;STRINGNAME&gt;</em>} 형식으로 사용할 수도 있습니다. 여기서 <em>&lt;STRINGNAME&gt;</em>은 추가할 번역 문자열의 이름입니다. 예를 들어 {L_WROTE}는 사용자의 언어에 따라 ‘작성’ 또는 그에 해당하는 번역으로 표시됩니다.<br /><br /><strong>아래에 나열된 토큰만 사용자 지정 BBCode에서 사용할 수 있습니다.</strong>',
	'TOKEN_DEFINITION'		=> '허용되는 값',
	'TOO_MANY_BBCODES'		=> '더 이상 BBCode를 만들 수 없습니다. 하나 이상의 BBCode를 제거한 다음 다시 시도하십시오.',

	'tokens'	=>	array(
		'TEXT'			=> '외국어 문자와 숫자 등을 포함한 모든 텍스트',
		'SIMPLETEXT'	=> '라틴 알파벳(A-Z), 숫자, 공백, 쉼표, 마침표, 빼기 기호, 더하기 기호, 하이픈 및 밑줄',
		'INTTEXT'		=> '유니코드 문자, 숫자, 공백, 쉼표, 마침표, 빼기 기호, 더하기 기호, 하이픈, 밑줄 및 공백 문자',
		'IDENTIFIER'	=> '라틴 알파벳(A-Z), 숫자, 하이픈 및 밑줄',
		'NUMBER'		=> '연속된 숫자',
		'EMAIL'			=> '유효한 이메일 주소',
		'URL'			=> '허용된 프로토콜을 사용하는 유효한 URL입니다(http, ftp 등. JavaScript 공격에는 사용할 수 없음). 프로토콜을 지정하지 않으면 문자열 앞에 ‘http://’가 붙습니다.',
		'LOCAL_URL'		=> '로컬 URL입니다. 주제 페이지를 기준으로 한 상대 경로여야 하며, 링크 앞에 ‘%s’가 붙으므로 서버 이름이나 프로토콜을 포함할 수 없습니다.',
		'RELATIVE_URL'	=> '상대 URL입니다. URL의 일부를 일치시키는 데 사용할 수 있지만 전체 URL도 유효한 상대 URL이라는 점에 유의하십시오. 게시판 내부의 상대 URL에는 LOCAL_URL 토큰을 사용하십시오.',
		'COLOR'			=> 'HTML 색상입니다. <samp>#FF1234</samp> 같은 숫자 형식이나 <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS 색상 키워드</a>(예: <samp>fuchsia</samp> 또는 <samp>InactiveBorder</samp>)를 사용할 수 있습니다.',
			'ALNUM'	=> '라틴 알파벳(A-Z) 문자와 숫자입니다.',
		'CHOICE'	=> '지정한 값 중 하나입니다. 예: <samp>{CHOICE=spades,hearts,diamonds,clubs}</samp>. 기본적으로 대소문자를 구분하지 않으며 <samp>caseSensitive</samp> 옵션을 지정하면 구분할 수 있습니다: <samp>{CHOICE=Spades,Hearts,Diamonds,Clubs;caseSensitive}</samp>',
		'FLOAT'	=> '<samp>0.5</samp>와 같은 소수 값입니다.',
		'HASHMAP'	=> '<samp>{HASHMAP=string1:replacement1,string2:replacement2}</samp> 형식으로 문자열을 대체 값에 연결합니다. 대소문자를 구분하며, 기본적으로 알 수 없는 값은 그대로 유지합니다.',
		'INT'	=> '<samp>2</samp>와 같은 정수 값입니다.',
		'IP'	=> '올바른 IPv4 또는 IPv6 주소입니다.',
		'IPPORT'	=> '포트 번호가 포함된 올바른 IPv4 또는 IPv6 주소입니다.',
		'IPV4'	=> '올바른 IPv4 주소입니다.',
		'IPV6'	=> '올바른 IPv6 주소입니다.',
		'MAP'	=> '<samp>{MAP=string1:replacement1,string2:replacement2}</samp> 형식으로 문자열을 대체 값에 연결합니다. 대소문자를 구분하지 않으며, 기본적으로 알 수 없는 값은 그대로 유지합니다.',
		'RANGE'	=> '지정한 범위의 정수를 허용합니다. 예: <samp>{RANGE=-10,42}</samp>.',
		'REGEXP'	=> '지정한 정규식으로 값을 검증합니다. 예: <samp>{REGEXP=/^foo\w+bar$/}</samp>.',
		'TIMESTAMP'	=> '<samp>1h30m10s</samp>처럼 초 단위로 변환되는 시간 값을 허용합니다. 숫자도 사용할 수 있습니다.',
		'UINT'	=> '부호 없는 정수 값입니다. <samp>{INT}</samp>와 같지만 0보다 작은 값은 거부합니다.',
),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> '이 페이지에서 사용자가 주제나 게시물에 추가할 수 있는 아이콘을 추가, 삭제하거나 편집할 수 있습니다. 아이콘은 일반적으로 포럼 목록의 주제 제목 옆이나 주제 안의 게시물 제목 옆에 표시됩니다. 새 아이콘 패키지를 설치하거나 만들 수도 있습니다.',
	'ACP_SMILIES_EXPLAIN'	=> '스마일리 또는 이모티콘은 감정이나 느낌을 나타내는 작고 때로는 움직이는 이미지입니다. 이 페이지에서 사용자가 게시물과 개인 메시지에 사용할 이모티콘을 추가, 삭제하거나 편집할 수 있습니다. 새 이모티콘 패키지를 설치하거나 만들 수도 있습니다.',
	'ADD_SMILIES'			=> '여러 이모티콘 추가',
	'ADD_SMILEY_CODE'		=> '이모티콘 코드 추가',
	'ADD_ICONS'				=> '여러 아이콘 추가',
	'AFTER_ICONS'			=> '%s 이후',
	'AFTER_SMILIES'			=> '%s 이후',

	'CODE'						=> '코드',
	'CURRENT_ICONS'				=> '기존 아이콘',
	'CURRENT_ICONS_EXPLAIN'		=> '현재 설치된 아이콘으로 수행할 작업을 선택합니다.',
	'CURRENT_SMILIES'			=> '현재 이모티콘',
	'CURRENT_SMILIES_EXPLAIN'	=> '현재 설치된 이모티콘을 어떻게 처리할지 선택합니다.',

	'DISPLAY_ON_POSTING'		=> '게시 페이지에 표시',
	'DISPLAY_POSTING'			=> '게시 페이지에서',
	'DISPLAY_POSTING_NO'		=> '게시 페이지에 없음',

	'EDIT_ICONS'				=> '아이콘 편집',
	'EDIT_SMILIES'				=> '이모티콘 편집',
	'EMOTION'					=> '감정',
	'EXPORT_ICONS'				=> 'icons.pak 내보내기 및 다운로드',
	'EXPORT_ICONS_EXPLAIN'		=> '%s이 링크를 클릭하면 설치된 아이콘의 구성이 <samp>icons.pak</samp> 파일로 만들어집니다. 이 파일을 다운로드한 뒤 모든 아이콘과 <samp>icons.pak</samp> 구성 파일을 포함하는 <samp>.zip</samp> 또는 <samp>.tgz</samp> 패키지를 만들 수 있습니다%s.',
	'EXPORT_SMILIES'			=> 'smilies.pak 내보내기 및 다운로드',
	'EXPORT_SMILIES_EXPLAIN'	=> '%s이 링크를 클릭하면 설치된 이모티콘의 구성이 <samp>smilies.pak</samp> 파일로 만들어집니다. 이 파일을 다운로드한 뒤 모든 이모티콘과 <samp>smilies.pak</samp> 구성 파일을 포함하는 <samp>.zip</samp> 또는 <samp>.tgz</samp> 패키지를 만들 수 있습니다%s.',

	'FIRST'			=> '첫 번째',

	'ICONS_ADD'				=> '새 아이콘 추가',
	'ICONS_ADDED'			=> array(
		0 => '추가된 아이콘이 없습니다.',
		1 => '아이콘이 추가되었습니다.',
	),
	'ICONS_CONFIG'			=> '아이콘 구성',
	'ICONS_DELETED'			=> '아이콘이 제거되었습니다.',
	'ICONS_EDIT'			=> '아이콘 수정',
	'ICONS_EDITED'			=> array(
		0 => '업데이트된 아이콘이 없습니다.',
		1 => '아이콘이 업데이트되었습니다.',
	),
	'ICONS_HEIGHT'			=> '아이콘 높이',
	'ICONS_IMAGE'			=> '아이콘 이미지',
	'ICONS_IMPORTED'		=> '아이콘 팩이 설치되었습니다.',
	'ICONS_IMPORT_SUCCESS'	=> '아이콘 팩을 가져왔습니다.',
	'ICONS_LOCATION'		=> '아이콘 위치',
	'ICONS_NOT_DISPLAYED'	=> '게시 페이지에 다음 아이콘이 표시되지 않습니다.',
	'ICONS_ORDER'			=> '아이콘 순서',
	'ICONS_URL'				=> '아이콘 이미지 파일',
	'ICONS_WIDTH'			=> '아이콘 너비',
	'IMPORT_ICONS'			=> '아이콘 패키지 설치',
	'IMPORT_SMILIES'		=> '이모티콘 패키지 설치',

	'KEEP_ALL'			=> '모두 유지',

	'MASS_ADD_SMILIES'	=> '여러 이모티콘 추가',

	'NO_ICONS_ADD'		=> '추가할 수 있는 아이콘이 없습니다.',
	'NO_ICONS_EDIT'		=> '수정할 수 있는 아이콘이 없습니다.',
	'NO_ICONS_EXPORT'	=> '패키지를 만드는 데 사용할 아이콘이 없습니다.',
	'NO_ICONS_PAK'		=> '아이콘 패키지를 찾을 수 없습니다.',
	'NO_SMILIES_ADD'	=> '추가할 수 있는 이모티콘이 없습니다.',
	'NO_SMILIES_EDIT'	=> '편집할 수 있는 이모티콘이 없습니다.',
	'NO_SMILIES_EXPORT'	=> '패키지를 만들 이모티콘이 없습니다.',
	'NO_SMILIES_PAK'	=> '이모티콘 패키지를 찾을 수 없습니다.',

	'PAK_FILE_NOT_READABLE'		=> '<samp>.pak</samp> 파일을 읽을 수 없습니다.',

	'REPLACE_MATCHES'	=> '일치 항목 바꾸기',

	'SELECT_PACKAGE'			=> '패키지 파일 선택',
	'SMILIES_ADD'				=> '새 이모티콘 추가',
	'SMILIES_ADDED'				=> array(
		0 => '추가된 이모티콘이 없습니다.',
		1 => '이모티콘이 추가되었습니다.',
	),
	'SMILIES_CODE'				=> '이모티콘 코드',
	'SMILIES_CONFIG'			=> '이모티콘 구성',
	'SMILIES_DELETED'			=> '이모티콘이 삭제되었습니다.',
	'SMILIES_EDIT'				=> '이모티콘 편집',
	'SMILIE_NO_CODE'			=> '코드가 입력되지 않아 이모티콘 ‘%s’을(를) 무시했습니다.',
	'SMILIE_NO_EMOTION'			=> '감정 설명이 입력되지 않아 이모티콘 ‘%s’을(를) 무시했습니다.',
	'SMILIE_NO_FILE'			=> '파일이 없어 이모티콘 ‘%s’을(를) 무시했습니다.',
	'SMILIES_EDITED'			=> array(
		0 => '업데이트된 이모티콘이 없습니다.',
		1 => '이모티콘이 업데이트되었습니다.',
	),
	'SMILIES_EMOTION'			=> '감정',
	'SMILIES_HEIGHT'			=> '이모티콘 높이',
	'SMILIES_IMAGE'				=> '이모티콘 이미지',
	'SMILIES_IMPORTED'			=> '이모티콘 패키지가 설치되었습니다.',
	'SMILIES_IMPORT_SUCCESS'	=> '이모티콘 패키지를 가져왔습니다.',
	'SMILIES_LOCATION'			=> '이모티콘 위치',
	'SMILIES_NOT_DISPLAYED'		=> '다음 이모티콘은 게시 페이지에 표시되지 않습니다',
	'SMILIES_ORDER'				=> '이모티콘 순서',
	'SMILIES_URL'				=> '이모티콘 이미지 파일',
	'SMILIES_WIDTH'				=> '이모티콘 너비',

	'TOO_MANY_SMILIES'			=> array(
		1 => '이모티콘 %d개 제한에 도달했습니다.',
	),

	'WRONG_PAK_TYPE'	=> '지정된 패키지에 적절한 데이터가 없습니다.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> '이 제어판에서 포럼의 게시물에 자동으로 검열할 단어를 추가, 편집하거나 삭제할 수 있습니다. 사용자는 검열 대상 단어가 포함된 사용자 이름으로도 가입할 수 있습니다. 단어 입력란에서는 와일드카드(*)를 사용할 수 있습니다. 예를 들어 *test*는 detestable에, test*는 testing에, *test는 detest에 일치합니다.',
	'ADD_WORD'				=> '새 단어 추가',

	'EDIT_WORD'		=> '금칙어 편집',
	'ENTER_WORD'	=> '단어와 대체 문자열을 입력해야 합니다.',

	'NO_WORD'	=> '편집할 단어를 선택하지 않았습니다.',

	'REPLACEMENT'	=> '대체 문자열',

	'UPDATE_WORD'	=> '금칙어 업데이트',

	'WORD'				=> '단어',
	'WORD_ADDED'		=> '금칙어가 추가되었습니다.',
	'WORD_REMOVED'		=> '선택한 금칙어가 삭제되었습니다.',
	'WORD_UPDATED'		=> '선택한 금칙어가 업데이트되었습니다.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> '이 양식에서 등급을 추가, 편집, 확인하거나 삭제할 수 있습니다. 사용자 관리 기능을 통해 특정 사용자에게 적용할 특별 등급도 만들 수 있습니다.',
	'ADD_RANK'				=> '새 등급 추가',

	'MUST_SELECT_RANK'		=> '등급을 선택해야 합니다.',

	'NO_ASSIGNED_RANK'		=> '특별 등급이 지정되지 않았습니다.',
	'NO_RANK_TITLE'			=> '등급 제목을 지정하지 않았습니다.',
	'NO_UPDATE_RANKS'		=> '등급이 삭제되었습니다. 하지만 이 등급을 사용하던 사용자 계정은 업데이트되지 않았습니다. 해당 계정의 등급을 직접 재설정해야 합니다.',

	'RANK_ADDED'			=> '등급이 추가되었습니다.',
	'RANK_IMAGE'			=> '등급 이미지',
	'RANK_IMAGE_EXPLAIN'	=> '등급과 연결할 작은 이미지를 지정합니다. 경로는 phpBB 루트 디렉터리를 기준으로 합니다.',
	'RANK_IMAGE_IN_USE'		=> '(사용 중)',
	'RANK_MINIMUM'			=> '최소 게시물 수',
	'RANK_REMOVED'			=> '등급이 삭제되었습니다.',
	'RANK_SPECIAL'			=> '특별 등급으로 설정',
	'RANK_TITLE'			=> '등급 제목',
	'RANK_UPDATED'			=> '등급이 업데이트되었습니다.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> '사용할 수 없도록 금지할 사용자 이름을 관리합니다. 금지할 사용자 이름에는 와일드카드 문자 *를 사용할 수 있습니다.',
	'ADD_DISALLOW_EXPLAIN'	=> '와일드카드 문자 *로 임의의 문자와 일치시켜 사용자 이름을 금지할 수 있습니다.',
	'ADD_DISALLOW_TITLE'	=> '금지할 사용자 이름 추가',

	'DELETE_DISALLOW_EXPLAIN'	=> '목록에서 사용자 이름을 선택한 뒤 제출을 클릭하면 금지된 사용자 이름을 삭제할 수 있습니다.',
	'DELETE_DISALLOW_TITLE'		=> '금지된 사용자 이름 삭제',
	'DISALLOWED_ALREADY'		=> '입력한 이름은 이미 사용이 금지되어 있습니다.',
	'DISALLOWED_DELETED'		=> '금지된 사용자 이름이 삭제되었습니다.',
	'DISALLOW_SUCCESSFUL'		=> '금지할 사용자 이름이 추가되었습니다.',

	'NO_DISALLOWED'				=> '금지된 사용자 이름 없음',
	'NO_USERNAME_SPECIFIED'		=> '처리할 사용자 이름을 선택하거나 입력하지 않았습니다.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> '게시물을 승인하지 않을 때 신고 및 거부 메시지에 사용할 사유를 관리합니다. 별표(*)가 표시된 기본 사유 하나는 삭제할 수 없습니다. 이 사유는 일반적으로 적절한 사유가 없을 때 사용자 지정 메시지에 사용됩니다.',
	'ADD_NEW_REASON'		=> '새 사유 추가',
	'AVAILABLE_TITLES'		=> '사용 가능한 현지화 사유 제목',

	'IS_NOT_TRANSLATED'			=> '사유가 <strong>현지화되지 않았습니다</strong>.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> '사유가 <strong>현지화되지 않았습니다</strong>. 현지화된 형식을 제공하려면 언어 파일의 신고 사유 섹션에 있는 올바른 키를 지정하십시오.',
	'IS_TRANSLATED'				=> '사유가 현지화되었습니다.',
	'IS_TRANSLATED_EXPLAIN'		=> '사유가 현지화되었습니다. 여기에 입력한 제목이 언어 파일의 신고 사유 섹션에 정의되어 있으면 현지화된 제목과 설명을 사용합니다.',

	'NO_REASON'					=> '사유를 찾을 수 없습니다.',
	'NO_REASON_INFO'			=> '이 사유의 제목과 설명을 지정해야 합니다.',
	'NO_REMOVE_DEFAULT_REASON'	=> '기본 사유 ‘기타’를 삭제할 수 없습니다.',

	'REASON_ADD'				=> '신고/거부 사유 추가',
	'REASON_ADDED'				=> '신고/거부 사유가 추가되었습니다.',
	'REASON_ALREADY_EXIST'		=> '같은 제목의 사유가 이미 존재합니다. 다른 제목을 입력하십시오.',
	'REASON_DESCRIPTION'		=> '사유 설명',
	'REASON_DESC_TRANSLATED'	=> '표시된 사유 설명',
	'REASON_EDIT'				=> '신고/거부 사유 수정',
	'REASON_EDIT_EXPLAIN'		=> '여기에서 사유를 추가하거나 편집할 수 있습니다. 사유가 번역되어 있으면 여기에 입력한 설명 대신 현지화된 버전을 사용합니다.',
	'REASON_REMOVED'			=> '신고/거부 사유가 제거되었습니다.',
	'REASON_TITLE'				=> '사유 제목',
	'REASON_TITLE_TRANSLATED'	=> '표시된 사유 제목',
	'REASON_UPDATED'			=> '신고/거부 사유가 업데이트되었습니다.',

	'USED_IN_REPORTS'		=> '신고에 사용됨',
));
