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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> '여기에서 검색 백엔드의 색인을 관리할 수 있습니다. 일반적으로 하나의 백엔드만 사용하므로 사용하지 않는 색인은 모두 삭제하는 것이 좋습니다. 최소/최대 문자 수와 같은 검색 설정을 변경한 후에는 변경 사항이 반영되도록 색인을 다시 만드는 것이 좋습니다.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> '여기에서 게시물을 색인화하고 검색을 수행하는 데 사용할 검색 백엔드를 지정할 수 있습니다. 이러한 작업에 필요한 처리량에 영향을 주는 여러 옵션도 설정할 수 있습니다. 일부 설정은 모든 검색 백엔드에 공통으로 적용됩니다.',

	'COMMON_WORD_THRESHOLD'					=> '일반 단어 비율 임계값',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> '전체 게시물에서 이 비율보다 더 자주 나타나는 단어는 일반 단어로 간주되어 검색어에서 무시됩니다. 사용하지 않으려면 0으로 설정하십시오. 게시물이 100개를 초과할 때만 적용됩니다. 현재 일반 단어로 간주되는 단어를 다시 평가하려면 색인을 다시 만들어야 합니다.',
	'CONFIRM_SEARCH_BACKEND'				=> '다른 검색 백엔드로 전환하시겠습니까? 검색 백엔드를 변경한 후 새 검색 백엔드에 대한 색인을 생성해야 합니다. 이전 검색 백엔드로 다시 전환할 계획이 없다면 시스템 리소스를 확보하기 위해 이전 백엔드의 색인를 삭제할 수도 있습니다.',
	'CONTINUE_DELETING_INDEX'				=> '이전 색인 제거 작업 계속',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> '색인 제거 작업이 시작되어 있습니다. 검색 색인 페이지에 접근하려면 이 작업을 완료하거나 취소해야 합니다.',
	'CONTINUE_INDEXING'						=> '이전 색인 생성 작업 계속',
	'CONTINUE_INDEXING_EXPLAIN'				=> '색인 생성 작업이 시작되어 있습니다. 검색 색인 페이지에 접근하려면 이 작업을 완료하거나 취소해야 합니다.',
	'CREATE_INDEX'							=> '색인 생성',

	'DEFAULT_SEARCH_RETURN_CHARS'			=> '검색 결과의 기본 문자 수',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> '검색 결과에 기본으로 반환할 문자 수입니다. 0으로 설정하면 게시물 전체를 반환합니다.',
	'DELETE_INDEX'							=> '색인 삭제',
	'DELETING_INDEX_IN_PROGRESS'			=> '색인 삭제 진행 중…',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> '검색 백엔드가 현재 색인을 정리 중입니다. 몇 분 정도 걸릴 수 있습니다.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL 전체 텍스트 백엔드는 MySQL 4 이상에서만 사용할 수 있습니다.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL 전체 텍스트 색인은 MyISAM 또는 InnoDB 테이블에서만 사용할 수 있습니다. InnoDB 테이블에서 전체 텍스트 색인을 사용하려면 MySQL 5.6.8 이상이 필요합니다.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> '색인이 생성된 총 게시물 수',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> '이 문자 수 이상인 단어가 검색용으로 색인됩니다. 이 설정은 사용자 또는 호스팅 업체가 MySQL 구성을 변경해야만 바꿀 수 있습니다.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> '이 문자 수 이하인 단어가 검색용으로 색인됩니다. 이 설정은 사용자 또는 호스팅 업체가 MySQL 구성을 변경해야만 바꿀 수 있습니다.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL 전체 텍스트 백엔드는 PostgreSQL에서만 사용할 수 있습니다.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> '색인이 생성된 총 게시물 수',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL 버전',
	'FULLTEXT_POSTGRES_TS_NAME'				=> '텍스트 검색 구성 프로필:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> '키워드의 최소 단어 길이',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> '키워드의 최대 단어 길이',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> '이 검색 백엔드에는 PostgreSQL 버전 8.3 이상이 필요합니다.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> '구문 분석기 및 사전을 결정하는 데 사용되는 텍스트 검색 구성 프로필입니다.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> '이 문자 수 이상인 단어가 데이터베이스 쿼리에 포함됩니다.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> '이 문자 수 이하인 단어가 데이터베이스 쿼리에 포함됩니다.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Sphinx 설정 파일을 생성하려면 다음 항목을 설정하십시오.',
	'FULLTEXT_SPHINX_DATA_PATH'				=> '데이터 디렉터리 경로',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> '색인과 로그 파일을 저장하는 데 사용됩니다. 웹에서 접근할 수 없는 위치에 이 디렉터리를 만들어야 하며 경로 끝에 슬래시를 붙여야 합니다.',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> '자주 업데이트되는 델타 색인의 게시물 수',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx 검색 데몬 호스트',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Sphinx 검색 데몬(searchd)이 수신 대기하는 호스트입니다. 기본값인 localhost를 사용하려면 비워 두십시오.',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> '인덱서 메모리 제한',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> '이 값은 항상 컴퓨터에서 사용할 수 있는 RAM보다 작아야 합니다. 주기적으로 성능 문제가 발생한다면 색인 생성기가 너무 많은 자원을 사용하기 때문일 수 있습니다. 색인 생성기에 할당된 메모리를 줄이면 도움이 될 수 있습니다.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> '메인 색인의 게시물 수',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx 검색 데몬 포트',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Sphinx 검색 데몬(searchd)이 수신 대기하는 포트입니다. 기본 Sphinx API 포트인 9312를 사용하려면 비워 두십시오.',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'phpBB에 대한 Sphinx 검색은 MySQL 및 PostgreSQL만 지원합니다.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx 설정 파일',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> '생성된 Sphinx 설정 파일의 내용입니다. 이 내용을 Sphinx 검색 데몬에서 사용하는 sphinx.conf에 붙여넣으십시오. [dbuser]와 [dbpassword] 자리표시자를 데이터베이스 접속 정보로 바꾸어야 합니다.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Sphinx 데이터 디렉터리 경로가 정의되지 않았습니다. 경로를 지정한 뒤 제출하여 설정 파일을 생성하십시오.',

	'GENERAL_SEARCH_SETTINGS'				=> '일반 검색 설정',
	'GO_TO_SEARCH_INDEX'					=> '검색 색인 페이지로 이동',

	'INDEX_STATS'							=> '색인 통계',
	'INDEXING_IN_PROGRESS'					=> '색인 생성 진행 중…',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> '검색 백엔드가 현재 게시판의 모든 게시물을 색인하고 있습니다. 게시판 크기에 따라 몇 분에서 몇 시간이 걸릴 수 있습니다.',

	'LIMIT_SEARCH_LOAD'						=> '검색 페이지 시스템 부하 제한',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> '1분 평균 시스템 부하가 이 값을 초과하면 검색 페이지가 비활성화됩니다. 1.0은 단일 프로세서 사용률 약 100%에 해당합니다. UNIX 기반 서버에서만 작동합니다.',

	'MAX_SEARCH_CHARS'						=> '검색 색인의 최대 문자 수',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> '이 문자 수 이하인 단어가 검색용으로 색인됩니다.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> '허용되는 최대 키워드 수',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> '사용자가 검색할 수 있는 최대 단어 수입니다. 값이 0이면 단어 수에 제한이 없습니다.',
	'MIN_SEARCH_CHARS'						=> '검색 색인의 최소 문자 수',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> '이 문자 수 이상인 단어가 검색용으로 색인됩니다.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> '작성자 이름의 최소 문자 수',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> '와일드카드로 작성자를 검색할 때 이름을 최소 이 문자 수만큼 입력해야 합니다. 작성자의 사용자 이름이 이보다 짧다면 전체 사용자 이름을 입력하여 해당 작성자의 게시물을 검색할 수 있습니다.',

	'PROGRESS_BAR'							=> '진행률 표시줄',

	'SEARCH_GUEST_INTERVAL'					=> '비회원 연속 검색 제한 간격',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> '비회원이 검색 후 다음 검색까지 기다려야 하는 시간(초)입니다. 한 비회원이 검색하면 이 시간이 지날 때까지 다른 모든 비회원도 기다려야 합니다.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1 => '게시물 ID %2$d까지의 모든 게시물의 색인이 생성되었으며 이 중 %1$d개의 게시물이 이 단계에 포함되었습니다.',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1 => '현재 색인 생성 속도는 초당 약 %1$.1f개의 게시물입니다.',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1 => '게시물 ID %2$d까지의 모든 게시물이 검색 색인에서 제거되었으며 그 중 %1$d개의 게시물이 이 단계에 포함되었습니다.',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		1 => '현재 삭제 속도는 초당 약 %1$.1f개의 게시물입니다.',
	),
	'SEARCH_INDEX_CREATED'					=> '게시판 데이터베이스의 모든 게시물을 성공적으로 색인했습니다.',
	'SEARCH_INDEX_PROGRESS'					=> '완료: %1$d | 남음: %2$d | 전체: %3$d',
	'SEARCH_INDEX_REMOVED'					=> '이 백엔드에 대한 검색 색인을 성공적으로 삭제했습니다.',
	'SEARCH_INTERVAL'						=> '사용자 연속 검색 제한 간격',
	'SEARCH_INTERVAL_EXPLAIN'				=> '사용자가 검색 후 다음 검색까지 기다려야 하는 시간(초)입니다. 이 간격은 사용자별로 따로 확인됩니다.',
	'SEARCH_STORE_RESULTS'					=> '검색 결과 캐시 유지 시간',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> '캐시된 검색 결과는 이 시간(초) 후에 만료됩니다. 검색 캐시를 비활성화하려면 0으로 설정하십시오.',
	'SEARCH_TYPE'							=> '검색 백엔드',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB에서는 게시물 내용의 텍스트를 검색할 때 사용할 백엔드를 선택할 수 있습니다. 기본적으로 phpBB 자체 전체 텍스트 검색을 사용합니다.',
	'SWITCHED_SEARCH_BACKEND'				=> '검색 백엔드를 전환했습니다. 새 검색 백엔드를 사용하려면 선택한 백엔드에 대한 색인가 있는지 확인해야 합니다.',

	'TOTAL_WORDS'							=> '색인된 전체 단어 수',
	'TOTAL_MATCHES'							=> '색인된 단어와 게시물 간 연결의 총수',

	'YES_SEARCH'							=> '검색 기능 활성화',
	'YES_SEARCH_EXPLAIN'					=> '회원 검색을 포함해 사용자가 이용하는 검색 기능을 활성화합니다.',
	'YES_SEARCH_UPDATE'						=> '전체 텍스트 업데이트 사용',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '게시물을 작성할 때 전체 텍스트 색인을 업데이트합니다. 검색 기능이 비활성화되어 있으면 이 설정은 적용되지 않습니다.',
));
