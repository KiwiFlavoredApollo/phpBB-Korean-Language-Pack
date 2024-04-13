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
	'CLI_APCU_CACHE_NOTICE'				=> 'APCu 캐시는 관리자 제어판을 통해 제거해야 합니다.',

	'CLI_CONFIG_CANNOT_CACHED'			=> '구성 옵션이 너무 자주 변경되어 효율적으로 캐시될 수 없는 경우 이 옵션을 설정하십시오.',
	'CLI_CONFIG_CURRENT'				=> '현재 구성 값, 0과 1을 사용하여 부울 값 지정',
	'CLI_CONFIG_DELETE_SUCCESS'			=> '구성 %s을(를)  삭제했습니다..',
	'CLI_CONFIG_NEW'					=> '새 구성 값, 0과 1을 사용하여 부울 값 지정',
	'CLI_CONFIG_NOT_EXISTS'				=> '구성 %s이(가) 존재하지 않습니다.',
	'CLI_CONFIG_OPTION_NAME'			=> '구성 옵션의 이름',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> '끝에 새 줄 없이 값을 인쇄해야 하는 경우 이 옵션을 설정합니다.',
	'CLI_CONFIG_INCREMENT_BY'			=> '증분할 양',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '구성 %s을(를)  증가시켰습니다.',
	'CLI_CONFIG_SET_FAILURE'			=> '구성 %s을(를) 설정할 수 없습니다.',
	'CLI_CONFIG_SET_SUCCESS'			=> '구성 %s을(를)  설정했습니다.',

	'CLI_DESCRIPTION_CRON_LIST'					=> '준비 및 준비되지 않은 cron 작업 목록을 인쇄합니다.',
	'CLI_DESCRIPTION_CRON_RUN'					=> '모든 준비된 cron 작업을 실행합니다.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> '실행할 작업의 이름',
	'CLI_DESCRIPTION_DB_LIST'					=> '설치된 모든 마이그레이션과 사용 가능한 마이그레이션을 나열합니다.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> '마이그레이션을 적용하여 데이터베이스를 업데이트합니다.',
	'CLI_DESCRIPTION_DB_REVERT'					=> '마이그레이션을 되돌립니다.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> '구성 옵션을 삭제합니다.',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> '지정된 확장을 비활성화합니다.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> '지정된 확장을 활성화합니다.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> '의존하지 않는 마이그레이션을 찾습니다.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> '포럼 및 모듈의 트리 구조를 복구합니다.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> '구성 옵션의 값을 가져옵니다.',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> '구성 옵션의 정수 값을 증가시킵니다.',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> '데이터베이스 및 파일 시스템의 모든 확장을 나열합니다.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> '환경 이름입니다.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> '안전 모드(확장 없음)에서 실행합니다.',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> '셸을 시작합니다.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> '지정된 확장을 제거합니다.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> '재분석할 수 있는 텍스트 유형을 나열합니다.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> '사용 가능한 리파서:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> '현재 text_formatter 서비스로 저장된 텍스트를 재분석합니다.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> '재분석할 텍스트 유형입니다. 모든 것을 재분석하려면 비워 둡니다.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> '변경 사항을 저장하지 마십시오. 그냥 무슨 일이 일어날지 인쇄',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> '처리할 가장 낮은 레코드 ID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> '처리할 최고 레코드 ID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> '한 번에 처리할 대략적인 레코드 수',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> '마지막 실행이 중지된 곳에서 재분석 시작',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> '이전 값이 현재 값과 일치하는 경우에만 구성 옵션의 값을 설정합니다.',
	'CLI_DESCRIPTION_SET_CONFIG'						=> '구성 옵션의 값을 설정합니다.',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> '기존 썸네일을 모두 삭제합니다.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> '누락된 모든 축소판을 생성합니다.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> '모든 축소판을 다시 만듭니다.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> '보드가 최신 상태인지 확인하십시오.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> '확인할 확장자 이름(모두인 경우 모든 확장자 확인)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> '캐시로 check 명령을 실행합니다.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> '안정적인 또는 불안정한 버전만 확인하도록 선택하여 명령을 실행합니다.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'bcrypt로 해시할 오래된 암호 해시를 업데이트합니다.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s"는 "안정" 또는 "불안정"으로 설정해야 합니다.',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> '사용자 계정을 활성화(또는 비활성화)합니다.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> '활성화할 계정의 사용자 이름입니다.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> '사용자 계정 비활성화',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> '사용자가 이미 활성 상태입니다.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> '사용자가 이미 비활성화되어 있습니다.',
	'CLI_DESCRIPTION_USER_ADD'					=> '새 사용자를 추가합니다.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> '새 사용자의 사용자 이름',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> '새 사용자의 비밀번호',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> '새 사용자의 이메일 주소',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> '새 사용자에게 계정 활성화 이메일 보내기(기본적으로 전송되지 않음)',
	'CLI_DESCRIPTION_USER_DELETE'				=> '사용자 계정을 삭제합니다.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> '삭제할 사용자의 사용자 이름',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> '사용자가 작성한 모든 게시물을 삭제합니다. 이 옵션이 없으면 사용자의 게시물이 유지됩니다.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> '사용자 이름을 다시 정리합니다.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> '확장 %s을(를) 비활성화할 수 없습니다.',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '확장 프로그램 %s을(를) 비활성화했습니다.',
	'CLI_EXTENSION_DISABLED'			=> '확장 %s이(가) 활성화되지 않았습니다.',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> '확장 %s을(를) 활성화할 수 없습니다.',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '확장 %s을(를) 성공적으로 활성화했습니다.',
	'CLI_EXTENSION_ENABLED'				=> '확장 %s이(가) 이미 활성화되어 있습니다.',
	'CLI_EXTENSION_NOT_EXIST'			=> '확장 %s이(가) 존재하지 않습니다.',
	'CLI_EXTENSION_NAME'				=> '확장 이름',
	'CLI_EXTENSION_PURGE_FAILURE'		=> '확장 프로그램 %s을(를) 제거할 수 없습니다.',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> '확장 프로그램 %s을(를) 제거했습니다.',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> '확장 프로그램 %s을(를) 업데이트할 수 없습니다.',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> '확장 프로그램 %s을(를) 업데이트했습니다.',
	'CLI_EXTENSION_NOT_FOUND'			=> '확장자를 찾을 수 없습니다.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> '확장 %s을(를) 사용할 수 없습니다.',
	'CLI_EXTENSIONS_AVAILABLE'			=> '사용 가능',
	'CLI_EXTENSIONS_DISABLED'			=> '비활성화',
	'CLI_EXTENSIONS_ENABLED'			=> '활성화',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> '포럼 및 모듈의 트리 구조를 성공적으로 복구했습니다.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> '오래된 암호 해시를 bcrypt로 성공적으로 업데이트했습니다.',

	'CLI_MIGRATION_NAME'					=> '네임스페이스를 포함한 마이그레이션 이름(문제를 방지하려면 백슬래시 대신 슬래시 사용).',
	'CLI_MIGRATIONS_AVAILABLE'				=> '사용 가능한 마이그레이션',
	'CLI_MIGRATIONS_INSTALLED'				=> '설치된 마이그레이션',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => '사용 가능한 마이그레이션만 표시',
	'CLI_MIGRATIONS_EMPTY'                  => '마이그레이션이 없습니다.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> '%1$s 재분석(범위 %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> '%s을(를) 분석하는 중...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> '성공적으로 분석을 마쳤습니다.',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s(%2$s)이(가) 삭제되었습니다.',
	'CLI_THUMBNAIL_DELETING'	=> '썸네일 삭제',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s(%2$s) 건너뛰었습니다.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s(%2$s) 생성됨.',
	'CLI_THUMBNAIL_GENERATING'	=> '썸네일 생성',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> '모든 썸네일이 재생성되었습니다.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> '모든 썸네일이 삭제되었습니다.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> '생성할 썸네일 없음.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> '삭제할 쌈네일 없음',

	'CLI_USER_ADD_SUCCESS'		=> '사용자 %s을(를) 성공적으로 추가했습니다.',
	'CLI_USER_DELETE_CONFIRM'	=> '"%s"을(를) 삭제하시겠습니까? [예/아니요]',
	'CLI_USER_RECLEAN_START'	=> '사용자 이름 다시 정리',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> '재창소 완료. 정리할 사용자 이름이 없습니다.',
		1	=> '재청소 완료. %d명의 사용자 이름이 삭제되었습니다.',
		2	=> '재청소 완료. %d명의 사용자 이름이 삭제되었습니다.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . '선택적으로 지정된 cron 작업만 실행하도록 cron 작업 이름을 지정할 수 있습니다.',
	'CLI_HELP_USER_ACTIVATE'	=> '사용자 계정을 활성화하거나 <info>--deactivate</info> 옵션을 사용하여 계정을 비활성화합니다.
	선택적으로 사용자에게 활성화 이메일을 보내려면 <info>--send-email</info> 옵션을 사용하십시오.',
	'CLI_HELP_USER_ADD'			=> '<info>%command.name%</info> 명령은 새 사용자를 추가합니다.
	이 명령을 옵션 없이 실행하면 옵션을 입력하라는 메시지가 표시됩니다.
	선택적으로 새 사용자에게 이메일을 보내려면 <info>--send-email</info> 옵션을 사용하십시오.',
	'CLI_HELP_USER_RECLEAN'		=> '사용자 이름 다시 정리는 저장된 모든 사용자 이름을 확인하고 깨끗한 버전도 저장되었는지 확인합니다. 정리된 사용자 이름은 대소문자를 구분하지 않는 형식으로 NFC가 정규화되고 ASCII로 변환됩니다.',
));
