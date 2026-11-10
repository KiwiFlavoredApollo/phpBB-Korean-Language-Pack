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
* 바로 아래 코드를 변경(편집)하거나 삭제하지 마세요
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// 개발자 문서를 참고하세요.
//
// 모든 언어 파일들은 "UTF-8" 인코딩을 사용하고 BOM을 포함하지 않아야 합니다.
// BOM(Byte Order Mark) : Unicode의 UTF-16등 16bit 폭의 인코딩 방식에 있어서, 인코딩을 지정하기 위해 파일 머리에 기입하는 16bit의 값.
//
// 이 문서 소유자는 지시(주문) 정보를 지금 포함할 수 있으며.
// 예를들어. 'Page %s of %s' 대신에 당신은 'Page %1$s of %2$s'을 쓸 수 있는,
// 이러한 허용은 번역자들의 재-지시에 안전하게 데이터를 출력하는 동안 정확히 남아 있습니다.
//
// 단일 이 문서 소유자들의 사용에 이곳에서는 필요치 않으며,
// 예를들어. 'Message %d'는 오직 두 명의 이 문서 소유자들을 포함할때만 문자열에서 동등하게 괜찮으며,
// url 안에서 글자(text) 포장에 사용되고 당신은 다시 명령을 지정할 필요가 없습니다. 예를들어. 'Click %sHERE%s'는 괜찮음
//
// 한국어 번역(또는 번안)은 저의 식견이 짧은 탓에 오역과 오류 또는 오자가 있음을 미리 밝혀 둡니다.
$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> '여기에서 첨부 파일과 관련 특수 분류의 주요 설정을 구성할 수 있습니다.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> '여기에서 확장자 그룹을 추가, 삭제, 수정하거나 비활성화할 수 있습니다. 그룹에 특수 분류를 지정하고, 다운로드 방식을 변경하며, 해당 그룹의 첨부 파일 앞에 표시할 업로드 아이콘을 정의할 수도 있습니다.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> '여기에서 허용할 확장자를 관리할 수 있습니다. 확장자를 활성화하려면 확장자 그룹 관리 패널을 이용하십시오. 스크립트 확장자(예: <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> 등)는 허용하지 않는 것이 좋습니다.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> '여기에서 고아 파일을 확인할 수 있습니다. 사용자가 파일을 첨부했지만 게시물을 등록하지 않은 경우 주로 발생합니다. 파일을 삭제하거나 기존 게시물에 첨부할 수 있습니다. 게시물에 첨부하려면 유효한 게시물 ID가 필요하며 이 ID는 직접 확인해야 합니다. 입력한 게시물에 이미 업로드된 첨부 파일이 할당됩니다.',
	'ADD_EXTENSION'						=> '확장자 추가',
	'ADD_EXTENSION_GROUP'				=> '확장자 그룹 추가',
	'ADMIN_UPLOAD_ERROR'				=> '파일을 첨부하는 중 오류가 발생했습니다: “%s”.',
	'ALLOWED_FORUMS'					=> '허용된 포럼',
	'ALLOWED_FORUMS_EXPLAIN'			=> '지정된 확장자를 선택한 포럼(모두 선택한 경우 모든 포럼)에 게시할 수 있습니다.',
	'ALLOWED_IN_PM_POST'				=> '허용',
	'ALLOW_ATTACHMENTS'					=> '첨부 파일 허용',
	'ALLOW_ALL_FORUMS'					=> '모든 포럼 허용',
	'ALLOW_IN_PM'						=> '비공개 메시지에서 허용',
	'ALLOW_PM_ATTACHMENTS'				=> '개인 메시지에 첨부 파일 허용',
	'ALLOW_SELECTED_FORUMS'				=> '아래에서 선택한 포럼만',
	'ASSIGNED_EXTENSIONS'				=> '할당된 확장자',
	'ASSIGNED_GROUP'					=> '할당된 확장자 그룹',
	'ATTACH_EXTENSIONS_URL'				=> '확장자',
	'ATTACH_EXT_GROUPS_URL'				=> '확장자 그룹',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> '파일 최대 크기',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> '각 파일의 최대 크기입니다. 0으로 설정하면 업로드 가능한 파일 크기는 PHP 설정으로만 제한됩니다.',
	'ATTACH_MAX_PM_FILESIZE'			=> '비공개 메시지의 최대 파일 크기',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> '비공개 메시지에 첨부되는 각 파일의 최대 크기입니다. 0으로 설정하면 제한하지 않습니다.',      // 3.0.3 에서 내용이 일부 변경됨
	'ATTACH_ORPHAN_URL'					=> '고아 첨부 파일',
	'ATTACH_POST_ID'					=> '게시물 ID',
	'ATTACH_POST_TYPE'					=> '게시글 유형',
	'ATTACH_QUOTA'						=> '전체 첨부 파일 할당량',
	'ATTACH_QUOTA_EXPLAIN'				=> '게시판 전체에서 첨부 파일에 사용할 수 있는 최대 저장 공간입니다. 0으로 설정하면 제한하지 않습니다.',
	'ATTACH_TO_POST'					=> '게시물에 파일 첨부',

	'CAT_IMAGES'				=> '이미지',
	'CHECK_CONTENT'				=> '첨부 파일 내용 검사',
	'CHECK_CONTENT_EXPLAIN'		=> '일부 브라우저에서는 업로드 파일의 MIME 유형을 잘못 인식하도록 조작할 수 있습니다. 이 옵션은 이러한 문제를 일으킬 가능성이 있는 파일을 거부합니다.',
	'CREATE_GROUP'				=> '새 그룹 만들기',
	'CREATE_THUMBNAIL'			=> '썸네일 만들기',
	'CREATE_THUMBNAIL_EXPLAIN'	=> '가능한 모든 경우에 미리 보기를 만듭니다.',

	'DEFINE_ALLOWED_IPS'			=> '허용할 IP/호스트 이름 지정',
	'DEFINE_DISALLOWED_IPS'			=> '허용하지 않을 IP/호스트 이름 지정',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> '서로 다른 여러 IP 주소 또는 호스트 이름을 지정하려면 각각 새 줄에 입력하십시오. IP 주소 범위를 지정하려면 시작과 끝을 하이픈(-)으로 구분하고, 와일드카드를 지정하려면 “*”를 사용하십시오.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> '컴퓨터와 브라우저에 맞는 마우스 및 키보드 조합을 사용하면 여러 IP 주소의 제외를 한 번에 해제할 수 있습니다. 제외된 IP는 파란색 배경으로 표시됩니다.',
	'DISPLAY_INLINED'				=> '이미지를 인라인으로 표시',
	'DISPLAY_INLINED_EXPLAIN'		=> '아니요로 설정하면 이미지 첨부 파일이 링크로 표시됩니다.',
	'DISPLAY_ORDER'					=> '첨부 파일 표시 순서',
	'DISPLAY_ORDER_EXPLAIN'			=> '첨부 파일을 시간순으로 표시합니다.',

	'EDIT_EXTENSION_GROUP'			=> '확장자 그룹 편집',
	'EXCLUDE_ENTERED_IP'			=> '입력한 IP/호스트 이름을 제외하려면 활성화하십시오.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> '허용된 IP/호스트 이름에서 IP 제외',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> '허용되지 않은 IP/호스트 이름에서 IP 제외',
	'EXTENSIONS_UPDATED'			=> '확장자를 성공적으로 업데이트했습니다.',
	'EXTENSION_EXIST'				=> '%s 확장자는 이미 존재합니다.',
	'EXTENSION_GROUP'				=> '확장자 그룹',
	'EXTENSION_GROUPS'				=> '확장자 그룹',
	'EXTENSION_GROUP_DELETED'		=> '확장자 그룹을 성공적으로 삭제했습니다.',
	'EXTENSION_GROUP_EXIST'			=> '%s 확장자 그룹은 이미 존재합니다.',

	'EXT_GROUP_ARCHIVES'			=> '압축 파일',
	'EXT_GROUP_DOCUMENTS'			=> '문서',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> '다운로드 가능한 파일',
	'EXT_GROUP_IMAGES'				=> '이미지',
	'EXT_GROUP_PLAIN_TEXT'			=> '일반 텍스트',

	'FILES_GONE'			=> '삭제를 위해 선택한 첨부 파일 중 일부가 존재하지 않습니다. 이미 삭제되었을 수 있습니다. 존재했던 첨부 파일이 삭제되었습니다.',
	'FILES_STATS_WRONG'		=> '파일 통계가 정확하지 않아 다시 동기화해야 할 수 있습니다. 실제 값: 첨부 파일 수 = %1$d, 첨부 파일 총크기 = %2$s.<br />다시 동기화하려면 %3$s여기%4$s를 클릭하십시오.',

	'GO_TO_EXTENSIONS'		=> '확장자 관리 화면으로 가기',
	'GROUP_NAME'			=> '그룹 이름',

	'IMAGE_LINK_SIZE'			=> '이미지 링크 크기',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> '이미지가 이 크기보다 크면 이미지 첨부 파일을 인라인 텍스트 링크로 표시합니다. 이 동작을 비활성화하려면 값을 0px × 0px로 설정하십시오.',
	'IMAGE_QUALITY'				=> '업로드된 이미지 첨부 파일의 품질(JPEG만 해당)',
	'IMAGE_QUALITY_EXPLAIN'		=> '50%(파일 크기 작음)에서 90%(고품질) 사이의 값을 지정하십시오. 90%보다 높은 값은 파일 크기만 늘리므로 사용할 수 없습니다. 최대 이미지 크기가 0px × 0px 이외의 값으로 설정된 경우에만 적용됩니다.',
	'IMAGE_STRIP_METADATA'		=> '이미지 메타데이터 제거(JPEG만 해당)',
	'IMAGE_STRIP_METADATA_EXPLAIN'	=> '작성자 이름, GPS 좌표, 카메라 정보 등의 Exif 메타데이터를 제거합니다. 최대 이미지 크기가 0px × 0px 이외의 값으로 설정된 경우에만 적용됩니다.',

	'MAX_ATTACHMENTS'				=> '게시물당 최대 첨부 파일 수',        // 3.0.3 에서 일부 내용이 수정됨
	'MAX_ATTACHMENTS_PM'			=> '비공개 메시지당 최대 첨부 파일 수',       // 상동
	'MAX_EXTGROUP_FILESIZE'			=> '최대 파일 크기',
	'MAX_IMAGE_SIZE'				=> '최대 이미지 크기',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> '이미지 첨부 파일의 최대 크기입니다. phpBB는 업로드 전에 이미지를 이 최대 크기로 자동 조정할 수 있습니다. 크기 확인과 자동 조정을 비활성화하려면 두 값을 모두 0px × 0px로 설정하십시오.',
	'MAX_THUMB_WIDTH'				=> '미리 보기의 최대 너비/높이(픽셀)',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> '생성된 미리 보기는 여기에서 설정한 너비를 초과하지 않습니다.',
	'MIN_THUMB_FILESIZE'			=> '미리 보기 최소 파일 크기',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> '이보다 작은 이미지에는 미리 보기를 만들지 않습니다.',
	'MODE_INLINE'					=> '인라인',       // inline 뜻은? 데이터가 발생했을 때, 그때마다 처리하는 방식이나 루틴을, 그것이 참조되는 곳에, 그냥 그대로 보이게 정의하는 방식에 관한 용어.
	'MODE_PHYSICAL'					=> '물리적',

	'NOT_ALLOWED_IN_PM'			=> '게시물에서만 허용',
	'NOT_ALLOWED_IN_PM_POST'	=> '허용되지 않음',
	'NOT_ASSIGNED'				=> '할당되지 않음',
	'NO_ATTACHMENTS'			=> '이 기간 동안 첨부 파일을 찾을 수 없습니다.',
	'NO_EXT_GROUP'				=> '없음',
	'NO_EXT_GROUP_ALLOWED_PM'	=> '비공개 메시지에 대한 <a href="%s">허용된 확장 그룹</a>이 없습니다.',
	'NO_EXT_GROUP_ALLOWED_POST'	=> '게시물에 사용할 수 있는 <a href="%s">허용된 확장자 그룹</a>이 없습니다.',
	'NO_EXT_GROUP_NAME'			=> '그룹 이름을 입력하지 않았습니다.',
	'NO_EXT_GROUP_SPECIFIED'	=> '확장자 그룹을 지정하지 않았습니다.',
	'NO_FILE_CAT'				=> '없음',
	'NO_IMAGE'					=> '이미지 없음',
	'NO_UPLOAD_DIR'				=> '지정한 업로드 디렉터리가 존재하지 않습니다.',
	'NO_WRITE_UPLOAD'			=> '지정한 업로드 디렉터리에 쓸 수 없습니다. 웹 서버가 디렉터리에 쓸 수 있도록 권한을 변경하십시오.',

	'ONLY_ALLOWED_IN_PM'	=> '비공개 메시지에서만 허용',
	'ORDER_ALLOW_DENY'		=> '허용',
	'ORDER_DENY_ALLOW'		=> '거부',

	'REMOVE_ALLOWED_IPS'		=> '<em>허용된</em> IP/호스트 이름 삭제 또는 제외 해제',
	'REMOVE_DISALLOWED_IPS'		=> '<em>허용되지 않은</em> IP/호스트 이름 삭제 또는 제외 해제',
	'RESYNC_FILES_STATS_CONFIRM'	=> '파일 통계를 다시 동기화하시겠습니까?',

	'SECURE_ALLOW_DENY'				=> '허용/거부 목록',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> '보안 다운로드를 활성화한 경우 허용/거부 목록의 기본 동작을 <strong>허용 목록</strong>(허용) 또는 <strong>차단 목록</strong>(거부)으로 변경합니다.',
	'SECURE_DOWNLOADS'				=> '안전한 다운로드 사용',
	'SECURE_DOWNLOADS_EXPLAIN'		=> '이 옵션을 활성화하면 정의한 IP/호스트 이름으로 다운로드가 제한됩니다.',
	'SECURE_DOWNLOAD_NOTICE'		=> '보안 다운로드가 활성화되어 있지 않습니다. 아래 설정은 보안 다운로드를 활성화한 뒤 적용됩니다.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP 목록을 성공적으로 업데이트했습니다.',
	'SECURE_EMPTY_REFERRER'			=> '빈 리퍼러 허용',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> '보안 다운로드는 리퍼러를 기준으로 합니다. 리퍼러를 보내지 않는 사용자의 다운로드를 허용하시겠습니까?',
	'SETTINGS_CAT_IMAGES'			=> '이미지 분류 설정',
	'SPECIAL_CATEGORY'				=> '특수 분류',
	'SPECIAL_CATEGORY_EXPLAIN'		=> '특수 분류는 게시물 안에서 표시되는 방식이 서로 다릅니다.',
	'SUCCESSFULLY_UPLOADED'			=> '성공적으로 업로드했습니다.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> '확장자 그룹을 성공적으로 추가했습니다.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> '확장자 그룹을 성공적으로 업데이트했습니다.',

	'UPLOADING_FILES'				=> '파일 업로드 중',
	'UPLOADING_FILE_TO'				=> '파일 “%1$s”을(를) 게시물 번호 %2$d에 업로드하는 중…',
	'UPLOAD_DENIED_FORUM'			=> '포럼 “%s”에 파일을 업로드할 권한이 없습니다.',
	'UPLOAD_DIR'					=> '업로드 디렉터리',
	'UPLOAD_DIR_EXPLAIN'			=> '첨부 파일이 서버에 저장되는 경로입니다. 이미 첨부 파일을 업로드한 상태에서 이 디렉터리를 변경하면 파일을 새 위치로 직접 복사해야 합니다.',
	'UPLOAD_ICON'					=> '업로드 아이콘',
	'UPLOAD_NOT_DIR'				=> '지정한 업로드 위치가 디렉터리가 아닌 것 같습니다.',
	'UPLOAD_POST_NOT_EXIST'			=> '게시물이 존재하지 않으므로 파일 “%1$s”을(를) 게시물 번호 %2$d에 업로드할 수 없습니다.',
));
