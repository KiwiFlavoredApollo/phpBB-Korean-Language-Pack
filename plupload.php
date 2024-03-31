<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> '파일 추가',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> '업로드 대기열에 파일을 추가하고 시작 버튼을 클릭합니다.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s이(가) 이미 대기열에 있습니다.',
	'PLUPLOAD_CLOSE'			=> '닫기',
	'PLUPLOAD_DRAG'				=> '여기로 파일을 드래그하세요.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> '중복 파일 오류입니다.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> '메시지 상자에 파일을 끌어다 놓아 첨부할 수도 있습니다.',
	'PLUPLOAD_ERR_INPUT'		=> '입력 스트림을 열지 못했습니다.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> '업로드된 파일을 이동하지 못했습니다.',
	'PLUPLOAD_ERR_OUTPUT'		=> '출력 스트림을 열지 못했습니다.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> '파일이 너무 큼:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> '파일 카운트 애러',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> '잘못된 파일 확장자:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> '런타임에 사용 가능한 메모리가 부족합니다.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> '업로드 URL이 잘못되었거나 존재하지 않을 수 있습니다.',
	'PLUPLOAD_EXTENSION_ERROR'	=> '파일 확장자 오류입니다.',
	'PLUPLOAD_FILE'				=> '파일: %s',
	'PLUPLOAD_FILE_DETAILS'		=> '파일: %s, 크기: %d, 파일 최대 크기: %d',
	'PLUPLOAD_FILENAME'			=> '파일이름',
	'PLUPLOAD_FILES_QUEUED'		=> '%d개의 파일이 대기 중',
	'PLUPLOAD_GENERIC_ERROR'	=> '일반 오류',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP 애러.',
	'PLUPLOAD_IMAGE_FORMAT'		=> '이미지 형식이 잘못되었거나 지원되지 않습니다.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init 애러.',
	'PLUPLOAD_IO_ERROR'			=> 'IO 애러.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> '보안 오류',
	'PLUPLOAD_SELECT_FILES'		=> '파일 선택',
	'PLUPLOAD_SIZE'				=> '크기',
	'PLUPLOAD_SIZE_ERROR'		=> '파일 크기 에러.',
	'PLUPLOAD_STATUS'			=> '상태',
	'PLUPLOAD_START_UPLOAD'		=> '업로드 시작',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> '대기열 업로드 시작',
	'PLUPLOAD_STOP_UPLOAD'		=> '업로드 중지',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> '현재 업로드 중지',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> '업로드된 %d/%d개의 파일',
));
