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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> '여기에서 모든 phpBB 관련 데이터를 백업할 수 있습니다. 결과 아카이브는 <samp>store/</samp> 폴더에 저장됩니다. 서버 구성에 따라 다양한 형식으로 파일을 압축할 수 있습니다.',
	'ACP_RESTORE_EXPLAIN'	=> '이것은 저장된 파일에서 모든 phpBB 테이블의 전체 복원을 수행합니다. 서버에서 지원하는 경우 gzip 또는 bzip2 압축 텍스트 파일을 사용할 수 있으며 자동으로 압축이 해제됩니다. <strong>경고</strong> 기존 데이터를 덮어씁니다. 복원을 처리하는 데 시간이 오래 걸릴 수 있습니다. 완료될 때까지 이 페이지에서 이동하지 마십시오. 백업은 <samp>store/</samp> 폴더에 저장되며 phpBB의 백업 기능에 의해 생성되는 것으로 가정합니다. 내장 시스템에 의해 생성되지 않은 백업 복원은 작동하거나 작동하지 않을 수 있습니다.',

	'BACKUP_DELETE'			=> '백업 파일이 성공적으로 삭제되었습니다.',
	'BACKUP_INVALID'		=> '선택한 백업 파일이 잘못되었습니다.',
	'BACKUP_NOT_SUPPORTED'	=> '선택한 백업은 지원되지 않습니다',
	'BACKUP_OPTIONS'		=> '백업 옵션',
	'BACKUP_SUCCESS'		=> '백업 파일이 성공적으로 생성되었습니다.',
	'BACKUP_TYPE'			=> '백업 형삭',

	'DATABASE'			=> '데이터베이스 유틸리티',
	'DATA_ONLY'			=> '데이터만',
	'DELETE_BACKUP'		=> '백업 삭제',
	'DELETE_SELECTED_BACKUP'	=> '선택한 백업을 삭제하시겠습니까?',
	'DESELECT_ALL'		=> '모두 선택 해제',
	'DOWNLOAD_BACKUP'	=> '백업 다운로드',

	'FILE_TYPE'			=> '파일 형식',
	'FILE_WRITE_FAIL'	=> '저장 폴더에 파일을 쓸 수 없습니다.',
	'FULL_BACKUP'		=> '풍백업',

	'RESTORE_FAILURE'		=> '백업 파일이 손상되었을 수 있습니다.',
	'RESTORE_OPTIONS'		=> '복원 옵션',
	'RESTORE_SELECTED_BACKUP'	=> '선택한 백업을 복원하시겠습니까?',
	'RESTORE_SUCCESS'		=> '데이터베이스가 성공적으로 복원되었습니다.<br /><br />보드가 백업 당시의 상태로 돌아가야 합니다.',

	'SELECT_ALL'			=> '모두 선택',
	'SELECT_FILE'			=> '파일 선택',
	'START_BACKUP'			=> '백업 시작',
	'START_RESTORE'			=> '복원 시작',
	'STORE_AND_DOWNLOAD'	=> '저장 및 다운로드',
	'STORE_LOCAL'			=> '파일을 로컬에 저장',

	'TABLE_SELECT'		=> '테이블 선택',
	'TABLE_SELECT_ERROR'=> '테이블을 하나 이상 선택해야 합니다.',
));
