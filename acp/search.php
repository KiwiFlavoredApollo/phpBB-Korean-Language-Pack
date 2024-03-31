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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> '여기에서 검색 백엔드의 인덱스를 관리할 수 있습니다. 일반적으로 하나의 백엔드만 사용하므로 사용하지 않는 모든 인덱스를 삭제해야 합니다. 일부 검색 설정(예: 최소/최대 문자 수)을 변경한 후 해당 변경 사항을 반영하도록 인덱스를 다시 생성하는 것이 좋습니다.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> '여기에서 게시물 인덱싱 및 검색 수행에 사용할 검색 백엔드를 정의할 수 있습니다. 이러한 작업에 필요한 처리량에 영향을 줄 수 있는 다양한 옵션을 설정할 수 있습니다. 이러한 설정 중 일부는 모든 검색 엔진 백엔드에 대해 동일합니다.',

	'COMMON_WORD_THRESHOLD'					=> '공통 단어 임계값',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> '모든 게시물의 더 많은 비율에 포함된 단어는 공통으로 간주됩니다. 일반적인 단어는 검색 쿼리에서 무시됩니다. 비활성화하려면 0으로 설정하십시오. 게시물이 100개 이상인 경우에만 적용됩니다. 현재 일반적으로 간주되는 단어를 재고하려면 색인을 다시 만들어야 합니다.',
	'CONFIRM_SEARCH_BACKEND'				=> '다른 검색 백엔드로 전환하시겠습니까? 검색 백엔드를 변경한 후 새 검색 백엔드에 대한 색인을 생성해야 합니다. 이전 검색 백엔드로 다시 전환할 계획이 없다면 시스템 리소스를 확보하기 위해 이전 백엔드의 인덱스를 삭제할 수도 있습니다.',
	'CONTINUE_DELETING_INDEX'				=> '이전 인덱스 제거 프로세스 계속',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> '인덱스 제거 프로세스가 시작되었습니다. 검색 색인 페이지에 액세스하려면 페이지를 완료하거나 취소해야 합니다.',
	'CONTINUE_INDEXING'						=> '이전 인덱싱 프로세스 계속',
	'CONTINUE_INDEXING_EXPLAIN'				=> '인덱싱 프로세스가 시작되었습니다. 검색 색인 페이지에 액세스하려면 페이지를 완료하거나 취소해야 합니다.',
	'CREATE_INDEX'							=> '인덱스 생성',

	'DEFAULT_SEARCH_RETURN_CHARS'			=> '반환되는 문자의 기본 수',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> '검색하는 동안 반환될 기본 문자 수입니다. 값이 0이면 전체 게시물이 반환됩니다.',
	'DELETE_INDEX'							=> '인덱스 삭제',
	'DELETING_INDEX_IN_PROGRESS'			=> '인덱스 삭제 진행 중',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> '검색 백엔드가 현재 색인을 정리 중입니다. 몇 분 정도 걸릴 수 있습니다.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL 전체 텍스트 백엔드는 MySQL4 이상에서만 사용할 수 있습니다',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL 전체 텍스트 인덱스는 MyISAM 또는 InnoDB 테이블에서만 사용할 수 있습니다. InnoDB 테이블의 전체 텍스트 인덱스에는 MySQL 5.6.8 이상이 필요합니다',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> '색인이 생성된 총 게시물 수',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> '최소한 이 문자가 많은 단어는 검색을 위해 인덱싱됩니다. 귀하 또는 귀하의 호스트는 mysql 구성을 변경해야만 이 설정을 변경할 수 있습니다.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> '이보다 많은 문자를 포함하지 않는 단어는 검색을 위해 인덱싱됩니다. 귀하 또는 귀하의 호스트는 mysql 구성을 변경해야만 이 설정을 변경할 수 있습니다.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL 전체 텍스트 백엔드는 PostgreSQL에서만 사용할 수 있습니다.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> '색인이 생성된 총 게시물 수',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL 버전',
	'FULLTEXT_POSTGRES_TS_NAME'				=> '텍스트 검색 구성 프로필:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> '키워드의 최소 단어 길이',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> '키워드의 최대 단어 길이',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> '이 검색 백엔드에는 PostgreSQL 버전 8.3 이상이 필요합니다.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> '구문 분석기 및 사전을 결정하는 데 사용되는 텍스트 검색 구성 프로필입니다.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> '최소한 이 문자가 많은 단어는 데이터베이스에 대한 쿼리에 포함됩니다.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> '이보다 많은 문자를 포함하지 않는 단어는 데이터베이스에 대한 쿼리에 포함됩니다.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'sphinx 구성 파일을 생성하려면 다음 설정을 구성하십시오.',
	'FULLTEXT_SPHINX_DATA_PATH'				=> '데이터 디렉토리 경로',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> '인덱스와 로그 파일을 저장하는 데 사용됩니다. 웹 액세스 가능 디렉토리 외부에 이 디렉토리를 작성해야 합니다. (뒤에 슬래시가 있어야 함)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> '자주 업데이트되는 델타 인덱스의 게시물 수',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx 검색 데몬 호스트',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'sphinx 검색 데몬(searchd)이 수신 대기하는 호스트입니다. 기본 로컬 호스트를 사용하려면 비워 둡니다.',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> '인덱서 메모리 제한',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> '이 숫자는 항상 컴퓨터에서 사용 가능한 RAM보다 낮아야 합니다. 주기적으로 성능 문제가 발생하는 경우 이는 인덱서가 너무 많은 리소스를 사용하기 때문일 수 있습니다. 인덱서에 사용 가능한 메모리 양을 줄이는 데 도움이 될 수 있습니다.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> '메인 인덱스의 게시물 수',
	'FULLTEXT_SPHINX_PORT'					=> 'sphinx 검색 데몬 포트',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'sphinx 검색 데몬(searchd)이 수신 대기하는 포트입니다. 기본 Sphinx API 포트 9312를 사용하려면 비워 둡니다.',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'phpBB에 대한 sphinx 검색은 MySQL 및 PostgreSQL만 지원합니다.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx 설정 파일',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'sphinx 구성 파일의 생성된 콘텐츠입니다. 이 데이터는 sphinx 검색 데몬이 사용하는 sphinx.conf에 붙여넣어야 합니다. [dbuser] 및 [dbpassword] 자리 표시자를 데이터베이스 자격 증명으로 바꿉니다.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> '스핑크스 데이터 디렉토리 경로가 정의되지 않았습니다. 경로를 정의하고 구성 파일을 생성하기 위해 제출하십시오.',

	'GENERAL_SEARCH_SETTINGS'				=> '일반 검색 설정',
	'GO_TO_SEARCH_INDEX'					=> '검색 색인 페이지로 이동',

	'INDEX_STATS'							=> '색인 통계',
	'INDEXING_IN_PROGRESS'					=> '색인 생성 중',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> '검색 백엔드는 현재 게시판의 모든 게시물을 색인화하고 있습니다. 보드 크기에 따라 몇 분에서 몇 시간이 걸릴 수 있습니다.',

	'LIMIT_SEARCH_LOAD'						=> '검색 페이지 시스템 로드 제한',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> '1분 시스템 부하가 이 값을 초과하면 검색 페이지가 오프라인으로 전환되고 1.0은 한 프로세서의 ~100% 사용률과 같습니다. 이것은 UNIX 기반 서버에서만 작동합니다.',

	'MAX_SEARCH_CHARS'						=> '검색으로 인덱싱된 최대 문자 수',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> '이보다 많은 문자를 포함하지 않는 단어는 검색을 위해 인덱싱됩니다.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> '허용되는 최대 키워드 수',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> '사용자가 검색할 수 있는 최대 단어 수입니다. 값이 0이면 단어 수에 제한이 없습니다.',
	'MIN_SEARCH_CHARS'						=> '검색으로 인덱싱된 최소 문자',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> '최소한 이 문자가 많은 단어는 검색을 위해 인덱싱됩니다.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> '최소 저자 이름 문자',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> '사용자는 와일드카드 작성자 검색을 수행할 때 이름의 최소한 이 문자를 입력해야 합니다. 작성자의 사용자 이름이 이 숫자보다 짧은 경우에도 전체 사용자 이름을 입력하여 작성자의 게시물을 검색할 수 있습니다.',

	'PROGRESS_BAR'							=> '진행 표시 줄',

	'SEARCH_GUEST_INTERVAL'					=> '게스트 검색 플러드 간격',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> '게스트가 검색 사이에 기다려야 하는 시간(초)입니다. 한 게스트가 검색하면 다른 모든 게스트는 시간 간격이 지날 때까지 기다려야 합니다.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> '게시물 ID %2$d까지의 모든 게시물의 색인이 생성되었으며 이 중 %1$d개의 게시물이 이 단계에 포함되었습니다.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> '현재 색인 생성 속도는 초당 약 %1$.1f개의 게시물입니다.<br />색인 생성 중…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> '게시물 ID %2$d까지의 모든 게시물이 검색 색인에서 제거되었으며 그 중 %1$d개의 게시물이 이 단계에 포함되었습니다.<br />',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		2	=> '현재 삭제 속도는 초당 약 %1$.1f개의 게시물입니다.<br />삭제 중…',
	),
	'SEARCH_INDEX_CREATED'					=> '게시판 데이터베이스의 모든 게시물을 성공적으로 색인화했습니다.',
	'SEARCH_INDEX_REMOVED'					=> '이 백엔드에 대한 검색 색인을 성공적으로 삭제했습니다.',
	'SEARCH_INTERVAL'						=> '사용자 검색 플러드 간격',
	'SEARCH_INTERVAL_EXPLAIN'				=> '사용자가 검색 사이에 기다려야 하는 시간(초)입니다. 이 간격은 각 사용자에 대해 독립적으로 확인됩니다.',
	'SEARCH_STORE_RESULTS'					=> '검색 결과 캐시 길이',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> '캐시된 검색 결과는 이 시간(초) 후에 만료됩니다. 검색 캐시를 비활성화하려면 0으로 설정하십시오.',
	'SEARCH_TYPE'							=> '백엔드 검색',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB를 사용하면 게시물 내용에서 텍스트를 검색하는 데 사용되는 백엔드를 선택할 수 있습니다. 기본적으로 검색은 phpBB의 전체 텍스트 검색을 사용합니다.',
	'SWITCHED_SEARCH_BACKEND'				=> '검색 백엔드를 전환했습니다. 새 검색 백엔드를 사용하려면 선택한 백엔드에 대한 인덱스가 있는지 확인해야 합니다.',

	'TOTAL_WORDS'							=> '색인된 단어의 총 수',
	'TOTAL_MATCHES'							=> '인덱싱된 관계를 게시할 단어의 총 수',

	'YES_SEARCH'							=> '검색 기능 활성화',
	'YES_SEARCH_EXPLAIN'					=> '회원 검색을 포함한 사용자 대면 검색 기능을 활성화합니다.',
	'YES_SEARCH_UPDATE'						=> '전체 텍스트 업데이트 사용',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '게시할 때 전체 텍스트 인덱스 업데이트, 검색이 비활성화된 경우 무시됩니다.',
));
