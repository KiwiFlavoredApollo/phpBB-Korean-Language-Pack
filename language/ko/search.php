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
	'ALL_AVAILABLE'			=> '모두 사용 가능',
	'ALL_RESULTS'			=> '모든 결과',

	'DISPLAY_RESULTS'		=> '결과 표시',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> '검색에서 %d개의 일치 항목을 찾았습니다.',
		2	=> '검색에서 %d개의 일치 항목을 찾았습니다.',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> '검색에서 %d개 이상의 일치 항목을 찾았습니다.',
		2	=> '검색에서 %d개 이상의 일치 항목을 찾았습니다.',
	),

	'GLOBAL'				=> '글로벌 공지',

	'IGNORED_TERMS'			=> '무시',
	'IGNORED_TERMS_EXPLAIN'	=> '검색어의 다음 단어는 너무 일반적인 단어로 인해 무시되었습니다: <strong>%s</strong>',

	'JUMP_TO_POST'			=> '게시물로 이동',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> '보드에 등록하고 로그인해야 자신의 게시물을 볼 수 있습니다.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> '보드의 읽지 않은 게시물을 보려면 등록 및 로그인이 필요합니다.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> '보드 마지막 방문 이후의 새 게시물을 보려면 등록 및 로그인이 필요합니다.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> '검색할 단어를 너무 많이 지정했습니다. %1$d단어 이상 입력하지 마십시오.',
		2	=> '검색할 단어를 너무 많이 지정했습니다. %1$d단어 이상 입력하지 마십시오.',
	),

	'NO_KEYWORDS'			=> '검색할 단어를 하나 이상 지정해야 합니다. 각 단어는 %s 이상으로 구성되어야 하며 와일드카드를 제외하고 %s 이상을 포함할 수 없습니다.',
	'NO_RECENT_SEARCHES'	=> '최근 검색이 수행되지 않았습니다.',
	'NO_SEARCH'				=> '죄송합니다. 검색 시스템을 사용할 수 없습니다.',
	'NO_SEARCH_RESULTS'		=> '적합한 일치 항목이 없습니다.',
	'NO_SEARCH_LOAD'		=> '죄송합니다. 지금은 검색을 사용할 수 없습니다. 서버의 부하가 높습니다. 나중에 다시 시도 해주십시오.',
	'NO_SEARCH_TIME'		=> array(
		1	=> '죄송합니다. 지금은 검색을 사용할 수 없습니다. %d초 후에 다시 시도하십시오.',
		2	=> '죄송합니다. 지금은 검색을 사용할 수 없습니다. %d초 후에 다시 시도하십시오',
	),
	'NO_SEARCH_UNREADS'		=> '죄송합니다. 이 게시판에서 읽지 않은 게시물 검색이 비활성화되었습니다.',
	'WORD_IN_NO_POST'		=> '게시물에 <strong>%s</strong> 단어가 포함되어 있지 않아 게시물을 찾을 수 없습니다.',
	'WORDS_IN_NO_POST'		=> '글에 <strong>%s</strong> 단어가 포함되어 있지 않아 게시물을 찾을 수 없습니다.',

	'POST_CHARACTERS'		=> '게시물의 문자',
	'PHRASE_SEARCH_DISABLED'	=> '이 보드에서는 정확한 구문으로 검색할 수 없습니다.',

	'RECENT_SEARCHES'		=> '최근 검색',
	'RESULT_DAYS'			=> '결과를 이전으로 제한',
	'RESULT_SORT'			=> '결과 정렬 기준',
	'RETURN_FIRST'			=> '우선 반환',
	'RETURN_FIRST_EXPLAIN'	=> '전체 게시물을 표시하려면 0으로 설정합니다.',
	'GO_TO_SEARCH_ADV'	=> '고급 검색으로 이동',

	'SEARCHED_FOR'				=> '사용된 검색어',
	'SEARCHED_TOPIC'			=> '검색된 글',
	'SEARCHED_QUERY'			=> '검색된 쿼리',
	'SEARCH_ALL_TERMS'			=> '모든 용어를 검색하거나 검색어를 입력한 대로 사용',
	'SEARCH_ANY_TERMS'			=> '모든 용어 검색',
	'SEARCH_AUTHOR'				=> '저자 검색',
	'SEARCH_AUTHOR_EXPLAIN'		=> '부분 일치의 경우 *를 와일드카드로 사용합니다.',
	'SEARCH_FIRST_POST'			=> '글을 첫 번째 게시물만',
	'SEARCH_FORUMS'				=> '포럼에서 검색',
	'SEARCH_FORUMS_EXPLAIN'		=> '검색하려는 포럼을 선택하십시오. 아래의 "하위 포럼 검색"을 비활성화하지 않으면 하위 포럼이 자동으로 검색됩니다.',
	'SEARCH_IN_RESULTS'			=> '검색 결과',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '찾아야 할 단어 앞에 <strong>+</strong>를, 찾지 말아야 할 단어 앞에 <strong>-</strong>를 배치합니다. 단어 중 하나만 찾아야 하는 경우 <strong>|</strong>으로 구분된 단어 목록을 대괄호 안에 넣으십시오. 부분 일치의 경우 *를 와일드카드로 사용합니다.',
	'SEARCH_MSG_ONLY'			=> '메시지 텍스트만',
	'SEARCH_OPTIONS'			=> '검색 옵션',
	'SEARCH_QUERY'				=> '검색어',
	'SEARCH_SUBFORUMS'			=> '하위 포럼 검색',
	'SEARCH_TITLE_MSG'			=> '게시물 제목 및 메시지 텍스트',
	'SEARCH_TITLE_ONLY'			=> '글 제목만',
	'SEARCH_WITHIN'				=> '내에서 검색',
	'SORT_ASCENDING'			=> '오름차순',
	'SORT_AUTHOR'				=> '작가',
	'SORT_DESCENDING'			=> '내림차순',
	'SORT_FORUM'				=> '포럼',
	'SORT_POST_SUBJECT'			=> '게시물 제목',
	'SORT_TIME'					=> '게시 시간',
	'SPHINX_SEARCH_FAILED'		=> '검색 실패: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> '죄송합니다. 검색을 수행할 수 없습니다. 이 실패에 대한 자세한 정보는 오류 로그에 기록되어 있습니다.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> '작성자 이름의 최소 %d자를 지정해야 합니다.',
		2	=> '작성자 이름의 %d자 이상을 지정해야 합니다.',
	),
));
