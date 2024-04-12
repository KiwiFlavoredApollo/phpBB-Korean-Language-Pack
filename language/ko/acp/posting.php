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
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode는 무엇을 어떻게 표시할지에 대한 더 큰 제어를 제공하는 HTML의 특별한 구현입니다. 이 페이지에서 사용자 정의 BBCode를 추가, 제거 및 편집할 수 있습니다.',
	'ADD_BBCODE'				=> '새 BBCode 추가',

	'BBCODE_DANGER'				=> '추가하려는 BBCode가 안전하지 않은 것 같습니다. BBCode가 민감한 컨텍스트에서 {TEXT} 토큰을 사용하는 경우 대신 더 제한적인 유형을 사용해 보십시오. 관련된 위험을 이해하는 경우에만 진행하십시오.',
	'BBCODE_DANGER_PROCEED'		=> '진행하다', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCCode가 추가되었습니다.',
	'BBCODE_EDITED'				=> 'BBCCode가  편집되었습니다.',
	'BBCODE_DELETED'			=> 'BBCode가  제거되었습니다.',
	'BBCODE_NOT_EXIST'			=> '선택한 BBCCode가 존재하지 않습니다.',
	'BBCODE_HELPLINE'			=> '도움말 라인',
	'BBCODE_HELPLINE_EXPLAIN'	=> '이 필드에는 BBCode의 텍스트 위에 마우스가 있습니다.',
	'BBCODE_HELPLINE_TEXT'		=> '도움말 라인 택스트',
	'BBCODE_HELPLINE_TOO_LONG'	=> '입력한 도움말 라인 줄이 너무 깁니다.',

	'BBCODE_INVALID_TAG_NAME'	=> '선택한 BBCode 태그 이름이 이미 존재합니다.',
	'BBCODE_INVALID'			=> 'BBCode가 잘못된 형식으로 구성되었습니다.',
	'BBCODE_INVALID_TEMPLATE'	=> 'BBCode의 템플릿이 잘못되었습니다.',
	'BBCODE_TAG'				=> '태그',
	'BBCODE_TAG_TOO_LONG'		=> '선택한 태그 이름이 너무 깁니다.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> '입력한 태그 정의가 너무 깁니다. 태그 정의를 줄이십시오.',
	'BBCODE_USAGE'				=> 'BBC코드 사용법',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> '여기에서 BBCode를 사용하는 방법을 정의합니다. 모든 변수 입력을 해당 토큰으로 바꿉니다(%s아래 참조%s).',

	'EXAMPLE'						=> '예시:',
	'EXAMPLES'						=> '예시:',

	'HTML_REPLACEMENT'				=> 'HTML 대체',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> '여기에서 기본 HTML 대체를 정의합니다. 위에서 사용한 토큰을 다시 넣는 것을 잊지 마십시오!',

	'TOKEN'					=> '토큰',
	'TOKENS'				=> '토큰',
	'TOKENS_EXPLAIN'		=> '토큰은 사용자 입력을 위한 자리 표시자입니다. 입력은 해당 정의와 일치하는 경우에만 유효성이 검사됩니다. 필요한 경우 중괄호 사이의 마지막 문자로 숫자를 추가하여 번호를 매길 수 있습니다. {TEXT1}, {TEXT2}.<br /><br />HTML 대체 내에서 다음과 같이 언어/ 디렉토리에 있는 모든 언어 문자열을 사용할 수도 있습니다. {L_<em>&lt;STRINGNAME&gt;</em>} 여기서 <em>&lt;STRINGNAME&gt;</em>은 추가하려는 번역된 문자열의 이름입니다. 예를 들어, {L_WROTE}는 사용자의 로케일에 따라 "작성됨" 또는 번역으로 표시됩니다.<br /><br /><strong>아래에 나열된 토큰만 사용자 정의 BBCode 내에서 사용할 수 있습니다.</strong>',
	'TOKEN_DEFINITION'		=> '무엇을 할 수 있습니까?',
	'TOO_MANY_BBCODES'		=> '더 이상 BBCode를 만들 수 없습니다. 하나 이상의 BBCode를 제거한 다음 다시 시도하십시오.',

	'tokens'	=>	array(
		'TEXT'			=> '외국 문자, 숫자 등을 포함한 모든 텍스트…',
		'SIMPLETEXT'	=> '라틴 알파벳(A-Z), 숫자, 공백, 쉼표, 점, 빼기, 더하기, 하이픈 및 밑줄의 문자',
		'INTTEXT'		=> '유니코드 문자, 숫자, 공백, 쉼표, 점, 빼기, 더하기, 하이픈, 밑줄 및 공백.',
		'IDENTIFIER'	=> '라틴 알파벳(A-Z), 숫자, 하이픈 및 밑줄의 문자',
		'NUMBER'		=> '일련의 숫자',
		'EMAIL'			=> '유효한 이메일 주소',
		'URL'			=> '허용된 프로토콜(http, ftp 등...)을 사용하는 유효한 URL은 javascript 익스플로잇에 사용할 수 없습니다. 아무 것도 지정하지 않으면 문자열 앞에 "http://"가 접두사로 붙습니다.',
		'LOCAL_URL'		=> '로컬 URL입니다. URL은 글 페이지에 상대적이어야 하며 링크 앞에 "%s"가 붙기 때문에 서버 이름이나 프로토콜을 포함할 수 없습니다.',
		'RELATIVE_URL'	=> '상대 URL입니다. 이것을 사용하여 URL의 일부를 일치시킬 수 있지만 주의하십시오. 전체 URL은 유효한 상대 URL입니다. 보드의 상대 URL을 사용하려면 LOCAL_URL 토큰을 사용하세요.',
		'COLOR'			=> 'A HTML 컬러, 숫자 형식 <samp>#FF1234</samp> 또는 <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS 색상일 수 있습니다. <samp>자홍색</samp> 또는 <samp>InactiveBorder</samp>와 같은 키워드</a>',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> '이 페이지에서 사용자가 글이나 게시물에 추가할 수 있는 아이콘을 추가, 제거 및 편집할 수 있습니다. 이러한 아이콘은 일반적으로 포럼 목록의 글 제목 옆에 표시되거나 글 목록의 게시물 제목 옆에 표시됩니다. 새로운 아이콘 패키지를 설치하고 생성할 수도 있습니다.',
	'ACP_SMILIES_EXPLAIN'	=> '스마일 또는 이모티콘은 일반적으로 감정이나 느낌을 전달하는 데 사용되는 작은 애니메이션 이미지입니다. 이 페이지에서 사용자가 게시물 및 비공개 메시지에 사용할 수 있는 이모티콘을 추가, 제거 및 편집할 수 있습니다. 새로운 스마일 패키지를 설치하고 만들 수도 있습니다.',
	'ADD_SMILIES'			=> '여러 스마일 추가',
	'ADD_SMILEY_CODE'		=> '추가 스마일 코드 추가',
	'ADD_ICONS'				=> '추가 스마일 코드 추가',
	'AFTER_ICONS'			=> '%s 이후',
	'AFTER_SMILIES'			=> '%s 이후',

	'CODE'						=> '코드',
	'CURRENT_ICONS'				=> '기존 아이콘',
	'CURRENT_ICONS_EXPLAIN'		=> '현재 설치된 아이콘으로 수행할 작업을 선택합니다.',
	'CURRENT_SMILIES'			=> '현재 스마일',
	'CURRENT_SMILIES_EXPLAIN'	=> '현재 설치된 스마일로 무엇을 할 것인지 선택하십시오.',

	'DISPLAY_ON_POSTING'		=> '게시 페이지에 표시',
	'DISPLAY_POSTING'			=> '게시 페이지에서',
	'DISPLAY_POSTING_NO'		=> '게시 페이지에 없음',

	'EDIT_ICONS'				=> '전체 아이콘 편집',
	'EDIT_SMILIES'				=> '전체 스마일 편집',
	'EMOTION'					=> '감정',
	'EXPORT_ICONS'				=> 'icons.pak 내보내기 및 다운로드',
	'EXPORT_ICONS_EXPLAIN'		=> '%s이 링크를 클릭하면 설치된 아이콘에 대한 구성이 <samp>icons.pak</samp>에 패키징되며 다운로드하면 <samp>.zip</samp> 또는 <samp>.tgz를 만드는 데 사용할 수 있습니다. 모든 아이콘과 이 <samp>icons.pak</samp> 구성 파일%s을 포함하는 </samp> 파일',
	'EXPORT_SMILIES'			=> 'smilies.pak 내보내기 및 다운로드',
	'EXPORT_SMILIES_EXPLAIN'	=> '%s이 링크를 클릭하면 설치된 smilies에 대한 구성이 <samp>smilies.pak</samp>에 패키징되며 다운로드되면 <samp>.zip</samp> 또는 <samp>.tgz를 만드는 데 사용할 수 있습니다. </samp> 파일에는 모든 웃음과 이 <samp>smilies.pak</samp> 구성 파일%s이 포함되어 있습니다.',

	'FIRST'			=> '첫 번째',

	'ICONS_ADD'				=> '새 아이콘 추가',
	'ICONS_ADDED'			=> array(
		0	=> '아이콘이 추가되지 않았습니다.',
		1	=> '아이콘이 추가되었습니다.',
		2	=> '아이콘이 추가되었습니다.',
	),
	'ICONS_CONFIG'			=> '아이콘 구성',
	'ICONS_DELETED'			=> '아이콘이  제거되었습니다.',
	'ICONS_EDIT'			=> '아이콘 수정',
	'ICONS_EDITED'			=> array(
		0	=> '업데이트된 아이콘이 없습니다.',
		1	=> '아이콘이  업데이트되었습니다.',
		2	=> '아이콘이  업데이트되었습니다.',
	),
	'ICONS_HEIGHT'			=> '아이콘 높이',
	'ICONS_IMAGE'			=> '아이콘 이미지',
	'ICONS_IMPORTED'		=> '아이콘 팩이  설치되었습니다.',
	'ICONS_IMPORT_SUCCESS'	=> '아이콘 팩을  가져왔습니다.',
	'ICONS_LOCATION'		=> '아이콘 위치',
	'ICONS_NOT_DISPLAYED'	=> '게시 페이지에 다음 아이콘이 표시되지 않습니다.',
	'ICONS_ORDER'			=> '아이콘 오더',
	'ICONS_URL'				=> '아이콘 이미지 파일',
	'ICONS_WIDTH'			=> '아이콘 너비',
	'IMPORT_ICONS'			=> '아이콘 패키지 설치',
	'IMPORT_SMILIES'		=> '스마일 패키지 설치',

	'KEEP_ALL'			=> '모두 유지',

	'MASS_ADD_SMILIES'	=> '여러 스마일 추가',

	'NO_ICONS_ADD'		=> '추가할 수 있는 아이콘이 없습니다.',
	'NO_ICONS_EDIT'		=> '수정할 수 있는 아이콘이 없습니다.',
	'NO_ICONS_EXPORT'	=> '패키지를 만드는 데 사용할 아이콘이 없습니다.',
	'NO_ICONS_PAK'		=> '아이콘 패키지를 찾을 수 없습니다.',
	'NO_SMILIES_ADD'	=> '추가할 수 있는 스마일이 없습니다.',
	'NO_SMILIES_EDIT'	=> '수정할 수 있는 스마일이 없습니다',
	'NO_SMILIES_EXPORT'	=> '패키지를 만들 수 있는 스마일이 없습니다.',
	'NO_SMILIES_PAK'	=> '스마일러 패키지를 찾을 수 없습니다.',

	'PAK_FILE_NOT_READABLE'		=> '<samp>.pak</samp> 파일을 읽을 수 없습니다.',

	'REPLACE_MATCHES'	=> '일치 항목 바꾸기',

	'SELECT_PACKAGE'			=> '패키지 파일 선택',
	'SMILIES_ADD'				=> '새로운 스마일리 추가',
	'SMILIES_ADDED'				=> array(
		0	=> '스마일러은 추가되지 않았습니다.',
		1	=> '스마일리 추가가 완료되었습니다.',
		2	=> '스마일이 추가되었습니다.',
	),
	'SMILIES_CODE'				=> '스마일리 코드',
	'SMILIES_CONFIG'			=> '스마일 구성',
	'SMILIES_DELETED'			=> '스마일리가  제거되었습니다.',
	'SMILIES_EDIT'				=> '스마일리 편집',
	'SMILIE_NO_CODE'			=> '입력된 코드가 없으므로 스마일리 "%s"이(가) 무시되었습니다.',
	'SMILIE_NO_EMOTION'			=> '스마일리 "%s"은(는) 입력된 감정이 없으므로 무시되었습니다.',
	'SMILIE_NO_FILE'			=> '파일이 없기 때문에 스마일 "%s"이(가) 무시되었습니다.',
	'SMILIES_EDITED'			=> array(
		0	=> '업데이트된 스마일이 없습니다.',
		1	=> '스마일리가  업데이트되었습니다.',
		2	=> '스마일이  업데이트되었습니다.',
	),
	'SMILIES_EMOTION'			=> '이모티콘',
	'SMILIES_HEIGHT'			=> '스마일 높이',
	'SMILIES_IMAGE'				=> '스마일 이미지',
	'SMILIES_IMPORTED'			=> '스마일 팩이  설치되었습니다.',
	'SMILIES_IMPORT_SUCCESS'	=> '스마일 팩을  가져왔습니다.',
	'SMILIES_LOCATION'			=> '스마일 위치',
	'SMILIES_NOT_DISPLAYED'		=> '다음 스마일은 게시 페이지에 표시되지 않습니다',
	'SMILIES_ORDER'				=> '스마일리 오더',
	'SMILIES_URL'				=> '스마일리 이미지 파일',
	'SMILIES_WIDTH'				=> '스마일리 너비',

	'TOO_MANY_SMILIES'			=> array(
		1	=> '%d 스마일리 제한에 도달했습니다.',
		2	=> '%d 스마일리 제한에 도달했습니다.',
	),

	'WRONG_PAK_TYPE'	=> '지정된 패키지에 적절한 데이터가 없습니다.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> '이 제어판에서 포럼에서 자동으로 검열될 단어를 추가, 편집 및 제거할 수 있습니다. 사람들은 여전히 이러한 단어가 포함된 사용자 이름으로 등록할 수 있습니다. 와일드카드(*)는 단어 필드에 허용됩니다. 예: *test*는 detestable과 일치하고, test*는 testing과 일치하고, *test는 detest와 일치합니다.',
	'ADD_WORD'				=> '새 단어 추가',

	'EDIT_WORD'		=> '단어 검열 편집',
	'ENTER_WORD'	=> '단어와 대체 단어를 입력해야 합니다',

	'NO_WORD'	=> '편집할 단어를 선택하지 않았습니다.',

	'REPLACEMENT'	=> '교체',

	'UPDATE_WORD'	=> '검열 단어 업데이트',

	'WORD'				=> '단어',
	'WORD_ADDED'		=> '검열 단어가 추가되었습니다.',
	'WORD_REMOVED'		=> '검열 단어가 검열이  제거되었습니다.',
	'WORD_UPDATED'		=> '검열 단어가 검열이  업데이트되었습니다.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> '이 양식을 사용하여 순위를 추가, 편집, 보기 및 삭제할 수 있습니다. 사용자 관리 기능을 통해 사용자에게 적용할 수 있는 특별 순위를 만들 수도 있습니다.',
	'ADD_RANK'				=> '새 순위 추가',

	'MUST_SELECT_RANK'		=> '순위를 선택해야 합니다.',

	'NO_ASSIGNED_RANK'		=> '특별한 순위가 지정되지 않았습니다.',
	'NO_RANK_TITLE'			=> '순위에 대한 제목을 지정하지 않았습니다.',
	'NO_UPDATE_RANKS'		=> '순위가  삭제되었습니다. 그러나 이 순위를 사용하는 사용자 계정은 업데이트되지 않았습니다. 이러한 계정의 순위를 수동으로 재설정해야 합니다.',

	'RANK_ADDED'			=> '순위가 추가되었습니다.',
	'RANK_IMAGE'			=> '이미지 순위',
	'RANK_IMAGE_EXPLAIN'	=> '이것을 사용하여 순위와 관련된 작은 이미지를 정의합니다. 경로는 루트 phpBB 디렉토리에 상대적입니다.',
	'RANK_IMAGE_IN_USE'		=> '(사용)',
	'RANK_MINIMUM'			=> '최소 게시물',
	'RANK_REMOVED'			=> '순위가  삭제되었습니다',
	'RANK_SPECIAL'			=> '특별 순위으로 설정',
	'RANK_TITLE'			=> '순위 제목',
	'RANK_UPDATED'			=> '순위가 업데이트되었습니다.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> '여기에서 사용이 허용되지 않을 사용자 이름을 제어할 수 있습니다. 허용되지 않는 사용자 이름에는 *의 와일드카드 문자가 포함될 수 있습니다.',
	'ADD_DISALLOW_EXPLAIN'	=> '와일드카드 문자 *를 사용하여 모든 문자와 일치하는 사용자 이름을 허용하지 않을 수 있습니다.',
	'ADD_DISALLOW_TITLE'	=> '허용되지 않는 사용자 이름 추가',

	'DELETE_DISALLOW_EXPLAIN'	=> '이 목록에서 사용자 이름을 선택하고 제출을 클릭하여 허용되지 않는 사용자 이름을 제거할 수 있습니다.',
	'DELETE_DISALLOW_TITLE'		=> '허용되지 않는 사용자 이름 제거',
	'DISALLOWED_ALREADY'		=> '입력한 이름은 이미 허용되지 않습니다.',
	'DISALLOWED_DELETED'		=> '허용되지 않는 사용자 이름이  제거되었습니다.',
	'DISALLOW_SUCCESSFUL'		=> '허용되지 않는 사용자 이름이 추가되었습니다.',

	'NO_DISALLOWED'				=> '허용되지 않는 사용자 이름이 없습니다.',
	'NO_USERNAME_SPECIFIED'		=> '작업할 사용자 이름을 선택하거나 입력하지 않았습니다.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> '여기에서 게시물을 비승인할 때 신고 및 거부 메시지에 사용된 사유를 관리할 수 있습니다. 제거할 수 없는 한 가지 기본 사유(* 표시)가 있습니다. 이 사유는 적절한 사유가 없는 경우 일반적으로 사용자 지정 메시지에 사용됩니다.',
	'ADD_NEW_REASON'		=> '새 사유 추가',
	'AVAILABLE_TITLES'		=> '사용 가능한 현지화된 사유 제목',

	'IS_NOT_TRANSLATED'			=> '사유가 현지화되지 <strong>않습니다</strong>',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> '사유가 현지화되지 <strong>않습니다</strong>. 현지화된 양식을 제공하려면 언어 파일 보고 사유 섹션에서 올바른 키를 지정하십시오.',
	'IS_TRANSLATED'				=> '사유가 현지화되었습니다.',
	'IS_TRANSLATED_EXPLAIN'		=> '사유가 현지화되었습니다. 여기에 입력하는 제목이 언어 파일 보고서 사유 섹션에 지정된 경우 제목과 설명의 현지화된 형식이 사용됩니다',

	'NO_REASON'					=> '사유을 찾지 못했습니다.',
	'NO_REASON_INFO'			=> '이러한 사유로 제목과 설명을 지정해야 합니다',
	'NO_REMOVE_DEFAULT_REASON'	=> '기본 사유 "기타"를 제거할 수 없습니다.',

	'REASON_ADD'				=> '신고/거부 사유 추가',
	'REASON_ADDED'				=> '신고/거부 사유가 추가되었습니다.',
	'REASON_ALREADY_EXIST'		=> '이 제목에 대한 사유가 이미 존재합니다. 이 사유에 대해 다른 제목을 입력하십시오.',
	'REASON_DESCRIPTION'		=> '사유 설명',
	'REASON_DESC_TRANSLATED'	=> '표시된 사유 설명',
	'REASON_EDIT'				=> '신고/거부 사유 수정',
	'REASON_EDIT_EXPLAIN'		=> '여기에서 사유를 추가하거나 수정할 수 있습니다. 사유가 번역되면 여기에 입력된 설명 대신 현지화된 버전이 사용됩니다.',
	'REASON_REMOVED'			=> '신고/거부 사유가  제거되었습니다.',
	'REASON_TITLE'				=> '사유 제목',
	'REASON_TITLE_TRANSLATED'	=> '표시된 사유 제목',
	'REASON_UPDATED'			=> '신고/거부 사유가 업데이트되었습니다.',

	'USED_IN_REPORTS'		=> '보고서에 사용됨',
));
