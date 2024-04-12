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
// 이러한 허용은 번역자들의 재-지시에 안전하게 데이타를 출력하는 동안 정확히 남아 있습니다.
//
// 단일 이 문서 소유자들의 사용에 이곳에서는 필요치 않으며,
// 예를들어. 'Message %d'는 오직 두 명의 이 문서 소유자들을 포함할때만 문자열에서 동등하게 괜찮으며,
// url 안에서 글자(text) 포장에 사용되고 당신은 다시 명령을 지정할 필요가 없습니다. 예를들어. 'Click %sHERE%s'는 괜찮음
//
// 한국어 번역(또는 번안)은 저의 식견이 짧은 탓에 오역과 오류 또는 오자가 있음을 미리 밝혀 둡니다.
$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> '여기에서는 첨부파일에 대한 중요 설정과 그것에 해당하는 특별한 카테고리를 설정할 수 있습니다.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> '여기서 당신은 확장자 그룹들을 추가, 삭제, 수정 또는 사용금지를 할 수 있습니다.<br />게다가 옵션에 그들의 특정 분류(category)에 대한 할당을 포함하고,<br />다운로드 메카니즘이 변하고, 업로드 아이콘이 명확히 되며, 그 그룹에 속한 첨부파일을 앞쪽으로 표시할 수 있습니다.<br />&#9824; <span style="color: tomato;">메커니즘</span> : 정해진 절차 또는 방법',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> '여기서 당신은 허용된 확장자를 관리할 수 있습니다.<br />당신의 확장자를 활성화하려면, 확장자 그룹에 관리 패널을 참조하여 주십시요.<br />우리는 자신이 손수 개발한 확장자를 허용하지 않도록 강력히 추천합니다.<br />(이와같은 <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, 등…)',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> '여기서 당신은 분리된 파일을 볼 수 있습니다.<br />만약 사용자의 첨부파일에 이런 문제가 발생한다면, 게시글에 제출하지 마세요.<br />당신은 그 파일이나 첨부한 부분이 게시글에 이미 존재한다면, 그것들을 지울 수 있습니다.<br />게시글에 첨부하여 사용하려면, 유효한 게시글 아이디가 필요하며, 이 아이디는 자기자신이 결정합니다.<br />당신이 입력하여 게시글에 이미 업로드된 첨부파일을 할당합니다.',
	'ADD_EXTENSION'						=> '확장자 추가',
	'ADD_EXTENSION_GROUP'				=> '확장자 그룹 추가',
	'ADMIN_UPLOAD_ERROR'				=> '첨부파일을 시도하는 동안 오류가 발생했습니다: “%s”.',
	'ALLOWED_FORUMS'					=> '허용한 포럼들',
	'ALLOWED_FORUMS_EXPLAIN'			=> '포럼에서 선택(또는 전체 선택)하여 할당된 확장자를 게시할 수 있습니다.',
	'ALLOWED_IN_PM_POST'				=> '허용',
	'ALLOW_ATTACHMENTS'					=> '첨부파일 허용',
	'ALLOW_ALL_FORUMS'					=> '모든 포럼 허용',
	'ALLOW_IN_PM'						=> '허용한 개인 메세지',
	'ALLOW_PM_ATTACHMENTS'				=> '개인 메세지에 첨부파일 허용',
	'ALLOW_SELECTED_FORUMS'				=> '아래에서 선택한 전용 포럼들',
	'ASSIGNED_EXTENSIONS'				=> '할당된 확장자',
	'ASSIGNED_GROUP'					=> '관련된 확장자 그룹',
	'ATTACH_EXTENSIONS_URL'				=> '확장자들',
	'ATTACH_EXT_GROUPS_URL'				=> '확장자 그룹들',
	'ATTACH_ID'							=> '아이디',
	'ATTACH_MAX_FILESIZE'				=> '파일 최대 크기',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> '0 부터 시작하여 무제한이며, 각 파일의 최대 크기. 기본값 256KB',
	'ATTACH_MAX_PM_FILESIZE'			=> '메세징 최대 파일 크기',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> '0 부터 시작하여 무제한이며, 개인 메세지를 위해 첨부한 각각에 파일의 최대 크기. 기본값은 256KB',      // 3.0.3 에서 내용이 일부 변경됨
	'ATTACH_ORPHAN_URL'					=> '1개의 첨부파일',
	'ATTACH_POST_ID'					=> '게시글 아이디',
	'ATTACH_POST_TYPE'					=> '게시글 유형',
	'ATTACH_QUOTA'						=> '모든 첨부파일에게 각자 할당된 크기',
	'ATTACH_QUOTA_EXPLAIN'				=> '0 부터 시작하여 무제한이며, 첨부파일은 전체 보드에서 최대 드라이브 공간만큼만 사용할 수 있습니다. 기본값은 50MB',
	'ATTACH_TO_POST'					=> '파일을 게시글에 첨부합니다',

	'CAT_IMAGES'				=> '이미지',
    'CHECK_CONTENT'				=> '첨부한 파일들 체크',
    'CHECK_CONTENT_EXPLAIN'		=> '일부 브라우저들이 업로드된 파일들을 위한 부정확한 Mime 타입(type)은 속임수(trick)로 추정할 수 있습니다. 이 옵션은 이와같은 파일들의 원인때문에 거절될 경우에 책임을 집니다.',
	'CREATE_GROUP'				=> '새 그룹 만들기',
	'CREATE_THUMBNAIL'			=> '썸네일 만들기',
	'CREATE_THUMBNAIL_EXPLAIN'	=> '모든 가능한 상황에서도 썸네일 만들기.',

	'DEFINE_ALLOWED_IPS'			=> '허용한 IP/hostnames 으로 한정합니다',
	'DEFINE_DISALLOWED_IPS'			=> '허용할 수 없는 IP/hostnames 으로 한정합니다',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> '여러 개의 다른 IP 또는 호스트 이름을 지정하기 위해선, 새 라인에 각각 입력하세요.<br />IP 주소의 범위를 지정하기 위해선, 하이픈(-)으로 시작과 끝을 분리하고, 지정한 임의문자기호(wildcard) “*” 를 사용하기.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> '당신의 컴퓨터나 브라우저를 통해 마우스 또는 키보드를 한번의 적절한 조합으로,<br />여러 개의 IP 주소들을 제거(또는 배척)할 수 있습니다. 제외된 IP 는 파란색 배경을 가집니다.',
	'DISPLAY_INLINED'				=> '코드별로 이미지 표시',
	'DISPLAY_INLINED_EXPLAIN'		=> '만약 아니오라고 설정하면, 이미지 첨부파일은 링크로 보입니다.',
	'DISPLAY_ORDER'					=> '첨부파일 표시 순서',
	'DISPLAY_ORDER_EXPLAIN'			=> '첨부파일들은 시간에 의한 순서에 따라 표시합니다.',

	'EDIT_EXTENSION_GROUP'			=> '확장자 그룹 편집',
	'EXCLUDE_ENTERED_IP'			=> '입력한 IP/hostname 제외는 이곳에서 가능합니다.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> '허용한 IP/hostname 에서 IP를 제외',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> '허용할 수 없는 IP/hostname 에서 IP를 제외',
	'EXTENSIONS_UPDATED'			=> '확장자가  업데이트 되었습니다.',
	'EXTENSION_EXIST'				=> '%s 확장자는 이미 존재합니다.',
	'EXTENSION_GROUP'				=> '확장자 그룹',
	'EXTENSION_GROUPS'				=> '확장자 그룹들',
	'EXTENSION_GROUP_DELETED'		=> '확장자 그룹이  지워졌습니다.',
	'EXTENSION_GROUP_EXIST'			=> '%s 확장자 그룹은 이미 존재합니다.',

	'EXT_GROUP_ARCHIVES'			=> '보관소',
	'EXT_GROUP_DOCUMENTS'			=> '문서',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> '다운로드 가능한 파일',
	'EXT_GROUP_IMAGES'				=> '이미지',
	'EXT_GROUP_PLAIN_TEXT'			=> '일반 텍스트',

	'FILES_GONE'			=> '삭제를 위해 선택한 첨부파일 중 일부가 존재하지 않습니다. 이미 삭제되었을 수 있습니다. 존재했던 첨부파일이 삭제되었습니다.',
	'FILES_STATS_WRONG'		=> '파일 통계가 정확하지 않을 수 있으며 다시 동기화해야 합니다. 실제 값: 첨부파일 수 = %1$d, 첨부파일의 총 크기 = %2$s.<br />재동기화하려면 %3$s 와 %4$s를 클릭하세요.',

	'GO_TO_EXTENSIONS'		=> '확장자 관리 화면으로 가기',
	'GROUP_NAME'			=> '그룹 이름',

	'IMAGE_LINK_SIZE'			=> '이미지 링크 규격',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> '여기서 정한 규격보다 크면, 이미지 첨부파일이 링크 글자만 보입니다. 이 동작을 사용하지 않으려면, 0px 와 0px 값으로 놔두세요.',
	'IMAGE_QUALITY'				=> '업로드된 이미지 첨부파일의 품질(JPEG만 해당)',
	'IMAGE_QUALITY_EXPLAIN'		=> '50%(작은 파일 크기)와 90%(높은 품질) 사이의 값을 지정합니다. 90%보다 높은 품질은 파일 크기를 늘리고 비활성화됩니다. 설정은 최대 이미지 크기가 0px x 0px 이외의 값으로 설정된 경우에만 적용됩니다.',
	'IMAGE_STRIP_METADATA'		=> '이미지 메타데이터 제거(JPEG만 해당)',
	'IMAGE_STRIP_METADATA_EXPLAIN'	=> 'Exif 메타데이터 제거(예: 작성자 이름, GPS 좌표 및 카메라 세부 정보. 설정은 최대 이미지 크기가 0px x 0px 이외의 값으로 설정된 경우에만 적용됩니다.',

	'MAX_ATTACHMENTS'				=> '매 게시글당 허용 가능한 최대 첨부파일 갯수',        // 3.0.3 에서 일부 내용이 수정됨
	'MAX_ATTACHMENTS_PM'			=> '매 메세지당 허용 가능한 최대 첨부파일 갯수',       // 상동
	'MAX_EXTGROUP_FILESIZE'			=> '최대 파일 크기',
	'MAX_IMAGE_SIZE'				=> '최대 이미지 규격',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> '이미지 첨부파일의 최대 크기.<br />체크한 규격으로 사용하지 않으려면,<br />양쪽 값을 0px 와 0px 으로 놔두세요.',
	'MAX_THUMB_WIDTH'				=> '썸네일의 최대 가로 픽셀',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> '생성된 썸네일은 여기서 설정한 너비를 초과하지 않아야 합니다.',
	'MIN_THUMB_FILESIZE'			=> '썸네일 최소 파일의 크기',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> '이보다 작은 이미지를 썸네일로 만들 수 없습니다.',
	'MODE_INLINE'					=> '코드별로',       // inline 뜻은? 데이터가 발생했을 때, 그때마다 처리하는 방식이나 루틴을, 그것이 참조되는 곳에, 그냥 그대로 보이게 정의하는 방식에 관한 용어.
	'MODE_PHYSICAL'					=> '물리적',

	'NOT_ALLOWED_IN_PM'			=> '허용한 전용 게시글',
	'NOT_ALLOWED_IN_PM_POST'	=> '허용되지 않음',
	'NOT_ASSIGNED'				=> '할당되지 않음',
	'NO_ATTACHMENTS'			=> '이 기간 동안 첨부파일을 찾을 수 없습니다.',
	'NO_EXT_GROUP'				=> '없음',
	'NO_EXT_GROUP_ALLOWED_PM'	=> '비공개 메시지에 대한 <a href="%s">허용된 확장 그룹</a>이 없습니다.',
	'NO_EXT_GROUP_ALLOWED_POST'	=> '게시물에<a href="%s">허용된 확장 그룹</a>이 없습니다.',
	'NO_EXT_GROUP_NAME'			=> '입력한 그룹 이름이 없음',
	'NO_EXT_GROUP_SPECIFIED'	=> '지정된 확장자 그룹이 없음.',
	'NO_FILE_CAT'				=> '없음',
	'NO_IMAGE'					=> '이미지 없음',
	'NO_UPLOAD_DIR'				=> '당신이 지정한 업로드 폴더가 존재하지 않습니다.',
	'NO_WRITE_UPLOAD'			=> '당신이 지정한 업로드 폴더에 쓰기를 할 수 없습니다. 웹서버에서 그것에 쓰기를 할 수 있도록, 권한 허용을 비꿔 주세요.',

	'ONLY_ALLOWED_IN_PM'	=> '허용한 전용 개인 메세지',
	'ORDER_ALLOW_DENY'		=> '허용',
	'ORDER_DENY_ALLOW'		=> '거부',

	'REMOVE_ALLOWED_IPS'		=> '<em>허용한</em> IPs/hostnames을 삭제 또는 제외',
	'REMOVE_DISALLOWED_IPS'		=> '<em>허용하지 않은</em> IPs/hostnames을 삭제 또는 제외',
	'RESYNC_FILES_STATS_CONFIRM'	=> '파일 통계를 다시 동기화하시겠습니까?',

	'SECURE_ALLOW_DENY'				=> '허용/거부 목록',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> '<strong>화이트리스트</strong> 또는 <strong>블랙리스트</strong> 형태인, 허용/거부 목록을 안전하게 다운로드 해 주기 위해서 기본 동작을 변경합니다.',
	'SECURE_DOWNLOADS'				=> '안전한 다운로드 사용',
	'SECURE_DOWNLOADS_EXPLAIN'		=> '이 옵션을 사용하면, 정해진 IP’s/hostnames 에서 제한된 다운로드를 합니다.',
	'SECURE_DOWNLOAD_NOTICE'		=> '안전한 다운로드가 활성화되어 있지 않습니다. 아래의 설정을 활성화한 후 안전한 다운로드가 적용됩 니다.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> '그 IP 목록이  업데이트 되었습니다.',
	'SECURE_EMPTY_REFERRER'			=> '빈 추천인 허용',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> '안전한 다운로드는 추천한 사람을 기반으로 합니다. 당신은 생략한 그들 추천인을 위해 다운로드 허용을 원하십니까?',
	'SETTINGS_CAT_IMAGES'			=> '이미지 분류 설정',
	'SPECIAL_CATEGORY'				=> '특별한 카테고리',
	'SPECIAL_CATEGORY_EXPLAIN'		=> '이것은 게시글의 범위내에서 제시되는 방법과는 좀 다릅니다.',
	'SUCCESSFULLY_UPLOADED'			=> '업로드 성공.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> '확장자 그룹이 추가 되었습니다.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> '확장자 그룹이  업로드 되었습니다.',

	'UPLOADING_FILES'				=> '업로드 중인 파일들',
	'UPLOADING_FILE_TO'				=> '파일 “%1$s”을(를) 게시물 번호 %2$d에 올리는 중…',
	'UPLOAD_DENIED_FORUM'			=> '당신은 “%s” 포럼에 파일을 업로드 할 권한이 없습니다.',
	'UPLOAD_DIR'					=> '업로드 폴더',
	'UPLOAD_DIR_EXPLAIN'			=> '첨부파일이 서버에 저장된 경로 입니다.<br />폴더를 변경하면, 이미 서버에 저장된 파일들은,<br />당신이 수동으로 새 위치에 복사가 필요합니다.',
	'UPLOAD_ICON'					=> '업로드 아이콘',
	'UPLOAD_NOT_DIR'				=> '당신이 지정한 업로드 위치가 폴더에는 나타나지 않습니다.',
	'UPLOAD_POST_NOT_EXIST'			=> '파일 “%1$s”을 업로드할 수 없습니다. 게시물 번호 %2$d에 해당하는 게시물이 존재하지 않습니다.',
));
